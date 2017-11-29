<?php
  if(isset($node->field_blocchi['und'])):
    foreach ($node->field_blocchi['und'] as $key):
      $nid = $key['target_id'];
      $nodeLoaded=node_load($nid);
      $nodeView=node_view($nodeLoaded);
      print drupal_render($nodeView);
    endforeach;
  endif;  
?>