 <?php
 /**
  * single post
  */
  
  ;?>
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
                             Blogs</h1>
                     </div>

                     <div class="breadcrumb-wrapper">
                         <span>
                             <a title="Homepage" href="index-2.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                         </span>
                         <span class="seperator text-white">&nbsp; | &nbsp;</span>
                         <span class="text-theme">
                             Blog Single t </span>
                     </div>
                 </div>
             </div>

         </div>

     </div>

 </div>

 <!-- Blogs -->
 <section class="pt-50">
     <div class="container">
         <div class="myblog blog_wrap">
             <div class="row">
                 <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                     <div class="blog_single">
                         <div class="blog_image">
                             <a href="<?php the_permalink();?>" title="">
                                 <?php 
                             $img_post1=get_field('image_post'); 
                             
                            if(!empty($img_post1)):?>
                                 <img class="img-fluid w-100" src="<?php echo esc_url($img_post1['url']);?>"
                                     alt="<?php echo esc_attr(   $img_post1['alt'] ); ?>" width="100%" height="500">
                                 <?php endif;?></a>
                         </div>
                         <div class="blog_content">
                             <div class="blog_date">
                                 <p>Posted On : <?php echo get_the_date();?> - <span><?php the_category('');?>
                                     </span>
                                     &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <span>BY
                                         :<?php echo get_the_author(); ?>
                                     </span></p>
                             </div>
                             <h3><a href="<?php the_permalink();?>" title=""><?php the_title();?></a></h3>
                             <p class="excert">
                                 <?php the_content();?>


                             <div class="blog_user d-flex justify-content-between">

                                 <div class="blog_social d-flex">
                                     <span>Share On : </span>
                                     <ul class="social-items d-flex list-unstyled">
                                         <?php 
                        if(have_rows('social_icons_post')):
                        while(have_rows('social_icons_post')):the_row();
                        $icon_sp=get_sub_field('icon_social_single');
                        
                        ?>
                                         <li><a href="#"><i class="fab fa-<?php echo $icon_sp;?>"></i></a></li>

                                         <?php endwhile;
                    endif;?>
                                     </ul>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <!-- end -->

                 </div>

                 <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                     <div class="blog_right">
                         <div class="blog_search mb-4">
                             <form role="search" class="d-flex search-form" method="get"
                                 action="<?php echo esc_url(home_url('/'));?>">

                                 <input class="form-control rounded-0 search-field" type="search" name="s"
                                     value="<?php echo get_search_query();?>" placeholder="Search" aria-label="Search">

                                 <button
                                     class="btn btn-get-started rounded-0 m-0 d-flex align-items-center search-submit"
                                     type="submit"><span class=" screen-reader-text"></span><i
                                         class="fas fa-search me-2"></i> search here</button>



                             </form>
                         </div>

                         <div class="archives widget_single">
                             <div class="items-title">
                                 <h3 class="title">Recent Post</h3>
                             </div>
                             <div class="new_post">
                                 <div class="single-post d-flex align-items-center">
                                     <div class="recent_img">
                                         <a href="<?php the_permalink();?>" title=""><img src="assets/img/c2.jpg" alt=""
                                                 class="img-fluid"></a>
                                     </div>
                                     <div class="post_title">
                                         <a href="<?php the_permalink();?>" title="">Tips For English Proficiency
                                             Test
                                             (IELTS And PTE)</a>
                                         <div class="post-date">
                                             <span>May 29, 2021</span>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="single-post d-flex align-items-center">
                                     <div class="recent_img">
                                         <a href="#" title=""><img src="assets/img/c1.jpg" alt="" class="img-fluid"></a>
                                     </div>
                                     <div class="post_title">
                                         <a href="#" title="">Dealing With Cultural Shock Abroad – A Nepalese
                                             Student
                                             Perspective</a>
                                         <div class="post-date">
                                             <span>May 29, 2021</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="archives widget_single">
                             <div class="items-title">
                                 <h3 class="title">All Categories</h3>
                             </div>
                             <div class="archives-items">
                                 <ul class="list-unstyled">
                                     <li><a href="#" title="">Study Abroad </a></li>
                                     <li><a href="#" title="">International Students</a></li>
                                     <li><a href="#" title="">Tourist Visa</a></li>
                                     <li><a href="#" title="">English Proficency</a></li>
                                     <li><a href="#" title="">Visa</a></li>
                                     <li><a href="#" title="">Others</a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class="archives widget_single popular_tags">
                             <div class="items-title">
                                 <h3 class="title">Popular Tags</h3>
                             </div>
                             <div class="tags-items">
                                 <ul class="list-unstyled">
                                     <li><a href="#" title="">485 Visa</a></li>
                                     <li><a href="#" title="">PTE</a></li>
                                     <li><a href="#" title="">Australian PR</a></li>
                                     <li><a href="#" title="">Accounting</a></li>
                                     <li><a href="#" title="">Others</a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>