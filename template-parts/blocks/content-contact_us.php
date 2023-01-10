<?php
/**
 * Block for contact us
 * 
 */
get_header(); ?>
<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>
<<<<<<< HEAD
=======

>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
<section class="pt-50">
    <div class="contact_page">
        <div class="container">
             <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="search ">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search for nearest Location" id="location">
                        <button id="search" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div> 
            <input type="hidden" value="<?php echo get_the_ID(); ?>" id="page-id" />
            <div id="append-location">
<<<<<<< HEAD
    <!-- Location section Starts -->
=======
                            <!-- Location section Starts -->
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
<section class="pt-50">
    <div class="contact_page">
        <div class="container">
                <div class="home_section_title text-center">
                <h1 class="text-uppercase font_weight300 home_title">Offices From Nepal</h1>
                <div class="style_bar"></div>
            </div>
<<<<<<< HEAD
            <div class="row mt-4">               
                <!--location info loop start -->
                <?php if ( have_rows( 'officecs_from_nepal_rep' ) ) : ?>
                <?php while ( have_rows( 'officecs_from_nepal_rep' ) ) :
                the_row(); ?>               
            <div class="col-md-4 mt-3" id="sydney">
                <div class="contact1">                 
                    <?php if ( $country_address = get_sub_field( 'country_location' ) ) : ?>
                    <div class="row">
                        <div class ="col-md-12">
                        <div class="inner_section_title t_left ">                          
                    <h3><?php echo esc_html( $country_address ); ?></h3>
                    <div class="sec_line-main d-flex">
                        <div class="sec_line sec_line-big "></div>
                    </div>
                </div>
                </div>
                </div>
                <?php endif; ?>
                <?php if ( $phone_off_nepal = get_sub_field( 'phone' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                 <h6>Phone</h6><?php echo $phone_off_nepal; ?></div>
                <?php endif; ?>                
=======

            <div class="row mt-4">
<<<<<<< HEAD
                
                <!--location info loop start -->
                <?php if ( have_rows( 'officecs_from_nepal_rep' ) ) : ?>
                <?php while ( have_rows( 'officecs_from_nepal_rep' ) ) :
                the_row(); ?>
                
            <div class="col-md-4 mt-3" id="sydney">
                <div class="contact1"> 
                
                    <?php if ( $country_address = get_sub_field( 'country_location' ) ) : ?>
                    <div class="row">
                        <div class ="col-md-12">
                        <div class="inner_section_title t_left ">
                            
                    <h3><?php echo esc_html( $country_address ); ?></h3>
                    <div class="sec_line-main d-flex">
                        <div class="sec_line sec_line-big "></div>
=======

                <!-- ws -->
                <?php if ( have_rows( 'info_contactus_rep' ) ) : ?>
                <?php while ( have_rows( 'info_contactus_rep' ) ) :
		        the_row(); ?>





                <!-- we -->
                <div class="col-md-4" id="sydney">
                    <div class="contact1">
                        <?php if ( $country__name_location = get_sub_field( 'country__name_location' ) ) : ?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class=""><?php echo esc_html( $country__name_location ); ?></h3>


                                    <div class="sec_line-main d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ( $phone_number = get_sub_field( 'phone_number' ) ) : ?>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6> <?php echo esc_html( $phone_number ); ?>
                        </div>
                        <?php endif; ?>
                        <div class="line_separator "></div>
                        <?php if ( $email_info = get_sub_field( 'email_info' ) ) : ?>
                        <a href="mailto:<?php echo $email_info; ?>">

                            <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                                <h6>Email</h6><?php echo $email_info; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="line_separator "></div>
                    <?php if ( $location_info = get_sub_field( 'location_info' ) ) : ?>

                    <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                        <h6>Location</h6> <?php echo $location_info; ?>
                    </div>
                    <?php endif; ?>
                    <div class="line_separator "></div>
                    <?php if ( $timing_hours = get_sub_field( 'timing_hours' ) ) : ?>


                    <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                        <h6>Timing</h6><?php echo $timing_hours; ?>
                    </div>
                    <?php endif; ?>
                    <div class="map1 pt-3">
                        <?php if ( $google_map_location = get_sub_field( 'google_map_location' ) ) : ?>
                        <iframe src=" <?php echo $google_map_location; ?>" <?php endif; ?> width="100%" height="350"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
>>>>>>> fbfd386c4822137e18d26121e33f13fbc6bf8d53
                    </div>

                </div>
<<<<<<< HEAD
                </div>
                </div>
                <?php endif; ?>

                <?php if ( $phone_off_nepal = get_sub_field( 'phone' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                 <h6>Phone</h6><?php echo $phone_off_nepal; ?></div>
                <?php endif; ?>
                
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                 <div class="line_separator "></div>
                <?php if ( $email_off = get_sub_field( 'email' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                 <h6>Email</h6><?php echo $email_off; ?>
                 </div>
<<<<<<< HEAD
                <?php endif; ?>              
               <div class="line_separator "></div>
                <?php if ( $location_off = get_sub_field( 'location' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                 <h6>Location</h6><?php echo $location_off; ?></div>
                <?php endif; ?>               
                <div class="line_separator "></div>              
                <?php if ( $timing_hours_off = get_sub_field( 'office_timing_hours_npl' ) ) : ?>
                <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                <h6>Timing</h6><?php echo $timing_hours_off; ?></div>
                <?php endif; ?>                              
                    <div class="map1 pt-3">
                    <?php if ( $google_map_off = get_sub_field( 'office_google_map' ) ) : ?>
                        <iframe src="<?php echo $google_map_off; ?>" <?php endif; ?> width="100%" height="350"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>                           
                    </div>
                </div>
            </div>                 
                <?php endwhile; ?>
                <?php endif; ?>
                  <!--location info loop end -->                               
                <!-- end conatct -->
            </div>
        </div>
    </div>
</section>
<section class="pt-50">
    <div class="contact_page">
        <div class="container">
=======
                <?php endif; ?>
              
               <div class="line_separator "></div>

                <?php if ( $location_off = get_sub_field( 'location' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                 <h6>Location</h6><?php echo $location_off; ?></div>
                <?php endif; ?>
                
                <div class="line_separator "></div>
               
                <?php if ( $timing_hours_off = get_sub_field( 'office_timing_hours_npl' ) ) : ?>
                <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                <h6>Timing</h6><?php echo $timing_hours_off; ?></div>
                <?php endif; ?>
                
               
                    <div class="map1 pt-3">
                    <?php if ( $google_map_off = get_sub_field( 'office_google_map' ) ) : ?>
                        <iframe src="<?php echo $google_map_off; ?>" <?php endif; ?> width="100%" height="350"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                    </div>

                </div>
            </div>
                
    
                <?php endwhile; ?>
                <?php endif; ?>
                  <!--location info loop end -->
                
                
                <!-- end conatct -->
=======
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end conatct -->

            <!-- <div class="map1 pt-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1656.311064131688!2d151.20774!3d-33.873628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c142f17148a20a5!2sKangaroo%20Education%20Foundation%20Education%20%26%20Visa%20Services%20Pty%20Ltd!5e0!3m2!1sen!2sus!4v1628657039198!5m2!1sen!2sus"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div> -->
            <!-- <div class="col-md-4">
                    <div class="contact1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class="">Adeliade</h3>


                                    <div class="sec_line-main  
                             d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6>+61-(08)72250511
                        </div>
                        <div class="line_separator "></div>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                            <h6>Email</h6>sydney@adelaide.com
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i
                                    class="fas fa-map-marker-alt"></i></span>
                            <h6>Location</h6>Level 6, 68 Grenfell Street Adelaide, 5000 , South Australia
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                            <h6>Timing</h6>Mon – Sat&nbsp;|&nbsp; 9 am to 8 pm &nbsp; <br> Sun – 10 am to 3 pm
                        </div>
                        <div class="map1 pt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1635.6501469894024!2d138.60222!3d-34.924005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf12b3931ec97a264!2sKangaroo%20Education%20Foundation%20Education%20%26%20Visa%20Services%20Pty%20Ltd!5e0!3m2!1sen!2snp!4v1628657122344!5m2!1sen!2snp"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div> -->
            <!-- end conatct -->

            <!-- <div class="col-md-4">
                    <div class="contact1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class="">Tasmania</h3>


                                    <div class="sec_line-main  
                                 d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6>0362 887 525 / 0480 222 204
                        </div>
                        <div class="line_separator "></div>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                            <h6>Email</h6>tasmania@kangarooedu.com
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i
                                    class="fas fa-map-marker-alt"></i></span>
                            <h6>Location</h6>Level 1, 33 Elizabeth Street, Hobart TAS 7000, Tasmania
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                            <h6>Timing</h6>Mon – Sat&nbsp;|&nbsp; 9 am to 8 pm &nbsp; <br> Sun – 10 am to 3 pm
                        </div>

                        <div class="map1 pt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5847.147419710215!2d147.328821!3d-42.881841!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a8cc8e489647bd8!2sKangaroo%20Education%20Foundation%20Education%20%26%20Visa%20Services%2C%20Tasmania!5e0!3m2!1sen!2snp!4v1628657182642!5m2!1sen!2snp"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div> -->
            <!-- end conatct -->

            <!-- <div class="col-md-4 pt-4">
                    <div class="contact1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class="">Kathmandu</h3>


                                    <div class="sec_line-main  
                                 d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6>+977-1-4233107, 4233088
                        </div>
                        <div class="line_separator "></div>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                            <h6>Email</h6>info@kangarooedu.com
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i
                                    class="fas fa-map-marker-alt"></i></span>
                            <h6>Location</h6>AB Complex, Padmodaya Mode Putalisadak, Kathmandu, Nepal
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                            <h6>Timing</h6>Mon – Sat&nbsp;|&nbsp; 9 am to 8 pm &nbsp; <br> Sun – 10 am to 3 pm
                        </div>

                        <div class="map1 pt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113039.65561007126!2d85.321789!3d27.702177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcc723d69dbdd802!2sKangaroo%20Education%20Foundation!5e0!3m2!1sen!2sus!4v1654598452430!5m2!1sen!2sus"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div> -->
            <!-- end conatct -->
            <!-- <div class="col-md-4 pt-4" id="pokhara">
                    <div class="contact1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class="">Pokhara</h3>


                                    <div class="sec_line-main  
                                 d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6>+977-61-541474
                        </div>
                        <div class="line_separator "></div>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                            <h6>Email</h6>pokhara@kangarooedu.com
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i
                                    class="fas fa-map-marker-alt"></i></span>
                            <h6>Location</h6>Saleways Tower – L5, Chipledhunga, Pokhara
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                            <h6>Timing</h6>Mon – Sat&nbsp;|&nbsp; 9 am to 8 pm &nbsp; <br> Sun – 10 am to 3 pm
                        </div>

                        <div class="map1 pt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113039.65561007126!2d85.321789!3d27.702177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcc723d69dbdd802!2sKangaroo%20Education%20Foundation!5e0!3m2!1sen!2sus!4v1654598452430!5m2!1sen!2sus"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div> -->
            <!-- end conatct -->
            <!-- <div class="col-md-4 pt-4">
                    <div class="contact1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner_section_title t_left ">
                                    <h3 class="">Chitwan</h3>


                                    <div class="sec_line-main  
                                 d-flex">
                                        <div class="sec_line sec_line-big "></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                            <h6>Phone</h6>+977-56-572064
                        </div>
                        <div class="line_separator "></div>

                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                            <h6>Email</h6>chitwan@kangarooedu.com
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i
                                    class="fas fa-map-marker-alt"></i></span>
                            <h6>Location</h6>Lions Chowk, Charan Tower, 5th Floor Bharatpur
                        </div>
                        <div class="line_separator "></div>
                        <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                            <h6>Timing</h6>Mon – Sat&nbsp;|&nbsp; 9 am to 8 pm &nbsp; <br> Sun – 10 am to 3 pm
                        </div>

                        <div class="map1 pt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113039.65561007126!2d85.321789!3d27.702177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcc723d69dbdd802!2sKangaroo%20Education%20Foundation!5e0!3m2!1sen!2sus!4v1654598452430!5m2!1sen!2sus"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div> -->
            <!-- end conatct -->
>>>>>>> fbfd386c4822137e18d26121e33f13fbc6bf8d53


        </div>
    </div>
    </div>
</section>

<section class="pt-50">
    <div class="contact_page">
        <div class="container">

>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                <div class="home_section_title text-center">
                <h1 class="text-uppercase font_weight300 home_title">Global Offices</h1>
                <div class="style_bar"></div>
            </div>
<<<<<<< HEAD
            <div class="row mt-4">                
                <!--location info loop start -->
                <?php if ( have_rows( 'office_address_rep' ) ) : ?>
                <?php while ( have_rows( 'office_address_rep' ) ) :
                the_row(); ?>               
            <div class="col-md-4 mt-3" id="sydney">
                <div class="contact1">                 
                    <?php if ( $country_name_lo = get_sub_field( 'country_name_lo' ) ) : ?>
                    <div class="row">
                        <div class ="col-md-12">
                        <div class="inner_section_title t_left ">                            
=======

            <div class="row mt-4">
                
                <!--location info loop start -->
                <?php if ( have_rows( 'office_address_rep' ) ) : ?>
                <?php while ( have_rows( 'office_address_rep' ) ) :
                the_row(); ?>
                
            <div class="col-md-4 mt-3" id="sydney">
                <div class="contact1"> 
                
                    <?php if ( $country_name_lo = get_sub_field( 'country_name_lo' ) ) : ?>
                    <div class="row">
                        <div class ="col-md-12">
                        <div class="inner_section_title t_left ">
                            
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                    <h3><?php echo esc_html( $country_name_lo ); ?></h3>
                    <div class="sec_line-main d-flex">
                        <div class="sec_line sec_line-big "></div>
                    </div>
<<<<<<< HEAD
=======

>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                </div>
                </div>
                </div>
                <?php endif; ?>
<<<<<<< HEAD
                <?php if ( $phone_lo = get_sub_field( 'phone_lo' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                 <h6>Phone</h6><?php echo $phone_lo; ?></div>
                <?php endif; ?>               
=======

                <?php if ( $phone_lo = get_sub_field( 'phone_lo' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                 <h6>Phone</h6><?php echo $phone_lo; ?></div>
                <?php endif; ?>
                
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                 <div class="line_separator "></div>
                <?php if ( $email = get_sub_field( 'email' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                 <h6>Email</h6><?php echo $email; ?>
                 </div>
<<<<<<< HEAD
                <?php endif; ?>            
               <div class="line_separator "></div>
                <?php if ( $location_lo = get_sub_field( 'location_lo' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                 <h6>Location</h6><?php echo $location_lo; ?></div>
                <?php endif; ?>               
                <div class="line_separator "></div>              
                <?php if ( $timing_hours_lo = get_sub_field( 'timing_hours_lo' ) ) : ?>
                <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                <h6>Timing</h6><?php echo $timing_hours_lo; ?></div>
                <?php endif; ?>                             
                    <div class="map1 pt-3">
                    <?php if ( $google_map_lo = get_sub_field( 'google_map_lo' ) ) : ?>
                        <iframe src="<?php echo $google_map_lo; ?>" <?php endif; ?> width="100%" height="350"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>                          
                    </div>
                </div>
            </div>                
                <?php endwhile; ?>
                <?php endif; ?>
                  <!--location info loop end -->                             
                <!-- end conatct -->
=======
                <?php endif; ?>
              
               <div class="line_separator "></div>

                <?php if ( $location_lo = get_sub_field( 'location_lo' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                 <h6>Location</h6><?php echo $location_lo; ?></div>
                <?php endif; ?>
                
                <div class="line_separator "></div>
               
                <?php if ( $timing_hours_lo = get_sub_field( 'timing_hours_lo' ) ) : ?>
                <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-user-clock"></i></span>
                <h6>Timing</h6><?php echo $timing_hours_lo; ?></div>
                <?php endif; ?>
                
               
                    <div class="map1 pt-3">
                    <?php if ( $google_map_lo = get_sub_field( 'google_map_lo' ) ) : ?>
                        <iframe src="<?php echo $google_map_lo; ?>" <?php endif; ?> width="100%" height="350"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                    </div>

                </div>
            </div>
                
    
                <?php endwhile; ?>
                <?php endif; ?>
                  <!--location info loop end -->
                
                
                <!-- end conatct -->


>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
            </div>
        </div>
    </div>
</section>
<!-- Location section ends -->
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD
=======





>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
<section class="mb-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- <?php
                $contactformus=get_field('contact_form_book');
                $bak_img=get_field('bakground_image_form');
                $des_con=get_field('description_book');
<<<<<<< HEAD
                 ?>
                <div class="book_contact" style="background:url('<?php echo esc_url( $bak_img['url'] ); ?>') no-repeat ">
<<<<<<< HEAD
              <!--   <form class="w-40 m-auto pt-100 pb-100 text-white " action="#" method="post"> -->
=======
                    <form class="w-40 m-auto pt-100 pb-100 text-white " action="#" method="post">
=======
                 ?> -->
                <div class="book_contact">
                    <form class="w-40 m-auto pt-100 pb-100 text-white ">
>>>>>>> fbfd386c4822137e18d26121e33f13fbc6bf8d53
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
                        <?php echo do_shortcode($contactformus);?>
                <!-- </form> -->
                </div>
            </div>
            <div class="col-md-4 justify-content-center align-items-center m-auto">
                <div class="needhelp">
                    <h5>Answers to every education &amp; migration query.</h5>
                    <p><?php echo $des_con;?></p>
                    <h3><span class="text-theme fw-bold fw-6">Talk to Our Expert!</span></h3>
                    <!-- Book Now -->
                    <a class="btn-get-started booknow  text-center" href="#" data-bs-toggle="modal"
                        data-bs-target="#reqcallbackModal">Request A Callback</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
<<<<<<< HEAD
// 	add class to form 
	 jQuery('#contact-form form').addClass('w-40 m-auto pt-100 pb-100 text-white');
=======
>>>>>>> 7a12498542e9d987cac2a29809d58a130c37822d
    jQuery('#search').click(function(e){
        e.preventDefault();
        var location = jQuery('#location').val();
        var pageID = jQuery('#page-id').val();
        console.log(location);
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var data = {
            'action'        : 'kangaro_contact_search',
            'loc'      : location,
            'pageID'        : pageID,
        };
    $.ajax({ // you can also use $.post here
        url: ajaxurl, // AJAX handler
        data: data,
        type: 'POST',
        success: function(response) {
            if (response) {
                jQuery('#append-location').html(response.data);
            }
        }
    });
});
</script>
<?php get_footer();?>