<?php
/**
 * The template for displaying all single posts
 *
 * @package    BS_Theme
 * @subpackage Templates
 * @category   Posts
 * @since      1.0.0
 */

// Get the default header file.
get_header();

?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" itemscope itemprop="mainContentOfPage">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main>
	</div>
<?php

// Get the default sidebar file.
get_sidebar();

// Get the default footer file.
get_footer();
