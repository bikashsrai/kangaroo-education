 <?php
 /**
  * single file for displaying the post of institution

  */
  get_header();
 ;?>
 <!-- main bosy part start -->
 <!-- breadcrumb -->
 <?php require get_template_directory() . '/bannersec.php';?>

 <!-- country info -->
 <?php 
            $enable_section_institution=get_field('enable_section_institution');
            if($enable_section_institution){
                $image_1_institution=get_field('image_1_institution');
                $title__post_1_institution=get_field('title__post_1_institution');
                $description_institution=get_field('description_institution');
                            
                ?>
 <section class="pt-50">
     <div class="container">
         <div class="">

             <div class="row justify-content-center m-auto d-flex align-items-center unibg">
                 <div class="col-md-4">
                     <div class="  college_logo">
                         <?php
                        //  var_dump($title__post_1_institution)
                                    if ( ! empty( $image_1_institution ) ): ?>
                         <img src="<?php echo esc_url( $image_1_institution['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_1_institution['alt'] ); ?>">
                         <?php endif; ?>
                     </div>

                 </div>
                 <div class="col-md-4">
                     <p class=" fw-bold text-dark"><?php echo $title__post_1_institution;?></p>

                     <div class=" border-left_side height_manage d-flex align-items-center">
                         <?php 
                                         if(have_rows('info_1_institution')):
                                         while(have_rows('info_1_institution')):the_row();
                                          $image_icon_1_institution=get_sub_field('image_icon_1_institution');
                                          $info_1_institution_insti=get_sub_field('info_1_institution_insti');
                       
                                          ?>
                         <?php
                         if ( ! empty( $image_icon_1_institution ) ): ?>
                         <img class="img-fluid me-3" width="50px;"
                             src="<?php echo esc_url( $image_icon_1_institution['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_icon_1_institution['alt'] ); ?>">
                         <?php endif; ?>
                         <h5>

                             <div class="location_add">
                                 <p class="mb-0 text-dark"><?php echo $info_1_institution_insti;?></p>
                             </div>
                         </h5>
                         <?php endwhile;
                        endif;?>
                     </div>
                     <hr>

                 </div>

             </div>

             <div class="row">
                 <div class="col-md-8">
                     <div class="unidetails studynow mt-4 pyreq">

                         <p>
                             <?php echo $description_institution;?>
                         </p>
                         <?php 
                        if(have_rows('institution_concern')):
                        while(have_rows('institution_concern')):the_row();
                        $title_1_insti=get_sub_field('title_concen_insti');
                        $des_1_insti=get_sub_field('description_concern_insti');
                      
                        ?>
                         <h3 class="text-theme"><?php echo $title_1_insti;?>
                         </h3>
                         <p> <?php echo $des_1_insti;?></p>
                         <?php endwhile;
                         endif;?>
                     </div>
                 </div>
                 <?php 
                $img_bak_inquiry_insti=get_field('image_background_inquiry_insti');
                $image_inquiry_insti=get_field('image_inquiry_insti');
                $heading_sub_insti=get_field('heading_sub_insti');
                $heading_title_insti_1=get_field('heading_title_insti_1');
                 ?>
                 <div class="col-md-4 mt-4">
                     <div class="Kef_side_banner ">
                         <div class="Kef_side_box"
                             style="background-image:url('<?php echo esc_url( $img_bak_inquiry_insti['url'] ); ?>')">
                             <div class="bg-layer"></div>
                             <div class="image-layer"><?php
                                    if ( ! empty( $image_inquiry_insti ) ): ?>
                                 <img src="<?php echo esc_url( $image_inquiry_insti['url'] ); ?>"
                                     alt="<?php echo esc_attr( $image_inquiry_insti['alt'] ); ?>">
                                 <?php endif; ?>
                                 <div class="Kef_top">
                                     <h6><?php heading_sub_insti;?></h6>
                                     <h2><?php echo $heading_title_insti_1;?> </h2>
                                     <ul class="list clearfix">
                                         <?php 
                                         if(have_rows('insti_inquiry_rep')):
                                         while(have_rows('insti_inquiry_rep')):the_row();
                                          $list_point_insti=get_sub_field('list_point_insti');
                       
                                          ?>
                                         <li><?php echo $list_point_insti;?></li>
                                         <?php endwhile;
                                         endif;?>

                                     </ul>
                                 </div>
                                 <div class="Kef_below">

                                     <a href="#" class="Kef_btn btn-one">Contact Us<i class="flaticon-next"></i></a>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
 </section>
 <?php }?>