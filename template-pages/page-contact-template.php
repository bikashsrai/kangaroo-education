<?php
/**
 * Template Name:Contact
 */
get_header();
?>
<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>

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
                            <!-- Location section Starts -->
<section class="pt-50">
    <div class="contact_page">
        <div class="container">
                <div class="home_section_title text-center">
                <h1 class="text-uppercase font_weight300 home_title">Offices From Nepal</h1>
                <div class="style_bar"></div>
            </div>

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
                
                 <div class="line_separator "></div>
                <?php if ( $email_off = get_sub_field( 'email' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                 <h6>Email</h6><?php echo $email_off; ?>
                 </div>
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

                <div class="home_section_title text-center">
                <h1 class="text-uppercase font_weight300 home_title">Global Offices</h1>
                <div class="style_bar"></div>
            </div>

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
                            
                    <h3><?php echo esc_html( $country_name_lo ); ?></h3>
                    <div class="sec_line-main d-flex">
                        <div class="sec_line sec_line-big "></div>
                    </div>

                </div>
                </div>
                </div>
                <?php endif; ?>

                <?php if ( $phone_lo = get_sub_field( 'phone_lo' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                 <h6>Phone</h6><?php echo $phone_lo; ?></div>
                <?php endif; ?>
                
                 <div class="line_separator "></div>
                <?php if ( $email = get_sub_field( 'email' ) ) : ?>
                 <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                 <h6>Email</h6><?php echo $email; ?>
                 </div>
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


            </div>
        </div>
    </div>
</section>
<!-- Location section ends -->
            </div>
        </div>
    </div>
</section>





<section class="mb-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                $contactformus=get_field('contact_form_book');
                $bak_img=get_field('bakground_image_form');
                $des_con=get_field('description_book');
                 ?>
                <div class="book_contact" style="background:url('<?php echo esc_url( $bak_img['url'] ); ?>') no-repeat ">
                    <form class="w-40 m-auto pt-100 pb-100 text-white " action="#" method="post">
                        <?php echo do_shortcode($contactformus);?>
                    </form>

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
    jQuery('#search').click(function(e){
        e.preventDefault();
        var location = jQuery('#location').val();
        var pageID = jQuery('#page-id').val();
        console.log(location);
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var data = {
            'action'        : 'kangaro_contact_search',
            'loc'           : location,
            'ID'            : pageID,
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
<?php
get_footer();