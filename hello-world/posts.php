<?php

$all_posts = array(
  'Steve Benson' => array(
    'Username' => 'pop_steve',
    'Occupation' => 'Student',
    'Bio' => 'Entrepreneur. Total coffeeaholic. General web nerd. Troublemaker. Pop culture ninja. Tv geek.'
  ),
  'Amy Shrewd' => array(
    'Username' => 'amy.writes',
    'Occupation' => 'Content Creator',
    'Bio' => 'Pop culture advocate. General beer maven. Typical writer. Tv scholar. Music enthusiast.'
  ),
  'Bob Ross' => array(
    'Username' => 'bobby.ross',
    'Occupation' => 'Painter',
    'Bio' => 'Wannabe bacon expert. Thinker. Friend of animals everywhere. Web fanatic. Hardcore analyst.'
  )
);

foreach($all_posts as $post){
  ?>
    <div class="mb-3 bg-light p-5">
      <h5><?php echo $post["Username"]; ?></h5>
      <p><?php echo $post["Bio"]; ?></p>
      <span class="badge badge-primary"><?php echo $post["Occupation"]; ?></span>
    </div>
  <?php
}

 ?>
