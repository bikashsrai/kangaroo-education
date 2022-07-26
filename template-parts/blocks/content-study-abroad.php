<?php
/**
 * blocks showing study abroad
 * 
 */
?>
<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>
</div>

<!-- country info -->
<?php 
            $enable1_section=get_field('enable_section_1_stdy');
            if($enable1_section){
                $des1_stdy=get_field('description1_stdy');
                
          ?>
<section class="pt-50">
    <div class="container">
        <div class="countryinfo">
            <p><?php echo $des1_stdy ;?>
            </p>

        </div>
    </div>
</section>
<?php }?>

<section>
    <div class="container">
        <div class="countryinfo1">
            <div class="row">

                <?php 
            $enable2_section=get_field('enable_section_2_stdy');
            if($enable2_section){?>
                <div class="col-md-8 bg-light p-3">
                    <div class="study_left">
                        <?php 
                        
                        if(have_rows('title_heading_stdy')):
                        while(have_rows('title_heading_stdy')):the_row();
                        $heading2_stdy=get_sub_field('heading_1_stdy');
                        $des2_stdy=get_sub_field('description_1_stdy');
                        ?>
                        <h4></h4><?php echo $heading2_stdy ;?></h4>
                        <p><?php echo $des2_stdy;?></p>
                        <hr>
                        <?php endwhile;
                        endif;?>
                    </div>
                </div>
                <?php }?>

                <?php 
            $enable3_section=get_field('enable_contact_form_stdy');
            if($enable3_section){
                $stdy_shortcode1=get_field('contact_form_stdy');
                $title1_cfm=get_field('first_part_title_stdy');
                $title12_cfm=get_field('second_part_title_stdy');
                $bak3_img_cfm=get_field('background_image_stdy');
                $img3_cfm=get_field('image_stdy');
                $link3_cfm=get_field('link_stdy');
                
                ?>
                <div class="col-md-4 ">
                    <div class="coursedetail_right">
                        <div class="reply-area">
                            <h3 class="text-white mb-3 border-bottom pb-3">Speak With Experts</h3>
                            <form id="contact-form" action="#">
                                <?php echo do_shortcode($stdy_shortcode1);
                                ?>
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <label for="Name">Name</label>
                                        <input type="text" name="con_name">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Name">Email</label>
                                        <input type="email" name="con_email">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Name">Phone</label>
                                        <input type="phone" name="con_email">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Name">Nearest Office</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">-- Select Nearest Office --</option>
                                            <option value="1">Adeliade</option>
                                            <option value="2">Sydney</option>
                                            <option value="3">Tasmania</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Name">Services</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">-- Select Services --</option>
                                            <option value="1">Migration Services</option>
                                            <option value="2">Student Services</option>
                                            <option value="3">Education Counseling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">

                                        <label for="">Message</label>
                                        <textarea name="con_message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="slider-btn">Speak Now!<i
                                            class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                </div> -->
                            </form>
                        </div>
                        <!-- banner -->
                        <div class="Kef_side_banner mt-4">
                            <div class="Kef_side_box"
                                style="background-image:url('<?php echo esc_url( $bak3_img_cfm['url'] ); ?>')">
                                <div class="bg-layer"></div>
                                <div class="image-layer">
                                    <?php
                                    if ( ! empty( $img3_cfm ) ): ?>
                                    <img src="<?php echo esc_url( $img3_cfm['url'] ); ?>"
                                        alt="<?php echo esc_attr( $img3_cfm['alt'] ); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="Kef_top">
                                    <h6><?php echo $title1_cfm;?></h6>
                                    <?php echo $title12_cfm;?>
                                    <ul class="list clearfix">
                                        <?php 
                                        if(have_rows('study_list__stdy')):
                                        while(have_rows('study_list__stdy')):the_row();
                                        $list_title_stdy=get_sub_field('list_title_stdy');?>
                                        <li><?php echo $list_title_stdy;?></li>
                                        <?php endwhile;
                                        endif;?>
                                    </ul>
                                </div>
                                <div class="Kef_below">
                                    <?php
										if ( $link3_cfm ):
											$link_url = $link3_cfm['url'];
											$link_title = $link3_cfm['title'];
											$link_target = $link3_cfm['target'] ? $link3_cfm['target'] : '_self';
										?>

                                    <a href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?> class=" Kef_btn
                                        btn-one"><?php echo esc_html( $link_title ); ?><i class="flaticon-next"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <hr>
                <?php 
                        if(have_rows('study_deatails')):
                        while(have_rows('study_deatails')):the_row();
                        $titile_3_stdy=get_sub_field('titile_3_stdy');
                        $des_3_stdy=get_sub_field('description_3_stdy');
                        $img_3_stdy=get_sub_field('image_3_stdy');
                        ?>
                <div class="col-md-12 bg-light p-3">
                    <div class="row">

                        <div class="col-md-5">
                            <?php
																if ( ! empty(   $img_3_stdy ) ): ?>
                            <img src="<?php echo esc_url(   $img_3_stdy['url'] ); ?>"
                                alt="<?php echo esc_attr(   $img_3_stdy['alt'] ); ?>" width="100%" height="350">
                            <?php endif; ?>

                        </div>
                        <div class="col-md-7"><?php echo $titile_3_stdy;?></h4>
                            <p><?php echo $des_3_stdy;?></p>
                        </div>

                    </div>
                </div>
                <?php endwhile;
                    endif;?>


                <?php 
                        if(have_rows('study_details_info_stdy')):
                            while(have_rows('study_details_info_stdy')):the_row();
                            $title_part2_stdy=get_sub_field('title_part2_stdy');
                            $des_part2_stdy=get_sub_field('description_part2_stdy');
                            $img_part2_stdy=get_sub_field('image_part2_stdy');
                        ?>
                <div class="col-md-12 bg-light p-3">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="text-theme"><?php echo $title_part2_stdy;?> </h4>
                            <p>
                                <?php echo $des_part2_stdy;?></p>
                        </div>
                        <div class="col-md-5">
                            <?php 
                            if(!empty($img_part2_stdy)):?>
                            <img src="<?php echo esc_url($img_part2_stdy['url']);?>"
                                alt="<?php echo esc_attr(   $img_3_stdy['alt'] ); ?>" width="100%" height="500">
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endwhile;

                    endif;?>


            </div>


        </div>
</section>