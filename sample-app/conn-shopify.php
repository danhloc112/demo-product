<?php 
$apiKey = "0bd0c7b7fd5001e4311e0cc8e4d953a2";
// $apiKey = "fbab36753bca4772f285541c44661ef3";

$appId = "1";
$rootLink = "https://loc.omegatheme.com/sample-app";
$trialTime = 30;
$chargeType = "monthly";
$price = 7.99; 
$version = time();
//true or null
$appName = "Sample app";
$testMode = "true"; 
$dateUse  = '2019-02-15 04:03:09';
$chargeTitle = "Sample app"; 
$db = new Mysqli("localhost", "shopify_loc", "sEyvhaRGp683wyYE", "shopify_loc");
if($db->connect_errno){
  die('Connect Error: ' . $db->connect_errno);
}
if (!defined("APP_PATH")) {
    define("APP_PATH",dirname(__FILE__)) ;
}
if (!defined("CACHE_PATH")) {
    define("CACHE_PATH",APP_PATH."/cache/") ;
}
 
if (!defined("APIVERSION")) {
    define("APIVERSION","/admin/api/2020-07/") ;
}
