<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		 echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>

	<div class="container blog_in">
		<h2 class=" post-title"> <span> <?php the_title(); ?> </span></h2>
		<div class="user-meta-detail">
		
        <div class="blog_heading"> 
        	<span class="user-nike-name" > BY <?php echo $author = get_the_author_meta('nickname') ; ?> </span>
			<span class="post-date" > | <?php the_time('n.j.y'); ?> | </span>
			 <?php echo dk_socail_media($socailshare_icon); ?> 
             
             </div>
             
             
		<div class="post-full-content">
			<?php the_content(); ?>
		</div>
		<div class="post-tagss">
			<span>TAGS : </span>
			<?php
			$tags = get_tags();
			foreach ( $tags as $tag ) {
			    $tag_link = get_tag_link( $tag->term_id );
			    ?><a href='' title='' class=''><?php
			  echo  $tag->name; ?> </a>
			<?php	} ?>
		</div>
		<div class="post-next-previous">

		<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next post', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous post', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ',
				) );
				?>
	</div>
</div>
</div>

</article><!-- #post-## -->
