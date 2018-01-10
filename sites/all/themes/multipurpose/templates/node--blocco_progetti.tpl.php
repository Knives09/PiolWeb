<?php
$large=0;
$medium=0;
$small=0;
$first=true;
$roundLarge=ceil(count($node->field_progetti['und'])/4);
$roundMedium=ceil(count($node->field_progetti['und'])/2);
$roundSmall=count($node->field_progetti['und']);
?>

<div class="owl-carousel owl-carousel1 owl-theme">
    <?php foreach ($node->field_progetti['und'] as $key){ ?>
      <div>
        <img src="<?php echo(file_create_url($key['entity']->field_anteprima['und'][0]['uri'])); ?>" alt="">
        <h2><?php echo($key['entity']->title); ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non velit ut sem aliquet luctus.</p>
        <button onclick="window.location.href='http://www.google.it'">Lorem ipsum</button>
      </div>
  <?php } ?>
</div>
<!-- piergiorgiddu cicla qui-->