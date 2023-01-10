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


<!-- new footer corporate and international offices-->

<!-- associate partners section ends -->
<!-- newsletter -->



<!--paste shortcode here news letter-->

<!-- footer -->

<!-- Footer Section Starts -->
<footer class="footer-area">

    <div class="footer-top-area" style="background-color:#290233;">
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
                            <?php
                            $link = get_field( 'link_talk', 'options' );
                            if ( $link ) :
                        	$link_url = $link['url'];
	                            $link_title = $link['title'];
                        	$link_target = $link['target'] ? $link['target'] : '_self';
                            	?>
                            	<a class="btn-get-started bg-white
                                 text-theme rounded-3   contactbtn fw-bold text-theme" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
                                <i class="flaticon-long-right-arrow"></i></a>
                                <?php endif; ?>
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
                                        $link = get_sub_field( 'social_links', 'options' );
                                   ?>
                                     <?php
                                 
                                        if ( $link ) :
	                                    $link_url = $link['url'];
	                                        $link_title = $link['title'];
	                                        $link_target = $link['target'] ? $link['target'] : '_self';
	                                                            ?>
                                    <li><a href="<?php echo esc_url( $link_url ); ?>"
                                            target="<?php echo esc_attr( $link_target ); ?>"><i class="fab fa-<?php echo $icon_social;?>"></i></a></li>
                                               <?php endif; ?>
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
                            <h4 class="widget-headline">Privacy</h4>
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
        <!--sidebar right form -->
        <div class="offcanvas-body bg-theme1">
            <div class="reply-area">
                <h3 class="text-white mb-3 border-bottom pb-3"> Speak With Experts</h3>
<!--                 <form id="contact-form"> -->
                    <!-- Contact form for right bar vertical with us -->
                    <div class="text-white">
                    <?php if ( $form_right = get_field( 'form_right', 'options' ) ) : ?>
                	<?php echo do_shortcode($form_right); ?>
                    <?php endif; ?>
                    </div>
                 
                <!--</form>-->
			
					 
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
<!--<a href="#" class="toTopBtn"><i class="fas fa-angle-up"></i></a>-->

<!--REquest a callback-->
<!-- Modal -->
<div class="modal fade newmodal" id="reqcallbackModal" tabindex="-1" aria-labelledby="reqcallbackModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-theme" id="reqcallbackModalLabel">Get in Touch with Experts for Free
                    Consultation</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--............................ Book Consulatancy form................... -->


            <!--............................ Book request a callback form................... -->
           <?php if ( $request_callback = get_field( 'request_callback' ) ) : ?>
        	<?php echo do_shortcode($request_callback); ?>
           <?php endif; ?>
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
<!-- popup notification -->
<?php wp_footer();?>
<!--<script>-->
<!-- This jquery is used for dropdown sign in menu header -->
<!--jQuery('<i class="fas fa-chevron-down"></i>').insertAfter('li.dropdown');-->
<!--</script>-->
<script>
   jQuery(document).ready(function(){
    $ = jQuery; 
    $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
}); 

});</script>
<script>
    jQuery('p:empty').remove();</script>
<!-- jQuery('#contact-form form').addClass('w-40 m-auto pt-100 pb-100 text-white'); -->
    <!-- script for the photo gallery closing navigation symbol -->
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/lightgallery-all.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/lightgallery-all.min.js"></script> -->
<script>
$(document).ready(function() {
    $('#lightgallery').lightGallery();
});

</script>
<script>
$('ul').each(function() {
  if ($(this).text() === '') {
    $(this).remove();
  }
});

</script>
<script>
jQuery("form").attr("id","contact-form");</script>

<script>document.addEventListener( '.wpcf7-submit', function( event ) {
  alert( "Fire!" );
}, false );</script>
</body>


<!-- Mirrored from design.kangaroonepal.volgaidev.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 12:44:38 GMT -->

</html>