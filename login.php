<?php



include "./header.php";

if(isset($_SESSION['currentUser'])){
  header("location:index.php");
}
$error=null;

if(isset($_GET['error'])){
  if($_GET['error']=="notloggedIn"){
    $error="you must be logged in to create post";
    };
}


?>
    <section class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-grey-5 u-section-2" id="carousel_8858">
  
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
    
          <form method="POST" class="form-control"> 

          <?php foreach($loginError as $errors) {  ?>
      <?php echo "<small class='error'> $errors </small><br/> "; }?>
          <?php foreach($loginSuccess as $success) {  ?>
      <?php echo "<small class='success'> $success </small><br/> "; }?>
      <small class='error'> <?=$error?> </small>
            <h1 class="myheader">login</h1>
            <ul>
              <li> <input class="myinput" type="text" name="email" placeholder="email"/></li>
              <li> <input class="myinput" type="password" name='password' placeholder="passsword"/></li>
         
            </ul>
            <div style="height: 20px;">

            </div>
          <button name="login" value='login' class="btn">Submit</button>
     
          </form>
        
      </div>
    </section>
    
    
    <section class="u-backlink u-clearfix u-grey-80">
   
    </section>
  
</body></html>