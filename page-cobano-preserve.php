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
 * Template Name: Page Cobano Preserve
 * @package marinatambor
 */

get_header('page');
?>

	<div class="main">
		<div class="inner">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
        ?>
        
        <section class="interactive-map" data-simplebar>
	
            <div class="map">
                <div class="map-links">
                <?php	
                                $args = array(
                                'post_type' => 'map-zone',
                                //'order' => 'DESC',
                                //'lang' => '', // use language slug in the query
                                'orderby' => array('menu_order' => 'DESC', 'title' => 'DESC'),
                                'posts_per_page' => 7,
                                'paged' => 1
                            
                            );
            

                            $items = new WP_Query($args);
                            // Pagination fix
                            $temp_query = $wp_query;
                            $wp_query   = NULL;
                            $wp_query   = $items;

                                if ($items->have_posts()) {
                                    while ($items->have_posts()) {
                                        $items->the_post();

                                        ?>
                                        
                                        <div id="<?php echo $post->post_name; ?>" class="map-button">
                                            <div  class="circle-main  cd-popup-trigger " data-id="<?php echo $post->post_name; ?>">
                                                <div class="circle-middle"></div>
                                                <div class="circle-outer"></div>
                                            </div>
                                            
                                        </div>
                                        <div class="cd-popup <?php echo $post->post_name; ?>" role="alert">
                                            <div class="cd-popup-container">
                                                
                                                <div class="info">
                                                    <h3><?php the_title() ?></h3>
                                                    <?php the_content() ?>
                                                </div>
                                                
                                                <a href="#0" class="cd-popup-close img-replace">Close</a>
                                            </div> <!-- cd-popup-container -->
                                        </div> <!-- cd-popup -->
                                        
                                    

                                    <?php


                                }
                            }
                            wp_reset_postdata();
                            ?>
                            


                    
                    
                    
                </div>
            </div>
            
            
        </section>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer('page');
