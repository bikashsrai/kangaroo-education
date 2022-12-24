 <?/**
  * Template Name: Statement of Purpose
  * Summary.
  *
  * Description.
  *
  * @since Version 3 digits
  */
 /**
  * Summary.
  *
  * Description.
  *
  * @since Version 3 digits

  */
  ?>
 <?php 
  get_header();
  ?>
 <?php require get_template_directory() . '/bannersec.php';?>
 <section class="summary_of_consultancy">
     <div class="container">
         <div class="home_section_title text-center">
             <h1 class="text-uppercase font_weight300 home_title">Statement of Purposes</h1>
             <div class="style_bar"></div>
         </div>

         <div class="sampledoc">
             <div class="row">
                 <div class="col-md-8 country_info paragraph">
                     <div class="study_left">
                     <h2>SOP GUIDELINES</h2>
                         <!-- 1 -->
                         <?php if ( have_rows( 'statements_rep' ) ) : ?>
                         <?php while ( have_rows( 'statements_rep' ) ) :
		                the_row(); ?>


                         <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                         <h4><?php echo esc_html( $title ); ?></h4>
                         <?php endif; ?>


                         <ul class="prof_list ">
                             
                                 <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                                 <p><?php echo $description; ?></p>
                                 <?php endif; ?>
                             
                         </ul>

                         <p>&nbsp;</p>
                         <?php endwhile; ?>
                         <?php endif; ?>
                         <!-- 1 -->

                     </div>
                 </div>
                 <div class="col-md-4 ">
                     <div class="coursedetail_right">
                         <div class="reply-area">
                             <h3 class="text-white mb-3 border-bottom pb-3">Speak With Experts</h3>
                             <!--<form id="contact-form" action="">-->
                                 <?php if ( $form = get_field( 'form' ) ) : ?>
                                 <?php echo do_shortcode( $form ); ?>
                                 <?php endif; ?>
                                 <!-- <div class="row">
                                     <div class="col-md-12">
                                         <label for="Name">Name</label>
                                         <input type="text" name="con_name" spellcheck="false" data-ms-editor="true">
                                     </div>
                                     <div class="col-md-12">
                                         <label for="Name">Email</label>
                                         <input type="email" name="con_email">
                                     </div>
                                     <div class="col-md-12">
                                         <label for="Name">Phone</label>
                                         <input type="phone" name="con_email" spellcheck="false" data-ms-editor="true">
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
                                         <textarea name="con_message" cols="15" rows="10" spellcheck="false"
                                             data-ms-editor="true"></textarea>
                                     </div>
                                 </div>
                                 <div class="button">
                                     <a href="" class="slider-btn">Speak Now!<i
                                             class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                 </div> -->
                             <!--</form>-->
                         </div>
                         <!-- banner -->
                         <div class="Kef_side_banner mt-4">
                             <div class="Kef_side_box"
                                 style="background-image: url(https://fastwpdemo.com/newwp/immigo/wp-content/uploads/2022/02/sidebar-1.jpg);">
                                 <div class="bg-layer"></div>
                                 <div class="image-layer">
                                     <?php
                                   $image = get_field( 'image' );
                                    if ( $image ) : ?>
                                     <img src="<?php echo esc_url( $image['url'] ); ?>"
                                         alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                     <?php endif; ?>
                                     <!-- <img src="https://fastwpdemo.com/newwp/immigo/wp-content/uploads/2022/02/sidebar-1.png"
                                         alt="Awesome Image"> -->
                                 </div>
                                 <div class="Kef_top">

                                     <h6><?php if ( $title_one = get_field( 'title_one' ) ) : ?>
                                         <?php echo esc_html( $title_one ); ?>
                                         <?php endif; ?></h6>
                                     <h2><?php if ( $title_two = get_field( 'title_two' ) ) : ?>
                                         <?php echo esc_html( $title_two ); ?>
                                         <?php endif; ?></h2>
                                     <ul class="list clearfix">
                                         <li>World Class Institution</li>
                                         <li>Quality Education</li>
                                         <li>Affordable Fees</li>
                                     </ul>
                                 </div>
                                 <div class="Kef_below">
                                     <?php
                              $link = get_field( 'link' );
                               if ( $link ) :
	                          $link_url = $link['url'];
	                          $link_title = $link['title'];
	                          $link_target = $link['target'] ? $link['target'] : '_self';
                            	?>

                                     <a href="<?php echo esc_url( $link_url ); ?>  target="
                                         <?php echo esc_attr( $link_target ); ?>"
                                         class="Kef_btn btn-one"><?php echo esc_html( $link_title ); ?><i
                                             class="flaticon-next"></i></a>
                                     <?php endif; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php get_footer();