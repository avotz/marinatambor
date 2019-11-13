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
            <div class="footer-item footer-blog">
                <?php dynamic_sidebar( 'about-us-footer' ); ?>
                <!-- <h4>About Us</h4>
                <p>A multidisciplinary team, with high experience in real estate, legal consulting and project and business management.</p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn success">Contact Us</a> -->
            </div>
            <div class="footer-item footer-contact">
                <div class="footer-contact-item">
                <?php dynamic_sidebar( 'contact-footer' ); ?>
                  <!-- <h4>Costa Rica</h4>
                  <p>Marina Tambor <br>
                  Tel:506+ 8317-0550</p> -->
                </div>
                <div class="footer-contact-item footer-social">
                  <h4>Social</h4>
                  <a href="#" class=""><i class="fab fa-facebook"></i></a>
                  <a href="#" class=""><i class="fab fa-twitter"></i></a>
                  <a href="#" class=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
         </div>
      </footer>

	


<?php wp_footer(); ?>

</body>
</html>
