<?php
/**
 * block showing our approach
 * 
 */
?>

<?php require get_template_directory() . '/bannersec.php';?>

<!-- country info -->

<?php
$enable_our_approach=get_field('enable_our_approach');
if($enable_our_approach){
   $des1_approach=get_field('description_our_approach')?:'Detailed Messages';
   
?>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="testprepn">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-start">

                        <h4 class="themestek-custom-heading ">About Us</h4>
                        <h3><?php the_title(); ?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="test_para">
                        <p><?php echo $des1_approach;?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php }?>
<?php
$enable2_approach=get_field('our_approach_info_details');
if($enable2_approach){
   ?>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    if(have_rows('enable_approach_info')):
                        while(have_rows('enable_approach_info')):the_row();
                         $bak_color=get_sub_field('background_color_info');
                         $icon2_app=get_sub_field('title_two');
                         $title2_app=get_sub_field('description_meassage')?:'Title';
           
                    ?>
                    <div class="col-lg-4  col-sm-12 col-xs-4 p_lr5 m_b10">
                        <div class="height_manage bg_<?php echo $bak_color;?> text-center height_190">
                            <div class="p_a10">
                                <div class="icon font_55 white ">
                                    <span class="far fa-<?php echo $icon2_app;?>"></span>
                                </div>
                                <h2 class="white font_21 font_weight900 text-uppercase"><?php echo $title2_app;?></h2>

                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    endif;?>
                    <!-- <div class="col-lg-4  col-sm-12 col-xs-4 p_lr5 m_b10">
                        <div class="height_manage bg_two text-center height_190">
                            <div class="p_a10">
                                <div class="icon font_55 white ">
                                    <span class="fa fa-sitemap"></span>
                                </div>
                                <h2 class="white font_21 font_weight900 text-uppercase">Operations in 2 countries</h2>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>

        </div>
    </div>
</section>
<?php }?>

<?php
$enable_target=get_field('enable_target');
if($enable_target){
   $des1_approach=get_field('description_our_approach')?:'Detailed Messages';
   
?>
<section class="pt-50 pb-50 bg-light">
    <div class="container">
        <div class="row">
            <?php 
            if(have_rows('target_and_values_approach')):
            while(have_rows('target_and_values_approach')):the_row();
            $title3_work=get_sub_field('title_work_approach');
            $des3_work=get_sub_field('description_work_approach');
            ?>
            <div class="col-md-6">
                <div class="card c1">
                    <div class="card-body">
                        <h5 class="card-title text-theme fw-bold"><?php echo $title3_work;?></h5>
                        <p class="card-text"><?php echo $des3_work;?></p>
                    </div>
                </div>
            </div>
            <?php endwhile;
             endif;?>

            <?php 
            if(have_rows('vision_values_section')):
            while(have_rows('vision_values_section')):the_row();
            $title4_work=get_sub_field('title_vision');
            $des4_work=get_sub_field('description_vvg');
            ?>
            <div class="col-md-4 pt-3">
                <div class="card c1">
                    <div class="card-body">
                        <h5 class="card-title text-theme"><?php echo $title4_work;?></h5>
                        <p class="card-text"><?php echo $title4_work;?></p>

                    </div>
                </div>
            </div>
            <?php endwhile;
             endif;?>
        </div>
    </div>
</section>
<?php }?>