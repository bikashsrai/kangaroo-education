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
                            <a href="<?php the_permalink();?>" title=""><img
                                    src="<?php echo get_template_directory_uri().'/assets/img/aus.jpg';?>" alt=""
                                    class="img-fluid w-100"></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <p>Posted On : Feb 14 2021 - <span>uuuuuuImmigration Category</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <span>BY : John Doe</span></p>
                            </div>
                            <h3><a href="<?php the_permalink();?>" title="">Tips For English Proficiency Test (IELTS And
                                    PTE)</a></h3>
                            <p>Thinking about taking an English proficiency test for immigration or study purposes?
                                Unsure which test (PTE or IELTS) will be better for you? We will try to explain you both
                                and help you decide on one.</p>
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
                    <!-- end -->

                    <!-- <div class="blog_single">
                        <div class="blog_image">
                            <a href="blog_single.html" title=""><img
                                    src="<?php echo get_template_directory_uri().'/assets/img/c2.jpg';?>" alt=""
                                    class="img-fluid w-100"></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <p>Posted On : Feb 14 2021 - <span>Immigration Category</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <span>BY : John Doe</span></p>
                            </div>
                            <h3><a href="blog_single.html" title="">Dealing With Cultural Shock Abroad – A Nepalese
                                    Student Perspective</a></h3>
                            <p>Nepalese students have been studying abroad in the USA, UK, Australia, New Zealand,
                                Canada and many more countries for over 5 decades. The trend seems to grow rapidly after
                                the 2006 Nepalese revolution </p>
                            <div class="blog_user d-flex justify-content-between">
                                <a class="btn-get-started text-white" href="blog_single.html">Read More</a>
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
                    end -->


                    <!-- pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                    <div class="blog_right">
                        <div class="blog_search mb-4">
                            <form class="d-flex">
                                <input class="form-control rounded-0" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-get-started rounded-0 m-0 d-flex align-items-center"
                                    type="submit"><i class="fas fa-search me-2"></i> Search</button>
                            </form>
                        </div>
                        <div class="archives widget_single">
                            <div class="items-title">
                                <h3 class="title">All Categories</h3>
                            </div>
                            <div class="archives-items">
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">Study Abroad </a></li>
                                    <li><a href="#" title="">International Students</a></li>
                                    <li><a href="#" title="">Tourist Visa</a></li>
                                    <li><a href="#" title="">English Proficency</a></li>
                                    <li><a href="#" title="">Visa</a></li>
                                    <li><a href="#" title="">Others</a></li>
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