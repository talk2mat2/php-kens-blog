<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
include_once($_SERVER["DOCUMENT_ROOT"]."/blog/models/users.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/blog/models/post.php");
//pass controller o templates;


//initalize our models

$db= new Dbcontroller();

$users= new Users($db);
$post = new Posts($db);
//we define response error array
$registerError= array();
$registerSuccess= array();
//register
if($_SERVER["REQUEST_METHOD"]==="POST" and isset($_POST['register'])){

    if(empty($_POST['firstname'])){
        array_push($registerError,"You dint supply your firstname");
    }
     if(empty($_POST['lastname'])){
        array_push($registerError,"You dint supply your laststname");
    }
    if(empty($_POST['email'])){
        array_push($registerError,"You dint supply your email");
    }
    if(empty($_POST['password'])){
        array_push($registerError,"You dint supply your password");
    }
     if(empty($_POST['password2'])){
        array_push($registerError,"You dint supply password confirm field");
    }
    if($_POST['password']!==$_POST['password2']){
        array_push($registerError,"both passwords dont match");
    }

   if(!empty($registerError)){
return;
    }
else{

    $refinedInput = filter_input_array(INPUT_POST,FILTER_DEFAULT);
  
$firstname= trim($refinedInput["firstname"]);
$lastname= trim($refinedInput["lastname"]);
$email= trim($refinedInput["email"]);
$password= trim($refinedInput["password"]);

if($users->isregistered($email)){
    return  array_push($registerError,"a user with this email exist already");
}

if(!$users->registerUsers($firstname,$lastname,$email,$password)){
    array_push($registerError,"unable to create account an arror ocuured");
}
else{
    array_push($registerSuccess,"account created");
}
   }


  }


  ////login
  $loginError= array();
  $loginSuccess= array();

  if($_SERVER["REQUEST_METHOD"]==="POST" and isset($_POST['login'])){

    if(empty($_POST['email'])){
        array_push($loginError,"You dint supply your email");
    }
    if(empty($_POST['password'])){
        array_push($loginError,"You dint supply your password");
    }

    $refinedInput = filter_input_array(INPUT_POST,FILTER_DEFAULT);
   
$email= trim($refinedInput["email"]);
$password= trim($refinedInput["password"]);

if(!$users->login($email,$password)){
    array_push($loginError,"login error,invalid email/password combination");
}
else{
    array_push($loginSuccess,"logged in successfully");
}


  }


  //logoutUser

  if($_SERVER["REQUEST_METHOD"]==="GET" and isset($_GET['logout'])){
      $users->logOut();
  }


//crete post
$newpostError= array();
$newpostSuccess= array();

if($_SERVER['REQUEST_METHOD']==='POST' AND isset($_POST["newpost"])){
    if(empty($_POST['postTitle'])){
        array_push($newpostError,"Post title can not be blank");
    }
    if(empty($_POST['postBody'])){
        array_push($newpostError,"Post body can not be blank");
    }

    if(!empty($newpostError)){
        return;
    }
    else{
        $postedBy = $_SESSION['currentUser']['id'];
        $refinedPostInput= filter_input_array(INPUT_POST,FILTER_DEFAULT);
       $newpost= $post->createPost(trim($refinedPostInput['postTitle']),trim($refinedPostInput["postBody"]),$postedBy);
       if($newpost){
       
        array_push($newpostSuccess,"Post was created successfully"); 
        header("location:index.php");
       }
       else{
        array_push($newpostError,"an error occureed , the requested operation wasnt successfully");
       }
    }
}


//fetch all post
$postArray= $post->FetAllPost();



//fetchpostbyid
$detailView;
if($_SERVER['REQUEST_METHOD']=="GET" and isset($_GET['postId'])){
    $detailView= $post->fetchPostById($_GET['postId']);

}

