<div class="about-block">
  <div class="about-title">
    <h1><?php echo($node->title); ?></h1>
  </div>
  <div class="about-body">
    <p><?php echo($node->field_testo['und'][0]['value']); ?></p>
  </div>
  <div class="about-button">
     <button onclick="window.location.href='<?php echo($node->field_buttonlink['und'][0]['value']); ?>'"><?php echo($node->field_buttontext['und'][0]['value']); ?></button>
  </div>
</div>
