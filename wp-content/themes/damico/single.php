<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<div id="primarys" class="content-areas">
		<main id="main" class="site-main" role="main">
      <div class="blog_single_page">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();



				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.

				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>


<?php get_footer();
