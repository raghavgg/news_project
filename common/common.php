<?php

/**
 * 
 */
class Common
{
	public $apiServerName = "http://127.0.0.1:8000";

	public function callUrl($callingUrl, $postFields= array(), $type ="GET"){
			try{
					$curl = curl_init();

					curl_setopt_array($curl, array(
					  CURLOPT_URL => $this->apiServerName.$callingUrl,
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 30,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => $type,
					  CURLOPT_POSTFIELDS => json_encode($postFields, true),
					  CURLOPT_HTTPHEADER => array(
					    "cache-control: no-cache",
					    "content-type: application/json",
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);
					curl_close($curl);

					if ($err) {
					  	return false;
					} else {
					  	return json_decode($response, true);
					}
			} catch(Exception $e){

			}
	}
}


/**
 * 
 */
class Category extends Common
{

	public function getCategoryList($limit=10, $page=1){
		$response = $this->callUrl("/api/v1/session/category?records_per_page=".$limit."&page_number=".$page);
		if($response['statusCode'] == 200){
			return $response['data'];
		}else{
			return false;
		}
	}
}

/**
 * 
 */
class News extends Common
{
	public function createNews($postFields){
		$response = $this->callUrl("/api/v1/session/news/create", $postFields, 'POST');
		if($response['statusCode'] == 201){
			return true;
		}else{
			return false;
		}
	}
}
?>