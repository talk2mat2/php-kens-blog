<?php  include "./header.php";


?>
    <section class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-grey-5 u-section-2" id="carousel_8858">
  
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">

      
          <form class="form-control" method="POST"> 
          <?php foreach($registerError as $errors) {  ?>
      <?php echo "<small class='error'> $errors </small><br/> "; }?>
          <?php foreach($registerSuccess as $success) {  ?>
      <?php echo "<small class='success'> $success </small><br/> "; }?>
            <h1 class="myheader">Sign up</h1>
            <ul>
              <li> <input name= 'firstname' class="myinput" type="text" placeholder="firstname"/></li>
              <li> <input name='lastname' class="myinput" type="text" placeholder="lastname"/></li>
              <li> <input name='email' class="myinput" type="text" placeholder="email"/></li>
              <li> <input name='password' class="myinput" type="password" placeholder="password"/></li>
              <li> <input name='password2' class="myinput" type="password" placeholder="confirm password"/></li>
            </ul>
          <button name="register" class="btn">Submit</button>
     
          </form>
        
      </div>
    </section>
    
    
    <section class="u-backlink u-clearfix u-grey-80">
   
    </section>
  
</body></html>