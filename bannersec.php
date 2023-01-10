<?php 
/**
 * Template parts for displaying who we are
 * 
 */
?>

<!-- main bosy part start -->
<!-- breadcrumb -->
<?php 
$banner_img=get_field('image_banner_sec','option');
?>
<div class="aemi_breadcrumb" style="background-image:url('<?php echo get_template_directory_uri().'/assets/img/bansec.jpg';?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_title ">
                    <div class="page-title-heading">
                        <h1 class="title">
                            <?php 
                           global $post;
                           echo get_the_title( $post->post_parent );
                           ?></h1>
                    </div>

                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url(); ?>"><i
                                    class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="seperator text-white">&nbsp; | &nbsp;</span>
                        <span class="text-theme">
                            <?php echo the_title();?></span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>