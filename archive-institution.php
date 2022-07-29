<?php 
/**
 * This is the cpt post for institution 
 */
get_header();?>

<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>

<!-- Institution folder -->
<section class="pt-50 pb-50">
    <div class="container">
        <div class="bg-light p-3">
            <div class="institute_filter">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <div class="align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label class="text-dark fs-6 opacity-75 text-nowrap me-2 d-none d-sm-block">archive
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

                $institution_featured= new WP_Query($institution_selection);
                if($institution_featured->have_posts()):
                    while($institution_featured->have_posts()):$institution_featured->the_post();

                              
                // $termsArray=get_the_terms($post->ID,'institution_category');
                // $termsSlug="";
                // foreach($termsArray as $term){
                //     $termsSlug.=$term->slug."";
                // }
               ?>
                <div class="col-md-3 australia">

                    <a href="<?php echo get_the_permalink(get_the_ID());?>">
                        <div class="brands_item d-flex flex-column
                                justify-content-center">
                            <img src="<?php the_post_thumbnail_url();?>" alt="...">
                            <p class="text-center"> <?php the_title();?></p>
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
                       -->
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>