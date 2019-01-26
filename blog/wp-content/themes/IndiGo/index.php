<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="inner-content">
			
			<div class="blog-holder-default">
				<div class="post">	
				
					<div class="post-date">
						<ul>
							<li class="date"><span><?php the_time('M j Y'); ?></span></li>			
						</ul>							
					</div><!--END POST-DATE-->	
							
					<div class="post-content">
						<div class="post-title">				
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div><!--END POST-TITLE-->
					
					<div class="post-meta">
						<ul>
						<li><span>Posted by <a href="<?php the_author_posts_link(); ?></span></li>
						<span>in <a href="<?php the_category(); ?>
						</ul>
					</div><!--END POST-META-->
						
						<div class="post-media">		
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>							
					</div><!--END POST-MEDIA-->
							
							
					<div class="post-entry">
										
						<?php the_excerpt(); ?>
						<p><a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Continue reading  <i class="fa fa-angle-double-right"></i>', BRANKIC_THEME_SHORT); ?></a></p>
					</div><!--END POST-ENTRY-->	
									
					</div><!--END POST-CONTENT -->
							
				</div><!--END POST-->
			</div><!--END BLOG-HOLDER-DEFAULT-->
			
						<div align="right" class="wp-pagenavi">
							<?php wp_pagenavi(); ?>	
						</div><!--END WP-PAGENAVI-->
			
		</div><!--END INNER-CONTENT-->
		
	<?php endwhile; ?>
<?php get_footer(); ?>
