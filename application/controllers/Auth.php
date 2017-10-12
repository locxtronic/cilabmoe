<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login()
	{
		if ($this->input->post("tbxUsername") == "Luqman" &&
				$this->input->post("tbxPassword") == "1234") {
			$this->session->set_userdata("logged", true);
			redirect("dashboard");
		} else {
			$data = ["error" => "Unable to login. Please check username and password."];
			$this->load->view('header');
			$this->load->view('login', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}
