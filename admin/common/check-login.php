<?php

try{
	include_once("./../common/common.php");
	$common = new Common();
	$error = "";
	session_start();
	if(!empty($_SESSION)){
		$checkLogin = true;
	}else{
		//Error
		@session_start();
		@session_destroy();
		$error = "There is some error! Please try again.";
		$common->redirect($common->server."/admin/?status=fail&message=".$error);
		//header("Location: ".$server."/admin/?status=fail&message=".$error);exit;
	}
}catch(Exception $e){
		@session_start();
		@session_destroy();
		$error = "There is some error! Please try again.";
		$common->redirect($common->server."/admin/?status=fail&message=".$error);
}

