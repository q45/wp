<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('|');?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?> charset=<?php bloginfo('charset'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/skeleton/stylesheets/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/skeleton/stylesheets/layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/skeleton/stylesheets/skeleton.css">
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/functions.js" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class('container');?>>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<nav>
			<ul>
				<?php wp_nav_menu(array('menu'=> 'Main Nav'));?>
			</ul>
		</nav>
	</header>