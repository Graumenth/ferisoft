<?php
Class Admin_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function add($data = array()){
		return $this->db->insert("posts", $data);
	}
}
