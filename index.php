<?php
include "./header.php"
?>
    <section class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-grey-5 u-section-2" id="carousel_8858">
  
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <?php foreach($newpostSuccess as $success) {  ?>
      <?php echo "<small class='success'> $success </small><br/> "; }?>  
      <h4 class="">Recent Post<br>
        </h4>
      <div class="newpostbtn">  <a href="createPost.php"><button class="btn"> Create</button></a></div>
        <div class="u-list u-list-1">
          <?php foreach($postArray as $items) {?>
      <ul class='postlist'>  
      <li>
<a href="postdetails.php?postId=<?=$items['id'] ?>" ><h4><?=$items["title"]?></h4></a>
       </li>
      <li>
<span style='font-size:25px;'><?=$items["postBody"]?></span>
       </li>
      <li>
<span posted by > <?=$items["firstName"]?></span>
       </li>
      <li>
<span>posted at <?=$items["created_at"]?></span>
       </li>

      </ul>

<?php }?>
        </div>
       
      </div>
