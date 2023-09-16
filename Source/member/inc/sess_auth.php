<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['userdata']) && !strpos($link, 'login.php')){
	redirect('member/login.php');
}
if(isset($_SESSION['userdata']) && strpos($link, 'login.php')){
	redirect('member/index.php');
}
$module = array('','chair','member','applicant');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.php') || strpos($link, 'member/')) && $_SESSION['userdata']['login_type'] !=  2){
	echo "<script>alert('Access Denied!');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
}