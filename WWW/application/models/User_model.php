<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_user()
	{
//			$query = $this->db->get('user');
//			return $query->result_array();

	}

	public function set_user()
	{
		$this->load->helper('url');

		$data = array(
			'userName' => $this->input->post('userName'),
			'phoneNumber' => $this->input->post('phoneNumber'),
			'who' => $this->input->post('who'),
			'whatCompany' => $this->input->post('whatCompany'),
			'whatFor' => $this->input->post('whatFor')
		);

		return $this->db->insert('user', $data);
	}
}
