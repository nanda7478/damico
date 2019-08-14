<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/bootstraps/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/flex-slider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/sidebar-form/slider.css" type="text/css" media="screen" />
<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/bsn4dgm.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/bootstraps/bootstrap.min.js"></script>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/custom.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/custom-style.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header id="masthead" class="site-header" role="banner">
  <div class="container">
  <div class="site_main_header">
  <div class="contact_no mobile_view"> <a href="tel:973-321-4491"> <span> FREE CONSULTATION :</span> 973-321-4491 </a></div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-3 col-xl-3">
        <div class="site_logo">
          <?php // the_custom_logo(); ?>
          <a href="<?php echo site_url(); ?>"> <img src="<?php bloginfo('template_url') ?>/assets/images/Damico_MainLogo_Reversed.png" alt="logo"> </a>
          <div class="site-branding-text">
            <?php if ( is_front_page() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
              </a></h1>
            <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
              </a></p>
            <?php endif; ?>
            <?php
							$description = get_bloginfo( 'description', 'display' );

							if ( $description || is_customize_preview() ) :
							?>
            <p class="site-description"><?php echo $description; ?></p>
            <?php endif; ?>
          </div>
          <!-- .site-branding-text -->
          
          <?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
          <a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text">
          <?php _e( 'Scroll down to content', 'twentyseventeen' ); ?>
          </span></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-9 col-xl-9">
        <div class="site_main_menu right">
          <div class="cont_no desktop_view float-right"> <span> FREE CONSULTATION :</span> <a href="tel:973-321-4491"> 973-321-4491 </a></div>
          <?php if ( has_nav_menu( 'top' ) ) : ?>
         
         <?php // echo do_shortcode('[responsive_menu]'); ?>  
           <div class="navigation-tops">
            <?php  get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
            
          </div>
          <!-- .navigation-top -->
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>  </div>
</header> 
<!-- #masthead --> 

<!--  sidebar Sliding div start here -->
<div id="slider" style="right:-342px;">
  <div id="sidebar" onclick="open_panel()"> <img id="contact_imges" src="<?php bloginfo('template_url') ?>/assets/btn_contact_us.jpg"/> </div>
  <div id="header">
      <div class="contact-heading">
        <div class="close-button"  onclick="close_panel()">X</div>
        <div class="concact-today">Contact Us Today!</div >
        <div  class="contact-no">(973) 321-4491</div>
     </div>
    <?php echo do_shortcode( '[contact-form-7 id="286" title="Sidebar Contact form"]' ); ?> </div>
</div>

<!--  sidebar Sliding div ends here -->

<?php
//
//	/*
//	 * If a regular post or page, and not the front page, show the featured image.
//	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
//	 */
//	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
//		echo '<div class="single-featured-image-header"> <div class="container"> <div class="blog_single_img">';
//		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
//		echo '</div></div></div><!-- .single-featured-image-header -->';
//	endif;
//	?>

    <?php if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :?>
    <?php
	
	  if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
		
	?>
       <div class="single-featured-image-header"> 
       <div class="container"> 
       <div class="blog_single_img" style="background:url(<?php echo  esc_url( $large_image_url[0] ); ?>)">
       <!--echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';-->
      </div>
      </div>
      </div>
<?php
	    
    }
}
	
?>
<?php 
endif;
?>
    
    
<div class="site-content-contain">
<div id="content" class="site-content">
