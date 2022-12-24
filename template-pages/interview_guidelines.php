<?/**
  * Template Name: Interview and guidelines
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


        <div class="sampledoc">
            <div class="row">
                <div class="col-md-8 country_info paragraph">
                    <div class="inner_section_title t_left text-start">
                        <?php if ( $title_interview = get_field( 'title_interview' ) ) : ?>

                        <h3> <?php echo esc_html( $title_interview ); ?></h3>
                        <?php endif; ?>



                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>

                    <div class="study_left">
                        <ul class="prof_list">

                            <?php if ( have_rows( 'interview_questions_rep' ) ) : ?>
                            <?php while ( have_rows( 'interview_questions_rep' ) ) :
	                    	the_row(); ?>

                            <?php if ( $question = get_sub_field( 'question' ) ) : ?>

                            <li> <?php echo esc_html( $question ); ?></li>
                            <?php endif; ?>

                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <!-- rep1 -->
                        <?php if ( have_rows( 'guidelines_rep' ) ) : ?>
                        <?php while ( have_rows( 'guidelines_rep' ) ) :
	                	the_row(); ?>
                        <div class="inner_section_title t_left text-start">
                            <?php if ( $heading_main = get_sub_field( 'heading_main' ) ) : ?>
                            <h3> <?php echo esc_html( $heading_main ); ?></h3>

                            <?php endif; ?>




                            <div class="sec_line-main  text-start d-flex">
                                <div class="sec_line sec_line-big "></div>
                            </div>
                            <?php if ( have_rows( 'tips_title_rep' ) ) : ?>
                            <?php while ( have_rows( 'tips_title_rep' ) ) :
			            	the_row(); ?>
                            <h4 class="fw-bold mt-3"></h4>
                            <?php if ( $guidelines_title = get_sub_field( 'guidelines_title' ) ) : ?>
                            <?php echo esc_html( $guidelines_title ); ?> <?php endif; ?></h4>
                            <ul class="prof_list">
                                <?php if ( $guidlines_lists = get_sub_field( 'guidlines_lists' ) ) : ?>
                                    <?php echo $guidlines_lists; ?>
                                    <?php endif; ?>
                                <!-- <li>&nbsp;Passport number, passport expiry date and issue date</li>
                                    <li>&nbsp;Email ID provided to Immigration New Zealand</li>
                                    <li>&nbsp;Parents Date of Birth</li>
                                    <li>&nbsp;Address Mentioned in Passport</li>
                                    <li>&nbsp;Citizenship Number</li> -->
                            </ul>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <!-- <h4 class="fw-bold mt-3">2. Financial arrangement to support your study and stay in New
                                    Zealand</h4>
                                <ul class="prof_list">
                                    <li>&nbsp;Focus on your Cash Balance in a saving account at Nepal SBI Bank or Nabil
                                        Bank- how much amount in NPR and an equivalent NZD, or</li>
                                    <li>&nbsp;Education Loan (Amount in NPR and an equivalent NZD) or</li>
                                    <li>Know your sponsors, sources revenues – your sponsors occupation</li>
                                </ul> -->
                        </div>





                        <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- rep1 -->

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
                                <div class="image-layer"><img
                                        src="https://fastwpdemo.com/newwp/immigo/wp-content/uploads/2022/02/sidebar-1.png"
                                        alt="Awesome Image"></div>
                                <div class="Kef_top">
                                    <h6<?php if ( $heading_one = get_field( 'heading_one' ) ) : ?>
                                        <?php echo esc_html( $heading_one ); ?> <?php endif; ?></h6>
                                        <h2><?php if ( $heading_two = get_field( 'heading_two' ) ) : ?>
                                            <?php echo esc_html( $heading_two ); ?>
                                            <?php endif; ?></h2>
                                        <ul class="list clearfix">
                                            <?php if ( have_rows( 'list_rep' ) ) : ?>
                                            <?php while ( have_rows( 'list_rep' ) ) :
		                                    the_row(); ?>

                                            <?php if ( $list_feature = get_sub_field( 'list_feature' ) ) : ?>
                                            <li> <?php echo esc_html( $list_feature ); ?></li>
                                            <?php endif; ?>

                                            <?php endwhile; ?>
                                            <?php endif; ?>

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


                                    <a href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>"
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
<?php get_footer();?>