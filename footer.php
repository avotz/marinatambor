<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinatambor
 */

?>

<footer class="footer">
         <div class="footer-container flex-container-sa">
              <div class="footer-logos">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-marina-cobano-preserve3.png" alt="Marina Tambor"></a>
                
              </div>
            <!-- <div class="footer-item footer-blog">
                <?php /*dynamic_sidebar( 'about-us-footer' );*/ ?>
            </div>
            <div class="footer-item footer-contact">
                <div class="footer-contact-item">
                  <?php /*dynamic_sidebar( 'contact-footer' );*/ ?>
                </div>
                <div class="footer-contact-item footer-social">
                  <h4>Social</h4>
                  <a href="#" class=""><i class="fab fa-facebook"></i></a>
                  <a href="#" class=""><i class="fab fa-twitter"></i></a>
                  <a href="#" class=""><i class="fab fa-youtube"></i></a>
                </div>
            </div> -->
         </div>
         <div class="copyright">
            Copyright &copy; 2019 Avotz
         </div>
      </footer>

	
</div><!-- #scroll-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
