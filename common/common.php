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
					  CURLOPT_POSTFIELDS => json_encode($postFields),
					  CURLOPT_HTTPHEADER => array(
					    "cache-control: no-cache"
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					if ($err) {
					  	return false;
					} else {
					  	return json_decode($response);
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
		print_r($response);
	}

}
?>