<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kangarooeducation
 */

?>
<!-- http://kangarooeducation.loc/ -->

<!-- associate partners section ends -->
<!-- newsletter -->

<?php 
ini_set('SMTP','myserver');
ini_set('smtp_port',25);?>
<section class="pb-50">
    <div class="container text-center">
        <div class="req_img p-4 ">

            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <p>Get The Latest Notification For Our Events, Seminars &amp; Offers.</p>
                    <div class="row justify-content-center  align-items-center g-0">
                        <div class="col-md-9">
                            <form action="index.php" method="POST">
                                <?php 
                                $userEmail=""; //leave blank 
                                if(isset($_POST['subscribe'])){ //if subscribe btn is clicked 
                                    $userEmail=$_POST['email']; //getting user email
                                    if(filter_var($userEmail,FILTER_VALIDATE_EMAIL)){ //VALIdating user entered email
                                        echo "Email is Correct";
                                        $subject="Thanks for subsrcibing";
                                        $message="You'll always receive lates updates";
                                        $sender="From :Kangaroo@gmail.com"; //This email is administrative gmail
                                        if(mail($userEmail, $subject, $message, $sender)){
                                              ?>
                                <?php ini_set() ?>
                                <!-- show succes message -->

                                <div class="alert success">Email subscribed</div>
                                <?php
                                  $userEmail=""; //leave blank and once mail send
                                        }else{?>
                                <div class="alert error">Error subscribe</div>
                                <?php

                                        }
                                    }else{?>

                                <div class="alert error ">Email is not valid</div>
                                <?php
                                }
                                }
                                ?>
                                <input class="form-control" type="email" name="email" required
                                    value="<?php echo $userEmail;?>" placeholder="Subscribe for Newsletter..."
                                    aria-label="Search" spellcheck="false" data-ms-editor="true">

                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-success p-60 rounded-0 search_btn w-100" type="submit"
                                name="subscribe">Subscribe</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->

<!-- Footer Section Starts -->
<footer class="footer-area">

    <div class="footer-top-area"
        style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/footerbg.png';?>);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <?php 
                        $title_footer=get_field('heading_inquiry','option');
                        ?>
                        <p class="footer-title"><?php echo $title_footer;?></p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="details">
                                    <?php
                                  $contact_inquiry=get_field('contact_number_inquiry','option') ;
                                  echo $contact_inquiry;?>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <div class="btn-wrap footer-btn">
                            <a class="btn-get-started bg-white
                                 text-theme rounded-3   contactbtn fw-bold text-theme" href="contactus.html">Let's Talk
                                <i class="flaticon-long-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ouroffices nationaloffice bg-light  p-4 rounded-3">
                <div class="row">
                    <div class="col-md-6 border-end">
                        <?php
                        $office_type1=get_field('office_location_name_1','option'); 
                        ?>
                        <div class=" t_left text-center">
                            <h4 class="cof"><?php echo $office_type1;?></h4>

                        </div>

                        <div class="row">
                            <?php 
                        
                        if(have_rows('new_footer_section_rep','option')):
                            while(have_rows('new_footer_section_rep','option')):the_row();
                            $location_name_office=get_sub_field('place_location');
                            
                        ?>
                            <div class="col-md-6">
                                <h5> <?php echo $location_name_office;?></h5>
                            </div>
                            <?php endwhile;
                            endif;?>
                            <!-- <div class="col-md-6">
                                <h5>Pokhara Office</h5>
                            </div>
                            <div class="col-md-6">
                                <h5> Chitwan </h5>
                            </div>
                            <div class="col-md-6">
                                <h5>Ithari</h5>
                            </div>
                            <div class="col-md-6">
                                <h5>Butwal</h5>
                            </div>
                            <div class="col-md-6">
                                <h5>Nepalgunj</h5>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $office_type2=get_field('office_type_2','option');
                        ?>
                        <div class=" t_left text-center">
                            <h4 class="cof"><?php echo $office_type2;?></h4>


                        </div>



                        <div class="row">
                            <?php 
                        if(have_rows('type_office_rep','option')):
                            while(have_rows('type_office_rep','option')):the_row();
                            $office_location2=get_sub_field('office__location_name');
                        ?>
                            <div class="col-md-6">
                                <h5><?php echo $office_location2;?></h5>
                            </div>
                            <?php endwhile;
                            endif;
                            ?>
                            <!-- <div class="col-md-6">
                                <h5>Australia(Adeliade)</h5>
                            </div>
                            <div class="col-md-6">
                                <h5> Australia(Tasmania) </h5>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <?php 
                                $des_footer=get_field('description_footer','option'); 
                                $enable_footer_logo=get_field('logo_ke','option');
                                if($enable_footer_logo):
                                $footer_logo=get_field('logo_white','option');
                                ?>
                                <a href="<?php echo home_url();?>" class="footer-logo">
                                    <?php
									if ( ! empty( $footer_logo ) ): ?>
                                    <img src="<?php echo esc_url( $footer_logo['url'] ); ?>"
                                        alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>">
                                    <?php endif; ?>

                                </a>
                                <?php endif;?>
                                <p class="text-white"><?php echo $des_footer;?></p>
                                <?php 
                                    if(have_rows('social_links_footer','option')):
                                    ;?>
                                <ul class="social_share margin-top-20">
                                    <?php 
                                    while(have_rows('social_links_footer','option')):the_row();
                                      $icon_social=get_sub_field('icons_social_footer','option');
                                   ?>
                                    <li><a href="#"><i class="fab fa-<?php echo $icon_social;?>"></i></a></li>
                                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Support</h4>
                            <ul class="nav_menu">
                                <!-- <li><a href="#">Event</a></li> -->
                                <?php 
                                wp_nav_menu(array(
                                    'theme_location'=>'footer-one',
                                    'depth'          => 0, // 1 = no dropdowns, 2 = with dropdowns.
									'container'      => '',
									'menu_id'        => '',
									'menu_class'     => 'nav_menu',
									'add_li_class'   => ''

                                ));
                                
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Company</h4>
                            <ul class="nav_menu">
                                <!-- <li><a href="#">About Us</a></li> -->
                                <?php 
                                wp_nav_menu(array(
                                    'theme_location'=>'footer-two',
                                    'depth'          => 0, // 1 = no dropdowns, 2 = with dropdowns.
									'container'      => '',
									'menu_id'        => '',
									'menu_class'     => 'nav_menu',
									'add_li_class'   => ''

                                ));
                                
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Kangarooedu Career</h4>
                            <ul class="nav_menu">
                                <?php 
                                wp_nav_menu(array(
                                    'theme_location'=>'footer-three',
                                    'depth'          => 0, // 1 = no dropdowns, 2 = with dropdowns.
									'container'      => '',
									'menu_id'        => '',
									'menu_class'     => 'nav_menu',
									'add_li_class'   => ''

                                ));
                                
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 visitus">
                        <h5>Visit us at :
                            <?php 
                            $url_ke=get_field('url_ke','option');
                            $c_name=get_field('country_name','option');
                            $img_circle=get_field('image_circle','option');
                            ?>

                            <?php
								if ( $url_ke ):
								$link_url = $url_ke['url'];
								$link_title = $url_ke['title'];
								$link_target = $url_ke['target'] ? $url_ke['target'] : '_self';
								?>
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>" class="text-warning">
                                <?php
								if ( ! empty( $img_circle ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url( $img_circle['url'] ); ?>"
                                    alt="<?php echo esc_attr( $img_circle['alt'] ); ?>">
                                <?php endif; ?><?php echo $c_name;?>
                            </a>
                            <?php endif; ?>

                        </h5>
                    </div>
                </div>
                <hr>
                <div class="copyright-area">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                             $copyright=get_field('copy_right_text','option');?>
                            <div class="copyright-area-inner text-center text-white">
                                <?php echo $copyright;?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer section ends -->

<!-- popup -->
<div class="sidepop">
    <div class="sidebar-contact ">
        <div class="toggle rotate " data-bs-toggle="offcanvas" data-bs-target="#bookformright"
            aria-controls="bookformright">Book a FREE Consultation</div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="bookformright" aria-labelledby="bookformrightLabel">
        <div class="offcanvas-header">
            <h5 id="bookformrightLabel">Get in Touch with Experts for a Free Consultation</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-theme1">
            <div class="reply-area">
                <h3 class="text-white mb-3 border-bottom pb-3"> Franchise With Us!!!</h3>
                <form id="contact-form" action="#">
                    <!-- Contact form for franchis with us -->
                    <?php 
                        $form_franchis=get_field('form_for_franchis');
                        echo do_shortcode($form_franchis);?>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" name="con_name" spellcheck="false" data-ms-editor="true">
                        </div>
                        <div class="col-md-12">
                            <label for="Name">Company Name</label>
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
                            <label for="Name">Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">-- Select Nearest Office --</option>
                                <option value="1">Australia</option>
                                <option value="2">Nepal</option>
                                <option value="3">Canada</option>
                            </select>
                        </div>

                        <div class="col-md-12">

                            <label for="">Message</label>
                            <textarea name="con_message" cols="15" rows="3" spellcheck="false" data-ms-editor="true"
                                style="height:unset"></textarea>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="slider-btn">Submit<i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- book now -->
<!-- Modal -->
<div class="modal fade newmodal" id="booknowModal" tabindex="-1" aria-labelledby="booknowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-theme" id="booknowModalLabel">Get in Touch with Experts for Free
                    Consultation</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--............................ Book Consulatancy form................... -->

            <?php 
                        $consultancy_contact=get_field('consultant_form_contact');
                        echo do_shortcode($consultancy_contact);?>
            <!--............................ Book Consulatancy form................... -->
            <!-- <div class="modal-body">
                <div class="bookform">
                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Mobile</label>
                            <input type="text" class="form-control" placeholder="Enter Mobile No.">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Nearest Office</label>
                            <select class="form-select" aria-label="Default select example">
                                <option>Sydney</option>
                                <option>Adeliade</option>
                                <option>Tasmania</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Services for
                                Consultation</label>
                            <select class="form-select" aria-label="Default select example">
                                <option>Education Consultation</option>
                                <option>Visa & Migration Services</option>
                                <option>OSHC</option>
                                <option>Tax Return</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="pt-0">
                            <label class="mb-0">Your Message Here</label>
                            <textarea class="form-control pt-3" placeholder="Type your message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger border-0
                            rounded-0" data-bs-dismiss="modal">Reset</button>
                <button type="button" class="btn btn-primary btn_purple
                            border-0 rounded-0">Submit</button>
            </div> -->
        </div>
    </div>
</div>
<a href="#" class="toTopBtn"><i class="fas fa-angle-up"></i></a>

<?php wp_footer();?>
<script>
jQuery('<i class="fas fa-chevron-down"></i>').insertAfter('li.dropdown');
</script>
</body>


<!-- Mirrored from design.kangaroonepal.volgaidev.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 12:44:38 GMT -->

</html>