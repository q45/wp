<?php get_header(); ?>
<section>
    	<div id="content">
    		<?php if(have_posts() ) : while(have_posts()) : the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute();?>"<?php the_title(); ?>><?php the_title(); ?></a></h2>

				<?php the_content(); ?>
			</article>
		<?php endwhile; else: ?>
		<p><?php _e('sorry, no posts matched your criteria.');?></p>
	<?php endif; ?>	
		</div>
</section>
<div>
<a href="#" class="button">Click Me</a>
</div>
<?php get_footer(); ?>
