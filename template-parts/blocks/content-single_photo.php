<!-- main bosy part start -->
<!-- breadcrumb -->

<?php
get_header();
require get_template_directory() . '/bannersec.php';?>

<!-- gallery single starts -->
<!-- gallery single starts -->
<section class="pt-50">
    <div class="imagegallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-center">
                        <h3 class="">Kangaroo Scholarship Week 2020</h3>


                        <div class="sec_line-main m-auto text-center
                        justify-content-center d-flex">
                            <div class="sec_line sec_line-big m-auto"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="page-content page-container">
                <div class="padding gallery_inner">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <?php if(have_rows('image_pp_rep')):?>

                                    <div id="lightgallery" class="row lightGallery">
                                        <?php while(have_rows('image_pp_rep')):the_row();
                                        $image_single=get_sub_field('image_gg');?>

                                        <?php 
                                        
                                                                 
                                                 if(!empty( $image_single)):?>
                                        <a href="<?php echo esc_url($image_single['url']);?>"
                                            class="image-tile col-md-4" data-abc="true">
                                            <img src="<?php echo esc_url($image_single['url']);?>" class="img-fluid"
                                                alt="<?php echo esc_attr( $image_single['alt']); ?>"></a>
                                        <?php endif; ?>
                                        <?php endwhile;?>


                                        <!-- <a href=" assets/img/c2.jpg" class="image-tile col-md-4"
                                            data-abc="true"><img src="assets/img/c2.jpg" alt="image small"
                                                class="img-fluid"></a>



                                        <a href="assets/img/c3.jpg" class="image-tile col-md-4" data-abc="true"><img
                                                src="assets/img/c3.jpg" alt="image small" class="img-fluid"></a>

                                        <a href="assets/img/c4.jpg" class="image-tile col-md-4" data-abc="true"><img
                                                src="assets/img/c4.jpg" alt="image small" class="img-fluid"></a>



                                        <a href="assets/img/c5.jpg" class="image-tile col-md-4" data-abc="true"><img
                                                src="assets/img/c5.jpg" alt="image small" class="img-fluid"></a>



                                        <a href="assets/img/c6.jpg" class="image-tile col-md-4" data-abc="true"><img
                                                src="assets/img/c6.jpg" alt="image small" class="img-fluid"></a> -->




                                    </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>