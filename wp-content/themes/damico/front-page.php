<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		  <div id="container" class="cf">
			<div id="main" role="main">
		        <div class="flexslider">
		          <ul class="slides">
		            
		  	    	    <?php if( have_rows('slider') ):

						    while ( have_rows('slider') ) : the_row();
						    	$image = get_sub_field('slider_image');
						    	$heading = get_sub_field('slider_heading');
						    	$slid_content = get_sub_field('slider_content');	?>
						    	<li>
						    	
 
							        <div class="img_content-top topslider">
							    		<div class="about-img-top"><img src="<?php echo $image['url']; ?>"></div>
                                        <div class="slider-text">
								      	<div class="container">
								       <?php if($heading){ ?>
								       	<div class="about-heading-top"><?php echo $heading; ?>

								       	<?php } if($slid_content){ ?>
							      	  <div class="slider-content"><?php echo $slid_content; ?></div> <?php } ?>
							        </div></div>
</div>

						    </li>
						        <?php 
						    endwhile;
							else :
							    echo 'no rows found';
							endif; ?>
		          </ul>
		        </div>
		    </div>
		  </div>
		  <div class="container">
		  	<div class="davico-low">
		  	<?php 	$value = get_field( "damico_law" );
				if( $value ) {
				    echo $value;
				} ?>
		  	</div>
		  </div>

		  <div class="container">
		  	<div class="row">
		  	 <div class="testimonial">
		             
  	    	    <?php if( have_rows('testimonial') ):

				    while ( have_rows('testimonial') ) : the_row();
				    	$test_image = get_sub_field('testimonial_image');
				    	$test_content = get_sub_field('testimonial_text');
						$test_author = get_sub_field('testimonial_author');	?>
                       
				    	
				    	<div class="col-lg-4 col-xl-4 float-left">
				    		<div class="bg-box-width">
				    		<div class="testimonial-img"><img src="<?php echo $test_image['url']; ?>"></div>
					       <?php  if($test_content){ ?>
					        <div class="testimonial-content"><?php echo $test_content; ?>
                            <span>  <?php  echo $test_author ?> </span>
                              
                            </div> <?php } ?>
					    </div>
					</div>
				        <?php 
				    endwhile;
					else :
					    echo 'no rows found';
					endif; ?>
		          	</div>
		         </div>
		  </div>


		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php 
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
