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

if(!array_key_exists("Authorization",$requestHeaders)){
    http_response_code(404); 
    $responseError=array();
    http_response_code();
    array_push($responseError,"Authorization not provided in header");
ECHO json_encode(array("status"=>false,"message"=>$responseError));
}
else{
    $data= explode(" ",$requestHeaders['Authorization']);
    $jwtToken = $data[1];

    //protect route with jwt
     $decoded= JwtAuth::VerifyToken($jwtToken);
    //  if($decoded){
    //     echo json_encode($decoded);
    //     return;
    //  }
    echo json_encode(array("message"=>"you are authorized"));
}