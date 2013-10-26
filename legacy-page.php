<?php
/*
Template Name: Legacy
*/

get_header(); ?>

		<div id="primary clearfix">
			<div id="content" role="main" class="inner-wrapper">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>