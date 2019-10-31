<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinatambor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="scroll-wrapper">
          <div class="page-bg" >
        <!-- <div class="page-bg-gradient"></div> -->
      </div>

      <header class="header">
          <div class="header-container flex-container-sb">
            <div class="header-btn-menu">
              <div class="lang">
                    <a href="<?php echo esc_url( home_url( '/home' ) ); ?>">EN</a> | <a href="<?php echo esc_url( home_url( '/inicio' ) ); ?>">ES</a>
                  </div>
              </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-marina-cobano-preserve2.png" alt="Marina Tambor"></a>
              <div class="header-contact">
               
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn success"><span class="text">Contact Us</span>
                <span class="icon"><i class="fas fa-envelope"></i></span></a>
              </div>
              
          </div>
          
      </header>
      
      <button id="btn-menu" class="nav-btn-menu">
         <i class="fa fa-bars"></i>
     </button>

      <div class="nav-container">
	  		<?php
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'menu_id'        => 'header-menu',
				'container' => 'nav',
				'container_class' => 'nav-menu',
				'container_id' => '',
				'menu_class' => 'nav-menu-ul',
			) );
			?>
         
        
    </div>


