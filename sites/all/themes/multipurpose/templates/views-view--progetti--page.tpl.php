<ul>
<?php dpm($view); 
foreach ($view->result as $key) {
echo("<li>");
  echo('<img src="'.file_create_url($key->field_field_anteprima[0]['rendered']['#item']['uri']).'">');
  echo($key->field_body[0]['raw']['safe_value']);
echo("</li>");
}?>
</ul>