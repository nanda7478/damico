<?php
/*Template Name: Contact us*/
get_header(); ?>
	<div class="about_page">
			<div class="about_header">
		 	<?php if( have_rows('contact_header') ):
				    while ( have_rows('contact_header') ) : the_row();
				    	$contact_images = get_sub_field('contact_banner' );
				    	$contact_headings = get_sub_field('contact_banner_content' );
				   	?>
				    <div class="inner_banner" style=" background:url(<?php echo $contact_images['url']; ?>)">
			    		
				       	<?php if($contact_headings){ ?>
				       	<div class="container inner_display_table">
					<div class="inner_banner_content inner_display_table_cell text-left"><?php echo $contact_headings; ?></div>
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
					<?php the_field('conactus_section_1_content'); ?>
				</div>
			</div>
			<div class="container">
				<div class="contact-form">
					<?php if( have_rows('contact_form') ):
				    while ( have_rows('contact_form') ) : the_row();
				    	$contact_forms = get_sub_field('conatact_form_7' );
				    	$conatact_maps = get_sub_field('conatact_map' );
				    	$contact_address = get_sub_field('contact_address');
				   	?>
				    	<div class="form_content">
				    		<div class="row">
				    		<div class="col-lg-5 contactus-form">
						       <?php if($contact_forms){ ?>
						       	<div class="contactus-form"><?php echo $contact_forms; ?></div>
						       	 <?php } ?>
					       	</div>
					       	<div class="col-lg-3 contactus-form">
						       <?php if($contact_address){ ?>
						       	<div class="contactus-address"><?php echo $contact_address; ?></div>
						       	 <?php } ?>
					       	</div>
					       	<div class="col-lg-4 contactus-form">
						       	 <?php if($conatact_maps){ ?>
						       	<div class="contactus-map"><?php echo $conatact_maps; ?></div>
						       	 <?php } ?>
					       	</div>
					    </div>
					</div>
				        <?php 
				    endwhile;
					endif; ?>
				</div>
			</div>
<?php get_footer(); ?>