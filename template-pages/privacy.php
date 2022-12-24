 <?/**
  * Template Name: Privacy
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
 <section class="pt-50 pb-50">
     <div class="container">
         <div class="abroadfaq">
             <div class="accordion" id="accordionExample">

                 <div class="accordion-item">
                     <div class="content">
                         <section class=" home_youtube">
                             <div style="text-align: center;">
                                 <!-- Terms and Conditions -->
                                 <?php if ( $main_heading = get_field( 'main_heading' ) ) : ?>

                                 <h1 class="text-theme">
                                     <?php echo esc_html( $main_heading ); ?>

                                 </h1>
                                 <?php endif; ?>
                             </div>
                             <div class="style_bar"></div>
                         </section>
                         <section>
                             <div class="container p_tb85">

                                 <div class="row equal_height">
                                     <div class="col-md-12 col-sm-12 country_info p_r30">
                                         <!-- Website Terms and Conditions -->
                                         <?php if ( $sub_heading = get_field( 'sub_heading' ) ) : ?>
                                         <h2 class="text-theme"> <?php echo esc_html( $sub_heading ); ?></h2>
                                         <?php endif; ?>
                                         <div class="sec_line sec_line-big "></div><br>
                                         <?php if ( have_rows( 'termsand_conditions_rep' ) ) : ?>
                                         <?php while ( have_rows( 'termsand_conditions_rep' ) ) :
		                                 the_row(); ?>
                                         <?php if ( $terms_and_conditions_heading = get_sub_field( 'terms_and_conditions_heading' ) ) : ?>
                                         <h3>
                                             <?php echo esc_html( $terms_and_conditions_heading ); ?>
                                         </h3>
                                         <?php endif; ?>
                                         <?php if ( $terms_and_conditions_descriptions = get_sub_field( 'terms_and_conditions_descriptions' ) ) : ?>
                                         <p> <?php echo $terms_and_conditions_descriptions; ?>
                                         </p>
                                         <?php endif; ?>

                                         <?php endwhile; ?>
                                         <?php endif; ?>
                                         <!-- Privacy and Policy -->
                                         <?php if ( $heading_privacy = get_field( 'heading_privacy' ) ) : ?>

                                         <h2 class="text-theme">
                                             <?php echo esc_html( $heading_privacy ); ?>
                                         </h2>
                                         <?php endif; ?>
                                         <div class="sec_line sec_line-big "></div><br>
                                         <?php if ( $privacy_description = get_field( 'privacy_description' ) ) : ?>

                                         <p>
                                             <?php echo $privacy_description; ?>
                                         </p>
                                         <?php endif; ?>
                                         <!-- Privacy Policy lists -->
                                         <ul>
                                             <?php if ( have_rows( 'privacy_list_rep' ) ) : ?>
                                             <?php while ( have_rows( 'privacy_list_rep' ) ) :
	                                        	the_row(); ?>

                                             <?php if ( $privacy_list = get_sub_field( 'privacy_list' ) ) : ?>
                                             <li>
                                                 <?php echo esc_html( $privacy_list ); ?>
                                             </li>

                                             <?php endif; ?>

                                             <?php endwhile; ?>
                                             <?php endif; ?>
                                         </ul>
                                         <!-- Privacy Policy Last Description -->
                                         <?php if ( $privacy_last_description = get_field( 'privacy_last_description' ) ) : ?>

                                         <p>
                                             <?php echo $privacy_last_description; ?>
                                         </p>
                                         <?php endif; ?>
                                     </div>
                                 </div>
                             </div>
                         </section>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php get_footer();?>