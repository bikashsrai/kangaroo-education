<?php
/**
 * block for test preparation
 * 
 * 
 */
?>

<!-- main bosy part start -->
<?php require get_template_directory() . '/bannersec.php';?>

<!-- country info -->
<section class="pt-50">
    <div class="container">
        <div class="countryinfo">
            <?php $des1_test=get_field('description_1_test') ;?>
            <p><?php echo $des1_test;?></p>
        </div>
    </div>
</section>

<?php 
$enable_section_2_test=get_field('enable_section_2_test');
if($enable_section_2_test){
    $sub_heading_2_test=get_field('sub_heading_2_test');
    $heading_main_2_test=get_field('heading_main_2_test');
    $description_2_test=get_field('description_2_test');
    $image_2_test=get_field('image_2_test');
    // $activity_test=get_field('activity_test');

?>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="testprepn">
            <div class="row">
                <div class="col-md-6">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading "><?php echo $sub_heading_2_test;?></h4>
                        <h3><?php echo $heading_main_2_test;?></h3>
                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="test_para">
                        <p><?php echo $description_2_test;?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="test_img">
                        <?php 
                            if(!empty($image_2_test)):?>
                        <img src="<?php echo esc_url($image_2_test['url']);?>"
                            alt="<?php echo esc_attr(   $image_2_test['alt'] ); ?>" width="100%" height="500">
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>

        <!-- field -->
        <div class="row pt-50">
            <?php 
                        if(have_rows('activity_test')):
                        while(have_rows('activity_test')):the_row();
                        $icon_test=get_sub_field('icon_test');
                        $title_activity_test=get_sub_field('title_activity_test');
                        $description_activity_test=get_sub_field('description_activity_test');
                        ?>
            <div class="col-md-6 pb-3">
                <div class="service-single-item h-100">
                    <i class="fas fa-<?php echo $icon_test;?>"></i>
                    <h6><?php echo $title_activity_test;?></h6>
                    <p><?php echo $description_activity_test;?></p>
                </div>
            </div>
            <?php endwhile;
                    endif;?>
        </div>
    </div>
</section>
<?php }?>

<?php 
$enable_section_3_test=get_field('enable_section_3_test');
if($enable_section_3_test){
    $sub__heading_3_test=get_field('sub__heading_3_testt');
    $heading_3_test=get_field('heading_3_test');
    $description_3_test=get_field('description_3_test');

?>
<section class="bg-light p-3 mb-5">
    <div class="container">
        <div class="bandscore">
            <div class="row ">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading "><?php echo $sub__heading_3_test;?></h4>
                        <h3><?php echo $heading_3_test;?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                </div>
            </div>
            <p><?php echo $description_3_test;?>
            </p>
        </div>
    </div>
</section>
<?php }?>