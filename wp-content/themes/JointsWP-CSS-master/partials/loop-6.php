<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="text-center article-header container">

	   <div class="row">
			<div class="small-8 small-centered columns">					
			
									<?php the_content(); ?>
			
			</div>
	   </div>
	 </header> <!-- end article header -->
	 
	 
	    <div class="container hero hero__template" style="background-image: url('<?php the_field('worship-hero-image'); ?>')">
					    
					    <div class="row">
					    
						    <?php the_field('worship-hero-copy'); ?>
						
						    
					    </div>
					    
		</div>
		
		<div class="container">
		
			<div class="row">
			
				<div class="small-8 small-centered columns">					
			
									 <?php the_field('worship-section-content'); ?>
			
				</div>
				
			</div>
			
		</div>

	 
							
		    <section class="entry-content clearfix" itemprop="articleBody">
			    
			    <?php wp_link_pages(); ?>
			</section> <!-- end article section -->
								
			<footer class="article-footer">
			</footer> <!-- end article footer -->
								    
			<?php // comments_template(); ?>
					
</article> <!-- end article -->
