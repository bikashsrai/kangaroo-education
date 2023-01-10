<?/**
  * Template Name: other test 
<<<<<<< HEAD
  * This template is for test preparation for sat, gre ,gmat
=======
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
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
<section>
    <div class="container">
        <div class="countryinfo1">
            <div class="row">
                <div class="col-md-8 bg-light p-3">
                    <div class="study_left">
                        <div class="home_section_title text-center">
                            <h1 class="text-uppercase font_weight300 home_title">
                                <?php if ( $heading = get_field( 'heading' ) ) : ?>
                                <?php echo esc_html( $heading ); ?>
                                <?php endif; ?>
                            </h1>
                            <div class="style_bar"></div>
                        </div>
                        <p>
<<<<<<< HEAD
                            <?php if ( $description = get_field( 'description',false ) ) : ?>
=======
                            <?php if ( $description = get_field( 'description' ) ) : ?>
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                            <?php echo $description; ?>
                            <?php endif; ?>
                        </p>
                        <div class="style_bar"></div>
<<<<<<< HEAD
						<?php if ( get_field( 'enable_table_section' ) ) : ?>
                        <p>
					<!-- table data section -->
							
=======
                        <p>

>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">
                                        <?php if ( $first_title = get_field( 'first_title' ) ) : ?>
                                        <?php echo esc_html( $first_title ); ?>
                                        <?php endif; ?>
                                    </th>
                                    <th scope="col">
                                        <?php if ( $second_title = get_field( 'second_title' ) ) : ?>
                                        <?php echo esc_html( $second_title ); ?>
                                        <?php endif; ?>
                                    </th>
                                    <th scope="col">
                                        <?php if ( $third_title = get_field( 'third_title' ) ) : ?>
                                        <?php echo esc_html( $third_title ); ?>
                                        <?php endif; ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ( have_rows( 'table_info_rep' ) ) : ?>
                                <?php while ( have_rows( 'table_info_rep' ) ) :
	                        	the_row(); ?>
                                <tr>

                                    <td>
                                        <?php if ( $section_tbl = get_sub_field( 'section_tbl' ) ) : ?>
                                        <?php echo esc_html( $section_tbl ); ?>
                                        <?php endif; ?>

                                    </td>
                                    <td> <?php if ( $description_content = get_sub_field( 'description_content' ) ) : ?>
                                        <?php echo $description_content; ?>
                                        <?php endif; ?></td>
                                    <td>
                                        <?php if ( $test_time = get_sub_field( 'test_time' ) ) : ?>
                                        <?php echo esc_html( $test_time ); ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </tbody>
<<<<<<< HEAD
                        </table>					
                        </p>
					<?php endif; ?>
=======
                        </table>
                        </p>
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                        <p><?php if ( $second_description = get_field( 'second_description' ) ) : ?>
                            <?php echo $second_description; ?>
                            <?php endif; ?></p>
                        <p><strong>
                            <?php if ( $heading_required__proceed_for = get_field( 'heading_required__proceed_for' ) ) : ?>
                            <?php echo esc_html( $heading_required__proceed_for ); ?>
                            <?php endif; ?>
                            </strong>
                        </p>
                        <?php if ( have_rows( 'second_section_rep' ) ) : ?>
                        <?php while ( have_rows( 'second_section_rep' ) ) :the_row(); ?>

                        <p> <?php if ( $required__things_to_proceed = get_sub_field( 'required__things_to_proceed' ) ) : ?>
                            <?php echo esc_html( $required__things_to_proceed ); ?>
                            <?php endif; ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="coursedetail_right">

                        <!-- banner -->
                        <div class="Kef_side_banner mt-4">
                            <?php 
                            $banner_img=get_field('background_image');
                            ?>
                            <div class="Kef_side_box"
                                style="background-image: url('<?php echo esc_url( $banner_img['url'] ); ?>');">
                                <div class="bg-layer"></div>
                                <div class="image-layer"><?php
                                $image_front = get_field( 'image_front' );
                                if ( $image_front ) : ?>
                                    <img src="<?php echo esc_url( $image_front['url'] ); ?>"
                                        alt="<?php echo esc_attr( $image_front['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="Kef_top">
                                    <h6>
                                        <?php if ( $heading__one = get_field( 'heading__one' ) ) : ?>
                                        <?php echo esc_html( $heading__one ); ?>
                                        <?php endif; ?>
                                    </h6>
                                    <h2>
                                        <?php if ( $heading_two = get_field( 'heading_two' ) ) : ?>
                                        <?php echo esc_html( $heading_two ); ?>
                                        <?php endif; ?>
                                    </h2>
                                    <ul class="list clearfix">
                                        <?php if ( have_rows( 'feature_list_rep' ) ) : ?>
                                        <?php while ( have_rows( 'feature_list_rep' ) ) :
		                                the_row(); ?>

                                        <li><?php if ( $list_feature = get_sub_field( 'list_feature' ) ) : ?>
                                            <?php echo esc_html( $list_feature ); ?>
                                            <?php endif; ?></li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="Kef_below">
                                    <?php
                                    $link = get_field( 'link_contact' );
                                    if ( $link ) :
	                                $link_url = $link['url'];
	                                $link_title = $link['title'];
	                                $link_target = $link['target'] ? $link['target'] : '_self';
	                                ?>
                                    <a class="Kef_btn btn-one" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
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
<?php get_footer();?>