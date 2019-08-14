<?php
/*Template Name: Testimonial*/
get_header(); ?>
			<div class="about_page">
				<div class="about_header">
			 	<?php if( have_rows('testimonial_banner') ):
					    while ( have_rows('testimonial_banner') ) : the_row();
					    	$test_images = get_sub_field('banner_img' );
					    	$test_headings = get_sub_field('banner_contents' );
					   	?>
					    <div class="inner_banner" style="background-image:url(<?php echo $test_images['url']; ?>)">
					    		
						       <?php if($test_headings){ ?>
						       <div class="container inner_display_table">
						       		<div class="inner_banner_content inner_display_table_cell text-left"><?php echo $test_headings; ?></div>
						       </div>
						       	<?php } ?>
					    </div>

					        <?php 
					    endwhile;
						endif; ?>
				</div>
			</div>
			<div class="container">
				<div class="section_1_our_relationship">
					<?php the_field('section_1_our_relationship'); ?>
				</div>
			</div>
			<div class="testimonial-slider">
				<div class="container">
					<div class="test_slider">
						<div class="flexslider">
					          <ul class="slides">
					            
			  	    	    <?php if( have_rows('section_2_slider') ):

							    while ( have_rows('section_2_slider') ) : the_row();
							    	//$image = get_sub_field('slider_image');
							    	//$heading = get_sub_field('slider_heading');
							    	$slid_contents = get_sub_field('testimonial_name');	?>
							    	<li>
							    		<!-- <div class="slider-img"><img src="<?php //echo $image['url']; ?>"></div>
								       <?php //if($heading){ ?>
								       	<div class="slider-heading"><h2><?php echo $heading; ?><h2></div> -->
								       	 <?php // } 
								       	 if($slid_contents){ ?>
								        <div class="test_slider-content"><?php echo $slid_contents; ?></div> <?php } ?>
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
				</div>

<?php get_footer(); ?>