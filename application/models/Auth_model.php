<?php
class Auth_model extends CI_Model{
function __construct() {
parent::__construct();
}
	function saverecords($username,$email,$password,$gender,$phone,$fname,$lname,$dob,$ptype,$mstatus)
	{
	$query="insert into users values('','$username','$email','$password','$gender','$phone','$fname','$lname','$dob','$ptype','$mstatus')";
	$this->db->query($query);
	}
function displayrecords()
	{
	$query=$this->db->query("select * from users " );
	return $query->result();
	}
	function deleterecords($id)
	{
	$this->db->query("delete  from users where user_id='".$id."'");
	}	
		function displayrecordsById($id)
	{
	$query=$this->db->query("select * from users where user_id='".$id."'");
	return $query->result();
	}
	
	function updaterecords($username,$email,$phone,$id)
	{
	$query=$this->db->query("update users SET username='$username',email='$email',phone='$phone' where user_id='".$id."'");
	}	
}
?>