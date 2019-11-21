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
         </div>
         <div class="copyright">
            Copyright &copy; 2019 Avotz
         </div>
      </footer>

	


<?php wp_footer(); ?>

</body>
</html>
