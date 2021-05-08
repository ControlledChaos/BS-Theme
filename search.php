<?php
/**
 * The template for displaying search results pages
 *
 * @package    BS_Theme
 * @subpackage Templates
 * @category   Archives
 * @since      1.0.0
 */

// Get the default header file.
get_header();

?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" itemscope itemprop="mainContentOfPage">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php printf( esc_html__( 'Search Results for: %s', 'bs-theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<?php while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main>
	</div>
<?php

// Get the default sidebar file.
get_sidebar();

// Get the default footer file.
get_footer();