<?php
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->library('table');
		$this->load->view('user/index');
	}

	public function success()
	{
		$this->load->view('user/success');
	}

	public function adduser()
	{
			$this->user_model->adduser();
			$this->load->view('user/success');
	}
}
