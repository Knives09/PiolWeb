  <?php //dpm($node); ?>
  <div class="visore">
    <img src="<?php echo(file_create_url($node->field_copertina['und'][0]['uri'])); ?>">
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
      <h3><?php echo($node->body['und'][0]['safe_value']); ?></h3>
    </div>
  </div>