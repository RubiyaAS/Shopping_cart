<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
 {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
		
	// 	$this->load->view("admindashboard");

	// }
  public function log()
  {
    
    $this->load->view("login");

  }
  /***
  *@function name :registration form
  *@ author :Rubiya
  *@ date:30/03/2021
  ***/
  public function reg()
  {
    
    $this->load->view("regform");

  }
  /***
  *@function name :Insert code
  *@ author :Rubiya
  *@ date:30/03/2021
  ***/
    public function reg_insert()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("mobile","mobile",'required');
        $this->form_validation->set_rules("dob","dob",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
        $this->form_validation->set_rules("username","username",'required');
    $this->form_validation->set_rules("password","password",'required');

        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpaswdz($pass);
        $b=array("fname"=>$this->input->post("fname"),
                 "lname"=>$this->input->post("lname"),
                 
                "dob"=>$this->input->post("dob"),
                "address"=>$this->input->post("address"),
                "district"=>$this->input->post("district"),
                "pincode"=>$this->input->post("pincode"),
                

               );
         $c=array("email"=>$this->input->post("email"),
          "username"=>$this->input->post("username"),
          "mobile"=>$this->input->post("mobile"),

                "password"=>$encpass,
                "usertype"=>'1');

        $this->mainmodel->registration($b,$c);    
        redirect(base_url().'Main/reg'); 
        }
}
public function login()
  {
    $this->load->view('login');
  }
  /***
  *@function name : Login 
  *@ author :Rubiya as
  *@ date:02/03/2021
  ***/

public function logins()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$email=$this->input->post("email");
$pass=$this->input->post("password");
$rslt=$this->mainmodel->selectpass($email,$pass);
if ($rslt)
{
$id=$this->mainmodel->getuserid($email);

$user=$this->mainmodel->getuser($id);
$this->load->library(array('session'));
$this->session->set_userdata(array
('id'=>(int)$user->id,
'usertype'=>$user->usertype,'status'=>$user->status,'logged_in'=>(bool)true));
if($_SESSION['usertype']=='1' && $_SESSION['status']=='1' && $_SESSION['logged_in']==true)
{
redirect(base_url().'Main/user');
}
elseif($_SESSION['usertype']=='0' && $_SESSION['status']=='1' && $_SESSION['logged_in']==true)
{
redirect(base_url().'Main/admin');
}
else
{
echo "Waiting for approval";
}
}
    else
    {
    echo "invalid user";
    }
}
else
{
redirect('Main/','refresh');
}

}
public function admin()
  {
    $this->load->view('admindashboard');
  }
  public function user()
  {
    $this->load->view('userdashboard');
  }
  public function add()
  {
    $this->load->view('addproduct');
  }
  public function addproduct()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("p_name","p_name",'required');
        $this->form_validation->set_rules("price","price",'required');
        $this->form_validation->set_rules("stock","stock",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
           $b=array("p_name"=>$this->input->post("p_name"),
                 "price"=>$this->input->post("price"),
                "stock"=>$this->input->post("stock"));
                $this->mainmodel->addproduct($b);    
        redirect(base_url().'Main/addproduct'); 
        }
      }
  
public function viewproduct()
  {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewproduct();
        $this->load->view('viewproduct',$data);
}
public function viewcart()
{
        //  $id=$this->session->id;
        // $id=$_SESSION['p_id'];
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel>cview();
        $this->load->view('viewcart',$data); 
}
  }
  ?>




 