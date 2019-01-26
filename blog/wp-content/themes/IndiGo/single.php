<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="inner-content">
			
			<div class="header clear">
				
				<div class="post">
							
					<div class="post-content">
					
					<div class="post-title">				
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div><!--END POST-TITLE-->
					
					<div class="post-meta">				
						<ul>
						<li><span>Posted by <a href="#"><?php the_author_posts_link(); ?></a></span></li>
						<span>in <a href="<?php the_category(); ?>
						</ul>
					</div><!--END POST-META-->
							
					<div class="post-entry">
										
						<?php the_content('Read More'); ?>
					</div><!--END POST-ENTRY-->	
									
					</div><!--END POST-CONTENT -->
							
				</div><!--END POST-->
					<div class="post">
						
									
					<div class="post-nav">
													
						<ul class="grid row5 share alignright">
							<li><a href="#" class="social-love"><i class="fa fa-heart-o"></i></a></li>											
							<li><a href="https://twitter.com/share" class="social-twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>																		
							<li><a href="http://www.facebook.com/sharer.php?" class="social-facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>									
							<li><a href="http://plus.google.com/share?" class="social-google-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>																		
							<li><a href="//pinterest.com/pin/create/button/" class="social-pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>													
						</ul><!--END UL SHARE-->
						
					</div><!--END POST-NAV-->
					
					<div class="post-nav-2">
						
						<ul>							
							<li class="prev">
								<b><small>&larr; Previous article</small></b>
								<h3><a href=""><?php previous_post('%', '', 'yes'); ?></a></h3>
							</li>
								
							<li class="next">
								<b><small>Next article &rarr;</small></b>
								<h3><a href="#"><?php next_post('%', '', 'yes'); ?></a></h3>
							</li>							
						</ul><!--END UL-->
						
					</div><!--END POST-NAV-2-->	
						
				</div><!--END POST-->
			</div><!--END HEADER-->
			
			
			 <hr /> 
			<div>
			<?php comments_template(); ?>
			</div><!--END COMMENTS-->
			
		</div><!--END INNER-CONTENT-->
		
		
	<?php endwhile; ?>
<?php get_footer(); ?>