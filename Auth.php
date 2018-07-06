
<?php


class Auth extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->database();
	    
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Auth_model');
		$this->load->library('session');
	}

public function login()
{
$this->load->database();
         $this->load->view('templates/layout_hrms');
      


      if ($this->input->post('login'))
     	{
                   $this->session->set_userdata('username' , $username);
                   $this->session->set_userdata('entrance' ,true );
           	$username=$this->input->post('username');
            $f=$this->input->post('password'); 


           $que=$this ->db->query("select * from users where username='".$username."' and password='$f'");
               $row=$que->num_rows();
               $data=$que->result();
 
              if($username=='admin'&& $f=='12345')  {

                  $this->session->set_userdata('username' , $username);
                   $this->session->set_userdata('entrance' ,true );


                    //temporary message
                echo 'logged in';
                 redirect('http://localhost/CodeIgniter/index.php/auth/employee');

}
                 elseif($row)
                 	{



                 		 $this->session->set_userdata('username' , $username);
                 		 $this->session->set_userdata('entrance' , true);

                 		//$this->load->view('dashboard.html');
                      redirect('../../../userinfo');

                 	}

                 else


                 {
                      $data['error']="invalid login details";


                 }
              



 


     	}  
           
            $this->load->view('login',@$data);


}
            
public function register()
{


	$this->load->view('register');


      if($this->input->post("register"))
      {



      	$n=$this->input->post('username');
		$e=$this->input->post('email');
		$f=$this->input->post('password');
		$m=$this->input->post('phone');
		$g=$this->input->post('gender');
		$fname=$this->input->post('first_name');
		$lname=$this->input->post('last_name');
		$dob=$this->input->post('dob');
//call saverecords method of Hello_Model and pass variables as parameter
		$this->Auth_model->save($n,$e,$f,$m,$g,$fname,$lname,$dob);		
		echo "Records Saved Successfully";
     }
}





public function profile()
{

  	if($this->session->userdata('entrance')){


  	    $this->load->view('templates/layout_hrms');
   
  	    $this->load->view('sidebar');
 $this->load->view('profile');
	}
	else
	{
		redirect('Auth/login');
	}

}

  public function employee()
  {
  	if($this->session->userdata('entrance')){
  	    $this->load->view('templates/layout_hrms');
   
  	    $this->load->view('sidebar');
  		$result['data']=$this->Auth_model->display();

  		$this->load->view("employee",$result);
  	}
  	else{
  		redirect('Auth/login');
  	}
  		  }

	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Auth_model->deleterecords($id);
	redirect("http://localhost/CodeIgniter/index.php/auth/employee");
	}

	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Auth_model->displayrecordsById($id);
	$this->load->view('updaterecords',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('username');
	
		$e=$this->input->post('email');
		
		$m=$this->input->post('phone');

		$p=$this->input->post('gender');
		$first=$this->input->post('fname');
		$this->Auth_model->updaterecords($n,$e,$m,$p,$first,$id);
		redirect("http://localhost/CodeIgniter/index.php/auth/employee");
		}

	}


	public function logout()
	{

		 $this->session->unset_userdata('entrance');
		 echo "sessin end";
		 redirect('http://localhost/CodeIgniter/index.php/auth/login');
	}


public function userinfo()
{
     if($this->session->userdata('entrance'))
 {


	$result['data']=$this->Auth_model->displayrecordsbyname($this->session->userdata('username'));

  		$this->load->view("userinfo",$result);
  	}
  	else{
  		redirect('Auth/login');
}

}

}
