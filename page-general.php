<?php 

/*
  Template Name: Page General
*/

get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
	
         <div class="main-content">
			<p><?php the_content(); ?></p>
		</div>	
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>