<div class="visore">
    <img src="<?php echo(file_create_url($node->field_copertina['und'][0]['uri'])); ?>">
  </div>
<div class="Title">
  <h2><?php echo($node->title); ?></h2>
</div>
<div class="summary">
  <?php echo($node->body['und'][0]['safe_summary']); ?>
</div>
<div class="body">
  <?php echo($node->body['und'][0]['safe_value']); ?>  
</div>
<div class="gallery">
  <?php var_dump($node); ?>
</div>
<?php if(isset($node->webform['nid'])){
  $nid=$node->webform['nid']; ?>
<div class="web-form">
  <?php $node = node_load($nid);
webform_node_view($node,'full');
print theme_webform_view($node->content); ?>
</div>
<?php } ?>