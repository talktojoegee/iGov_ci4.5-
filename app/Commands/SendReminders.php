<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\CLI\Commands;
use Psr\Log\LoggerInterface;


use App\Models\Reminder;
use App\Models\Employee;
use App\Models\UserModel;
use App\Models\Organization;

class SendReminders extends BaseCommand
{
  public function __construct()
  {
    $this->reminder = new Reminder();
    $this->employee = new Employee();

    $this->session = \Config\Services::session();
    $this->email = \Config\Services::email();
    helper('text');

  }

  /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'send:reminder';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $reminders = $this->reminder->getNextSevenDaysReminders();
        if(!empty($reminders)){
          foreach($reminders as $reminder){
            $employee = $this->employee->getEmployeeByUserEmployeeId($reminder['empId']);
            if(!empty($employee)){
              echo "Sending reminder...";
              $message = "A subtle reminder on the subject ".$reminder['title'];
              $this->send_notification("Reminder - ".$reminder['title'], $message, $reminder['empId'], site_url('/reminder'), 'click to view reminder');
            }

          }
        }
    }

  protected function send_notification($subject, $body, $recipient, $link, $cta)
  {
    $userModel = new UserModel();
    $employeeModel = new Employee();
    $organizationModel = new Organization();
    $organization = $organizationModel->first();

    $user = $userModel->where('user_employee_id', $recipient)->first();

    $employee = $employeeModel->where('employee_id', $recipient)->first();
    $to = $employee['employee_mail'];
    $phone = $employee['employee_phone'];
    $phone = '234' . substr($phone, 1, strlen($phone));
    $from['name'] = 'IGOV by Connexxion Telecom';
    $from['email'] = 'support@connexxiontelecom.com';
    $data = [
      'subject' => $subject,
      'user' => $user['user_name'],
      'organization' => $organization['org_name'],
      'notification' => $body,
      'link' => $link
    ];
    $message = view('email/notification', $data);
    $this->send_mail($to, $subject, $message, $from);

  }

  protected function send_mail($to, $subject, $message, $from)
  {
    $this->email->setTo($to);
    $this->email->setFrom($from['email'], $from['name']);
    $this->email->setSubject($subject);
    $this->email->setMessage($message);

    return $this->email->send(false);
  }
}
