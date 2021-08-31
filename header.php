
<?php
ob_start();

session_start();
// if(isset($_SESSION['currentUser'])){
//   header("location:index.php");
// }



include_once("./controllers/controller.php")?>
<!DOCTYPE html>

<html style="font-size: 16px;" class="u-responsive-xs">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="Prototype a digital product idea">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="./nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="./jquery-1.9.1.min.js.download" defer=""></script>
    <script class="u-script" type="text/javascript" src="./nicepage.js.download" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.4, nicepage.com">

  
    <style class="u-style">.u-section-2 {
  background-image: none;
}
body{
  background-color: #fff !important;
}
.postlist{
  width: 99%;
margin-bottom: 20px;
  padding:0;
  text-align: left;
}
.postlist li:nth-child(n+2){
  color: grey;
  font-size: 19px;
}
*{
  list-style: none;
}
.u-section-2 .u-sheet-1 {
  min-height: 816px;
}
small{
  font-size: 14px;
}
.error{
  color: tomato;
}
.success{
  color: green;
}
.u-section-2 .u-text-1 {
  font-size: 3.4375rem;
  font-weight: 700;
  font-family: Ubuntu, sans-serif;
  text-decoration: none solid rgb(204, 255, 0);
  margin: 60px auto 0;
}
.u-section-2 .u-list-1 {
  grid-template-rows: repeat(3, auto);
  width: 819px;
  margin: 56px auto 0;
}
.u-section-2 .u-repeater-1 {
  grid-template-columns: repeat(2, calc(50% - 14px));
  min-height: 267px;
  grid-gap: 28px;
}
.u-section-2 .u-container-layout-1 {
  padding: 0;
}
.u-section-2 .u-icon-1 {
  height: 78px;
  width: 78px;
  background-image: none;
  color: rgb(255, 255, 255) !important;
  margin: 0 auto 0 0;
}
.u-section-2 .u-text-2 {
  font-size: 1.25rem;
  line-height: 1.4;
  font-weight: 700;
  margin: -53px 0 25px 96px;
}
.u-section-2 .u-container-layout-2 {
  padding: 0;
}
.u-section-2 .u-icon-2 {
  height: 78px;
  width: 78px;
  background-image: none;
  margin: 0 auto 0 0;
}
.u-section-2 .u-text-3 {
  font-size: 1.25rem;
  line-height: 1.4;
  font-weight: 700;
  margin: -53px 0 25px 96px;
}
.u-section-2 .u-container-layout-3 {
  padding: 0;
}
.u-section-2 .u-icon-3 {
  height: 78px;
  width: 78px;
  background-image: none;
  color: rgb(255, 255, 255) !important;
  margin: 0 auto 0 0;
}
.u-section-2 .u-text-4 {
  font-size: 1.25rem;
  line-height: 1.4;
  font-weight: 700;
  margin: -53px 0 25px 96px;
}
.u-section-2 .u-container-layout-4 {
  padding: 0;
}
.u-section-2 .u-icon-4 {
  height: 78px;
  width: 78px;
  background-image: none;
  color: rgb(255, 255, 255) !important;
  margin: 0 auto 0 0;
}
.u-section-2 .u-text-5 {
  font-size: 1.25rem;
  line-height: 1.4;
  font-weight: 700;
  margin: -53px 0 25px 96px;
}
.u-section-2 .u-image-1 {
  width: 271px;
  height: 286px;
  margin: 28px auto -516px 161px;
}
@media (max-width: 1199px) {
  .u-section-2 .u-sheet-1 {
    min-height: 817px;
  }
  .u-section-2 .u-text-2 {
    width: auto;
    margin-right: 12px;
    margin-left: 95px;
  }
  .u-section-2 .u-text-3 {
    width: auto;
    margin-right: 12px;
    margin-left: 95px;
  }
  .u-section-2 .u-text-4 {
    width: auto;
    margin-right: 12px;
    margin-left: 95px;
  }
  .u-section-2 .u-text-5 {
    width: auto;
    margin-right: 12px;
    margin-left: 95px;
  }
  .u-section-2 .u-image-1 {
    margin-bottom: 60px;
    margin-left: 61px;
  }
}
@media (max-width: 991px) {
  .u-section-2 .u-text-1 {
    font-size: 2.25rem;
    margin-left: 0;
  }
  .u-section-2 .u-list-1 {
    width: 720px;
    margin-left: 0;
  }
  .u-section-2 .u-container-layout-1 {
    padding: 0;
  }
  .u-section-2 .u-text-2 {
    margin: 24px 0 0;
  }
  .u-section-2 .u-container-layout-2 {
    padding: 0;
  }
  .u-section-2 .u-text-3 {
    margin: 24px 0 0;
  }
  .u-section-2 .u-container-layout-3 {
    padding: 0;
  }
  .u-section-2 .u-text-4 {
    margin: 24px 0 0;
  }
  .u-section-2 .u-container-layout-4 {
    padding: 0;
  }
  .u-section-2 .u-text-5 {
    margin: 24px 0 0;
  }
  .u-section-2 .u-image-1 {
    margin-left: 0;
  }
}
@media (max-width: 767px) {
  .u-section-2 .u-list-1 {
    width: 540px;
  }
  .u-section-2 .u-text-2 {
    margin-top: 20px;
    margin-right: auto;
  }
  .u-section-2 .u-text-3 {
    margin-top: 20px;
    margin-right: auto;
  }
  .u-section-2 .u-text-4 {
    margin-top: 20px;
    margin-right: auto;
  }
  .u-section-2 .u-text-5 {
    margin-top: 20px;
    margin-right: auto;
  }
}
@media (max-width: 575px) {
  .u-section-2 .u-list-1 {
    width: 340px;
  }
  .u-section-2 .u-repeater-1 {
    grid-template-columns: 100%;
  }
  .u-section-2 .u-text-2 {
    margin-bottom: 25px;
  }
  .u-section-2 .u-text-3 {
    margin-bottom: 25px;
  }
  .u-section-2 .u-text-4 {
    margin-bottom: 25px;
  }
  .u-section-2 .u-text-5 {
    margin-bottom: 25px;
  }


}
.nav-bar{
  background-color: #4c7397 !important;
  height: 79px;
margin: 0;
display: flex;
align-items: center;
justify-content: space-between;

}
.nav-bar ul{
margin-right: 20px;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  display:inline-flex;

}
.nav-bar ul >a{
cursor: pointer;
color: #f2f2f2;
margin-right: 50px;
font-size: 20px;
}
body{
  padding-top: 0 !important;
  margin-top: 0 !important;
}

.logo-brand{
  cursor: pointer;
  margin-left: 20px;
  color: #f2f2f2;
  font-size: 40px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.myheader{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.form-control {
margin-top: 40px;
}
.form-control ul{
list-style: none;
padding: 0;
margin: 0;

}

.myinput{
  width:350px;
  height: 40px;
  margin: 10px;
  border: 1px solid #eeee;
  padding: 10px;
}
.myinput1{
  width:350px;
  height: 200px;
  margin: 10px;
  border: 1px solid #eeee;
  padding: 10px;
}
.btn{
  width: 150px;
  height: 30px;
  border: none;
  background-color: dodgerblue;
  color: #f2f2f2;
  border-radius: 2px;
}
.btn:hover{
  color: dodgerblue;
  background-color: #f2f2f2;
  border: 1px solid dodgerblue;
}
.newpostbtn{
  float: left;
}
</style>
    


  
</head>
  <body>
    <nav class="nav-bar u-grey-5 ">
      <div>
     <a href="index.php">   <span class="logo-brand">Ken's Blog</span></a>
      </div>
      <ul>
      <a>  <li>about us</li></a>
       <a href="createPost.php"> <li>Create posts</li></a>
 
   

      <?php 
       if(!isset($_SESSION["currentUser"])){
      
      
      ?>
     <a href="register.php"><li>register</li></a>
      <a href="login.php"><li>login</li></a>
      <?php } else{?>
        <a href="profile.php"><li>Profile</li></a>
        <a href="?logout='1'"><li>logout</li></a>
      <a href="login.php"><li>hi <?php echo $_SESSION['currentUser']['firstName'] ?></li></a>
<?php  }?>
     
      </ul>
    </nav>