<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // function __construct(){
    //     Parent::__construct();
    // }

	public function index()
	{
        $data['content'] = 'layout/admin/pages/home';
		$this->load->view('admin_template', $data);
	}
}
