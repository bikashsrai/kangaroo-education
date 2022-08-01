 <!-- main bosy part start -->
 <!-- breadcrumb -->
 <?php require get_template_directory() . '/bannersec.php';?>

 <!-- Video section starts -->
 <?php 
 $enable_section_video= get_field('enable_video_section');
 if($enable_section_video){
 ?>
 <section class="pt-50">
     <div class="imagegallery">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="inner_section_title t_left text-center">
                         <h3 class=""><?php the_title();?></h3>


                         <div class="sec_line-main m-auto text-center
                        justify-content-center d-flex">
                             <div class="sec_line sec_line-big m-auto"></div>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="page-content page-container">
                 <div class="padding gallery_inner video_gallery">
                     <div class="d-flex justify-content-center">
                         <div class="col-lg-12">
                             <div class="card border-0 bg-transparent">
                                 <div class="card-body">

                                     <div id="lightgallery" class="row lightGallery">
                                         <?php 
                                        if(have_rows('video_gallery_rep')):
                                            while(have_rows('video_gallery_rep')):the_row();
                                            $link_vg=get_sub_field('link_video_gallery');
                                            $image_vg=get_sub_field('image_video_gallery');
                                            $icon_vg=get_sub_field('icon_image_gallery');
                                            $button1_vg=get_sub_field('button_heading_1');
                                            $button2_vg=get_sub_field('button_office_2');
                                        
                                        ?>
                                         <?php 
                                      
                                        if( $link_vg ): ?>
                                         <a class="image-tile col-md-4" href="<?php echo esc_url( $link_vg ); ?> "
                                             data-abc="true">
                                             <?php endif; ?>

                                             <?php 
                                           if(!empty($image_vg)):?>
                                             <img class="mb-0 rounded-0" width="370" height="275"
                                                 src="<?php echo esc_url($image_vg['url']);?>" class="img-fluid"
                                                 alt="<?php echo esc_attr($image_vg['alt']); ?>">
                                             <?php endif; ?>


                                             <div class="demo-gallery-poster">
                                                 <?php
                                              if(!empty($icon_vg)):?>
                                                 <img src="<?php echo esc_url($icon_vg['url']);?>" class="img-fluid"
                                                     alt="<?php echo esc_attr($icon_vg['alt']); ?>">
                                                 <?php endif; ?>

                                             </div>
                                             <div class="color-purple">
                                                 <h5 class="text-center text-white pt-2"><?php  echo $button1_vg;?>
                                                 </h5>
                                                 <div class="d-flex align-items-center justify-content-center mt-2 ">
                                                     <p class="badge bg-warning text-dark text-center me-2">

                                                         <?php  echo $button2_vg;?>
                                                     </p>
                                                     <p class="badge bg-warning text-dark text-center">

                                                         Head Office
                                                     </p>
                                                 </div>
                                             </div>
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
 <?php }?>