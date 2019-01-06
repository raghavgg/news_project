<?php

try{
	include_once("../../../common/common.php");
	$error = "";
	$postData['title'] = isset($_POST['title']) ? $_POST['title'] : "";
	$postData['subtitle'] = isset($_POST['sub_title']) ? $_POST['sub_title'] : "";
	$postData['text'] = isset($_POST['text']) ? $_POST['text'] : "";
	$postData['views'] = 0;
	$postData['picture_large'] = "";
	$postData['picture_small'] = "";
	$postData['youtube_video_url'] = isset($_POST['youtube_url']) ? $_POST['youtube_url'] : "";
	$postData['news_category_id'] = isset($_POST['category']) ? $_POST['category'] : "";
	$postData['user_id'] = 1;
	$postData['status'] = isset($_POST['status']) ? $_POST['status'] : "";


	$targetDir = "../../../upload/news/";
	$no = rand(10, 100000);
	$targetFileBig = $targetDir . $no . basename($_FILES["filenameBig"]["name"]);
	$no1 = rand(10, 100000);
	$targetFileSmall = $targetDir . $no1 . basename($_FILES["filenameSmall"]["name"]);

	$checkBig = getimagesize($_FILES["filenameBig"]["tmp_name"]);
	$checkSmall = getimagesize($_FILES["filenameSmall"]["tmp_name"]);

	$imageFileTypeBig = strtolower(pathinfo($targetFileBig,PATHINFO_EXTENSION));
	$imageFileTypeSmall = strtolower(pathinfo($targetFileSmall,PATHINFO_EXTENSION));

	if($checkBig == false OR $checkSmall == false) {
	        $error = "Image Type Error";
		header("Location: ../news-create.php?status=fail&message=".$error);exit;
	}

	if($_FILES["filenameBig"]["size"] > 500000 OR $_FILES["filenameSmall"]["size"] > 500000){
		$error = "Image Size Error";
		header("Location: ../news-create.php?status=fail&message=".$error);exit;
	}

	$imageArray = array("jpg", "png", "jpeg", "gif");

	if(!in_array($imageFileTypeBig, $imageArray) OR !in_array($imageFileTypeSmall, $imageArray)){
		$error = "Image Extension Error";
		header("Location: ../news-create.php?status=fail&message=".$error);exit;
	}

	if(!move_uploaded_file($_FILES["filenameBig"]["tmp_name"], $targetFileBig) OR !move_uploaded_file($_FILES["filenameSmall"]["tmp_name"], $targetFileSmall)){
		$error = "Image Error";
		header("Location: ../news-create.php?status=fail&message=".$error);exit;
	}

	$postData['picture_large'] = $no . basename($_FILES["filenameBig"]["name"]);
	$postData['picture_small'] = $no1 . basename($_FILES["filenameSmall"]["name"]);

	$news = new News();
	if($news->createNews($postData)){
		header("Location: ../news-create.php?status=success&message=");exit;
	}else{
		$error = "There is some error! Please try again.";
		header("Location: ../news-create.php?status=fail&message=".$error);exit;
	}
}catch(Exception $e){
	//Error
	$error = "There is some error! Please try again.";
	header("Location: ../news-create.php?status=fail&message=".$error);exit;
}

