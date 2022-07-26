<?php
/**
 * blocks showing message form the ceo
 * 
 */
?>

<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>

<!-- Message info -->
<?php 
$enable_section=get_field('enable_section');
if($enable_section){
    $title_one=get_field('title_one')?:'Message From';
    $title_two=get_field('title_two') ?:'Founder';
    $des_ceo=get_field('description_meassage')?:'Detailed Messages';
    $name_ceo=get_field('name_of_')?:'Name';
    $post_desc=get_field('designation_of')?:'Post';

?>
<section class="pt-50">
    <div class="container">
        <div class="ourmessages">
            <div class="row">
                <div class="col-md-4">
                    <div class="mymessage_image">
                        <img src="https://kangarooedu.com.au/wp-content/uploads/2021/09/ezgif.com-gif-maker-scaled.webp"
                            class="h-100">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner_section_title t_left text-start">
                                <h3 class="text-dark fw-bold"><?php echo $title_one;?> <br><span
                                        class="text-theme"><?php echo $title_two;?></span></h3>

                                <div class="sec_line-main  text-start
                                            ">
                                    <div class="sec_line sec_line-big "></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="message_para">

                        <p><span style="font-weight: 400;"><?php echo $des_ceo;?></span></p>

                        <div class="messagetext">
                            <h6 class="text-dark fw-bold"><?php echo $name_ceo;?></h6>
                            <p><small><?php echo $post_desc;?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }