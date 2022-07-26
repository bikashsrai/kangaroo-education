<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kangarooeducation
 */

get_header();
?>
<?php require get_template_directory() . '/bannersec.php';?>

<main id="primary" class="site-main">

    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kangarooeducation' ); ?>
            </h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kangarooeducation' ); ?>
            </p>

            <?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                <div class="blog_right">
                    <div class="blog_search mb-4">
                        <form role="search" class="d-flex search-form" method="get"
                            action="<?php echo esc_url(home_url('/'));?>">

                            <input class="form-control rounded-0 search-field" type="search" name="s"
                                value="<?php echo get_search_query();?>" placeholder="Search" aria-label="Search">

                            <button class="btn btn-get-started rounded-0 m-0 d-flex align-items-center search-submit"
                                type="submit"><span class=" screen-reader-text"></span><i
                                    class="fas fa-search me-2"></i>
                                search here</button>



                        </form>
                    </div>
                </div>
            </div>
            <div class="widget widget_categories">
                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'kangarooeducation' ); ?></h2>
                <ul>
                    <?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
                </ul>
            </div><!-- .widget -->

            <?php
					/* translators: %1$s: smiley */
					$kangarooeducation_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'kangarooeducation' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$kangarooeducation_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();