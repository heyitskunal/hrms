<?php
class Auth extends CI_Controller
{
	function __construct() {
parent::__construct();
$this->load->database();
$this->load->helper('url');
$this->load->model('Auth_model');

}

	public function login()
	{
		$this->load->view('templates/layout_hrms');


		if($this->input->post('login'))
		{
			$e=$this->input->post('username');
			$p=$this->input->post('password');
	
			$que=$this->db->query("select * from users where username='".$e."' and password='$p'");
			$row = $que->num_rows();
			$data=$que->result();
			if($e=='admin'&&$p='12345')
			{
			redirect('Auth/admin',$data);
			}
			else if($row)
			{
		$this->load->view('dashboard.html',$data);
			}	
			else
			{
				$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}
		}
		$this->load->view('login',@$data);		
	}

	public function register()
	{
		//load registration view form
		$this->load->view('register');
	
		//Check submit button 
		if($this->input->post('register'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('username');
		$e=$this->input->post('email');
		$m=$this->input->post('password');
		$k=$this->input->post('gender');
		$l=$this->input->post('phone');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
$dob=$this->input->post('dob');
$ptype=$this->input->post('ptype');
	
	$mstatus=$this->input->post('mstatus');	
//call saverecords method of Hello_Model and pass variables as parameter
		$this->Auth_model->saverecords($n,$e,$m,$k,$l,$fname,$lname,$dob,$ptype,$mstatus);		
		echo "Records Saved Successfully";
		}
	}




	public function admin()
	{
		$this->load->view('templates/layout_hrms');
		$this->load->view('sidebar');

	$result['data']=$this->Auth_model->displayrecords();
	//$this->load->view('personalinfo',$result);
	}





public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Auth_model->deleterecords($id);
	redirect("Auth/profile");
	}




		public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Auth_model->displayrecordsById($id);
	$this->load->view('update_record',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('username');
		$e=$this->input->post('email');
		$m=$this->input->post('phone');
		$this->Auth_model->updaterecords($n,$e,$m,$id);
		redirect("Auth/profile");
		}
}
}