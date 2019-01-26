<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="inner-content">
			
			<div class="blog-holder-default">
				<div class="post">	
				
					<div class="post-date">
						<ul>
							<li class="date"><span><?php the_time('F jS Y'); ?></span></li>			
						</ul>							
					</div><!--END POST-DATE-->	
							
					<div class="post-content">	
						
						<div class="post-media">		
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>							
					</div><!--END POST-MEDIA-->
							
					<div class="post-title">				
						<h2 class="title"><?php the_title(); ?></h2>
					</div><!--END POST-TITLE-->	
							
					<div class="post-meta">				
						<ul>
							<li><span>Posted by <a href="#"><?php the_author_posts_link(); ?></a></span></li>
						</ul>
					</div><!--END POST-META-->
							
					<div class="post-entry">
										
						<?php the_content('Read More'); ?>
					</div><!--END POST-ENTRY-->	
									
					</div><!--END POST-CONTENT -->
							
				</div><!--END POST-->
			</div><!--END BLOG-HOLDER-DEFAULT-->	
			
		</div><!--END INNER-CONTENT-->
	<?php endwhile; ?>	
<?php get_footer(); ?>