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
		$data['user'] = $this->user_model->get_user();

		$this->load->library('table');
//		$this->load->view('templates/header', $data);
		$this->load->view('user/index', $data);
//		$this->load->view('templates/footer');
	}


	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');


		$this->form_validation->set_rules('userName', 'userName', 'required');
		$this->form_validation->set_rules('phoneNumber', 'phoneNumber', 'required');
		$this->form_validation->set_rules('who', 'who', 'required');
		$this->form_validation->set_rules('whatCompany', 'whatCompany', 'required');
		$this->form_validation->set_rules('whatFor', 'whatFor', 'required');

		if ($this->form_validation->run() === FALSE)
		{
//			$this->load->view('templates/header', $data);
			$this->load->view('user/create');
//			$this->load->view('templates/footer');

		}
		else
		{
			$this->user_model->set_user();
			$this->load->view('user/success');
		}
	}
}
