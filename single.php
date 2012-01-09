<?php get_header(); ?> 
<?php //get_sidebar(); ?>  
            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="entry">
				
				<?php if ( get_field('identifer') ): ?>
                <div class="identifer">
                	<img src="<?php the_field('identifer'); ?>" alt="" />
                </div>
              	<?php else: ?>
              	<div class="identifer">
              		<img src="<?php bloginfo('template_url'); ?>/images/default-identifer.jpg" alt="" />
              	</div>
              	<?php endif; ?>
              	
                <div class="articlehead">
                	<div class="main">
	                <h1><?php the_title(); ?></h1>
	                <?php if ( get_field('subtitle') ): ?>
	                <h2><?php the_field('subtitle'); ?></h2>
	                <?php endif; ?>
	           		</div>
	                <div class="info">
	                
	                <h3 class="link">
	                	<?php if ( get_field('project_link') ): ?>
	                		<a href="<?php the_field('project_link'); ?>" title="<?php the_title(); ?>">go to project</a>
	                	<?php else: ?>
	                		<a href="<?php the_permalink(); ?>" title="There isn't still a website">No website</a>
	                	<?php endif; ?>
	               </h3>
	               
	                <div class="postmetadata">
	                                    <h4>Share this article</h4>
	                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>%26t=<?php the_title(); ?>">Facebook</a>, <a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Digg this!">Digg This</a>, <a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Bookmark on Delicious.">Del.icio.us</a>, <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="StumbleUpon.">StumbleUpon</a>, 
	                                    <?php if (function_exists('wp_get_shortlink')) { ?>
	                					<a href="http://twitter.com/home/?status=<?php the_title(); ?>: <?php echo wp_get_shortlink(get_the_ID()); ?>" title="Tweet this!"> Tweet this</a>
	                					<?php } 
	                					else { ?>
	                					<a href="http://twitter.com/home/?status=<?php the_title(); ?>: <?php the_permalink(); ?>" title="Tweet this!"> Tweet This!</a>
	                					<?php } ?>
	                                    <br />
	                
	                                    <?php comments_rss_link('RSS 2.0 feed'); ?> | <a href="<?php trackback_url(); ?>">Trackback</a>
	                                    
	                 </div>
	                 </div>
	              
                </div>
                
                <div class="article" id="post-<?php the_ID(); ?>">
                    <?php the_content(); ?>
                </div>
                <div class="side">
                	
                	<?php if ( has_post_thumbnail() ) : ?>
	                    	<?php 
	                    	$imgsrcparam = array(
							'alt'	=> trim(strip_tags( $post->post_excerpt )),
							'title'	=> trim(strip_tags( $post->post_title )),
							);
	                    	$thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>
	                        <div class="preview"><a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a></div>
	                    <?php else :?>
	                        <div class="preview"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
	                    <?php endif; ?>
	                 <?php if ( get_field('link') || get_field('related_projects') ): ?>   
	                	<div class="info"> 
	                		<div id="related_links">
	                		 <?php if ( get_field('link')): ?>                                     
		                		<h4> Related Links</h4>
		                		<ul>
		                		<?php while(the_repeater_field('link')): ?>
		                		    <li><a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></a></li>
		                		<?php endwhile; ?>
		                		</ul>
	                		<?php endif; ?>
	                		</div>
	                		<div id="related_projects">
	                		<?php if ( get_field('related_projects')): ?> 
		                		<h4> Related Projects</h4>
		                		<ul>
		                		<?php foreach(get_field('related_projects') as $post_object): ?>
		                		    <li><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID) ?></a></li>
		                		<?php endforeach; ?>
		                		</ul>
	                		<?php endif; ?>
	                		</div>
	                		<div id="tags">
	                		<?php the_tags(__('<h4> Tagged in:</h4>') . ' ', ', ', '<br />'); ?>
	                		</div>
	                	</div>
                	<?php endif; ?>
                	<div class="status">
                		<img src="<?php bloginfo('template_url'); ?>/images/status/<?php echo assign_status(get_field("status")); ?>" />
                	</div>
                </div>
                
                <?php if ( get_field('gallery_short_code') ): ?>
                <div class="gallery"><?php echo do_shortcode('[nivoslider slug="'.get_field("gallery_short_code").'"]'); ?></div>
                <?php endif; ?>
                
                <?php if ( get_field('video_link') || get_field('video_link')=="none"  ): ?>
                <div class="video"><iframe src="http://player.vimeo.com/video/<?php the_field('video_link'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179" width="580" height="326" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                <?php endif; ?>
                
                <div id="comments">
					<?php comments_template(); ?>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            </div>    
            <?php if ( get_field('identifer') ): ?>
            <div class="identifer">
            	<img src="<?php the_field('identifer'); ?>" alt="" />
            </div>
            	<?php else: ?>
            	<div class="identifer">
            		<img src="<?php bloginfo('template_url'); ?>/images/default-identifer.jpg" alt="" />
            	</div>
            	<?php endif; ?>    
            </div>
			
<?php get_footer(); ?>
