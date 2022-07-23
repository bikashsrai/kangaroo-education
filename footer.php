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

<!-- newsletter -->
<section class="pb-50 pt-50">
    <div class="container">
        <div class="req_img p-4">

            <div class="row justify-content-center  align-items-center">
                <div class="col-md-10">
                    <p>Get The Latest Notification For Our Events, Seminars &amp; Offers.</p>
                    <form class="d-flex">
                        <input class="form-control" type="search" placeholder="Subscribe for Newsletter..."
                            aria-label="Search" spellcheck="false" data-ms-editor="true">
                        <button class="btn btn-outline-success p-60 rounded-0 search_btn"
                            type="submit">Subscribe</button>
                    </form>
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
                        <p class="footer-title">Request a Schedule For Free Consultation</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="details">
                                    <p class="number">+11 0265 0369 125</p>
                                    <small>Call Now</small>
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
            <div class="footer-middle-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="index-2.html" class="footer-logo"> <img
                                        src="<?php echo get_template_directory_uri().'/assets/img/logo-white.png';?>"
                                        alt="footer logo"></a>
                                <p class="text-white">Maecenas posuere neque et volutpat accumsan. Aliquam
                                    hendrerit tincidunt diam eu imperdiet. Etiam dictum suscipit tempus.
                                    Vestibulum eget pellentesque dolor.</p>
                                <ul class="social_share margin-top-20">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Support</h4>
                            <ul class="nav_menu">
                                <li><a href="#">Event</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">IT Consultancy</a></li>
                                <li><a href="#">IELTS</a></li>
                                <li><a href="#">PTE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Company</h4>
                            <ul class="nav_menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <h4 class="widget-headline">Kangarooedu Career</h4>
                            <ul class="nav_menu">
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Offices</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 visitus">
                        <h5>Visit us at :
                            <a href="https://kangarooedu.com.au/" target="_blank" class="text-warning"><img
                                    src="<?php echo get_template_directory_uri().'/assets/img/flag.png';?>"
                                    class="img-fluid" alt=""> Australia</a>
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="copyright-area">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-area-inner text-center text-white">
                                Copyright © 2022 Kangarooedu. Designed By VolgAI
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
                <h3 class="text-white mb-3 border-bottom pb-3"> Franchise With Us</h3>
                <form id="contact-form" action="#">
                    <div class="row">
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
                    </div>
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
            <div class="modal-body">
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
            </div>
        </div>
    </div>
</div>
<a href="#" class="toTopBtn"><i class="fas fa-angle-up"></i></a>


<?php wp_footer();?>
</body>


<!-- Mirrored from design.kangaroonepal.volgaidev.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 12:44:38 GMT -->

</html>