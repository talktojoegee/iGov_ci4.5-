<?php

use CodeIgniter\Router\RouteCollection;

$this->session = session();

/**
 * @var RouteCollection $routes
 */
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    if ($this->session->type):
        if ($this->session->type == 1 || $this->session->type == 3):
            return view('office/error_404');
        endif;
        if ($this->session->type == 2):
            return view('pages/error_404');
        endif;
    else:
        return view('pages/error_404');
    endif;

});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//normal route
$routes->match(['get', 'post'], 'register', 'Auth::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'Auth::login', ['filter' => 'noauth']);
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/logout', 'Auth::logout', ['filter' => 'auth']);
$routes->get('/test', 'TestController::index');

$routes->get('/get-unseen-notifications', 'Home::get_unseen_notifications', ['filter' => 'auth']);
$routes->get('view-notification/(:num)', 'Home::view_notification/$1', ['filter' => 'auth']);

//office route
$routes->get('office', 'Office::index', ['filter' => 'auth']);
$routes->get('moderator', 'Auth::moderator', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'organization-profile', 'GeneralSettingController::organization_profile', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'departments', 'GeneralSettingController::departments', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'units', 'GeneralSettingController::units', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'positions', 'GeneralSettingController::positions', ['filter' => 'auth']);

$routes->match(['get', 'post'], 'manage-registry', 'GeneralSettingController::registry', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-registry', 'GeneralSettingController::new_registry', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'manage-registry/(:num)', 'GeneralSettingController::manage_registry/$1', ['filter' => 'auth']);

$routes->match(['get', 'post'], 'notice-board', 'MessagingSettingController::notice_board', ['filter' => 'auth']);
$routes->match(['get'], 'manage-stamp', 'MessagingSettingController::stamp', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-stamp', 'MessagingSettingController::new_stamp', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'manage-stamp/(:num)', 'MessagingSettingController::manage_stamp/$1', ['filter' => 'auth']);


$routes->match(['get', 'post'], 'new-employee', 'EmployeeSettingController::new_employee', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'fetch-positions', 'EmployeeSettingController::fetch_positions', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'employees', 'EmployeeSettingController::all_employees', ['filter' => 'auth']);
$routes->match(['post'], 'check-username', 'EmployeeSettingController::check_username', ['filter' => 'auth']);

$routes->get('permissions', 'UserController::user_permissions', ['filter' => 'auth']);
$routes->post('permissions', 'UserController::modify_user_permissions', ['filter' => 'auth']);
$routes->get('reset-password', 'UserController::reset_password', ['filter' => 'auth']);

$routes->match(['get', 'post'], 'budget-charts', 'BudgetSettingController::budget_charts', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-budget-chart', 'BudgetSettingController::new_budget_chart', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'edit-budget-chart/(:num)', 'BudgetSettingController::edit_budget_chart/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'budget-setups', 'BudgetSettingController::budget_setups', ['filter' => 'auth']);

$routes->match(['get'], 'view-budget-setup/(:num)', 'BudgetSettingController::view_budget/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'budget-categories', 'BudgetSettingController::budget_categories', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'fetch-parent', 'BudgetSettingController::fetch_parent', ['filter' => 'auth']);

$routes->match(['get', 'post'], 'renewal-types', 'FleetSettingController::renewal_types', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'vehicle-types', 'FleetSettingController::vehicle_types', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'maintenance-types', 'FleetSettingController::maintenance_types', ['filter' => 'auth']);

// post routes
$routes->match(['post'], 'upload-post-attachments', 'PostController::upload_post_attachments', ['filter' => 'auth']);
$routes->match(['post', 'get'], 'delete-post-attachments', 'PostController::delete_post_attachments', ['filter' => 'auth']);
$routes->match(['post'], 'sign-post', 'PostController::sign_post', ['filter' => 'auth']);
$routes->match(['post'], 'decline-post', 'PostController::decline_post', ['filter' => 'auth']);
$routes->match(['post'], 'send-doc-signing-verification', 'PostController::send_doc_signing_verification/', ['filter' => 'auth']);

// notices route
$routes->get('notices', 'NoticeController::index', ['filter' => 'auth']);
$routes->get('notices/(:alpha)', 'NoticeController::index/$1', ['filter' => 'auth']);
$routes->get('my-notices', 'NoticeController::my_notices', ['filter' => 'auth']);
$routes->get('view-notice/(:num)', 'NoticeController::view_notice/$1', ['filter' => 'auth']);
$routes->get('edit-notice/(:num)', 'NoticeController::edit_notice/$1', ['filter' => 'auth']);
$routes->post('edit-notice', 'NoticeController::edit_notice', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-notice', 'NoticeController::new_notice', ['filter' => 'auth']);

// memo routes
$routes->match(['get'], 'memos', 'MemoController::memos', ['filter' => 'auth']);
$routes->match(['get'], 'memos/(:alpha)', 'MemoController::memos/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'internal-memo', 'MemoController::internal_memo', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'external-memo', 'MemoController::external_memo', ['filter' => 'auth']);
$routes->match(['get'], 'my-memos', 'MemoController::my_memos', ['filter' => 'auth']);
$routes->match(['get'], 'view-memo/(:num)', 'MemoController::view_memo/$1', ['filter' => 'auth']);
$routes->match(['get'], 'edit-memo/(:num)', 'MemoController::edit_memo/$1', ['filter' => 'auth']);
$routes->match(['post'], 'edit-memo', 'MemoController::edit_memo', ['filter' => 'auth']);
$routes->match(['post'], 'upload-memo-attachments', 'MemoController::upload_mail_attachments', ['filter' => 'auth']);
$routes->match(['post', 'get'], 'delete-memo-attachments', 'MemoController::delete_mail_attachments', ['filter' => 'auth']);

// circular routes
$routes->match(['get'], 'circulars', 'CircularController::circulars', ['filter' => 'auth']);
$routes->match(['get'], 'circulars/(:alpha)', 'CircularController::circulars/$1', ['filter' => 'auth']);
$routes->match(['get'], 'new-circular', 'CircularController::new_circular', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'internal-circular', 'CircularController::internal_circular', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'external-circular', 'CircularController::external_circular', ['filter' => 'auth']);
$routes->match(['get'], 'my-circulars', 'CircularController::my_circulars', ['filter' => 'auth']);
$routes->match(['get'], 'view-circular/(:num)', 'CircularController::view_circular/$1', ['filter' => 'auth']);

#GDrive routes
$routes->get('/g-drive', 'FileController::index', ['filter' => 'auth']);
$routes->post('/process-upload', 'FileController::processAttachmentUploads', ['filter' => 'auth']);
$routes->post('/create-folder', 'FileController::createFolder', ['filter' => 'auth']);
$routes->get('/open-folder/(:num)', 'FileController::openFolder/$1', ['filter' => 'auth']);
$routes->get('/remove-file/(:num)', 'FileController::removeFile/$1', ['filter' => 'auth']);
$routes->post('share-file-with', 'FileController::shareFileWith', ['filter' => 'auth']);
$routes->get('shared-with-me', 'FileController::sharedFileWithMe', ['filter' => 'auth']);
$routes->get('/my-files', 'FileController::myFiles', ['filter' => 'auth']);
$routes->post('/search-g-drive', 'FileController::searchGDrive', ['filter' => 'auth']);

#Training routes
$routes->get('/trainings', 'TrainingController::index', ['filter' => 'auth']);
$routes->get('/add-new-training', 'TrainingController::showAddNewTrainingForm', ['filter' => 'auth']);
$routes->get('/edit-training/(:any)', 'TrainingController::showEditTrainingForm/$1', ['filter' => 'auth']);
$routes->post('/add-new-training', 'TrainingController::storeNewTraining', ['filter' => 'auth']);
$routes->get('/trainings/(:any)', 'TrainingController::viewTraining/$1', ['filter' => 'auth']);
$routes->post('/update-training', 'TrainingController::updateTraining', ['filter' => 'auth']);
#Lesson routes
$routes->post('/add-new-training-lesson', 'TrainingController::addNewTrainingLesson', ['filter' => 'auth']);
$routes->post('/update-training-lesson', 'TrainingController::updateTrainingLesson', ['filter' => 'auth']);
$routes->get('/delete-lesson-attachment/(:num)', 'TrainingController::deleteAttachment/$1', ['filter' => 'auth']);

#Workflow routes
$routes->get('/workflow/settings', 'WorkflowController::settings', ['filter' => 'auth']);
$routes->post('/workflow/add-new-workflow-type', 'WorkflowController::storeNewWorkflowType', ['filter' => 'auth']);
$routes->post('/workflow/update-workflow-type', 'WorkflowController::updateWorkflowType', ['filter' => 'auth']);
#Normal process routes
$routes->post('/workflow/setup-workflow-processor', 'WorkflowController::setupWorkflowProcessor', ['filter' => 'auth']);
$routes->post('/workflow/update-workflow-processor', 'WorkflowController::updateWorkflowProcessor', ['filter' => 'auth']);

#Exception process routes
$routes->post('/workflow/setup-exception-workflow-processor', 'WorkflowController::setupExceptionWorkflowProcessor', ['filter' => 'auth']);
$routes->post('/workflow/update-exception-workflow-processor', 'WorkflowController::updateExceptionWorkflowProcessor', ['filter' => 'auth']);

#Workflow request [employee]
$routes->get('/workflow-requests', 'WorkflowController::workflowRequests', ['filter' => 'auth']);
$routes->get('/workflow-requests/new-request', 'WorkflowController::createNewWorkflowRequest', ['filter' => 'auth']);
$routes->post('/workflow-requests/new-request', 'WorkflowController::setNewWorkflowRequest', ['filter' => 'auth']);
$routes->get('/workflow-requests/view/(:num)', 'WorkflowController::viewWorkflowRequest/$1', ['filter' => 'auth']);
$routes->post('/workflow-requests/process-request', 'WorkflowController::processWorkflowRequest', ['filter' => 'auth']);
$routes->post('/workflow-requests/leave-comment', 'WorkflowController::leaveComment', ['filter' => 'auth']);
//$routes->get('notice-board/(:any)', 'MessagingSettingController::notice_board/$1', ['filter' => 'auth']);


//$routes->get('/email', 'EmailServiceController::index', ['filter'=>'auth']);
//$routes->get('/email/(:num)', 'EmailServiceController::index/$1', ['filter'=>'auth']);

$routes->get('/email/folder/(:any)', 'EmailServiceController::getMessagesInFolder/$1', ['filter' => 'auth', 'as' => 'messages-in']);


$routes->get('/read-mail/(:any)/(:any)', 'EmailServiceController::readMail/$1/$2', ['filter' => 'auth', 'as' => 'read-mail']);
$routes->get('/compose-email', 'EmailController::composeEmail', ['filter' => 'auth']);
$routes->post('/compose-email', 'EmailController::processMail', ['filter' => 'auth']);
$routes->get('/email-settings', 'EmailController::showEmailSettingsForm', ['filter' => 'auth', 'as' => 'email-settings']);
$routes->post('/email-settings', 'EmailController::processEmailSettings', ['filter' => 'auth']);


$routes->get('/chat', 'ChatController::chat', ['filter' => 'auth']);
$routes->get('/contact-list', 'ChatController::getAllUsers', ['filter' => 'auth', 'as'=>'get-all-users']);
$routes->post('/one-contact', 'ChatController::getOneUser', ['filter' => 'auth', 'as'=>'get-one-user']);
$routes->get('/own-details', 'ChatController::ownerDetails', ['filter' => 'auth', 'as'=>'own-details']);
$routes->post('/get-message', 'ChatController::getMessage', ['filter' => 'auth', 'as'=>'get-message']);
$routes->post('/set-no-message', 'ChatController::setNoMessage', ['filter' => 'auth', 'as'=>'set-no-message']);

$routes->post('/chat-messages', 'ChatController::getMessages', ['filter' => 'auth']);
$routes->post('/send-message', 'ChatController::sendMessage', ['filter' => 'auth', 'as'=>'send-message']);
$routes->get('/test-chat', 'ChatController::getMessages', ['filter' => 'auth']);

#Project routes
$routes->get('/manage-projects', 'ProjectController::index', ['filter' => 'auth', 'as' => 'manage-projects']);
$routes->get('/projects/create', 'ProjectController::showAddNewProjectForm', ['filter' => 'auth', 'as' => 'add-new-project']);
$routes->get('/projects/(:num)', 'ProjectController::viewProject/$1', ['filter' => 'auth', 'as' => 'view-project']);
$routes->post('/projects/create', 'ProjectController::setNewProject', ['filter' => 'auth']);
$routes->post('/leave-comment', 'ProjectController::setNewConversation', ['filter' => 'auth', 'as' => 'leave-comment']);
$routes->get('/projects/edit/(:num)', 'ProjectController::editProject/$1', ['filter' => 'auth', 'as' => 'edit-project']);
$routes->post('/projects/update', 'ProjectController::editProject/$1', ['filter' => 'auth', 'as' => 'update-project']);
$routes->post('/projects/submit-project-report', 'ProjectController::submitReport', ['filter' => 'auth', 'as' => 'submit-project-report']);


#Program & Activities
$routes->get('/manage-programs-activities','ProgramActivitiesController::index',['filter'=>'auth', 'as'=>'manage-programs']);
$routes->get('/programs-activities/create','ProgramActivitiesController::showAddNewProgramForm',['filter'=>'auth', 'as'=>'add-new-program']);
$routes->get('/programs-activities/(:num)','ProgramActivitiesController::viewProgram/$1',['filter'=>'auth', 'as'=>'view-program']);
$routes->post('/programs-activities/create','ProgramActivitiesController::setNewProgram',['filter'=>'auth']);
$routes->post('/leave-program-comment','ProgramActivitiesController::setNewConversation',['filter'=>'auth', 'as'=>'leave-program-comment']);
$routes->get('/programs-activities/edit/(:num)','ProgramActivitiesController::editProgram/$1',['filter'=>'auth', 'as'=>'edit-program']);
$routes->post('/programs-activities/update','ProgramActivitiesController::editProgram/$1',['filter'=>'auth', 'as'=>'update-program']);
$routes->post('/programs-activities/submit-program-report','ProgramActivitiesController::submitReport',['filter'=>'auth', 'as'=>'submit-program-report']);

$routes->post('/request-for-approval','ChainRequestController::requestForApproval',['filter'=>'auth', 'as'=>'request-for-approval']);
$routes->post('/action-request','ChainRequestController::actionRequest',['filter'=>'auth', 'as'=>'action-request']);

#Reminder
$routes->get('/reminder', 'ReminderController::index', ['filter' => 'auth', 'as' => 'reminder']);
$routes->get('/load-calendar', 'ReminderController::loadCalendar', ['filter' => 'auth']);
$routes->post('/reminder/insert', 'ReminderController::insert', ['filter' => 'auth']);

#Contractor routes
$routes->get('/manage-contractors', 'ContractorController::manageContractors', ['filter' => 'auth', 'as' => 'manage-contractors']);
$routes->get('/add-new-contractor', 'ContractorController::showNewContractorForm', ['filter' => 'auth', 'as' => 'add-new-contractor']);
$routes->post('/add-new-contractor', 'ContractorController::addNewContractor', ['filter' => 'auth']);
$routes->get('/contractor-details/(:num)', 'ContractorController::contractorDetail/$1', ['filter' => 'auth', 'as' => 'contractor-detail']);
$routes->post('/renew-license', 'ContractorController::renewLicense', ['filter' => 'auth', 'as' => 'renew-license']);
$routes->get('/manage-bids', 'ContractorController::manageBids', ['filter' => 'auth', 'as' => 'manage-bids']);
$routes->get('/view-bid/(:num)', 'ContractorController::viewBid/$1', ['filter' => 'auth', 'as' => 'view-bid']);
$routes->post('/update-bid-status', 'ContractorController::updateBidStatus', ['filter' => 'auth', 'as' => 'update-bid-status']);

#Contract routes
$routes->get('/contract-category', 'ContractController::showContractCategories', ['filter' => 'auth', 'as' => 'contract-categories']);
$routes->post('/contract-category', 'ContractController::saveContractCategory', ['filter' => 'auth']);
$routes->post('/edit-contract-category', 'ContractController::updateContractCategory', ['filter' => 'auth', 'as' => 'edit-contract-categories']);
$routes->get('/new-contract', 'ContractController::showContractForm', ['filter' => 'auth', 'as' => 'add-new-contract']);
$routes->post('/new-contract', 'ContractController::setNewContract', ['filter' => 'auth']);
$routes->get('/all-contracts', 'ContractController::allContracts', ['filter' => 'auth', 'as' => 'all-contracts']);
$routes->get('/view-contract/(:any)', 'ContractController::viewContract/$1', ['filter' => 'auth', 'as' => 'view-contract']);
$routes->get('/edit-contract/(:any)', 'ContractController::showEditContractForm/$1', ['filter' => 'auth', 'as' => 'edit-contract']);
$routes->post('/publish-contract', 'ContractController::publishContract', ['filter' => 'auth', 'as' => 'publish-contract']);
$routes->post('/contract/leave-comment', 'ContractController::setNewConversation', ['filter' => 'auth', 'as' => 'leave-comment-contract']);

#Vendor routes
$routes->get('/manage-vendors', 'ProcurementController::manageVendors', ['filter' => 'auth', 'as' => 'manage-vendors']);
$routes->get('/add-new-vendor', 'ProcurementController::showNewVendorForm', ['filter' => 'auth', 'as' => 'add-new-vendor']);
$routes->post('/add-new-vendor', 'ProcurementController::addNewVendor', ['filter' => 'auth']);
$routes->post('/update-vendor', 'ProcurementController::updateVendor', ['filter' => 'auth', 'as' => 'update-vendor']);
#Product routes
$routes->get('/manage-products', 'ProcurementController::manageProducts', ['filter' => 'auth', 'as' => 'manage-products']);
$routes->get('/add-new-product', 'ProcurementController::showNewProductForm', ['filter' => 'auth', 'as' => 'add-new-product']);
$routes->post('/add-new-product', 'ProcurementController::addNewProduct', ['filter' => 'auth']);

$routes->get('/contractor-license-category', 'ProcurementController::contractorLicenseCategory', ['filter' => 'auth', 'as' => 'contractor-license-category']);
$routes->post('/contractor-license-category', 'ProcurementController::storeContractorLicenseCategory', ['filter' => 'auth', 'as' => 'contractor-license-category']);
$routes->post('/update-contractor-license-category', 'ProcurementController::updateContractorLicenseCategory', ['filter' => 'auth', 'as' => 'update-contractor-license-category']);
$routes->get('/contractor-license-renewal', 'ProcurementController::contractorLicenseRenewal', ['filter' => 'auth', 'as' => 'contractor-license-renewal']);

// employee routes
$routes->match(['get'], 'my-account', 'EmployeeController::my_account', ['filter' => 'auth']);
$routes->match(['get'], 'profile/(:any)', 'EmployeeController::view_profile/$1', ['filter' => 'auth', 'as'=>'view-profile']);
$routes->match(['get'], 'check-signature-exists', 'EmployeeController::check_signature_exists', ['filter' => 'auth']);
$routes->match(['post'], 'setup-signature', 'EmployeeController::setup_signature', ['filter' => 'auth', 'as'=>'setup_signature']);

$routes->match(['post'], 'verify-token', 'EmployeeController::verify_token', ['filter' => 'auth', 'as'=>'verify_token']);
$routes->match(['post'], 'submit-digitally-signed-signature', 'EmployeeController::uploadDigitalSignature', ['filter' => 'auth', 'as'=>'submit-digitally-signed-signature']);

$routes->match(['post'], 'verify-signature', 'EmployeeController::verify_signature', ['filter' => 'auth']);
$routes->match(['post'], 'submit-token', 'EmployeeController::submit_token', ['filter' => 'auth']);
$routes->match(['post'], 'confirm-token', 'EmployeeController::confirm_token', ['filter' => 'auth']);
$routes->match(['post'], 'change-password', 'EmployeeController::change_password', ['filter' => 'auth']);
$routes->match(['post'], 'update-profile', 'EmployeeController::update_profile', ['filter' => 'auth', 'as'=>'update-profile']);


#Cash retirement
$routes->match(['get'], 'cash-retirement', 'CashRetirementController::my_cash_retirement',['filter'=>'auth', 'as'=>'cash-retirement']);
$routes->match(['post', 'get'], 'new-cash-retirement', 'CashRetirementController::new_cash_retirement',['filter'=>'auth', 'as'=>'new-cash-retirement']);
$routes->match(['post', 'get'], 'store-cash-retirement', 'CashRetirementController::store_new_cash_retirement',['filter'=>'auth', 'as'=>'store-cash-retirement']);
$routes->match(['post', 'get'], 'cash-retirement-details/(:any)', 'CashRetirementController::show_cash_retirement_details/$1',['filter'=>'auth', 'as'=>'show-cash-retirement-details']);

// central registry routes
$routes->match(['get'], 'central-registry', 'CentralRegistryController::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'outgoing-mail', 'CentralRegistryController::outgoing_mail', ['filter' => 'auth']);

// registries routes
$routes->match(['get'], 'registry', 'RegistryController::index', ['filter' => 'auth']);
$routes->match(['get'], 'view-registry/(:any)', 'RegistryController::view_registry/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'incoming-mail/(:num)', 'RegistryController::incoming_mail/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'outgoing-mail/(:num)', 'RegistryController::outgoing_mail/$1', ['filter' => 'auth']);
$routes->match(['get'], 'manage-mail/(:num)', 'RegistryController::manage_mail/$1', ['filter' => 'auth']);
$routes->match(['get'], 'view-transfer-log/(:num)', 'RegistryController::view_transfer_log/$1', ['filter' => 'auth']);
$routes->match(['get'], 'view-filing-log/(:num)', 'RegistryController::view_filing_log/$1', ['filter' => 'auth']);
$routes->match(['post'], 'transfer-mail', 'RegistryController::transfer_mail', ['filter' => 'auth']);
$routes->match(['post'], 'file-mail', 'RegistryController::file_mail', ['filter' => 'auth']);
$routes->match(['post'], 'upload-mail-attachments', 'RegistryController::upload_mail_attachments', ['filter' => 'auth']);
$routes->match(['post', 'get'], 'delete-mail-attachments', 'RegistryController::delete_mail_attachments', ['filter' => 'auth']);
$routes->match(['get'], 'mail-transfer-requests', 'RegistryController::mail_transfer_requests', ['filter' => 'auth']);
$routes->match(['post'], 'confirm-transfer-request', 'RegistryController::confirm_transfer_request', ['filter' => 'auth']);
$routes->match(['get'], 'correspondence', 'RegistryController::correspondence', ['filter' => 'auth']);

#Budget Routes (employee)
$routes->match(['get'], 'budget-input', 'BudgetController::budget_input', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'edit-budget-input/(:num)', 'BudgetController::edit_budget_input/$1', ['filter' => 'auth']);

// Task Routes
$routes->match(['get'], 'tasks', 'TaskController::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-task', 'TaskController::new_task', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'task-details/(:num)', 'TaskController::task_details/$1', ['filter' => 'auth']);
$routes->match(['post'], 'upload-task-attachment', 'TaskController::upload_attachment', ['filter' => 'auth']);
$routes->match(['get'], 'start-task/(:num)', 'TaskController::start_task/$1', ['filter' => 'auth']);
$routes->match(['post'], 'complete-task', 'TaskController::complete_task', ['filter' => 'auth']);
$routes->match(['post'], 'cancel-task', 'TaskController::cancel_task', ['filter' => 'auth']);
$routes->match(['post'], 'submit-feedback', 'TaskController::submit_feedback', ['filter' => 'auth']);
$routes->match(['get'], 'view-task-log/(:num)', 'TaskController::view_task_log/$1', ['filter' => 'auth']);

#Meeting
$routes->match(['get'], 'meet', 'MeetingController::meet', ['filter' => 'auth']);
$routes->match(['get'], 'meetings', 'MeetingController::meetings', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-meeting', 'MeetingController::new_meeting', ['filter' => 'auth']);
$routes->addPlaceholder('meetingtoken', '[\s\S]');
$routes->match(['get'], 'join-meeting/(:num)/(:any)', 'MeetingController::join_meeting/$1/$2', ['filter' => 'auth']);
//
// Fleet routes
$routes->match(['get'], 'active-vehicles', 'FleetController::active_vehicles', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-vehicle', 'FleetController::new_vehicle', ['filter' => 'auth']);
$routes->match(['get'], 'drivers', 'FleetController::drivers', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'new-driver', 'FleetController::new_driver', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'manage-vehicle/(:num)', 'FleetController::manage_vehicle/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'renewal-schedules', 'FleetController::renewal_schedules', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'renewal-schedule-calendar', 'FleetController::renewal_schedule_calendar', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'renewal-schedule-data', 'FleetController::renewal_schedule_data', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'maintenance-schedules', 'FleetController::maintenance_schedules', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'maintenance-schedule-calendar', 'FleetController::maintenance_schedule_calendar', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'maintenance-schedule-data', 'FleetController::maintenance_schedule_data', ['filter' => 'auth']);


$routes->match(['get', 'post'], 'contractor-login', 'ContractorAuth::login', ['filter' => 'noauth', 'as' => 'contractor-login']);
$routes->get('/contractor-dashboard', 'ContractorPortalController::dashboard', ['as' => 'contractor-dashboard', 'filter' => 'contractorauth']);
$routes->get('/contract-listing', 'ContractorPortalController::contractListing', ['as' => 'contract-listing', 'filter' => 'contractorauth']);
$routes->get('/contract-details/(:any)', 'ContractorPortalController::viewContractDetails/$1', ['as' => 'contract-details', 'filter' => 'contractorauth']);
$routes->get('/bidding/(:any)', 'ContractorPortalController::showContractBiddingView/$1', ['as' => 'contract-bidding', 'filter' => 'contractorauth']);
$routes->post('/submit-bid', 'ContractorPortalController::submitBid', ['as' => 'submit-bid', 'filter' => 'contractorauth']);
$routes->get('/my-bids', 'ContractorPortalController::myBids', ['as' => 'my-bids', 'filter' => 'contractorauth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

//$routes->get('/', 'Home::index');
