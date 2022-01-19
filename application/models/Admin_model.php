<?php
Class Admin_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listing($where = array()){
		return $this->db->where($where)->get('posts')->result();
	}
}
