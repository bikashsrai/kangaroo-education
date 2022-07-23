<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kangarooeducation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
        <title>Kangaroo Education</title>
        <?php
         wp_enqueue_script("jquery");
        wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">
            <!-- <a class="skip-link screen-reader-text"
                href="#primary"><?php esc_html_e( 'Skip to content', 'kangarooeducation' ); ?></a> -->

            <header class="bg-white mainnav sticky-top" id="header">
                <div class="container d-flex align-items-center">
                    <?php 
                        $custom_logo_id=get_theme_mod('custom_logo');
                        $logo_image=wp_get_attachment_image_src($custom_logo_id,'full');
                        ;?>

                    <a href="<?php echo home_url(); ?>" class="logo me-auto"><img src="<?php echo $logo_image[0]; ?>"
                            alt="" class="img-fluid"></a>
                    <nav id="navbar" class="navbar">
                        <!-- <ul>

                            <li class="dropdown"><a href="#"><span>About Us</span>
                                    <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="whoweare.html">
                                            Who We Are</a></li>
                                    <li><a href="approach.html">
                                            Our Approach </a></li>
                                    <li><a href="milestone.html">
                                            Milestone</a></li>
                                    <li><a href="certification.html">
                                            Our Certification</a></li>
                                    <li><a href="partners.html">
                                            Our Partners</a></li>
                                    <li><a href="message.html">
                                            Message From CEO</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="services.html"><span>Study Abroad</span>
                                    <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="studyinaustralia.html">
                                            Study in Australia</a></li>
                                    <li><a href="uk.html">
                                            Study in UK </a></li>
                                    <li><a href="canada.html">
                                            Study in Canada</a></li>
                                    <li><a href="newzealand.html">
                                            Study in NewZealand</a></li>
                                    <li><a href="usa.html">
                                            USA</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Test Preparation</span>
                                    <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="ielts.html"><span>IELTS Preparation Classes</span></a> </li>
                                    <li><a href="pte.html"><span>PTE Preparation Classes</span></a> </li>
                                    <li><a href="toefl.html"><span>TOEFL Preparation Classes</span></a> </li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Resourses</span>
                                    <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#"><span>Study Abroad</span></a> </li>
                                    <li><a href="#"><span>Sample Documents</span></a> </li>
                                    <li><a href="#"><span>Statement of porpose</span></a> </li>
                                    <li><a href="#"><span>Interview Preparation Guidelines</span></a> </li>


                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="institution.html">Institution</a></li>
                            <li><a class="nav-link scrollto" href="blog.html">Blog</a></li>

                            <li class="dropdown"><a href="#"><span>Media</span> <i class="fas fa-chevron-down"></i></a>
                                <ul>

                                    <li><a href="photo.html">
                                            Photo Gallery</a></li>
                                    <li><a href="video.html">
                                            Video Gallery </a></li>

                                </ul>
                            </li>


                        </ul> -->

                        <?php 
                        wp_nav_menu(array(
                            'theme_location'=>'primary-one',
                            'depth'=>2,
                            'container'=>'',
                            'menu_class'=>'',
                             'link_before'          => '',
                             'link_after'           => '<i class="fas fa-chevron-down"></i>',
                            
                            
                        ))
                        ;?>
                        <a class="btn-get-started bg-transparent
                                 text-theme rounded-3  btn-sm contactbtn fw-bold text-theme enqbtn"
                            href="contactus.html">Contact Us <i class="flaticon-long-right-arrow"></i></a>
                        <i class="fa fa-list text-theme mobile-nav-toggle"></i>
                    </nav>
                    <!-- .navbar -->

                </div>
            </header>
            <!-- ?navbar section ends -->