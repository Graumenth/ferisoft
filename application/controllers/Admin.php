<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$viewData = new stdClass();

		$items = $this->admin_model->listing();
		$viewData->items = $items;
		$this->load->view('admin/index', $viewData);
	}
}
