<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Home
 * @package marinatambor
 */

get_header();
?>

<section class="banner">



<div class="home-video">

		  <div class="home-video-content">
			  <div class="loading-video">
					  <!-- <h3>Loading...</h3> -->
					  <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#00BAD2">
						<g fill="none" fill-rule="evenodd">
							<g transform="translate(1 1)" stroke-width="2">
								<circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
								<path d="M36 18c0-9.94-8.06-18-18-18">
									<animateTransform
										attributeName="transform"
										type="rotate"
										from="0 18 18"
										to="360 18 18"
										dur="1s"
										repeatCount="indefinite"/>
								</path>
							</g>
						</g>
					</svg>
			  </div>
		  		
			  <div style="padding:56.25% 0 0 0;position:relative;">
			   
			  <iframe src="https://player.vimeo.com/video/521258492?autoplay=1&rel=0&controls=0&loop=1&showinfo=0&background=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
				<!-- <iframe class="video" src="https://player.vimeo.com/video/374045500?autoplay=1&rel=0&controls=0&loop=1&showinfo=0&background=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
			
				</div>
				
		  
			  <!-- <video preload="" autobuffer="" loop="loop" autoplay="autoplay">
				 
				 <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
				 <source src="<?php echo get_template_directory_uri(); ?>/img/video.webm" type="video/webm">
				<source src="<?php echo get_template_directory_uri(); ?>/img/video.ogv" type="video/ogg"> 
			  </video> -->
			  
		  </div>
	  </div>


</section>

<section class="intro">
	<div class="inner">
		<?php rewind_posts(); ?>
		<?php query_posts('post_type=page&page_id=102'); //102 52 ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_title('<h3 class="">', '</h3>'); ?>
					<?php the_content(); ?>
				

			<?php endwhile; ?>
			<!-- post navigation -->
			
		<?php endif; ?>

	</div>


</section>
<section class="services">

<!-- <h2 class="services-title"><?php pll_e('About the project'); ?></h2> -->
<div class="services-container flex-container-sa">

<?php 
	$pages = [8,14,18];
	foreach ($pages as $pageId) : ?>
		<?php rewind_posts(); ?>
		<?php query_posts('post_type=page&page_id='.$pageId); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="services-item">
			<a href="<?php the_permalink(); ?>" class="services-item-link">
				

					<?php if (has_post_thumbnail()) :

						$id = get_post_thumbnail_id($post->ID);
						$thumb_url = wp_get_attachment_image_src($id, 'page-thumb', true);
					?>

					<?php endif; ?>
			
						<div class="services-item-full">
						<div class="services-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>"></div>
						</div>
						<h3 class="services-item-title"> <?php the_title(); ?> </h3>
						<div class="services-item-content">
							<?php the_excerpt(); ?>
						
						<div  class="btn success"><?php pll_e('See details'); ?></div>
						</div>
					
					
				
			</a>
			</div>
	<?php endwhile; ?>
		
	<?php endif; ?>
<?php endforeach; ?>


</div>

</section>
<section class="case">
<div class="case-container flex-container-sa">
 <div class="case-media">
 	<iframe src="https://www.google.com/maps/d/embed?mid=18F5LzM2XwAC6a6b2zz1_Q0fSz6BaQGk_" width="640" height="480"></iframe>
 </div>
 <div class="case-info">
 	<?php dynamic_sidebar( 'how-to-get-there' ); ?>
   
 </div>
</div>
</section>

	

<?php
//get_sidebar();
get_footer();
