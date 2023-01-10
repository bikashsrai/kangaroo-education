<?php require get_template_directory() . '/bannersec.php';?>

<!-- country info -->
<section class="pt-50">
    <div class="container">
        <div class="countryinfo">

            <?php $des1_test=get_field('description_1_test') ;?>
            <p><?php echo $des1_test;?>
            </p>

        </div>
    </div>
</section>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="testprepn">
            <div class="row">
                <?php 

                 $sub_heading_2_test=get_field('sub_heading_2_test');
                  $heading_main_2_test=get_field('heading_main_2_test');
                 $description_2_test=get_field('description_2_test');
                 $image_2_test=get_field('image_2_test');
   

?>
                <div class="col-md-6">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading "><?php echo $sub_heading_2_test;?></h4>
                        <h3><?php echo $heading_main_2_test;?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="test_para">
                        <p><?php echo $description_2_test;?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="test_img">
                        <?php 
                            if(!empty($image_2_test)):?>
                        <img class="img-fluid" src="<?php echo esc_url($image_2_test['url']);?>"
                            alt="<?php echo esc_attr(   $image_2_test['alt'] ); ?>">
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>

        <!-- field -->
        <div class="row pt-50">
            <?php 
                        if(have_rows('activity_test')):?>
            <?php 
                         while(have_rows('activity_test')):the_row();
                        $icon_test=get_sub_field('icon_test');
                        $title_activity_test=get_sub_field('title_activity_test');
                        $description_activity_test=get_sub_field('description_activity_test');
                        ?>
            <div class="col-md-6 pb-3">
                <div class="service-single-item h-100">
                    <i class="fas fa-<?php echo $icon_test;?>"></i>
                    <h6><?php echo $title_activity_test;?></h6>
                    <p><?php echo $description_activity_test;?></p>
                </div>
            </div>
            <?php endwhile;
                    endif;?>
        </div>
    </div>
</section>
<!-- section 3 test table -->
<?php if ( get_field( 'enable_section_3_test' ) ) : ?> 
<section class="bg-light p-3 mb-5">
    <div class="container">
        <div class="bandscore">
            <div class="row ">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-start">
						<?php if ( $test_type = get_field( 'test_type' ) ) : ?>
                        <h4 class="themestek-custom-heading "><?php echo esc_html( $test_type ); ?></h4>
						<?php endif; ?>
						<?php if ( $heading_3_test = get_field( 'heading_3_test' ) ) : ?>
                        <h3><?php echo esc_html( $heading_3_test ); ?></h3>
						<?php endif; ?>
                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                       </div>
                    </div>
                </div>
            </div>
			<?php if ( $sub__heading_3_testt = get_field( 'sub__heading_3_testt',false ) ) : ?>
            <p><?php echo esc_html( $sub__heading_3_testt ); ?></p>
			<?php endif; ?>
            <table class="table table-striped">
                <tbody>
                    <tr>
						<?php if ( $table_heading_first = get_field( 'table_heading_first' ) ) : ?>
                        <td><strong><?php echo ( $table_heading_first ); ?></strong></td>
						<?php endif; ?>
						<?php if ( $table_heading_second = get_field( 'table_heading_second' ) ) : ?>
                        <td><strong><?php echo( $table_heading_second ); ?> </strong></td>
						<?php endif; ?>
						<?php if ( $table_heading_third = get_field( 'table_heading_third' ) ) : ?>
                        <td><strong><?php echo( $table_heading_third ); ?></strong></td>
						<?php endif; ?>
                    </tr>
                   <?php if ( have_rows( 'table_data_rep' ) ) : ?>
						<?php while ( have_rows( 'table_data_rep' ) ) :the_row(); ?>	
                    <tr>
							
							<?php if ( $section_data = get_sub_field( 'section_data' ) ) : ?>
						 <td><?php echo esc_html( $section_data ); ?></td>							
						<?php endif; ?>
							<?php if ( $description_data = get_sub_field( 'description_data',false ) ) : ?>
						 <td><?php echo $description_data; ?></td>		
						<?php endif; ?>
							<?php if ( $time_data = get_sub_field( 'time_data' ) ) : ?>
						 <td><?php echo esc_html( $time_data ); ?></td>			
							<?php endif; ?>						                                                        
                    </tr>   
					<?php endwhile; ?>
						<?php endif; ?>       
                </tbody>
            </table>
			<?php if ( $summry_of_the_test_description = get_field( 'summry_of_the_test_description',false ) ) : ?>
				 <p><?php echo $summry_of_the_test_description; ?></p>
				<?php endif; ?>         
        </div>
    </div>
</section>
<?php endif; ?>