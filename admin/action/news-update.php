<?php
@session_start();

try{
	include_once("../../common/common.php");
	$news = new News();
	$news->checkAdminLogin();
	
	$error = "";
	$postData['title'] = isset($_POST['title']) ? $_POST['title'] : "";
	$postData['id'] = isset($_POST['id']) ? $_POST['id'] : "";
	$postData['subtitle'] = isset($_POST['sub_title']) ? $_POST['sub_title'] : "";
	$postData['text'] = isset($_POST['text']) ? $_POST['text'] : "";
	$postData['views'] = 0;
	$postData['picture_large'] = "";
	$postData['picture_small'] = "";
	$postData['youtube_video_url'] = isset($_POST['youtube_url']) ? $_POST['youtube_url'] : "";
	$postData['news_category_id'] = isset($_POST['category']) ? $_POST['category'] : "";
	$postData['user_id'] = 1;
	$postData['status'] = isset($_POST['status']) ? $_POST['status'] : "";


	$targetDir = "../../upload/news/";

	if(isset($_FILES["filenameBig"]["name"]) AND !empty($_FILES["filenameBig"]["name"])){
		$no = rand(10, 100000);
		$targetFileBig = $targetDir . $no . basename($_FILES["filenameBig"]["name"]);
		$checkBig = getimagesize($_FILES["filenameBig"]["tmp_name"]);
		$imageFileTypeBig = strtolower(pathinfo($targetFileBig,PATHINFO_EXTENSION));
		if($checkBig == false) {
		    $error = "Image Type Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		if($_FILES["filenameBig"]["size"] > 500000){
			$error = "Image Size Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		$imageArray = array("jpg", "png", "jpeg", "gif");

		if(!in_array($imageFileTypeBig, $imageArray)){
			$error = "Image Extension Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		if(!move_uploaded_file($_FILES["filenameBig"]["tmp_name"], $targetFileBig)){
			$error = "Image Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		$postData['picture_large'] = $no . basename($_FILES["filenameBig"]["name"]);
	}else{
		$postData['picture_large'] = "";
	}

	if(isset($_FILES["filenameSmall"]["name"]) AND !empty($_FILES["filenameSmall"]["name"])){
		$no1 = rand(10, 100000);
		$targetFileSmall = $targetDir . $no1 . basename($_FILES["filenameSmall"]["name"]);
		$checkSmall = getimagesize($_FILES["filenameSmall"]["tmp_name"]);
		$imageFileTypeSmall = strtolower(pathinfo($targetFileSmall,PATHINFO_EXTENSION));
		if($checkSmall == false) {
		    $error = "Image Type Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}
		
		if($_FILES["filenameSmall"]["size"] > 500000){
			$error = "Image Size Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}
		
		$imageArray = array("jpg", "png", "jpeg", "gif");

		if(!in_array($imageFileTypeSmall, $imageArray)){
			$error = "Image Extension Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		if(!move_uploaded_file($_FILES["filenameSmall"]["tmp_name"], $targetFileSmall)){
			$error = "Image Error";
			header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
		}

		$postData['picture_small'] = $no1 . basename($_FILES["filenameSmall"]["name"]);
	}else{
		$postData['picture_small'] = "";
	}

	if($news->editNews($postData)){
		header("Location: ../news/news-edit.php?status=success&message=");exit;
	}else{
		$error = "There is some error! Please try again.";
		header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
	}
}catch(Exception $e){
	//Error
	$error = "There is some error! Please try again.";
	header("Location: ../news/news-edit.php?status=fail&message=".$error);exit;
}

