<?php if (theme_get_setting('slideshow_display','multipurpose')): ?>
  <div id="homepage-slider-wrap" class="clr flexslider-container">
    <div id="homepage-slider" class="flexslider">
      <ul class="slides clr">
        <?php foreach ($node->field_slide['und'] as $key) { ?>
        <li>
          <img src="<?php echo(file_create_url($key['uri'])); ?>">
          <blockquote class="image-field-caption">
            <p><?php echo($key['image_field_caption']['value']); ?></p>
          </blockquote>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php endif; ?>