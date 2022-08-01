 <!-- main bosy part start -->
 <!-- breadcrumb -->
 <?php require get_template_directory() . '/bannersec.php';?>
 yyyyy

 <!-- gallery section starts -->
 <section class="pt-50">
     <div class="imagegallery">
         <div class="container">
             <div class="row">
                 <?php $args_photo=array(
                 
                            'post_type'=>'page',
                            'post_parent' => 803,
                            'posts_per_page'=>'16',
                            'post_status'=>'publish',
                            'order'=>'DESC',
                            'orderby'=>'date'

                        );
                      
                        $featured_photo=new WP_Query($args_photo);
                         if($featured_photo->have_posts()):
                    while($featured_photo->have_posts()):$featured_photo->the_post();
                    ?>
                 <div class="col-md-3">
                     <div class="card">
                         <img src="<?php the_post_thumbnail_url();?>" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="<?php the_permalink();?>"
                                     class="text-dark"><?php the_title();?></a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div>

                 <?php endwhile;
                 wp_reset_postdata();
                         endif;?>


             </div>
         </div>
     </div>
 </section>

 <!-- gallery section starts -->
 <!-- <section class="pt-50">
     <div class="imagegallery">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <div class="card">
                         <img src="assets/img/i1.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="photo_single.html" class="text-dark">Kangaroo
                                     Scholarship Week 2020</a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="card">
                         <img src="assets/img/c2.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="photo_single.html" class="text-dark">Mega
                                     Australia Education Fair</a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="card">
                         <img src="assets/img/c1.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="photo_single.html" class="text-dark">Kangaroo
                                     Education Foundation Freshers' Fest</a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="card">
                         <img src="assets/img/c3.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h6 class="card-title text-dark"><a href="photo_single.html" class="text-dark">Kangaroo
                                     Education Fair - All Nepal Roadshow</a></h6>
                             <div class="d-flex align-items-center justify-content-between">
                                 <p class="card-text">Photo</p>

                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> -->