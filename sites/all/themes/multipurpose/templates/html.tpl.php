<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">	
<?php //print $head; ?>
<title><?php //print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'multipurpose') . '/js/html5.js'; ?>"></script><![endif]-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo(drupal_get_path('theme', 'multipurpose')); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo(drupal_get_path('theme', 'multipurpose')); ?>/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo(drupal_get_path('theme', 'multipurpose')); ?>/js/owl.carousel.min.js"></script>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>