 <!-- main bosy part start -->
 <!-- breadcrumb -->
 <div class="aemi_breadcrumb"
     style="background-image:url(<?php echo get_template_directory_uri().'/assets/himalayanbusiness/images/ban1.jpg';?>)">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="breadcrumb_title ">
                     <div class="page-title-heading">
                         <h1 class="title">
                             GAllery </h1>
                     </div>

                     <div class="breadcrumb-wrapper">
                         <span>
                             <a title="Homepage" href="index-2.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                         </span>
                         <span class="seperator text-white">&nbsp; | &nbsp;</span>
                         <span class="text-theme">
                             Photo </span>
                     </div>
                 </div>
             </div>

         </div>

     </div>

 </div>

 <!-- gallery section starts -->
 <section class="pt-50">
     <div class="imagegallery">
         <div class="container">
             <div class="row">

                 <?php $args_photo=array(
                 
                            'post_type'=>'page',
                            'post_parent' => 725,
                            'posts_per_page'=>'4',
                            'post_status'=>'publish',
                            'order'=>'DESC',
                            'orderby'=>'date'

                        );
                      
                        $featured_photo=new WP_Query($args_photo);
                         if($featured_photo->have_posts()):
                    while($featured_photo->have_posts()):$featured_photo->the_post();
                    ?>

                 <div class="col-md-3">oooou
                     <div class="card">
                         <img src="<?php echo the_thumbnail();?>" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="<?php  echo the_thumbnail_url();?>"
                                     class="text-dark"><?php echo the_title();?></a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">ffff<?php echo the_title();?></p>

                             </div>

                         </div>
                     </div>
                 </div>
                 <?php endwhile;
                 wp_reset_postdata();
                         endif;?>

                 <!-- <div class="col-md-3">
                     <div class="card">
                         <img src="<?php echo get_template_directory_uri().'/assets/img/c2.jpg';?>" class="card-img-top"
                             alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="photo_single.html" class="text-dark">Mega
                                     Australia Education Fair</a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div> -->


             </div>
         </div>
     </div>
 </section>