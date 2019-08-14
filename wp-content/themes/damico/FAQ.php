<?php
/*Template Name: FAQ*/

get_header();
?>


<div class="about_page">
		<div class="about_header">
	 	<?php if( have_rows('faq_page') ):
		    while ( have_rows('faq_page') ) : the_row();
		    	$faq_images = get_sub_field('faq_banner' );
		    	$faq_headings = get_sub_field('faq_banner_content' );
		   	?>
		    	<div class="inner_banner" style="background-image:url(<?php echo $faq_images['url']; ?>)">
		    
			       <?php if($faq_headings){ ?>
			       <div class="container inner_display_table">
					<div class="inner_banner_content inner_display_table_cell text-left"><?php echo $faq_headings; ?></div>
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
		<?php the_field('faq_section_1_content'); ?>
	</div>
</div>
<div class="container sp-padd8">
	<div class="accordion-faq">
			<div class="bs-example">
			    <div class="panel-group" id="accordion">
					<?php if( have_rows('faq_accordion') ):
						$i = 0;
					    while ( have_rows('faq_accordion') ) : the_row();
					    	$accordion_title = get_sub_field('accordion_title' );
					    	$accordion_content = get_sub_field('accordion_content' );
					   	?>
					    
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h4 class="panel-title">
				                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $i; ?>"><span class="glyphicon glyphicon-plus"></span> <?php if($accordion_title){  echo $accordion_title; } ?></a>
				                </h4>
				            </div>
				            <div id="collapseOne_<?php echo $i; ?>" class="panel-collapse collapse">
				                <div class="panel-body">
				                    <?php if($accordion_content){ echo $accordion_content; } ?>
				                </div>
				            </div>
				        </div>
							  
					        <?php
					        $i++ ;
					    endwhile;

						endif; ?>
					</div>
				</div>
	</div>
</div>



<?php get_footer(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .panel-title .glyphicon{
        font-size: 14px;
    }
    span.glyphicon.glyphicon-plus{float: right; color: #fff;}
    span.glyphicon.glyphicon-minus{float: right; color: #fff;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>