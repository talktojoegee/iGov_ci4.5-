<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Office extends BaseController
{
	public function __construct()
	{
		if (session()->get('type') == 2):
			echo view('auth/access_denieda');
			exit;
		endif;
	}
	
	public function index()
	{
		$data['username'] = $this->session->user_username;
		$data['firstTime'] = $this->session->firstTime;
		$data['type'] = $this->session->type;
    //return dd('data');
		//return view('office/dashboard', $data);
    return redirect()->to(base_url('/organization-profile'));
	}
}
