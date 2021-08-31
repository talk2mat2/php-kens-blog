<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Mthod: POST');
header("Conent-type: application/json; charset=uff-8");
 require_once($_SERVER["DOCUMENT_ROOT"].'/blog/controllers/controller.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'/blog/models/users.php');
 include_once($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
 require $_SERVER["DOCUMENT_ROOT"].'/blog/vendor/autoload.php';
 use Firebase\JWT\JWT;

 $key = "coolCow";
 


 $requesHeader= apache_request_headers();

 $RequestBody= json_decode(file_get_contents("Php://input"));

 $response=array();
$loginError= array();
$db= new Dbcontroller();

$users= new Users($db);
//$firstName=$RequestBody
if(!property_exists($RequestBody,"email")){
    array_push($loginError,"You dint supply your email");

}
if(!property_exists($RequestBody,"password")){
    array_push($loginError,"You dint supply your password");

}
if(!empty($loginError)){
    http_response_code(501);
    $response['message']=$loginError;
   
    echo json_encode($response);
    return;
    //we end the flow here if the error is not empty
        }


        $email= trim($RequestBody->email);
        $password= trim($RequestBody->password);
        
$loginbyJwt= $users->loginByJwt($email,$password);

if($loginbyJwt['status']==true){
    $loginbyJwt["userData"]["password"]=null;
    $payload = array(
        "iss" => "http://127.0.0.1",
        "aud" => "http://127.0.0.1",
    
        "nbf" => time(),//cant use it before now
        "iat" => time(),// issured time , now
        "exp" => time() + (60 * 60), //expre one hour from now/ cant work after one hour
        "user"=>$loginbyJwt["userData"]
    );
    // $jwt = JWT::encode($payload, $privateKey, 'RS256');
    $jwt = JWT::encode($payload, $key);
    http_response_code(200);
    echo json_encode(array("status"=>true,"userData"=>$loginbyJwt["userData"],"token"=>"Bearer ".$jwt));
    exit();
}