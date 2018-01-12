
<div class="owl-carousel owl-theme owl-visoreinterno">
  <div class="item" style="background-image: url('http://localhost/PiolWeb/sites/default/files/slide-image-2.jpg');">
  	<div class="texts">
  		<h2>Testo titolo</h2>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum faucibus nisi in nunc volutpat porttitor. Sed tortor enim, pellentesque id arcu varius.</p>
  	</div>
  </div>
  <div class="item" style="background-image: url('http://localhost/PiolWeb/sites/default/files/placeholder_image-260x180_8.jpg');">
  	<div class="texts">
  		<h2>Testo titolo</h2>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum faucibus nisi in nunc volutpat porttitor. Sed tortor enim, pellentesque id arcu varius.</p>
  	</div>
  </div>
</div>
<div class="container lista-contenitore">
	<div class="row">
			<?php
			$x=0;
			foreach ($view->result as $key) {?>
			<div class="col-md-4 col-xs-12">
			<?php	
			  echo('<div class="img-cont"><img src="'.file_create_url($key->field_field_anteprima[0]['rendered']['#item']['uri']).'"></div>');
			  echo("<h3>".$key->node_title."</h3>");
			  echo("<div class='paragraph'>");
			  echo($key->field_body[0]['raw']['safe_value']);
			  echo("</div>");
			  ?>
			  <a class="button" href="node/<?php echo($key->nid);?>"><?php echo t("Vai...");?></a></div>
			  <?php
			  if ($x==2){
			  	$x=0;
			  	echo('</div><div class="row">');
			  	continue;
			  }
			  $x++;
			}?>
	</div>
</div>