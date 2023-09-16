<?php
require_once '../init/config.php';
class Login extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;

		parent::__construct();
		ini_set('display_error', 1);
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function index(){
		echo "<h1>Access Denied</h1> <a href='".base_url."'>Go Back.</a>";
	}
	public function chair_login(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * from chair where username = '$username' and password = md5('$password') ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}
			}
			$this->settings->set_userdata('login_type',1);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect','last_qry'=>"SELECT * from users where username = '$username' and password = md5('$password') "));
		}
	}
	public function member_login(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * from members where username = '$username' and password = md5('$password') ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',2);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect','last_qry'=>"SELECT * from members where username = '$username' and password = md5('$password') "));
		}
	}
	public function applicant_login(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * from applicants where username = '$username' and password = md5('$password') ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',3);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect','last_qry'=>"SELECT * from applicants where username = '$username' and password = md5('$password') "));
		}
	}
	public function driver_login(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * from driver where username = '$username' and password = md5('$password') ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',4);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect','last_qry'=>"SELECT * from driver where username = '$username' and password = md5('$password') "));
		}
	}
	public function superlogin(){
		extract($_POST);

		$qry = $this->conn->query("SELECT * from superAdmin where  username = '$username' and `password` = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k)){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',4);
			return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect'));
		}
	}

	public function admin_logout(){
		if($this->settings->sess_des()){
			redirect('../');
		}
	}
	public function p_manager_logout(){
		if($this->settings->sess_des()){
			redirect('../');
		}
	}
	public function o_manager_logout(){
		if($this->settings->sess_des()){
			redirect('../');
		}
	}
	public function driver_logout(){
		if($this->settings->sess_des()){
			redirect('../');
		}
	}
	public function superlogout(){
		if($this->settings->sess_des()){
			redirect('../');
		}
	}	
	public function admin_refresh(){
		extract($_POST);

		$qry = $this->conn->query("SELECT * from users where username = '$username'");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',1);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect'));
		}
	}	
	public function super_refresh(){
		extract($_POST);

		$qry = $this->conn->query("SELECT * from superAdmin where username = '$username'");
		if($qry->num_rows > 0){
			foreach($qry->fetch_array() as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}

			}
			$this->settings->set_userdata('login_type',1);
		return json_encode(array('status'=>'success'));
		}else{
		return json_encode(array('status'=>'incorrect'));
		}
	}	
}
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$auth = new Login();
switch ($action) {
	case 'chairlogin':
		echo $auth->chair_login();
		break;
	case 'memberlogin':
		echo $auth->member_login();
		break;
	case 'applicantlogin':
		echo $auth->applicant_login();
		break;		
	case 'adminlogout':
		echo $auth->admin_logout();
		break;
	case 'pmanagerlogout':
		echo $auth->p_manager_logout();
		break;
	case 'omanagerlogout':
		echo $auth->o_manager_logout();
		break;
	case 'driverlogout':
		echo $auth->driver_logout();
		break;
	case 'superlogout':
		echo $auth->superlogout();
		break;		
		break;
}

