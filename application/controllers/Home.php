<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // function __construct(){
    //     Parent::__construct();
    // }

	public function index()
	{
        $data['content'] = 'layout/site/pages/home';
		$this->load->view('site_template', $data);
	}
}
