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
		<meta name="google-site-verification" content="BRqKy2FPWYuCNsjUuQC35ewZxhkNIASEM-AEjXGtSxY" />
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="Hugo 0.84.0">
        
        <!-- script for the photo gallery closing navigation symbol -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css"
            rel="stylesheet">
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
                        </ul> -->

                        <?php 
                        wp_nav_menu(array(
                            'theme_location'=>'primary-one',
                            'depth'=>2,
                            'container'=>'',
                            'menu_class'=>'',
                             'link_before'          => '',
                             'link_after'           => ''
                           
                            
                        ));
                        ?>
                        <?php
                          $link_contact=get_field('link_contact_header','option');
			              if ( $link_contact ):
						  $link_url = $link_contact['url'];
						  $link_title = $link_contact['title'];
						  $link_target = $link_contact['target'] ? $link_contact['target'] : '_self';
						?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
                            class="btn-get-started bg-transparent
                                 text-theme rounded-3  btn-sm contactbtn fw-bold text-theme enqbtn mt-0"><?php echo esc_html( $link_title ); ?><i
                                class="flaticon-long-right-arrow"></i></a> <i
                            class="fa fa-list text-theme mobile-nav-toggle"></i>
                        <?php endif;?>

                    </nav>
                    <!-- .navbar -->

                </div>
            </header>
            <!-- ?navbar section ends -->