<?php 
/**
 * 
 */
get_header();
?>


<!-- main bosy part start -->
<!-- breadcrumb -->
<div class="aemi_breadcrumb"
    style="background-image:url(<?php echo get_template_directory_uri().'/assets/himalayanbusiness/images/ban1.jpg';?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_title ">
                    <div class="page-title-heading">
                        <h1 class="title">
                            Blogs</h1>
                    </div>

                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="seperator text-white">&nbsp; | &nbsp;</span>
                        <span class="text-theme">
                            Blogs </span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Blogs -->
<section class="pt-50">
    <div class="container">
        <div class="myblog blog_wrap">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <!-- end -->
                    <?php
                    the_archive_title();
                    ?>
                    <?php 
                            $args_post=array(
                                    'post_type'=>'post',
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
        
                            );
                                        $featured_post= new WP_Query($args_post);
                                        if($featured_post->have_posts()):
                                            while($featured_post->have_posts()):$featured_post->the_post();
                            
                        ?>
                    <div class="blog_single">
                        <div class="blog_image">
                            <a href="<?php the_permalink();?>" title=""><img src="<?php the_post_thumbnail_url();?>"
                                    alt="..." class="img-fluid-100"></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <p>Posted On : <?php echo get_the_date();?> - <span><?php the_category('');?></span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <span>BY :
                                        <?php echo get_the_author(); ?></span></p>
                            </div>
                            <h3><a href="<?php the_permalink();?>" title=""><?php echo the_title();?></a></h3>
                            <p><?php echo the_excerpt();?></p>
                            <div class="blog_user d-flex justify-content-between">
                                <a class="btn-get-started text-white" href="<?php the_permalink();?>">Read More</a>
                                <div class="blog_social d-flex">
                                    <span>Share On : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;?>
                    <!-- pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="#"><?php previous_post_link('&laquo; %link');
                            ?></a>
                            </li>

                            <li class="page-item"><a class="page-link"
                                    href="#"><?php next_post_link('%link &raquo;');?></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                    <div class="blog_right">
                        <div class="blog_search mb-4">
                            <form role="search" class="d-flex search-form" method="get"
                                action="<?php echo esc_url(home_url('/'));?>">

                                <input class="form-control rounded-0 search-field" type="search" name="s"
                                    value="<?php echo get_search_query();?>" placeholder="Search" aria-label="Search">

                                <button
                                    class="btn btn-get-started rounded-0 m-0 d-flex align-items-center search-submit"
                                    type="submit"><span class=" screen-reader-text"></span><i
                                        class="fas fa-search me-2"></i> search here</button>



                            </form>
                        </div>
                        <div class="archives widget_single">
                            <div class="items-title">
                                <!-- <h3 class="title">All Categories</h3> -->
                                <h3 class="title">All </h3>
                            </div>
                            <div class="archives-items">
                                <ul class="list-unstyled">
                                    <?php get_sidebar();?>
                                </ul>
                            </div>
                        </div>

                        <div class="archives widget_single popular_tags">
                            <div class="items-title">
                                <h3 class="title">Popular Tags</h3>
                            </div>
                            <div class="tags-items">
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">485 Visa</a></li>
                                    <li><a href="#" title="">PTE</a></li>
                                    <li><a href="#" title="">Australian PR</a></li>
                                    <li><a href="#" title="">Accounting</a></li>
                                    <li><a href="#" title="">Others</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer();?>