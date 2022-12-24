 <?/**
  * Template Name: Sample and Statement Document
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
             <h1 class="text-uppercase font_weight300 home_title">Sample Documents</h1>
             <div class="style_bar"></div>
         </div>

         <div class="sampledoc">
             <div class="row">
                 <div class="col-md-8 country_info paragraph">
                    <?php if ( have_rows( 'sample_and_document_rep' ) ) : ?>
                	<?php while ( have_rows( 'sample_and_document_rep' ) ) :
	                	the_row(); ?>
		
	        	<?php
	        	$sample_image_and_document = get_sub_field( 'sample_image_and_document' );
	        	if ( $sample_image_and_document ) : ?>
		        	<img class="img-fluid" src="<?php echo esc_url( $sample_image_and_document['url'] ); ?>" alt="<?php echo esc_attr( $sample_image_and_document['alt'] ); ?>" />
		        <?php endif; ?>

        	<?php endwhile; ?>
        <?php endif; ?>

                 </div>
             </div>
         </div>
     </div>
 </section>


 <!-- Our offices -->

 <?php get_footer();