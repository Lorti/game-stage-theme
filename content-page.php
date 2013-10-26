<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_content(); ?>
		<?php
	      // If comments are open or we have at least one comment, load up the comment template
	      if ( comments_open() || '0' != get_comments_number() )
	        comments_template();
	    ?>

</article><!-- #post-<?php the_ID(); ?> -->
