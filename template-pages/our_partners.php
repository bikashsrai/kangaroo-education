<?/**
  * Template Name: Our Patners
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
<section class="p_tb40">
    <div class="container partners_section">
        <div class="home_section_title text-center">
            <h1 class="text-uppercase font_weight300 home_title">our partners</h1>
            <div class="style_bar"></div>
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-start">
                    <h3 class="text-capitalize font_weight300 black font_17">
                        <span class="text-uppercase">ielts</span> partner
                    </h3>
                    <div class="row p_t30">
                        <!--<div class="col-lg-6 col-md-6 col-sm-6 col-6">-->
                        <!--	<img src="https://kangarooedu.com/front/images/partners/1.jpg" alt="">-->
                        <!--</div>-->
                        <?php if ( have_rows( 'ielts_partner_rep' ) ) : ?>
                        <?php while ( have_rows( 'ielts_partner_rep' ) ) :
	                    	the_row(); ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <?php
		                    $image_ielts_partner = get_sub_field( 'image_ielts_partner' );
		                    if ( $image_ielts_partner ) : ?>
                            <img class="img-fluid" src="<?php echo esc_url( $image_ielts_partner['url'] ); ?>"
                                alt="<?php echo esc_attr( $image_ielts_partner['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-start">
                    <h3 class="text-capitalize font_weight300 black font_17">
                        insurance partners
                    </h3>
                    <div class="row p_t30">
                        <?php if ( have_rows( 'insurance_partners_rep' ) ) : ?>
                        <?php while ( have_rows( 'insurance_partners_rep' ) ) :
		            the_row(); ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                            <?php
		               $image_insurance_partner = get_sub_field( 'image_insurance_partner' );
		               if ( $image_insurance_partner ) : ?>
                            <img class="img-fluid" src="<?php echo esc_url( $image_insurance_partner['url'] ); ?>"
                                alt="<?php echo esc_attr( $image_insurance_partner['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>

                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>