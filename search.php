<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kangarooeducation
 */

get_header();
$search_txt = $_GET['s'];
// $ppp = 12;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$institutionTaxo = array(
    'post_type'         => 'institution',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'paged'             => $paged,
    'tax_query' => array(
        array(
            'taxonomy'  => 'country',
            'field'     => 'name',
            'terms'     => $search_txt,
        ),
    ),
);
$parent_args = new WP_Query( $institutionTaxo );
// $postFound = $parent_args->found_posts;
?>
<?php require get_template_directory() . '/bannersec.php';?>
<main id="primary" class="site-main">
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="testprepn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner_section_title t_left text-start">
                            <h3>
                                <?php printf( esc_html__( 'Search Results for: %s', 'kangarooeducation' ), '<span>' . get_search_query() . '</span>' ); ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ( $parent_args ) { ?>
        <section class="pb-50">
            <div class="container">
                <div class="inst_img">
                    <div class="row">
                        <?php 
                        if ( $parent_args->have_posts() ) { ?>
                            <?php while ( $parent_args->have_posts() ) :
                                $parent_args->the_post();
                                ?>
                                <div class="col-md-3 australia">
                                    <a href="<?php  the_permalink();?>">
                                        <div class="brands_item d-flex flex-column
                                        justify-content-center">
                                        <img loading="lazy" src="<?php the_post_thumbnail_url();?>"
                                        alt="<?php the_title_attribute(); ?>" />
                                        <p class="text-center"><?php the_title();?></p>
                                    </div>
                                </a>
                            </div>
                            <?php 
                        endwhile;
                        wp_reset_postdata();
                    }
                    else { ?>
                        <section class="pt-50 pb-50">
                            <div class="container">
                                <div class="testprepn">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner_section_title t_left text-start">
                                                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with country name or destinations.', '' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php 
}
else { ?>
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="testprepn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner_section_title t_left text-start">
                            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
</main><!-- #main -->
<?php
get_footer();