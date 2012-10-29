<?php get_header(); ?>

<div class="landing">
    <div class="wrapper"></div>
          <h1>Quintin Smith</h1>
</div>
    <div class="download">
        <div class="wrapper">
            <div class="add_this_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count" title="Facbook_like" href="#">_</a>

            </div>
        </div>
    </div>
        <div class="share">
           
        </div>
<div class="features">
	 <div class="wrapper">
	 	<div class="left">
	 		<div class="posts">
	 		<?php if (have_posts()): ?>

	
	<h2>Posts</h2>
	
	<!-- Section -->
	<section>
	
	<?php while (have_posts()) : the_post(); ?>

	
		<!-- Article -->
		<article>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
					<?php
						the_post_thumbnail(array(120,120)); 
						// Show Thumbnail at 120px by 120px, change to whatever size you need or use custom size in function.php
					?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Post Title -->
			<h2>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
				</div>
			<!-- /Post Title -->
			
			<!-- Post Date + Time -e3->
			<span class="date"><?php the_date(); ?></span>
			<span class="time"><?php the_time(); ?></span>
			<!-- /Post Date + Time -->
			
			<?php comments_popup_link('Leave your thoughts', '1 Comment', '% Comments'); // Comments ?>

			
			<?php html5wp_excerpt('html5wp_index'); // Callback length customisable in functions.php ?>


			
		
			
			
			
		</article>

		<!-- /Article -->
			
	<?php endwhile; ?>
	
	</section>
	<!-- /Section -->
		
	<?php else: ?>
	
	<h2>Sorry, no posts to display!</h2>
	
	<?php endif; ?>

</div>
	
	<div id="pagination">
		<?php html5wp_pagination(); // Pagination links (inside Functions.php) ?>
	</div>

	 	

	 </div>

</div>




	
<?php get_sidebar(); // Get Sidebar (sidebar.php) ?>

<?php get_footer(); ?>