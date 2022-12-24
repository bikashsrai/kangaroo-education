<section class=" pb-50">
    <div class="container">
        <div class="ouroffices nationaloffice bg-light  p-4 rounded-3">
            <div class="row">
                <div class="col-md-12">
                    <div class=" t_left text-center">
                        <h4 class="cof">Head office</h4>
                        <div class="contact-item">
                            <?php if ( $location_info_corporate = get_field( 'location_info_corporate', 'options' ) ) : ?>
                            <p><?php echo $location_info_corporate; ?></p>
                            <?php endif; ?>
                            <!-- <p>AB Complex, Padmodaya Mode Putalisadak, Kathmandu, Nepal</p> -->

                            <?php if ( $phone_corporate_offices = get_field( 'phone_corporate_offices', 'options' ) ) : ?>
                            <p>

                                <?php echo $phone_corporate_offices; ?>
                            </p>
                            <?php endif; ?>

                            <?php if ( $email_corporate_offices = get_field( 'email_corporate_offices', 'options' ) ) : ?>
                            <p> <?php echo $email_corporate_offices; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--1 corporate offices-->
                     <div class="row">
                        <?php if ( have_rows( 'corporate_location_rep', 'options' ) ) : ?>
	<?php while ( have_rows( 'corporate_location_rep', 'options' ) ) :
		the_row(); ?>
		<div class="col-md-4">
		<?php
		$link = get_sub_field( 'office_location', 'options' );
		if ( $link ) :
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h5><?php echo esc_html( $link_title ); ?></h5></a>
		<?php endif; ?>
		</div>

	<?php endwhile; ?>
<?php endif; ?>
                        <!--<div class="col-md-4">-->
                        <!--    <h5> Kathmandu</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Pokhara Office</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5> Chitwan </h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Ithari</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Butwal</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Nepalgunj</h5>-->
                        <!--</div>-->
                    </div>
                </div>
                <!--1corporate ofices-->
              <div class="col-md-12 mt-4">
                    <div class=" t_left text-center">
                        <h4 class="cof">International office</h4>
    
    
                    </div>
                    <div class="row">
                        <?php if ( have_rows( 'international_location_rep', 'options' ) ) : ?>
                    	<?php while ( have_rows( 'international_location_rep', 'options' ) ) :
                		the_row(); ?>
		
	                	<?php
	                	$link = get_sub_field( 'office_location_inter', 'options' );
	                	if ( $link ) :
		            	$link_url = $link['url'];
		            	$link_title = $link['title'];
		            	$link_target = $link['target'] ? $link['target'] : '_self';
		            	?>
		            	 <div class="col-md-4">
		            	<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> <h5><?php echo esc_html( $link_title ); ?></h5></a>
		                <?php endif; ?>
		                </div>

                    	<?php endwhile; ?>
                        <?php endif; ?>
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Australia(Sydney)</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5>Australia(Adeliade)</h5>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--    <h5> Australia(Tasmania) </h5>-->
                        <!--</div>-->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>