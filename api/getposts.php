<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: GET');
header("Conent-type: application/json; charset=uff-8");
 require_once($_SERVER["DOCUMENT_ROOT"].'/blog/controllers/controller.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'/blog/models/users.php');
 include_once($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
 include_once($_SERVER['DOCUMENT_ROOT'].'/blog/helpers/jwtauth.php');
$requestHeaders= apache_request_headers();
// echo var_dump($requestHeaders["Authorizatioan"]);



//fetch all post
http_response_code(200);
//$postarray is defined in conroller
echo json_encode(array("status"=>true,"userData"=>$postArray));
