<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kangarooeducation
 */

?>

<?php
get_header();?>


<section class="pb-50">
    <div class="container">
        <div class="inst_img">
            <div class="row">
                <?php 
				if(have_posts()):?>
                <?php while(have_posts()):
					the_post();
				?>
                <div class="col-md-3 australia">
                    <a href="<?php  the_permalink();?>">
                        <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="<?php the_post_thumbnail_url();?>"
                                alt="<?php the_title_attribute(); ?>">
                            <p class="text-center"><?php the_title();?></p>
                        </div>
                    </a>
                </div>
                <?php endwhile;
				endif;?>

            </div>
        </div>
    </div>
</section>
<?php
get_footer();?>