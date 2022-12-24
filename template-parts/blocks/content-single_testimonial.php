 <?php get_header();?>
 <?php require get_template_directory() . '/bannersec.php';?>
 <!-- testimonials -->
 <section class="pt-50 pb-50">
     <div class="container p_tb85">
         <!-- 1 -->
         <?php if ( have_rows( 'testimonial_rep' ) ) : ?>
         <?php while ( have_rows( 'testimonial_rep' ) ) :
		the_row(); ?>

         <div class="row equal_height m_b100">
             <div class="col-lg-5 col-sm-12 col-xs-12 p_l60">
                 <div class="student_photo">
                     <?php
                        $image_student_testi = get_sub_field( 'image_student_testi' );
                        if ( $image_student_testi ) : ?>
                    	<img src="<?php echo esc_url( $image_student_testi['url'] ); ?>" alt="<?php echo esc_attr( $image_student_testi['alt'] ); ?>" />
                        <?php endif; ?>


                     <div class="imageko_cover">
                         <div class="student_info">
                             <p> <?php if ( $name_student = get_sub_field( 'name_student' ) ) : ?>
                                 <?php echo esc_html( $name_student ); ?>
                                 <?php endif; ?> </p>

                             <p> <?php if ( $faculty = get_sub_field( 'faculty' ) ) : ?>
                                 <?php echo $faculty; ?>
                                 <?php endif; ?></p>
                             <p> <?php if ( $university = get_sub_field( 'university' ) ) : ?>
                                 <?php echo $university; ?>
                                 <?php endif; ?></p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-7 col-sm-12 col-xs-12 p_l60 testimonial_responsive">
                 <div class="main_view">
                     <p>
                         <span class="fa fa-quote-left"></span>

                         <?php if ( $short_quote = get_sub_field( 'short_quote' ) ) : ?>
                         <?php echo $short_quote; ?>
                         <?php endif; ?>
                         <span class="fa fa-quote-right"></span>
                     </p>
                     <p>
                     </p>
                     <p> <?php if ( $description_opinion = get_sub_field( 'description_opinion' ) ) : ?>
                         <?php echo $description_opinion; ?>
                         <?php endif; ?></p>

                     <p>
                         <?php
		$link = get_sub_field( 'link_testi' );
		if ( $link ) :
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
                         <a href="<?php echo esc_url( $link_url ); ?>"
                             target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                         <?php endif; ?>

                     </p>
                     <p></p>
                 </div>
                 <div class="student_info">
                     <p> <?php if ( $name_student = get_sub_field( 'name_student' ) ) : ?>
                         <?php echo esc_html( $name_student ); ?>
                         <?php endif; ?> </p>

                     <p> <?php if ( $faculty = get_sub_field( 'faculty' ) ) : ?>
                         <?php echo $faculty; ?>
                         <?php endif; ?></p>
                     <p> <?php if ( $university = get_sub_field( 'university' ) ) : ?>
                         <?php echo $university; ?>
                         <?php endif; ?></p>
                 </div>

             </div>
         </div>
          <?php endwhile; ?>
         <?php endif; ?>
        
         <!-- 1 -->
         <div class="row equal_height m_t50 testimonials_pagination">
             <div class="col-md-12">
                 <nav aria-label="Page navigation example">
                     <ul class="pagination">

                     </ul>
                 </nav>
             </div>
         </div>
         
     </div>
 </section>
 <?php get_footer();?>