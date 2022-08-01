<?php
/**
 *KE-Block teplate
 *  This is main template 
 * @packages kangarooeducation
 * 
 */
// get_header();
?>




<!-- main bosy part start -->

<!-- slider section starts -->
<!--hero section start-->
<!-- main bosy part start -->

<!-- slider section starts -->
<!--hero section start-->


<div class="rev_slider_wrapper">
    <div id="rev_slider_1" class="rev_slider rev_slider-1">
        <!-- BEGIN SLIDES LIST -->
        <ul>
            <?php $enable_banner=get_field('enable__banner_section');
              if($enable_banner){
                $img_slider_ban_1=get_field('slider_image_ban_1');
                $heading_slider_ban_1=get_field('heading_first_ban_1');
                $coontry_name_ban_1=get_field('heading__country_ban_1');
                $link_slider_ban_1=get_field('link_ban_1');
              ?>
            <li data-index="rs-280" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off"
                data-title="01" data-description="">
                <div class="slider-overlay"></div>

                <?php 
                   if(!empty( $img_slider_ban_1)):?>
                <img src="<?php echo esc_url($img_slider_ban_1['url']);?>"
                    alt="<?php echo esc_attr( $img_slider_ban_1['alt']); ?>" class="rev-slidebg" data-bgparallax="3"
                    data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on"
                    data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0"
                    data-rotatestart="0" data-scaleend="100" data-scalestart="140" />
                <?php endif; ?>
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <!-- BEGIN BASIC TEXT LAYER -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3045-layer-1"
                    data-x="['left','left','center','middle']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-135','0','0','0']"
                    data-fontsize="['56','56','56','56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="
                z-index: 2;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                text-transform: none;
              ">
                    <?php echo $heading_slider_ban_1;?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3045-layer-2"
                    data-x="['left','left','left','left']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']"
                    data-fontsize="['75','75','75','75']" data-lineheight="['90','90','90','90']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="
                z-index: 3;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                text-transform: none;
              ">
                    <?php echo $coontry_name_ban_1;?>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-3045-layer-3" data-x="['left','left','middle','middle']"
                    data-hoffset="['70','70','70','70']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-10','0','0','0']" data-fontsize="['18','18','18','18']"
                    data-lineheight="['68','68','68','50']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','center']" data-paddingtop="[10,10,10,10]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="
                z-index: 5;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                text-transform: none;
                color: #ffffff;
              ">
                    Study Abroad
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption Newspaper-Button rev-btn" id="slide-1687-layer-5"
                    data-x="['left','left','left','left']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','0','0','0']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-fontsize="['16','16','16','16']" data-type="button"
                    data-responsive_offset="on" data-responsive="on"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                    data-paddingright="[30,30,30,30]" data-paddingbottom="[15,15,15,15]"
                    data-paddingleft="[30,30,30,30]" style="
                z-index: 8;
                font-weight: 600;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                outline: none;
                box-shadow: none;
                border: none;
                background: #ffffff;
                color: #3f77fa;
                cursor: pointer;
                letter-spacing: 0;
                border-radius: 5px;
              ">
                    <?php 
                                          
                       if($link_slider_ban_1):
                                                   
	                    $link_url = $link_slider_ban_1['url'];
	                    $link_title = $link_slider_ban_1['title'];
	                    $link_target = $link_slider_ban_1['target'] ? $link_slider_ban_1['target'] : '_self';?>

                    <a href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                    <?php endif; ?>
                </div>
            </li><?php }?>

            <?php
             
                $img_slider_ban_2=get_field('image_slider_ban_2');
                $img_thumbslider_ban_2=get_field('thumb_image_slider_ban_2');
                $heading_slider_ban_2=get_field('heading_first_slider_ban_2');
                $coontry_name_ban_2=get_field('heading_country_ban_2');
                $link_slider_ban_2=get_field('link_slider_ban_2');
              ?>
            <li data-index="rs-20" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000"
                data-thumb="<?php echo get_template_directory_uri().'/assets/images/home/slide-10.jpg';?>"
                data-rotate="0" data-saveperformance="off" data-title="03" data-description="">
                <div class="slider-overlay"></div>
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <?php 
                   if(!empty( $img_slider_ban_2)):?>
                <img src="<?php echo esc_url($img_slider_ban_2['url']);?>"
                    alt="<?php echo esc_attr( $img_slider_ban_2['alt']); ?>" data-bgposition="center center"
                    data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                    data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
                    data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina />
                <?php endif;?>
                <!-- BEGIN BASIC TEXT LAYER -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3045-layer-5"
                    data-x="['left','left','left','left']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-135','0','0','0']"
                    data-fontsize="['56','56','56','56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="
                z-index: 2;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
              ">
                    <?php echo $heading_slider_ban_2;?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3045-layer-8"
                    data-x="['left','left','left','left']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']"
                    data-fontsize="['75','75','75','75']" data-lineheight="['90','90','90','90']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,12,12]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[0,0,0,0]" style="
                z-index: 3;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                text-transform: none;
              ">
                    <?php echo $coontry_name_ban_2;?>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-3045-layer-11" data-x="['left','left','left','left']"
                    data-hoffset="['70','70','70','70']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-10','0','0','0']" data-fontsize="['18','18','18','18']"
                    data-lineheight="['68','68','68','50']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                    data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="
                z-index: 5;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                text-transform: none;
                color: #ffffff;
              ">
                    Study Abroad
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption Newspaper-Button rev-btn" id="slide-1687-layer-6"
                    data-x="['left','left','left','left']" data-hoffset="['70','70','70','70']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','0','0','0']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-fontsize="['16','16','16','16']" data-type="button"
                    data-responsive_offset="on" data-responsive="on"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                    data-paddingright="[30,30,30,30]" data-paddingbottom="[15,15,15,15]"
                    data-paddingleft="[30,30,30,30]" style="
                z-index: 8;
                font-weight: 600;
                white-space: nowrap;
                font-family: 'Poppins', sans-serif;
                outline: none;
                box-shadow: none;
                border: none;
                background: #ffffff;
                color: #3f77fa;
                cursor: pointer;
                letter-spacing: 0;
                border-radius: 5px;
              ">
                    <?php 
                                          
                       if($link_slider_ban_2):
                                                   
	                    $link_url = $link_slider_ban_2['url'];
	                    $link_title = $link_slider_ban_2['title'];
	                    $link_target = $link_slider_ban_2['target'] ? $link_slider_ban_2['target'] : '_self';?>

                    <a href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
        <!-- END SLIDES LIST -->
    </div>
    <!-- END SLIDER CONTAINER -->
</div>
<!-- END SLIDER CONTAINER WRAPPER -->

<!-- END SLIDER CONTAINER WRAPPER -->
<!-- END SLIDER CONTAINER WRAPPER -->
<!-- About section starts -->
<section class="pt-50 pb-50">
    <div class="aboutus">
        <div class="container ">
            <div class="row">

                <div class="col-md-7">
                    <div class="inner_section_title t_left text-start">
                        <?php

                        $sec1_heading=get_field("heading_main");
                        $sec1_des= get_field("paragraph_seection_1");
                       
                        $sec1_img1=get_field("section_1_image_1");
                        $sec1_img2=get_field("section_1_image_2");
                        
                         ;?> <h4 class="themestek-custom-heading ">About KEF</h4>
                        <h3><?php echo $sec1_heading;?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <!-- about para -->
                    <div class="about_para ">
                        <p>
                            <?php echo $sec1_des;?>

                        </p>
                        <div class="aboutbox">

                            <div class="row">
                                <?php 
                                 if(have_rows('link_section_1_con')):
    
                              
                                while(have_rows('link_section_1_con')):the_row();
                                   $sec1_icon= get_sub_field('icon_img');
                                   $sec1_title= get_sub_field('title');
                                  ?>
                                <div class="col-md-4">
                                    <div class="kef_service">
                                        <div class="kef_card">
                                            <div class="icon-box"><i class="flaticon-<?php echo $sec1_icon;?> "></i>
                                            </div>
                                            <?php 
                                             $sec1_link= get_sub_field('icon_link');
                                             if($sec1_link):
                                                   
	                                           $link_url = $sec1_link['url'];
	                                            $link_title = $sec1_link['title'];
	                                           $link_target = $sec1_link['target'] ? $sec1_link['target'] : '_self';
	                                              ?>
                                            <h3><a href="<?php echo  esc_url($link_url);?>"
                                                    target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title);?>
                                                </a>
                                            </h3>
                                            <?php endif; ?>

                                            <div class="link"><a href="#"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- <div class="col-md-4">
                                    <div class="kef_service">
                                        <div class="kef_card">
                                            <div class="icon-box"><i class="flaticon-flight"></i></div>

                                            <h3><a href="#">Preparation Classes</a></h3>

                                            <div class="link"><a href="#"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="kef_service">
                                        <div class="kef_card">
                                            <div class="icon-box"><i class="flaticon-phone"></i></div>

                                            <h3><a href="#">Support Services</a></h3>

                                            <div class="link"><a href="#"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                        </div>
                        <!-- <a class="btn-get-started me-3 mb-4 knowmore" href="aboutus.html">Know More</a> -->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_left position-relative">
                        <?php 
                        if(!empty($sec1_img1)):?>
                        <img width="470" height="470" src="<?php echo esc_url($sec1_img1['url']);?>" class="img-fluid"
                            alt="<?php echo esc_attr($sec1_img1['alt']); ?>">
                        <?php endif; ?>

                        <div class="addimg">
                            <?php 
                              if(!empty($sec1_img1)):?>
                            <img width="370" height="275" src="<?php echo esc_url($sec1_img2['url']);?>"
                                class="img-fluid" alt="<?php echo esc_attr($sec1_img2['alt']); ?>">
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us section ends -->
<!-- Destinations -->
<section class="pt-50 bg-theme bg_cover position-relative mt-5">
    <div class="container">
        <div class="destinations">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <?php
                    $sec2_heading=get_field("sec2_heading_1_home");
                    $sec2_sub_head=get_field("sec2_heading_2_home");
                    $sec2_des=get_field("sec2_des_home");
                    ?>
                    <div class="dest_left">
                        <div class="inner_section_title t_left text-start">
                            <h4 class="themestek-custom-heading "><?php echo $sec2_heading;?></h4>
                            <h3 class="text-white" <?php echo $sec2_sub_head;?></h3>
                                <div class="sec_line-main  text-start d-flex">
                                    <div class="sec_line sec_line-big "></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="dest_para">
                        <p class="text-white">
                            <?php echo $sec2_des;?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-200 bg_country">
    <div class="container">
        <div class="service_card">
            <div class="owl-carousel owl-theme immigrateservice">

                <?php $args_selection=array(
                 
                            'post_type'=>'page',
                            'post_parent' => 54,
                            'posts_per_page'=>'6',
                            'post_status'=>'publish',
                            'order'=>'DESC',
                            'orderby'=>'date'

                        );
                      
                        $featured_two=new WP_Query($args_selection);
                         if($featured_two->have_posts()):
                    while($featured_two->have_posts()):$featured_two->the_post();
                    ?>

                <div class="item">
                    <div class="card border-0  h-100">
                        <img src="<?php the_post_thumbnail_url();?>" alt="...">


                        <div class="card-body">
                            <h5 class="card-title "><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                            </h5>
                            <p class="card-text"><?php the_excerpt();?></p>
                            <a class="btn-get-started bg-transparent
                                border text-theme rounded-3" href="<?php the_permalink(); ?>">Read More</a>
                        </div>

                    </div>
                </div>
                <?php
         endwhile;
         wp_reset_postdata();
         endif;
         ?>
                <!-- 
                <div class="item">
                    <div class="card border-0  h-100">
                        <img src="'/assets/img/canada.jpg';?>"
                            class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title ">
                                <a href="canada.html">Canada</a>
                            </h5>
                            <p class="card-text">Canada, a developed country, is in North America bordering with
                                USA. It offers higher education which is internationally recognized and globally
                                respected for its quality with affordable tuition fees</p>
                            <a class="btn-get-started bg-transparent
                                border text-theme rounded-3" href="canada.html">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- book for consultation -->
<section class="pt-50 free_assessment">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3 shadow bg-theme">
                    <div class="row g-0 ">
                        <div class="col-md-4">

                            <?php 
                              $img1=get_field("image_assesment");
                            if(!empty($img1)):?>
                            <img src="<?php echo esc_url($img1['url']);?>" class="img-fluid rounded-start h-100"
                                alt="<?php echo esc_attr($img1['alt']);?>">
                            <?php endif ;?>
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-body">
                                <?php 
                                 $heading_title=get_field("heading_title");
                                 $des_title=get_field("description");
                                 $link_title=get_field("assesment_link");
                               
                                 ?>
                                <h5 class="card-title text-white fw-bold"><?php echo $heading_title;?></h5>
                                <p class="card-text-online"><?php echo $des_title;?></p>

                                <?php
                                     $link_assement=get_field('assesment_link');
										if ( $link_assement ):
											$link_url = $link_assement['url'];
											$link_title = $link_assement['title'];
											$link_target = $link_assement['target'] ? $link_assement['target'] : '_self';
										?>

                                <a class="btn btn-primary btn-sm mybtn mt-4 mb-3 border"
                                    href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?> class=" Kef_btn btn-one"><i
                                        class="fas fa-phone ms-2"></i><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- countdown -->
<section class="whyus pt-50 pb-50 mt-5">
    <div class="theme1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="dest_left">
                    <div class="inner_section_title t_left text-start">
                        <?php 
                         $heading3=get_field('title_choose');
                         $subheading3=get_field('sub_title_choose');
                         $des2=get_field('description_choose');
                         ;?>
                        <h4 class="themestek-custom-heading "><?php echo $heading3;?></h4>
                        <h3 class="text-white"><?php echo $subheading3;?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="choosepara">
                        <p class="text-white"><?php echo $des2;?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php 
                $map_img3=get_field('map_img3');
                if(!empty($map_img3)):
                ;?>
                <img src="<?php echo esc_url($map_img3['url']);?>" alt="<?php echo esc_attr($map_img3['alt']);?>"
                    class="img-fluid">
                <?php endif ;?>
            </div>
        </div>
        <hr>
        <div class="mycount">

            <div class="row text-center">
                <?php 
                if(have_rows('choosen_info')):
                    while(have_rows('choosen_info')):the_row();
                    $icon_img3=get_sub_field('icon_choose');
                    $num3=get_sub_field('numbers_choosen');
                    $headingby=get_sub_field('heading_by');
                   ;?>
                <div class="col-md-3 col-6">
                    <div class="count1">
                        <i class="fas fa-<?php echo $icon_img3;?>"></i>
                        <span class="d-block"><?php echo $num3;?> <sub>+</sub></span>
                        <h3><?php echo $headingby;?></h3>
                    </div>
                </div>
                <?php endwhile;
        endif;?>
                <!-- <div class="col-md-3 col-6">
                    <div class="count1">
                        <i class="fas fa-plane"></i>
                        <span class="d-block">150 <sub>+</sub></span>
                        <h3>Countries</h3>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</section>

<!-- affiliated universities -->
<!-- Associated Partners section Starts -->
<section class="">
    <div class="maintop associated_partners pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-center">
                        <h3 class="">Institutions we Represents</h3>


                        <div class="sec_line-main m-auto text-center
                                    justify-content-center d-flex">
                            <div class="sec_line sec_line-big m-auto"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end section header title -->

            <!-- partners section -->
            <div class="owl-carousel owl-theme our_partners mt-4">
                <?php 
                $institution_selection_one=array(
               'post_type'=>'institution',
                'posts_per_page'=>'12',
               'post_status'=>'publish',
               'orderby'=>'date'

              );
              $institution_featured_one= new WP_Query($institution_selection_one);
              if($institution_featured_one->have_posts()):
               while($institution_featured_one->have_posts()):$institution_featured_one->the_post();
                ?>
                <div class="item">
                    <a href="<?php the_permalink();?>">
                        <div class="brands_item d-flex flex-column justify-content-center">
                            <img src="<?php the_post_thumbnail_url();?>" alt="...">

                            <!-- <img src="<?php echo get_template_directory_uri().'/assets/kangarooedu.com/images/thumbnail/1556558087.jpg';?>" alt="Southern Cross University"> -->
                        </div>
                    </a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
               endif;?>
            </div>
        </div>
    </div>
</section>

<!-- Student Review section Starts -->
<section class="">
    <div class="maintop student_review pt-5 pb-4">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-center">
                        <h3 class="">Students' Reviews</h3>


                        <div class="sec_line-main m-auto text-center
                                    justify-content-center d-flex">
                            <div class="sec_line sec_line-big m-auto"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end section header title -->

            <!-- review section -->
            <script src="<?php echo get_template_directory_uri().'/assets/staticelfsight/platform/platform.js';?>"
                defer></script>
            </script>
            <div class="elfsight-app-c16ccae7-5d68-4c2f-8b35-33efda1f380f"></div>
        </div>
    </div>
</section>
<!-- Book for consulation section -->
<div class="request-back-area req_img1 mt-5">
    <div class="background_overlay">
        <div class="container text-center">

            <div class="row d-flex justify-content-center
                    align-items-center p-3">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="request-content">

                    </div>
                    <p class="fs-4 w-50 w-md-100 m-auto">We’re here to guide you through! Give us a call to
                        receive a FREE ONE-ON-ONE Consultation.</p>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 ">

                    <div class="form-wrapper">

                        <a class="btn-get-started booknow p-3" href="#" data-bs-toggle="modal"
                            data-bs-target="#booknowModal">Book A
                            Consultation!!</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- blog section strats -->
<section class="blogs pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_section_title t_left text-center">
                    <h3 class="">Latest News</h3>


                    <div class="sec_line-main m-auto text-center
                                justify-content-center d-flex">
                        <div class="sec_line sec_line-big m-auto"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php 
                            $args_post_home=array(
                                    'post_type'=>'post',
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
        
                            );
                                        $featured_post_home= new WP_Query($args_post_home);
                                        if($featured_post_home->have_posts()):
                                            while($featured_post_home->have_posts()):$featured_post_home->the_post();
                            
                        ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php the_post_thumbnail_url();?>" alt="..." class="card-img-top"
                        data-pagespeed-url-hash="1256136442"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="card-body">
                        <a href="<?php the_permalink();?>">
                            <h5 class="card-title"><?php  echo the_title();?></h5>
                        </a>
                        <p class="card-text">
                            <?php echo the_excerpt();?>
                        </p>

                        <div class="mb-0 col-12 d-flex mainbtn  justify-content-start">
                            <a class="btn-get-started bg-transparent
                                border text-theme rounded-3" href="<?php the_permalink();?>">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            endwhile;
            wp_reset_postdata();
        endif;?>
            <!-- <div class="col-md-4">
                <div class="card h-100">
                    <img src="'/assets/kangarooedu.com/images/thumbnail/1613377794.jpg" class="card-img-top';?>"
                        alt="..." data-pagespeed-url-hash="1256136442"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">First thing to do after arriving in Australia</h5>
                        </a>
                        <p class="card-text">
                            Nepalese students have been studying abroad in the USA, UK, Australia, New Zealand,
                            Canada and many more countries for over 5 decades. The trend seems to grow rapidly
                            after the 2006 Nepalese revolution
                        </p>

                        <div class="mb-0 col-12 d-flex mainbtn  justify-content-start">
                            <a class="btn-get-started bg-transparent
                                border text-theme rounded-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo get_template_directory_uri().'/assets/kangarooedu.com/images/main/1617194569.jpg" class="card-img-top';?>"
                        alt="..." data-pagespeed-url-hash="1256136442"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Career plan v/s psychological aspect for better score in
                                IELTS</h5>
                        </a>
                        <p class="card-text">
                            Nepalese students have been studying abroad in the USA, UK, Australia, New Zealand,
                            Canada and many more countries for over 5 decades. The trend seems to grow rapidly
                            after the 2006 Nepalese revolution
                        </p>

                        <div class="mb-0 col-12 d-flex mainbtn  justify-content-start">
                            <a class="btn-get-started bg-transparent
                                border text-theme rounded-3" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Associated certify section Starts -->
<section class="pt-50 pb-50  bg-light mt-5 mb-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="maintop associated_partners pt-5 pb-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner_section_title t_left text-center certification">
                                <?php 
                                $title_certification=get_field('title_certification');?>
                                <h3 class=""><?php echo $title_certification;?></h3>


                                <div class="sec_line-main m-auto text-center
                                                justify-content-center d-flex">
                                    <div class="sec_line sec_line-big m-auto"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end section header title -->

                    <!-- partners section -->
                    <div
                        class="owl-carousel owl-theme our_certify d-flex align-items-center justify-content-center  p_cert">
                        <?php
                        if(have_rows('icon_certification')):
                            while(have_rows('icon_certification')):the_row();
                            $image4=get_sub_field('image_certification');
                        ?>
                        <div class="item">
                            <div class="brands_item d-flex flex-column justify-content-center">

                                <?php 
                              if(!empty( $image4)):?>
                                <img src="<?php echo esc_url($image4['url']);?>"
                                    alt="<?php echo esc_attr( $image4['alt']); ?>">
                                <?php endif; ?>

                                <!-- <img src="<?php echo get_template_directory_uri().'/assets/img/m1.png';?>" alt=""> -->
                            </div>
                        </div>
                        <?php endwhile;
                        endif;?>
                        <!-- <div class="item">
                            <div class="brands_item d-flex flex-column
                                            justify-content-center"><img
                                    src="<?php echo get_template_directory_uri().'/assets/img/m2.jpg';?>" alt=""></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="maintop associated_partners pt-5 pb-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner_section_title t_left text-center">
                                <?php $title_partner=get_field('heading_partners');?>
                                <h3 class=""><?php echo $title_partner;?></h3>


                                <div class="sec_line-main m-auto text-center
                                            justify-content-center d-flex">
                                    <div class="sec_line sec_line-big m-auto"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end section header title -->

                    <!-- partners section -->
                    <div
                        class="owl-carousel owl-theme our_certify d-flex align-items-center justify-content-center p_cert">
                        <?php
                        if(have_rows('icon_partners')):
                            while(have_rows('icon_partners')):the_row();
                            $image5=get_sub_field('image_partner');
                        ?>
                        <div class="item">
                            <div class="brands_item  d-flex flex-column
                                        justify-content-center">
                                <?php 
                              if(!empty( $image5)):?>
                                <img src="<?php echo esc_url($image5['url']);?>"
                                    alt="<?php echo esc_attr( $image5['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile;
                        endif;?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<!-- associate partners section ends -->
<!-- associate partners section ends -->
<!-- newsletter -->
<!-- <section class="pb-50">
        <div class="container">
            <div class="req_img p-4">

                <div class="row justify-content-center  align-items-center">
                    <div class="col-md-10">
                        <p>Get The Latest Notification For Our Events, Seminars &amp; Offers.</p>
                        <form class="d-flex">
                            <input class="form-control" type="search" placeholder="Subscribe for Newsletter..." aria-label="Search" spellcheck="false" data-ms-editor="true">
                            <button class="btn btn-outline-success p-60 rounded-0 search_btn" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php get_footer();?>