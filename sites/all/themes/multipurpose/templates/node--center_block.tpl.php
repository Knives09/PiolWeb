<div style="background-image: url(<?php echo(file_create_url($node->field_slide['und'][0]['uri'])); ?>); min-height:400px;">
  <div class="center-title">
    <h1><?php echo($node->field_slide['und'][0]['title']); ?></h1>
  </div>
  <div class="center-body">
    <p><?php echo($node->field_slide['und'][0]['image_field_caption']['value']); ?></p>
  </div>
  <div class="center-button">
     <button onclick="window.location.href='<?php echo($node->field_buttonlink['und'][0]['value']); ?>'"><?php echo($node->field_buttontext['und'][0]['value']); ?></button>
  </div>
</div>