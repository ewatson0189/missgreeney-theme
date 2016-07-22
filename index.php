
<?php get_header(); ?>

<div class="blog-full-page">

 

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		<div class="blog-full">
        <div class="title-date">
			<div class="title-blog">
            <h3><?php the_title(); ?></h3>
            </div>
            <div class="date-time">
			<small><?php the_time('F j, Y'); ?></small>
            </div>
            </div>
            
			
            <div class="blog-content">
			<p><?php the_content(); ?></p>
			</div>
           </div>
           <div class="blog-sidebar">
			<?php get_sidebar( 'primary' ); ?>
            </div>
         </div>
			
		
		<?php endwhile;
		
	endif;
			
	?>
    

<?php get_footer(); ?>