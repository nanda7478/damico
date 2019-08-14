<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="blog-pages">
<!-- 	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?> -->

	<div id="primarys" class="content-areas">
		<main id="main" class="site-main" role="main">
			<div class="about_page">
				<div class="about_header">
			 	<?php if( have_rows('banner_image',get_option('page_for_posts')) ):
					    while ( have_rows('banner_image',get_option('page_for_posts')) ) : the_row();
					    	$images = get_sub_field('blog_banner_img',get_option('page_for_posts'));
					    	$headings = get_sub_field('blog_banner_content',get_option('page_for_posts'));
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
						endif; ?>
				</div>
			</div>
			<div class="container">
				<div class="blog_page_content_section_1_">
					<?php the_field('blog_page_content_section_1_', get_option('page_for_posts')); ?>
				</div>
			</div>

			<div class="container">
            <div class="block_blog">
				<div class="row">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'template-parts/post/content', get_post_format() );


						?>

						<div class="col-lg-4 col-md-6 blog_box">
						<div class="all-page">
						<div class="allblogimg">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
						</a>
						</div>
							<div class="blog-div-bg">
									<div class="blog-blogtitle">
									<h3><a href="<?php the_permalink(); ?>"> <?php  echo  the_title(); ?></a></h3>
								</div>
								<div class="blog-blogtxt">
									<?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
									
									<a class="float-right" href="<?php the_permalink(); ?>"> READ MORE </a>
								</div>
							</div>
					</div>
				</div>
						<?php


					endwhile;

					the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif;
				?>
			</div>
            </div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
