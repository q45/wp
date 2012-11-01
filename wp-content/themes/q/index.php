<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href='<?php bloginfo("stylesheet_url"); ?>' media="all">
    <title><?php bloginfo() ;?></title>
</head>
<body>

	<!-- begin header -->
	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> </h1>
		<div class="tagline"><?php bloginfo('description') ;?></div>
	
	</div>

	<!--end header -->


<!-- begin content -->
<div>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	
<?php the_content(); ?>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.');?></p>
<?php endif; ?>
</div>
<!--end content -->

<p>what is going on</p>
</body>
</html>