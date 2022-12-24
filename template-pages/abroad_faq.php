 <?/**
  * Template Name: Faq
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
                 <?php if ( have_rows( 'faq_example_rep' ) ) : ?>
                 <?php while ( have_rows( 'faq_example_rep' ) ) :
		            the_row(); ?>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                         <button class="accordion-button" type="button" data-bs-toggle="collapse"
                             data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <?php if ( $faq_questions = get_sub_field( 'faq_questions' ) ) : ?>
                             <?php echo $faq_questions; ?>
                             <?php endif; ?>

                         </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <?php if ( $faq_answer = get_sub_field( 'faq_answer' ) ) : ?>
                             <?php echo $faq_answer; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>


                 <?php endwhile; ?>
                 <?php endif; ?>

               
             </div>
         </div>
     </div>
 </section>
 <?php get_footer();?>