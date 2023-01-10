 <?php
/**
 *KE-Block template
 *  This is main new template 
 * @packages kangarooeducation
 * 
 */
// get_header();
?>
 <!-- main bosy part start -->

  <!-- slider section starts -->
    <!--hero section start-->

 <div class="home_slider">

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          
            <div class="carousel-inner"><?php 
				if(have_rows('slide_rep')):
				$count=1;
				while(have_rows('slide_rep')):the_row();
				if($count==1){
					$active_slide="active";
				}else{
					$active_slide="";
				}
				?>
				<?php 
				$slide_image=get_sub_field('slide_image');
				if($slide_image):?>
                <div class="carousel-item <?php echo $active_slide;?>">
                   <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />

                </div>
				<?php endif;
				$count++;
				endwhile;
				endif;?>

            </div>

        </div>
    </div>
    <!-- END SLIDER CONTAINER WRAPPER -->

    <!--hero section end-->
 <!-- slider section ends -->
 <!-- search section starts -->
 <section>
     <div class="req_img homesearch p-3">
         <div class="container">
             <!---->
            <div class="col-md-10 offset-md-1">
					 <?php echo get_search_form(); ?>
				</div>
                <!---->

             <!--<div class="row justify-content-center  align-items-center">-->
             <!--    <div class="col-md-10 ">-->
             <!--        <div class="row g-0 h-100">-->
             <!--           <?php echo get_search_form(); ?>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->
         </div>
     </div>
 </section>
 <!-- end of search -->

 <!-- About section starts -->
 <section class="summary_of_consultancy ">
     <div class="container">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">start smart</h1>
             <div class="style_bar"></div>
         </div>
         <?php
        $argswho = array(
             'post_type' => 'page',
             'post__in' => array( 48)
        );
         $featured_who= new WP_Query($argswho);
         if($featured_who->have_posts()):
         while($featured_who->have_posts()):$featured_who->the_post();
                            
         ?>
         <div class="brief_summary text-center ">
             <h2 class="font_weight300 font_17">
                 <?php the_excerpt();?>
             </h2>
             <a href="<?php the_permalink();?>" class="btn know_more_home text-uppercase font_22">
                 know more</a>

             <?php 
            endwhile;
            wp_reset_postdata();
         endif;?>
         </div>
         <div class="home_service_box">
             <div class="row">
                 <?php
        $argsab = array(
             'post_type' => 'page',
             'post__in' => array( 54)
        );
         $featured_ab= new WP_Query($argsab);
         if($featured_ab->have_posts()):
         while($featured_ab->have_posts()):$featured_ab->the_post();
                            
         ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 home_icon_1 text-center p_tb40 position-relative">
                     <div class="start_smart">
                         <span class="fa fa-graduation-cap home_icon "></span>
                         <h2 class="text-uppercase">
                             <?php echo the_title();?>
                         </h2>
                         <div class="text-center ">
                             <div class="plus_icon icon_control plus_white"></div>
                         </div>
                         <a href="<?php the_permalink();?>" class="hover_color">
                             <div class="home_over_lay_1">
                                 <div class="hover_open_more">
                                     <ul>
                                         <li>
                                             <div class="three_plus"></div>
                                         </li>
                                         <li>
                                             <h2 class="text-uppercase text-center">KNOW MORE </h2>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <?php 
            endwhile;
            wp_reset_postdata();
         endif;?>
                 <?php
         $argstp = array(
             'post_type' => 'page',
             'post__in' => array( 60)
        );
         $featured_tp= new WP_Query($argstp);
         if($featured_tp->have_posts()):
         while($featured_tp->have_posts()):$featured_tp->the_post();
                            
         ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 home_icon_2 text-center p_tb40 position-relative">
                     <div class="start_smart">
                         <span class="fa fa-bullseye home_icon "></span>
                         <h2 class="text-uppercase">
                             <?php echo the_title();?>
                         </h2>
                         <div class="text-center ">
                             <div class="plus_icon icon_control plus_white"></div>
                         </div>
                         <a href="<?php the_permalink();?>" class="hover_color">
                             <div class="home_over_lay_1">
                                 <div class="hover_open_more">
                                     <ul>
                                         <li>
                                             <div class="three_plus"></div>
                                         </li>
                                         <li>
                                             <h2 class="text-uppercase text-center">KNOW MORE </h2>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <?php 
            endwhile;
            wp_reset_postdata();
         endif;?>
                 <?php
        $argscs = array(
             'post_type' => 'page',
             'post__in' => array( 385)
        );
         $featured_cs= new WP_Query($argscs);
         if($featured_cs->have_posts()):
         while($featured_cs->have_posts()):$featured_cs->the_post();
                            
         ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 home_icon_3 text-center p_tb40 position-relative">
                     <div class="start_smart">
                         <span class="fas fa-ticket-alt home_icon "></span>
                         <h2 class="text-uppercase">
                             <?php echo the_title();?>
                         </h2>
                         <div class="text-center ">
                             <div class="plus_icon icon_control plus_white"></div>
                         </div>
                         <a href="<?php the_permalink();?>" class="hover_color">
                             <div class="home_over_lay_1">
                                 <div class="hover_open_more">
                                     <ul>
                                         <li>
                                             <div class="three_plus"></div>
                                         </li>
                                         <li>
                                             <h2 class="text-uppercase text-center">KNOW MORE </h2>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <?php 
            endwhile;
            wp_reset_postdata();
         endif;?>
             </div>
         </div>
     </div>
 </section>
 <!-- About us section ends -->
 <!-- institution er represent -->
<section class="summary_of_consultancy">
     <div class="container">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">INSTITUTIONS WE REPRESENT</h1>
             <div class="style_bar"></div>
         </div>

         <div class="text-center">
             <div class=" institute_logo">
                 <div class="owl-carousel college_slider">
                     <?php 
                     $institution_selection_one = array(
                        'post_type'=>'institution',
                        'posts_per_page'=>'20',
                        'post_status'=>'publish',
                        'orderby'=>'date'  
                    );
                     $institution_featured_one= new WP_Query( $institution_selection_one );
                     if ( $institution_featured_one->have_posts() ) :
                        // numbers of items to wrapped
                        $divWrap = 3;
                        while ( $institution_featured_one->have_posts() ) :
                            $institution_featured_one->the_post();
                             // check for initial and next wrap items open
                            if ( $divWrap % 3 == 0 ) {
                                echo '<div class="items">';
                            }
                            ?>
                     <div class="  m_b40">
                         <a href="<?php the_permalink();?>">
                             <img src="<?php the_post_thumbnail_url();?>" alt="...">
                             <!--<h4>CRICOS: 00111D</h4>-->
                         </a>
                     </div>
                     <?php 
                        // check for next wrap item closed
                         if ( ( $divWrap + 1 ) % 3 == 0 ) {
                            echo '</div>';
                            $status = 0;
                        }
                        else {
                        // check if not divisible by 3
                            $status = 1;
                        }
                        $divWrap++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                // check if not divisible by 3 or post has been finished
                if ( $status == 1 ) {
                    echo '</div>';  
                }
                ?>
                 </div>
             </div>
             <?php
       $link = get_field( 'link_institution' );
       if ( $link ) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
             <a class="btn know_more_home text-uppercase font_22 m_t15" href="<?php echo esc_url( $link_url ); ?>"
                 target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
             <?php endif; ?>


         </div>
          <div class="register_now ">
             <div class="text-center">
                 <a href="" data-bs-toggle="modal" data-bs-target="#enquirynowModal">
                     <?php 
                        $counselling_bak_img=get_field('register_now_banner_bak');
                        ?>
                     <div class="all_background" style="background-image: url('<?php echo esc_url($counselling_bak_img['url'] ); ?>')">
                         <div class="background_overlay">
                             <h2 class="font_weight300 get_free">----- GET FREE COUNSELING -----</h2>
                             <h1 class="font_weight700 font_34">REGISTER NOW!</h1>

                         </div>
                     </div>
                 </a>
             </div>
         </div>

     </div>
 </section>
 <section class="summary_of_consultancy">
     <div class="container">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">DREAM DESTINATIONS</h1>
             <div class="style_bar"></div>
         </div>

         <div class="blogs ">
             <div class="row">
                 <?php 
                            $args_page_home=array(
                                    'post_type'=>'page',
                                     'post_parent' => 54,
                                    'posts_per_page'=>-1,
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
        
                            );
                              $featured_page_home= new WP_Query($args_page_home);
                              if($featured_page_home->have_posts()):
                              while($featured_page_home->have_posts()):$featured_page_home->the_post();
                            
                        ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p_t60">
                     <a href="<?php the_permalink();?>">
                         <div class="destinaton_hover">

                             <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fluid">

                         </div>
                     </a>
                     <div class="country_name_inner">
                         <h1 class="font_weight300 black font_28 p_t25">
                             <a href="<?php the_permalink();?>" class="black"><?php the_title();?></a>
                         </h1>
                         <p class="font_17 text_justify font_weight300 black p_t20">
                             <?php echo esc_html(get_the_excerpt()); ?>
                         </p>
                     </div>
                     <span class="more_option">
                         <div class=" read_more_plus read_plus_icon"></div>
                         <a href="<?php the_permalink();?>"
                             class="text-uppercase common_color font_weight600 font_22 more_blog">more</a>
                     </span>
                 </div>
                 <?php 
                 endwhile;
                 wp_reset_postdata();
                 endif;?>
             </div>
         </div>
     </div>
 </section>

 <!-- stay conneccted -->
 <section class="summary_of_consultancy p_t190">
     <div class="container">
         <?php if ( $newsletter = get_field( 'newsletter' ) ) : ?>
	<?php echo esc_html( $newsletter ); ?>
<?php endif; ?>
     </div>
 </section>
 <section class="m_tb75">
     <div class="container">
         <div class="blogs ">
             <div class="row equal_height">
                 <div class="col-lg-7 col-sm-12 p_l35 p_r20 m_t25">
                     <div class="height_manage">
                         <div class="row equal_height">
                             <?php 
                            $args_post_home=array(
                                    'post_type'=>'post',
                                    'post__in' => array( 882),
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
        
                            );
                              $featured_post_home= new WP_Query($args_post_home);
                              if($featured_post_home->have_posts()):
                              while($featured_post_home->have_posts()):$featured_post_home->the_post();
                            ?>
                             <div class="col-lg-12 col-md-12 col-sm-12 article_background p_a35 m_b35 b1">
                                 <div class="height_manage">
                                     <a href="<?php the_permalink();?>" class="hover_cover">
                                         <div class="button_boxex">
                                             <ul>
                                                 <li>
                                                     <div class="red_button"></div>
                                                 </li>
                                                 <li>more</li>
                                             </ul>
                                         </div>
                                     </a>
                                     <div class="media">
                                         <div class=" read_more_plus read_plus_icon hover_Pointer"></div>
                                         <div class="media-body p_l35">
                                             <h1 class="text-capitalize font_weight300 black font_34">
                                                 <?php echo the_title();?>
                                             </h1>
                                             <div class="divide_bar m_tb35"></div>
                                             <p class="font_17 font_weight300">
                                                  <?php echo esc_html(get_the_excerpt()); ?>
                                             </p>

                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <?php 
                             endwhile;
                             wp_reset_postdata();
                             endif;?>
                             <?php 
                            $args_post_two=array(
                                    'post_type'=>'post',
                                    'post__in' => array( 877),
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
        
                            );
                             $featured_post_two= new WP_Query($args_post_two);
                             if($featured_post_two->have_posts()):
                            while($featured_post_two->have_posts()):$featured_post_two->the_post();
                            ?>
                             <div class="col-lg-12 col-md-12 col-sm-12 common_background p_l35  p_t40 p_b20 b1">
                                 <div class="height_manage">
                                     <a href=" <?php the_permalink();?>" class="hover_cover">
                                         <div class="button_boxex">
                                             <ul>
                                                 <li>
                                                     <div class="red_button"></div>
                                                 </li>
                                                 <li>more</li>
                                             </ul>
                                         </div>
                                     </a>
                                     <div class="media">
                                         <div class=" read_more_plus read_plus_icon hover_Pointer"></div>
                                         <div class="media-body p_lr60">
                                             <h1 class="text-capitalize font_weight300 white font_44">
                                                 <?php echo the_title();?>
                                             </h1>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <?php 
                           endwhile;
                      wp_reset_postdata();
                      endif;?>
                         </div>
                     </div>
                 </div>
                 <?php 
                     $args_post_three=array(
                                    'post_type'=>'post',
                                    'post__in' => array( 703),
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
                                    );
                                     $featured_post_three= new WP_Query($args_post_three);
                                     if($featured_post_three->have_posts()):
                                    while($featured_post_three->have_posts()):$featured_post_three->the_post();
                                    ?>
                 <div class="col-lg-5   p_l35 m_t25">
                     <div class="height_manage article_background right_home_blog">
                         <div class="b1">
                             <div class=" p_a35   ">
                                 <a href="<?php the_permalink();?>" class="hover_cover">
                                     <div class="button_boxex">
                                         <ul>
                                             <li>
                                                 <div class="red_button"></div>
                                             </li>
                                             <li>more</li>
                                         </ul>
                                     </div>
                                 </a>
                                 <div class="media-body">
                                     <h1 class="text-capitalize font_weight300 black font_34">
                                         <?php echo the_title();?>
                                     </h1>
                                     <img src="<?php the_post_thumbnail_url();?>" alt="" class="p_t50 m_b25 img-fluid">
                                     <p class="font_17 font_weight300">
                                         <?php echo esc_html(get_the_excerpt()); ?>
                                     </p>
                                     <div class="divide_bar m_tb35"></div>
                                 </div>
                                 <div class="read_more_plus read_plus_icon hover_Pointer m_l_auto m_r0">
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <?php 
              endwhile;
             wp_reset_postdata();
            endif;?>
                 <?php 
                    $args_post_four=array(
                                    'post_type'=>'post',
                                    'post__in' => array( 767),
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date'
                                );
                    $featured_post_four= new WP_Query($args_post_four);
                    if($featured_post_four->have_posts()):
                    while($featured_post_four->have_posts()):$featured_post_four->the_post();
                     ?>
                 <div class="col-lg-5   p_l35 p_r20 m_t35 ">
                     <div class="height_manage">
                         <div class="b1 article_background">
                             <div class="col-lg-12 p_a35 ">
                                 <a href="<?php the_permalink();?>" class="hover_cover">
                                     <div class="button_boxex">
                                         <ul>
                                             <li>
                                                 <div class="red_button"></div>
                                             </li>
                                             <li>more</li>
                                         </ul>
                                     </div>
                                 </a>
                                 <div class="media-body">
                                     <img src="<?php the_post_thumbnail_url();?>" alt="" class="p_t50 img-fluid">
                                     <div class="divide_bar m_tb35"></div>
                                     <h1 class="text-capitalize font_weight300 black font_34">
                                         <?php echo the_title();?>
                                     </h1>
                                 </div>
                                 <div class=" read_more_plus read_plus_icon hover_Pointer m_l_auto m_r0">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php 
            endwhile;
            wp_reset_postdata();
        endif;?>
                 <?php 
                 $args_post_five=array(
                                    'post_type'=>'post',
                                    'post__in' => array( 680),
                                    'posts_per_page'=>'3',
                                     'post_status'=>'publish',
                                    'order'=>'DESC',
                                    'orderby'=>'date' );
                     $featured_post_five= new WP_Query($args_post_five);
                    if($featured_post_five->have_posts()):
                    while($featured_post_five->have_posts()):$featured_post_five->the_post();   
                     ?>
                 <div class="col-lg-7 p_l35 m_t35 ">
                     <div class="height_manage">
                         <div class="row m_lr0">
                             <div class="col-lg-12 article_background p_a35 m_b30 b1">
                                 <a href="<?php the_permalink();?>" class="hover_cover">
                                     <div class="button_boxex">
                                         <ul>
                                             <li>
                                                 <div class="red_button"></div>
                                             </li>
                                             <li>more</li>
                                         </ul>
                                     </div>
                                 </a>
                                 <div class="media">
                                     <div class=" read_more_plus read_plus_icon hover_Pointer"></div>
                                     <div class="media-body p_l35">
                                         <h1 class="text-capitalize font_weight300 black font_34">
                                             <?php echo the_title();?>
                                         </h1>
                                         <div class="divide_bar m_tb35"></div>
                                         <p class="font_17 font_weight300">
                                            <?php echo esc_html(get_the_excerpt()); ?>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <?php 
                            endwhile;
                      wp_reset_postdata();
                    endif;?>
                             <div class="col-lg-12  p_a35 m_b30">
                                 <div class="p_l45">
                                     <?php
                        $link = get_field( 'blog_post_all' );
                        if ( $link ) :
	                    $link_url = $link['url'];
	                    $link_title = $link['title'];
	                    $link_target = $link['target'] ? $link['target'] : '_self';
	                        ?>
                                     <a class="font_17  font_weight500 black letter_sp6 more_story"
                                         href="<?php echo esc_url( $link_url ); ?>"
                                         target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                     <?php endif; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
 
		 </section>
<!-- 	  -->
	 
	
<!-- 	success storis  -->
	 <section class="p_tb40">
        <div class="container professional_section">
            <div class="home_section_title text-center">
                <h1 class="text-uppercase font_weight300 home_title">SUCCESS STORIES</h1>
                <div class="style_bar"></div>
                <div class="row p_t70 equal_height">
                    <div class="owl-carousel owl-theme testimonial">
						<!-- 	rep-->
						  <?php if ( have_rows( 'testiminial_rep' ) ) : ?>
                 <?php while ( have_rows( 'testiminial_rep' ) ) :
		the_row(); ?>
                        <div class=" m_b40">
                            <div class="student_iamge p_b25">
                               <?php
		                $image_student = get_sub_field( 'image_student' );
		                if ( $image_student ) : ?>
                         <img src="<?php echo esc_url( $image_student['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_student['alt'] ); ?>" />
                         <?php endif; ?>
                            </div>
                            <div class="testimonial_body black m_b40 p_lr25">
								 <?php if ( $studennt_name = get_sub_field( 'studennt_name' ) ) : ?>
                                <h2 class="text-capitalize font_weight500 font_17 m_b0"> <?php echo esc_html( $studennt_name ); ?></h2>
								<?php endif; ?>
								 <?php if ( $faculty_of = get_sub_field( 'faculty_of' ) ) : ?>
                                <p class=" text-capitalize font_weight300 font_17 m_b0"> <?php echo esc_html($faculty_of); ?>
                                </p><?php endif; ?>
								 <?php if ( $university_of = get_sub_field( 'university_of' ) ) : ?>
                                <p class="text-capitalize font_weight300 font_17 m_b0"> <?php echo esc_html($university_of); ?>
                                </p>
								<?php endif; ?>
                                <div class="testimonial_bar m_lr_auto m_tb10"></div>
								  <?php if ( $opinion = get_sub_field( 'opinion' ) ) : ?>
                                <p class="font_weight300 font_17 m_b0">
                                     <?php echo esc_html($opinion); ?>
                                </p>
								<?php endif; ?>
                            </div>
							<?php
		            $link = get_sub_field( 'link_more' );
		            if ( $link ) :
			        $link_url = $link['url'];
			        $link_title = $link['title'];
			        $link_target = $link['target'] ? $link['target'] : '_self';
			        ?>
                            <a href="<?php echo $link_url; ?>"
                         target="<?php echo esc_attr( $link_target ); ?>"<?php echo $link_title; ?> class="text-uppercase views_more font_weight600 font_17 p_lr50 p_tb10 kangaroo_color">more</a>
							    <?php endif; ?>
                        </div>
						 <?php 
            endwhile;
            wp_reset_postdata();
        endif;?>
					<!-- rep -->
                       
                       
                    </div>


                </div>
            </div>
        </div>
    </section>
<!-- 	  -->
	 
	 
<!-- testimonies sec -->

 <!-- certificate -->
 <section class="p_tb40">
     <div class="container professional_section">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">professional certification</h1>
             <div class="style_bar"></div>
             <div class="row">
                 <!--<div class="col-lg-2 col-md-2 col-sm-2 col-6">-->
                 <!--	<img src="https://kangarooedu.com/front/images/professional/1.png" alt="">-->
                 <!--</div>-->
                 <!--  -->
                 <?php if ( have_rows( 'certificate_professional_rep' ) ) : ?>
                 <?php while ( have_rows( 'certificate_professional_rep' ) ) :the_row(); ?>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6">
                     <?php
	        	        $image_professional = get_sub_field( 'image_professional' );
		                  if ( $image_professional ) : ?>
                     <img class="img-fluid" src="<?php echo esc_url( $image_professional['url'] ); ?>"
                         alt="<?php echo esc_attr( $image_professional['alt'] ); ?>" />
                     <?php endif; ?>
                 </div>
                 <?php endwhile; ?>
                 <?php endif; ?>
                 <!--  -->
             </div>
         </div>
     </div>
 </section>
 <section class="p_tb40">
     <div class="container partners_section">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">our partners</h1>
             <div class="style_bar"></div>
             <div class="row text-center">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-start">
                     <h3 class="text-capitalize font_weight300 black font_17">
                         <span class="text-uppercase">ielts</span> partner
                     </h3>
                     <div class="row p_t30">
                         <!--<div class="col-lg-6 col-md-6 col-sm-6 col-6">-->
                         <!--	<img src="https://kangarooedu.com/front/images/partners/1.jpg" alt="">-->
                         <!--</div>-->
                         <?php if ( have_rows( 'ielts_partner_rep' ) ) : ?>
                         <?php while ( have_rows( 'ielts_partner_rep' ) ) :
	                    	the_row(); ?>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                             <?php
		                    $image_ielts_partner = get_sub_field( 'image_ielts_partner' );
		                    if ( $image_ielts_partner ) : ?>
                             <img class="img-fluid" src="<?php echo esc_url( $image_ielts_partner['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image_ielts_partner['alt'] ); ?>" />
                             <?php endif; ?>
                         </div>
                         <?php endwhile; ?>
                         <?php endif; ?>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-start">
                     <h3 class="text-capitalize font_weight300 black font_17">
                         insurance partners
                     </h3>
                     <div class="row p_t30">
                         <?php if ( have_rows( 'insurance_partners_rep' ) ) : ?>
                         <?php while ( have_rows( 'insurance_partners_rep' ) ) :
		            the_row(); ?>
                         <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                             <?php
		               $image_insurance_partner = get_sub_field( 'image_insurance_partner' );
		               if ( $image_insurance_partner ) : ?>
                             <img class="img-fluid" src="<?php echo esc_url( $image_insurance_partner['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image_insurance_partner['alt'] ); ?>" />
                             <?php endif; ?>
                         </div>

                         <?php endwhile; ?>
                         <?php endif; ?>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php require get_template_directory() . '/office_branch_lists.php';?>
 <!-- get free counselling -->
  <!-- enquirynowModal -->
    <div class="modal fade newmodal" id="enquirynowModal" tabindex="-1" aria-labelledby="enquirynowModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <?php if ( $form_couunselling_free = get_field( 'form_couunselling_free' ) ) : ?>
            	<?php echo do_shortcode( $form_couunselling_free); ?>
            <?php endif; ?>
        </div>
    </div>
    

 