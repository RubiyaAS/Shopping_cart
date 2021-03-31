<?php
class mainmodel extends CI_model
{
	/***
  *@function name : Password Encryption
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function encpaswdz($pass)
{
	return password_hash($pass, PASSWORD_BCRYPT);
}	
/***
  *@function name :Registration Insertion
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function registration($b,$c)
{
	    $this->db->insert("tbl_log",$c);
		$loginid=$this->db->insert_id();
		$b['loginid']=$loginid;
	    $this->db->insert("tbl_reg",$b);
}
/***
  *@function name : Select Password
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function selectpass($email,$pass)
{
$this->db->select('password');
$this->db->from("tbl_log");
$this->db->where("email",$email);
$qry=$this->db->get()->row('password');
return $this->verifypass($pass,$qry);
}
/***
  *@function name : Verify Password
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function verifypass($pass,$qry)
{
return password_verify($pass,$qry);
}
/***
  *@function name : Getting User Id
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function getuserid($email)
{
$this->db->select('id');
$this->db->from("tbl_log");
$this->db->where("email",$email);
return $this->db->get()->row('id');
}
/***
  *@function name : Fetching id
  *@ author :Athulya
  *@ date:30/03/2021
  ***/
public function getuser($id)
{
$this->db->select('*');
$this->db->from("tbl_log");
$this->db->where("id",$id);
return $this->db->get()->row();


  }
  public function addproduct($b)
{
      $this->db->insert("product",$b);
  
}
public function viewproduct()
{
  $this->db->select('*');
  $qry=$this->db->get("product");
    return $qry;
}
public function cview()
{
$this->db->select('*');
// $this->db->where("p_id",$pid);
$qry=$this->db->get("product");
return $qry;
}
}
?>

