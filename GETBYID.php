//Zoho CRM Get Leads By Id
<?php

$auth = "*************************";// Auth Keys
$id="****************";// Record Id

////////////get data by Id from Zoho Lead Module ///////////
$get_url = "https://crm.zoho.com/crm/private/json/Leads/getRecordById?";
$get_query = "authtoken=".$auth."&scope=crmapi&id=".$id."";

$get_curl = curl_init();
curl_setopt($get_curl, CURLOPT_URL, $get_url);
curl_setopt($get_curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($get_curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($get_curl, CURLOPT_TIMEOUT, 60);
curl_setopt($get_curl, CURLOPT_POST, 1);
curl_setopt($get_curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($get_curl, CURLOPT_POSTFIELDS, $get_query);
$get_response = curl_exec($get_curl);
$jfo = json_decode($get_response);
echo "<pre>";
curl_close($get_curl);
print_r($jfo);
