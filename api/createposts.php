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
    http_response_code(401); 
    $responseError=array();
    http_response_code();
    array_push($responseError,"Authorization bearer token not provided in header");
ECHO json_encode(array("status"=>false,"message"=>$responseError));
die();
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
    // echo json_encode(array("message"=>"you are authorized"));
}
//$newpost= $post->createPost(trim($refinedPostInput['postTitle']),trim($refinedPostInput["postBody"]),$postedBy);
// $postedBy=$decoded["userData"]["id"];
$decoded_array = (array) $decoded;
$postedBy= $decoded_array["user"]->id;


$responseError= array();
$requestBody= json_decode(file_get_contents("php://input"));

if(!property_exists($requestBody,"postTitle")){
array_push($responseError,"kindly provide a postTitle");
}
if(!property_exists($requestBody,"postBody")){
array_push($responseError,"kindly provide a postBody");
}
if(!empty($responseError)){
    http_response_code(501);
    echo json_encode(array("status"=>false,"message"=>$responseError));
    die();
}
else{
//$posts from from controller
    $newpost= $post->createPost(trim($requestBody->postTitle),trim($requestBody->postBody),$postedBy);
    if($newpost){
        http_response_code(200);
        echo json_encode(array("status"=>true,"message"=>"new post was created successfull"));
    }
    else{
        http_response_code(501);
        echo json_encode(array("status"=>false,"message"=>"unable to create posts"));
    }
}






