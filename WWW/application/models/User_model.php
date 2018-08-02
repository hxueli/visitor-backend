<?php
header("Content-type:text/html;charset=utf-8");

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function adduser()
	{
		$this->load->helper('url');

		$json= file_get_contents('php://input');
		$data = json_decode($json);
		//print_r($data->userName);

		$dataarr = array(
		'userName' => $data->userName,
		'phoneNumber' => $data->phoneNumber,
		'who' => $data->who,
		'whatCompany' => $data->whatCompany,
		'whatFor' => $data->whatFor
		);

		return $this->db->insert('user', $dataarr);
	}
}
