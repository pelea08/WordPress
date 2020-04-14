<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> ng-app="wpAngularTheme">
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   	<?php wp_head();?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body <?php body_class(); ?>>
<header class="container header">
		<div class="row">
			<div class="col-sm-7">
				<h1>
					<a ui-sref="list">
						<?php echo bloginfo('name'); ?>
					</a>
				</h1>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<span>por: <a href="http://www.ulises.es">Ulises González</a></span>
			</div>
		</div>
</header>
<div class="container-fluid content-wrapper">
	<div class="container">
