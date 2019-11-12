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

<div class="banner-title">
	<?php rewind_posts(); ?>
	<?php query_posts('post_type=page&page_id=102'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title('<h3 class="">', '</h3>'); ?>
				<?php the_content(); ?>
			

		<?php endwhile; ?>
		<!-- post navigation -->
		
	<?php endif; ?>
	<!-- <h3 class="">Project Tambor Marina</h3>
	<p class="">Punta Piedra Amarilla, PPA, is a property with 3.5 kilometers of coast dunk over Whale Bay where the famous Playa Tambor. Because of its location, beauty and unique terrain, PPA is a unique property for any tourism development. </p>
	<p>In a certain corner of the coast, have been carrying out all research and inquiry, to know for sure about the suitability of that location to develop a Marine there and the results have been excellent.</p> -->
</div> 

<div class="home-video">

		  <div class="home-video-content">
			  <div style="padding:56.25% 0 0 0;position:relative;">
			  <!-- <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/zSJuTb_daK0?controls=0&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			  
			  <iframe class="video" src="https://player.vimeo.com/video/371253013?autoplay=1&title=0&byline=0&portrait=0&loop=1&color=cb0000" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				</div><script src="https://player.vimeo.com/api/player.js"></script>
		  
			  <!-- <video preload="" autobuffer="" loop="loop" autoplay="autoplay">
				 
				 <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
				 <source src="<?php echo get_template_directory_uri(); ?>/img/video.webm" type="video/webm">
				<source src="<?php echo get_template_directory_uri(); ?>/img/video.ogv" type="video/ogg"> 
			  </video> -->
			  
		  </div>
	  </div>


</section>

<section class="intro">


</section>
<section class="services">

<h2 class="services-title">About the project</h2>
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
						
						<div  class="btn success">See details</div>
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
   <h2 class="case-info-item ">How to get there</h2>
	<p class="case-info-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>
	<a href="#" class="btn success case-info-item">See more</a>
 </div>
</div>
</section>

	

<?php
//get_sidebar();
get_footer();
