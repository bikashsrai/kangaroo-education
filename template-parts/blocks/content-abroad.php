 <?php require get_template_directory() . '/bannersec.php';?>
 <section class="summary_of_consultancy">
     <div class="container">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">DREAM DESTINATIONS</h1>
             <div class="style_bar"></div>
         </div>

         <div class="blogs ">
             <div class="row">


                 <?php $args_abroad=array(
                 
                            'post_type'=>'page',
                            'post_parent' => 54,
                            'posts_per_page'=>'6',
                            'post_status'=>'publish',
                            'order'=>'DESC',
                            'orderby'=>'date'

                        );
                      
                        $featured_sd=new WP_Query($args_abroad);
                         if($featured_sd->have_posts()):
                    while($featured_sd->have_posts()):$featured_sd->the_post();
                    ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p_t60">
                     <a href="<?php the_permalink();?>">
                         <div class="destinaton_hover">

                             <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fluid">

                         </div>
                     </a>
                     <div class="country_name_inner">
                         <h1 class="font_weight300 black font_28 p_t25">
                             <a href="<?php the_permalink();?>" class="black"> <?php echo the_title();?></a>
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
              endif;
             ?>
             </div>
         </div>
     </div>
 </section>