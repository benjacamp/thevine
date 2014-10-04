<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>


<?php echo $page ?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    
<?php $page = get_the_ID(); ?> 
					
					    	<?php get_template_part( 'partials/loop', $page ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
