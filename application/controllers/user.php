<?php
Class User extends CI_Controller
{
	
	public function _construct()
	{
		if(!isset($_SESSION['user_logged'])){
			redirect("auth/login");

		}
	}
	public function profile()
	{
		$this->load->view('profile');
	}
}