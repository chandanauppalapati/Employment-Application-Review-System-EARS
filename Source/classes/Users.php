<?php
require_once('../config.php');
Class Users extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function load_users(){
		$qry = $this->conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM `users` order by concat(firstname,' ',lastname) asc");
		$data = array();
			while($row = $qry->fetch_assoc()){
				$row['avatar'] = validate_image($row['avatar']);
				$data[] = $row;
			}	
			$resp['status']='success';
			$resp['data'] = $data;
			return json_encode($resp);
	}
	
	public function save_users(){
		extract($_POST);
		$data = '';
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','password'))){
				if(!empty($data)) $data .=" , ";
				$data .= " {$k} = '{$v}' ";
			}
		}
		if(!empty($password)){
			$password = md5($password);
			if(!empty($data)) $data .=" , ";
			$data .= " `password` = '{$password}' ";
		}

		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
				$fname = 'uploads/'.strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
				if(isset($_SESSION['userdata']['avatar']) && is_file('../'.$_SESSION['userdata']['avatar']) && !empty($id))
						unlink('../'.$_SESSION['userdata']['avatar']);
				$move = move_uploaded_file($_FILES['img']['tmp_name'],'../'. $fname);
				if($move){
					$data .=" , avatar = '{$fname}' ";
					
				}
		}
		
		if(empty($id)){
			$chk = $this->conn->query("SELECT * FROM users where username = '{$username}' ")->num_rows;
		}else{
			$chk = $this->conn->query("SELECT * FROM users where username = '{$username}' and id != {$id} ")->num_rows;
		}
		
		if($chk > 0){
			$resp['status'] = 'duplicate';
		} else {
    		if(empty($id)){
    			$qry = $this->conn->query("INSERT INTO users set {$data}");
    		}else{
    			$qry = $this->conn->query("UPDATE users set $data where id = {$id}");
    		}
    		
    		if($qry){
    			$resp['status'] = 'success';
    		}else{
    			$resp['status'] = 'error';
    			$resp['error'] = $this->conn->error;
    		}
		}
		return json_encode($resp);
	}
	public function save_superadmin(){
		extract($_POST);
		$data = '';
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','password'))){
				if(!empty($data)) $data .=" , ";
				$data .= " {$k} = '{$v}' ";
			}
		}
		if(!empty($password)){
			$password = md5($password);
			if(!empty($data)) $data .=" , ";
			$data .= " `password` = '{$password}' ";
		}

		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
				$fname = 'uploads/'.strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
				if(isset($_SESSION['userdata']['avatar']) && is_file('../'.$_SESSION['userdata']['avatar']) && !empty($id))
						unlink('../'.$_SESSION['userdata']['avatar']);
				$move = move_uploaded_file($_FILES['img']['tmp_name'],'../'. $fname);
				if($move){
					$data .=" , avatar = '{$fname}' ";
					
				}
		}
		
		if(empty($id)){
			$chk = $this->conn->query("SELECT * FROM superAdmin where username = '{$username}' ")->num_rows;
		}else{
			$chk = $this->conn->query("SELECT * FROM superAdmin where username = '{$username}' and id != {$id} ")->num_rows;
		}
		
		if($chk > 0){
			$resp['status'] = 'duplicate';
		} else {
    		if(empty($id)){
    			$qry = $this->conn->query("INSERT INTO superAdmin set {$data}");
    		}else{
    			$qry = $this->conn->query("UPDATE superAdmin set $data where id = {$id}");
    		}
    		
    		if($qry){
    			$resp['status'] = 'success';
    		}else{
    			$resp['status'] = 'error';
    			$resp['error'] = $this->conn->error;
    		}
		}
		return json_encode($resp);
	}
	public function delete_user(){
		extract($_POST);
		$qry = $this->conn->query("DELETE FROM users where id = $id");
		if($qry){
			$this->settings->set_flashdata('success','User Details successfully deleted.');
			$resp['status'] = 'success';
		}else{
			$resp['status'] = 'error';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
	
}

$users = new users();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
switch ($action) {
	case 'load_users':
		echo $users->load_users();
	break;
	case 'save':
		echo $users->save_users();
	break;
	case 'save_super':
		echo $users->save_superadmin();
	break;
	case 'delete_user':
		echo $users->delete_user();
	break;
	default:
		// echo $sysset->index();
		break;
}