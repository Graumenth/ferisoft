<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('contact/index');
	}

	public function add(){
		//add validation no time
		$insert = $this->Contact_model->add(
			array(
				"name" => $this->input->post("name"),
				"message" => $this->input->post("message")
			)
		);

		//after validation if checked
		if($insert){
			$alert = 1;
		}else{
			$alert = 0;
		}
		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("contact"));
	}
}
