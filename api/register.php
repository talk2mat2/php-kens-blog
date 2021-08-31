<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Mthod: POST');
header("Conent-type: application/json; charset=uff-8");
 require_once($_SERVER["DOCUMENT_ROOT"].'/blog/controllers/controller.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'/blog/models/users.php');
 include_once($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
$requestHeaders= apache_request_headers();
$RequestBody= json_decode(file_get_contents("Php://input"));
$refinedInput = filter_input_array(INPUT_POST,FILTER_DEFAULT);
$response=array();
$registerError= array();
$db= new Dbcontroller();

$users= new Users($db);
//$firstName=$RequestBody->firstName;

if(!property_exists($RequestBody,"firstName")){
    array_push($registerError,"You dint supply your firstname");

}
if(!property_exists($RequestBody,"lastName")){
    array_push($registerError,"You dint supply your lastname");
}
if(!property_exists($RequestBody,"email")){
  $response['message']='no firstname provided';
  array_push($registerError,"You dint supply your email");
}
if(!property_exists($RequestBody,"password")){
    array_push($registerError,"You dint supply your password");
}
// if(!property_exists($RequestBody,"email")){
//   $response['message']='no firstname provided';
// http_response_code(501);
// echo json_encode($response);
// return;
// }
if(!empty($registerError)){
    http_response_code(501);
    $response['message']=$registerError;
    $response['headers']=$requestHeaders;
    echo json_encode($response);
    return;
    //we end the flow here if the error is not empty
        }
   
        $firstName= trim($RequestBody->firstName);
        $lastName= trim($RequestBody->lastName);
        $email= trim($RequestBody->email);
        $password= trim($RequestBody->password);
        
       
 
        if($users->isregistered($email)){
            array_push($registerError,"A user with $email is already registered");
            echo json_encode(array("message"=>$registerError,"status"=>"error"));
            return;
        }

        if(!$users->registerUsers($firstName,$lastName,$email,$password)){
            array_push($registerError,"unable to create account an arror ocuured");
            echo json_encode(array("message"=>$registerError,"status"=>"error"));
            return;
        }
        else{
            http_response_code(200);
            ECHO json_encode(array('status'=>"success","message"=>"account created successfully"));
            return;
        }
        


// http_response_code(201);
// $response=array();
// $response['userData']=$password;
// echo json_encode($response);

// we need this to register users ---$firstName,$lastName,$email,$password