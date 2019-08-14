<?php
/*Template Name: About*/
get_header(); 
?>
<div class="about_page">
	<div class="about_header">
 	<?php if( have_rows('header_section') ):
		    while ( have_rows('header_section') ) : the_row();
		    	$images = get_sub_field('header_image');
		    	$headings = get_sub_field('header_content');
		   	?>
		    	<div class="inner_banner" style="background-image:url(<?php echo $images['url']; ?>)">
		    	<?php if($headings){ ?>
			       	<div class="container inner_display_table">
			       	<div class="inner_banner_content inner_display_table_cell text-left"><?php echo $headings; ?></div>
			       </div>
			       	<?php } ?>
		    </div>
		        <?php 
		    endwhile;
			else :
			    echo 'no rows found';
			endif; ?>
	</div>
</div> 
<div class="container">
	<div class="who_we_are">
		<?php the_field('who_we_are_section'); ?>
	</div>
</div>
     
    
    <div class="section-about">
    <div class="container">
    <div class="row">
    
       <div class="col-lg-12 about_row1">
        <?php if( have_rows('section_2') ):
			    while ( have_rows('section_2') ) : the_row();
			    	$section_2_heading = get_sub_field('section_2_heading');
			    	
			   	?>
	
               <?php echo $section_2_heading; ?>
			    		
			    		

			        <?php 
			    endwhile;
				else :
				    echo 'no rows found';
				endif; ?>
        
                <?php if( have_rows('section_2') ):
			    while ( have_rows('section_2') ) : the_row();
			    	$section_2images = get_sub_field('image_section_2');
			    	
			   	?>
	
       <div class="oval">     <img src="<?php echo $section_2images['url']; ?>">  </div>
			    		
			    		

			        <?php 
			    endwhile;
				else :
				    echo 'no rows found';
				endif; ?>
                
        
       
         <div class="contentss">	<?php if( have_rows('section_2') ):
			    while ( have_rows('section_2') ) : the_row();

			    	$section_2headings = get_sub_field('left_text');
			   	?>

			    		<?php if($section_2headings){ ?>
					<?php echo $section_2headings; ?>
				       	 <?php } ?>
			    		

			        <?php 
			    endwhile;
				else :
				    echo 'no rows found';
				endif; ?>
                 
                </div>
               
                
       
       </div>
    </div>
    </div>
    </div>
    
    
    <?php /*?><div class="about_section2">
	 	<?php if( have_rows('section_2') ):
			    while ( have_rows('section_2') ) : the_row();
			    	$section_2images = get_sub_field('image_section_2');
			    	$section_2headings = get_sub_field('left_text');
			   	?>
			    	<div class="img_contentss">
			    		<div class="about-imgs"><img src="<?php echo $section_2images['url']; ?>"></div>
			    		<?php if($section_2headings){ ?>
			    			<div class="container">
				       		<div class="about-headings"><?php echo $section_2headings; ?></div></div>
				       	 <?php } ?>
			    		
			    </div>
			        <?php 
			    endwhile;
				else :
				    echo 'no rows found';
				endif; ?>
	
	</div><?php */?>

<div class="thisds">

	<div class="container">
		
			<div class="contact_section3">
		 	<?php if( have_rows('about_contact_section_3') ):
				    while ( have_rows('about_contact_section_3') ) : the_row();
				    	$contact_images = get_sub_field('section_3_image');
				    	$contact_headings = get_sub_field('section_3_text');
				   	?>
				    	<div class="contact_contents">
                        <div class="row">
				    		<div class="col-lg-6 col-md-6 text-center about-imgs"><img src="<?php echo $contact_images['url']; ?>"></div>
				    		<?php if($contact_headings){ ?>
					       	<div class="col-lg-6 col-md-6 text-center about-heading"><?php echo $contact_headings; ?></div>
					       	 <?php } ?>
				    		
				    </div>
				        <?php 
				    endwhile;
					else :
					    echo 'no rows found';
					endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();  ?>