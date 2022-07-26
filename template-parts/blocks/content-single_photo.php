<?php 

/**
 * single post for the photo gallery
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
                            Gallery </h1>
                    </div>

                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index-2.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="seperator text-white">&nbsp; | &nbsp;</span>
                        <span class="text-theme">
                            Photo Single </span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- gallery single starts -->
<section class="pt-50">
    <div class="imagegallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-center">
                        <h3 class=""><?php echo the_title();?></h3>


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

                                    <div id="lightgallery" class="row lightGallery">
                                        <!--repeater halnuparxa .....?????????  -->

                                        <?php 
            if(have_rows('image_photo_gallery')):
            while(have_rows('image_photo_gallery')):the_row();
            $img_single1=get_sub_field('image_gallery_1');
          
            ?>
                                        <a href="<?php the_permalink();?>" class="image-tile col-md-4" data-abc="true">
                                            <?php
                                    if ( ! empty( $img_single1 ) ): ?>
                                            <img class="img-fluid" src="<?php echo esc_url( $img_single1['url'] ); ?>"
                                                alt="<?php echo esc_attr( $img_single1['alt'] ); ?>">
                                            <?php endif; ?>
                                        </a>
                                        <?php endwhile;
                                      endif;?>

                                    </div>
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