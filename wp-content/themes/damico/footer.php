<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<?php if(is_page('contact')) { echo ''; ?>
		<?php }  else { ?>
		<div class="container footer-top-content">
					<div class="footer_title">
					<div class="row">
						<div class="col-xl-12"><?php dynamic_sidebar('header-section'); ?></div>
					</div>
				</div>
		           <div class="bottom-blog">
					<div class="row">
		          
					<?php
						$lastposts = get_posts( array('posts_per_page' => 2 ) );
						if ( $lastposts ) {
						    foreach ( $lastposts as $post ) :
						        setup_postdata( $post ); ?> 
						        
		                        <div class="col-lg-6 col-md-6 col-xl-6">
										<div class="all-content">
										<div class="blogimg">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
										</a>
										</div>
										<div class="div-bg">
										<div class="blogtitle">
											<h3><a href="<?php the_permalink(); ?>"> <?php  echo  the_title(); ?></a></h3>
										</div>
										<div class="blogtxt">
											<?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
											
											<a class="float-right" href="<?php the_permalink(); ?>"> READ MORE </a>
										</div>
									</div>
									</div>
								</div>
						    <?php
						    endforeach; 
						    wp_reset_postdata();
						}?>
					</div>
		            </div>
				</div>

	<?php } ?>


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
		</footer><!-- #colophon -->
	</div>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 

  <!-- FlexSlider -->
  <script defer src="<?php bloginfo('template_url') ?>/assets/flex-slider/jquery.flexslider.js"></script>

  <script src="<?php bloginfo('template_url') ?>/assets/sidebar-form/slider.js"></script>


<script>
$(document).ready(function(){
    $(".menu-toggle .icon-bars").click(function(){
        $("body").addClass("overflow_hidden");
    });
});
</script>


<script>
$(document).ready(function(){
    $(".menu-toggle .icon-close").click(function(){
        $("body").removeClass("overflow_hidden");
    });
});
</script>




<script type="text/javascript">
	   $(document).ready(function()
	{
	$('#sidebar').click(function(){

	$(this).css('left', '180px','!important');
	})
})
</script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });


$(".close-button").click(function () {
$("#header").css("display", "none");

});
		$("#sidebar").click(function () {
    $("#header").css("display", "block");
    $("#header").css("width", "500");
});


</script>


<style type="">

div#sidebar1 { display: none; }
</style>



