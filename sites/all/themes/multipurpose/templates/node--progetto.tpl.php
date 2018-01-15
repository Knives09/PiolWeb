  <?php global $base_url; ?>
  <?php //dpm($node); ?>
  <div class="visore">
    <img src="<?php echo(file_create_url($node->field_copertina['und'][0]['uri'])); ?>">
    <div class="fixed-socials">
      <a href="" title="">
        <img src="<?php echo($base_url); ?>/sites/all/themes/multipurpose/images/facebook-logo.png" alt="">
      </a>

      <a href="" title="">
        <img src="<?php echo($base_url); ?>/sites/all/themes/multipurpose/images/youtube.png" alt="">
      </a>
  </div>
  </div>
  <div class="project">
    <div class="title">
      <h2><?php echo($node->title); ?></h2>
    </div>
    <div class="summary">
      <h3><?php echo($node->body['und'][0]['safe_summary']); ?></h3>
    </div>
  <div class="clr flexslider-container flex2">
    <div id="homepage-slider" class="flexslider">
      <ul class="slides clr">
        <?php foreach ($node->field_slide['und'] as $key) { ?>
        <li>
          <img style="max-height:500px; max-width:100% !important;" src="<?php echo(file_create_url($key['uri'])); ?>">
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="body">
      <?php echo($node->body['und'][0]['safe_value']); ?>
    </div>
  </div>