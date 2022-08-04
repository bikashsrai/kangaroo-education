<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kangarooeducation
 */

get_header();
?>
<?php require get_template_directory() . '/bannersec.php';?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header">
        <h1 class="page-title">
            <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'kangarooeducation' ), '<span>' . get_search_query() . '</span>' );
					?>
        </h1>
    </header><!-- .page-header -->

    <?php
			
				get_template_part( 'template-parts/content', 'search' );

		
			the_posts_navigation();

		
		?>
    <?php endif;?>
</main><!-- #main -->

<?php

get_footer();