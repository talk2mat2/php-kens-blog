<?php
class Users{
//firs establish a database connecion

public $db=null;


public function __construct(Dbcontroller $db){
    if(isset($db)){
        $this->db=$db;
    }
}


public function isregistered($email){
  
    $sql="SELECT * FROM users WHERE email = '$email'";

    $result= $this->db->conn->query($sql);
 
    if($result->num_rows>0){
        return true;
    }
    else{
        return false;
    }
}
public function registerUsers($firstName,$lastName,$email,$password){
$sql= $this->db->conn->prepare("INSERT INTO `users`( `firstName`, `lastName`, `email`, `password`) VALUES (?,?,?,?)");
$password2= password_hash($password,PASSWORD_DEFAULT);

$sql->bind_param("ssss",$firstName,$lastName,$email,$password2);
$result=$sql->execute();
// print_r($result);
if($result==TRUE){
    $this->login($email,$password);
    return true;
}
else{
    return false;
}
}

public function login($email,$password){

$sql= "SELECT * FROM `users` WHERE email = ?";
$sqls= $this->db->conn->prepare($sql);
$sqls->bind_param("s",$email);
// $result=$this->db->conn->query($sql);
$sqls->execute();
$result = $sqls->get_result();
if($result->num_rows>0){
    //if he users exist
    $user = $result->fetch_assoc();
$passwordVerify= password_verify($password,$user['password']);
if($passwordVerify){
// session_start();
$_SESSION['currentUser']=$user;

    return true;
}
else{
    return false;
}
}
else{
    return false;
}

}
public function loginByJwt($email,$password){

$sql= "SELECT * FROM `users` WHERE email = ?";
$sqls= $this->db->conn->prepare($sql);
$sqls->bind_param("s",$email);
// $result=$this->db->conn->query($sql);
$sqls->execute();
$result = $sqls->get_result();
if($result->num_rows>0){
    //if he users exist
    $user = $result->fetch_assoc();
$passwordVerify= password_verify($password,$user['password']);
if($passwordVerify){
// session_start();

    return array("status"=>true,"userData"=>$user);
}
else{
    return array("status"=>false,"message"=>"wrong password supplied");
}
}
else{
    return array("status"=>false,"message"=>"no user with the email $email");
}

}
public function logOut(){
    session_unset();
    session_destroy();
    header("location: login.php");
}

}
//INSERT INTO `users`(`id`, `firstName`, `lastName`, `email`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')