<!-- country info -->
<?php require get_template_directory() . '/bannersec.php';?>

<?php
$enable1_who=get_field('enable_section1_who');
if($enable1_who){
    
    $des1_who=get_field('description_1_who')?:'Detailed Messages';
    $des2_who=get_field('description2_who')?:'Detailed Messages';
?>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="testprepn">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading ">About Us</h4>
                        <h3><?php echo the_title();?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="test_para">
                        <p>
                            <?php echo $des1_who;?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light pt-50 pb-50 mt-5">
    <div class="container">
        <p class="fs-5 text-theme" <?php echo $des2_who;?></p>
    </div>
</section>
<?php }?>

<?php
$enable2_who=get_field('enable_section2_who');
if($enable2_who){
    
    $des3_who=get_field('description3_who')?:'Detailed Messages';
    $img3_who=get_field('image3_who')?:'Image';
?>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri().'/assets/img/about.png';?>" alt=""
                    class="img-fluid w-100">
            </div>
            <div class="col-md-6">
                <div class="allpara">
                    <p><?php echo $des3_who;?></p>
                </div>
                <div class="row">
                    <?php
                    if(have_rows('info_who')):
                        while(have_rows('info_who')):the_row();
                         $bak4_color_who=get_sub_field('background_color_who');
                         $icon4_who=get_sub_field('icon_who');
                         $title4_who=get_sub_field('title_who')?:'Title';
           
                    ?>
                    <div class="col-lg-4  col-sm-12 col-xs-4 p_lr5 m_b10">
                        <div class="height_manage bg_<?php echo $bak4_color_who ;?> text-center height_190">
                            <div class="p_a10">
                                <div class="icon font_55 white ">
                                    <span class="fa fa-<?php echo $icon4_who;?>"></span>
                                </div>
                                <h2 class="white font_21 font_weight900 text-uppercase"><?php echo $title4_who ;?></h2>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    endif;?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>

<?php
$enable3_who=get_field('enable_section_target_description');
if($enable3_who){
    
    $des1_who=get_field('description_1_who')?:'Detailed Messages';
    $des2_who=get_field('description2_who')?:'Detailed Messages';
?>
<section class="pt-50 pb-50 bg-light">
    <div class="container">
        <div class="row">
            <?php
                    if(have_rows('target_and_values_who')):
                        while(have_rows('target_and_values_who')):the_row();
                         $titl_who=get_sub_field('title4_who');
                         $descip_who=get_sub_field('description4_who');
                       
                    ?>
            <div class="col-md-6">
                <div class="card c1">
                    <div class="card-body">
                        <h5 class="card-title text-theme fw-bold"><?php echo $titl_who;?></h5>
                        <p class="card-text"><?php echo $descip_who;?></p>

                    </div>
                </div>
            </div>
            <?php endwhile;
                    endif;?>

            <?php
                    if(have_rows('visions_who')):
                        while(have_rows('visions_who')):the_row();
                         $titl2_who=get_sub_field('title5_who');
                         $des2_who=get_sub_field('description5_who');
                        
           
                    ?>
            <div class="col-md-4 pt-3">
                <div class="card c1">
                    <div class="card-body">
                        <h5 class="card-title text-theme"><?php echo $titl2_who ;?></h5>
                        <p class="card-text"><?php echo $des2_who;?></p>

                    </div>
                </div>
            </div>
            <?php endwhile;
                    endif;?>

        </div>
    </div>
</section>
<?php }?>