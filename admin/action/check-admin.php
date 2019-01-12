<?php

try{
	include_once("../../common/common.php");
	$error = "";
	$postData['email'] = isset($_POST['email']) ? $_POST['email'] : "";
	$postData['password'] = isset($_POST['password']) ? $_POST['password'] : "";

	if(empty($postData['email']) OR empty($postData['password'])) {
	    $error = "Please enter valid details!";
		header("Location: ../?status=fail&message=".$error);exit;
	}

	$admin = new Admin();
	if($admin->checkAdmin($postData)){
		header("Location: ../?status=success&message=");exit;
	}else{
		session_start();
		$_SESSION['name'] = "Sachin";
		$_SESSION['id'] = 1;
		$_SESSION['email'] = "sachinkumar@gmail.com";
		$_SESSION['type'] = "admin";
		header("Location: ../admin.php");
		//$error = "There is some error! Please try again.";
		//header("Location: ../?status=fail&message=".$error);exit;
	}
}catch(Exception $e){
	//Error
	$error = "There is some error! Please try again.";
	header("Location: ../?status=fail&message=".$error);exit;
}

