<?php 
/**
 * This is the cpt post for institution 
 */
get_header();?>

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
                            Institution </h1>
                    </div>

                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="seperator text-white">&nbsp; | &nbsp;</span>
                        <span class="text-theme">
                            Institution </span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Institution folder -->
<section class="pt-50 pb-50">
    <div class="container">
        <div class="bg-light p-3">
            <div class="institute_filter">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <div class="align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label class="text-dark fs-6 opacity-75 text-nowrap me-2 d-none d-sm-block">test archive
                                COUNTRY</label>
                            <select class="form-select filterby" id="sorting">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                                <option value="uk">UK</option>
                                <option value="newzealand">NewZealand</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label
                                class="text-dark fs-6 opacity-75 text-nowrap me-2 d-none d-sm-block">INSTITUTION</label>
                            <input class="form-control" type="search" placeholder="Search an Institution..."
                                aria-label="Search">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="align-items-center ">
                            <a href="#"
                                class="btn btn-primary  mybtn mt-4  border bg-theme d-flex justify-content-center">
                                Search </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-50">
    <div class="container">
        <div class="inst_img">
            <div class="row" id="FilterContainer">
                <?php
                $institution_selection=array(
                    'post_type'=>'institution',
                    'posts_per_page'=>'4',
                    'post_status'=>'publish',
                    'orderby'=>'date'
                );

                $institution_featured= new WP_query($institution_selection);
                if($institution_featured->have_posts()):
                    while($institution_featured->have_posts()):$institution_featured->the_post();
               ?>
                <div class="col-md-3 australia">
                    <a href="<?php the_permalink();?>">
                        <div class="brands_item d-flex flex-column
                                justify-content-center">
                            <img src="<?php the_post_thumbnail_url();?>" alt="...">
                            <!-- <img src="<?php echo get_template_directory_uri().'/assets/kangarooedu.com/images/thumbnail/1597310278.jpg';?>"
                                alt=""> -->
                            <p class="text-center">CRICOS Code: 00117J</p>
                        </div>
                    </a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                endif;?>
                <!-- <div class=" col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601630453.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 00212K</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601630029.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 03663C</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601629646.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 01576G</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601629120.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 03312D</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601628701.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 00113B</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601628299.png"
                                        alt="">
                                    <p class="text-center"> CRICOS: 01737F</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601626441.png"
                                        alt="">
                                    <p class="text-center"> CRICOS: 00123M</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 newzealand">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1597656946.jpg"
                                        alt="">

                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 newzealand">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1597656403.jpg"
                                        alt="">

                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 newzealand">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1597647322.jpg"
                                        alt="">

                                </div>
                            </a>
                        </div> -->

            </div>
        </div>
    </div>
</section>

<?php get_footer();?>