<?php
 require $_SERVER["DOCUMENT_ROOT"].'/blog/vendor/autoload.php';
 use Firebase\JWT\JWT;


class JwtAuth{
private  static $key = "coolCow";

    static function VerifyToken($jwtToken){
        try{
            JWT::$leeway = 2;
        $decoded = JWT::decode($jwtToken, self::$key, array('HS256'));
                   return $decoded;}
        catch(Exception $error){
            echo json_encode(array("status"=>false,"message"=>"Unauthorized access","errror"=>$error->getMessage()));
die();
        }
   

    }
}