<?
  /**
  * Template Name: Our Certification 
  * Summary.
  *
  * Description.
  *
  */
  ?>
<?php 
  get_header();
  ?>
<?php require get_template_directory() . '/bannersec.php';?>
<!-- certificate -->
<section class="p_tb40">
    <div class="container professional_section">
        <div class="home_section_title text-center">
            <h1 class="text-uppercase font_weight300 home_title">
                <?php if ( $heading_certification = get_field( 'heading_certification' ) ) : ?>
                <?php echo esc_html( $heading_certification ); ?>
                <?php endif; ?>
            </h1>
            <div class="style_bar"></div>
            <div class="row">
                <!--<div class="col-lg-2 col-md-2 col-sm-2 col-6">-->
                <!--	<img src="https://kangarooedu.com/front/images/professional/1.png" alt="">-->
                <!--</div>-->
                <!--  -->
                <?php if ( have_rows( 'certification_rep' ) ) : ?>
                <?php while ( have_rows( 'certification_rep' ) ) :the_row(); ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6">
                    <?php
	        	        $image_professional = get_sub_field( 'certification_image' );
		                  if ( $image_professional ) : ?>
                    <img class="img-fluid" src="<?php echo esc_url( $image_professional['url'] ); ?>"
                        alt="<?php echo esc_attr( $image_professional['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!--  -->
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>