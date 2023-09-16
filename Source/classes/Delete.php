<?php
require_once '../init/config.php';
class Delete extends DBConnection{
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
    public function member_delete(){
        // extract($_POST);
		$member_id = $_POST["member_id"];
        // $data = json_decode(file_get_contents($_POST), true);
		echo $this->conn->query("DELETE * FROM members WHERE id = '$member_id'");
		
		
	}
}



$action = !isset($_GET['delete']) ? 'none' : strtolower($_GET['delete']);
$auth = new Delete();
switch ($action) {
	case 'member':
		echo $auth->member_delete();
		break;
	
		break;
}

