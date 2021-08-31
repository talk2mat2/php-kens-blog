<?php include "./header.php";

!isset($_SESSION['currentUser'])?header("location:login.php?error=notloggedIn"):null;

?>
    <section class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-grey-5 u-section-2" id="carousel_8858">
  
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
    
          <form method="POST" class="form-control"> 
            <h1 class="myheader">New Post</h1>
            <?php foreach($newpostError as $errors) {  ?>
      <?php echo "<small class='error'> $errors </small><br/> "; }?>
     
            <ul>
              <li> <input class="myinput" type="text" name='postTitle' placeholder="title"/></li>
              <li> <textarea class="myinput1" type="text" name="postBody" ></textarea></li>
      
         
            </ul>
            <div style="height: 20px;">

            </div>
          <button name='newpost' value="newpost" class="btn">Submit</button>
     
          </form>
        
      </div>
    </section>
    
    
    <section class="u-backlink u-clearfix u-grey-80">
   
    </section>
  
</body></html>