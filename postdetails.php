<?php
include "./header.php"
?>
    <section class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-grey-5 u-section-2" id="carousel_8858">
  
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <?php foreach($newpostSuccess as $success) {  ?>
      <?php echo "<small class='success'> $success </small><br/> "; }?>  
      <h1 class=""><?=$detailView['title'] ?> <br>
        </h1>
      <div class="newpostbtn">  <a href="createPost.php"><button class="btn"> Create</button></a></div>
        <div class="u-list u-list-1">
         <p style="font-size:large;"><?=$detailView['postBody'] ?> </p>

         <small>Posted by <?=$detailView['firstName'] ?></small>
        </div>
       
      </div>
