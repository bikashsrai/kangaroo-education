<?php
/**
 * Enqueue scripts and styles
 * @return void
  * Enqueue styles and scripts
 **/
function kangaroo_education_scripts(){
    

 wp_register_style('css-all-min','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',true,'all');

 wp_register_style('css-flat-icon',get_template_directory_uri().'/assets/css/flaticon.css',[],true,'all');
 wp_register_style('css-owl-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
 wp_register_style('css-owl-theme','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');
 wp_register_style('animate',get_template_directory_uri().'/assets/css/animate.css',[],true,'all');
 wp_register_style('css-layers',get_template_directory_uri().'/assets/css/revolution/layers.css',[],true,'all');
 wp_register_style('css-navigation',get_template_directory_uri().'/assets/css/revolution/navigation.css',[],true,'all');
 wp_register_style('css-settings',get_template_directory_uri().'/assets/css/revolution/settings.css',[],true,'all');
 wp_register_style('css-bootstrap-min',get_template_directory_uri().'/assets/dist/css/bootstrap.min.css',[],true,'all');
 wp_register_style('css-fonts-google','https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap');
 wp_register_style('css-fonts-apis','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900|Cabin:400,700|Droid+Serif:400,700|Playball');
 wp_register_style('css-glightbox',get_template_directory_uri().'/assets/dist/glightbox/css/glightbox.min.css',[],false,'all');

 wp_register_style('main-style-css',get_template_directory_uri().'/assets/css/style.css',[],true,'all');



 //wp_enqueue script
//  wp_register_script('main-js',get_template_directory().'/assets/js/main.js',[],filemtime(get_template_directory().'/assets/js/main.js'),true);
//     wp_register_script('bootstrap-min-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',['jQuery'],false,true);
wp_register_script('js-jquery-min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',[],true,true);
wp_register_script('js-themepunch-rev',get_template_directory_uri().'/assets/dist/js/revolution/jquery.themepunch.revolution.min.js',['jquery'],true,true);
wp_register_script('js-themepunch-tools',get_template_directory_uri().'/assets/dist/js/revolution/jquery.themepunch.tools.min.js',['jquery'],true,true);
wp_register_script('js-rev',get_template_directory_uri().'/assets/dist/js/revolution/revolution.js',['jquery'],true,true);
// wp_register_script('js-jquery-cycle','http://malsup.github.com/jquery.cycle2.js',['jquery'],false); //added 1

// wp_register_script('js-jquery-mind','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',[],true,true);
wp_register_script('js-owl-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js',['jquery'],true,true);
wp_register_script('js-bootstrap-bundle-min',get_template_directory_uri().'/assets/dist/js/bootstrap.bundle.min.js',['jquery'],true,true);

wp_register_script('js-flexslider',get_template_directory_uri().'/assets/dist/js/jquery.flexslider-min.js',['jquery'],true,true);
wp_register_script('js-glightmin',get_template_directory_uri().'/assets/dist/glightbox/js/glightbox.min.js',['jquery'],true,true);
wp_register_script('js-platform',get_template_directory_uri().'/assets/dist/js/platform/platform.js',['jquery'],true,true); //added 1 
wp_register_script('js-sorting',get_template_directory_uri().'/assets/dist/js/sorting.js',['jquery'],true,true);
wp_register_script('js-main',get_template_directory_uri().'/assets/dist/js/main.js',['jquery'],true,true);
//   wp_enqueue_script('js-main',get_template_directory_uri().'/assets/dist/js/main.js',['jQuery'],_S_VERSION,true);
//  wp_enqueue_style('style-css');
wp_enqueue_style('css-all-min');
wp_enqueue_style('css-flat-icon');
wp_enqueue_style('css-owl-carousel');
wp_enqueue_style('css-owl-theme');
wp_enqueue_style('animate');
wp_enqueue_style('css-layers');
wp_enqueue_style('css-navigation');
wp_enqueue_style('css-settings');
wp_enqueue_style('css-bootstrap-min');
wp_enqueue_style('css-fonts-google');
wp_enqueue_style('css-fonts-apis');
wp_enqueue_style('css-glightbox');
wp_enqueue_style('main-style-css');

//wp_enqueue script
wp_enqueue_script('js-jquery-min');
wp_enqueue_script('js-flexslider');
// wp_enqueue_script('js-jquery-mind');
wp_enqueue_script('js-owl-carousel');
wp_enqueue_script('js-bootstrap-bundle-min');
wp_enqueue_script('js-themepunch-rev');
wp_enqueue_script('js-themepunch-tools');
wp_enqueue_script('js-rev');
wp_enqueue_script('js-glightmin');
wp_enqueue_script('js-platform');
// wp_enqueue_script('js-jquery-cycle');
wp_enqueue_script('js-sorting');
wp_enqueue_script('js-main');

}
add_action('wp_enqueue_scripts','kangaroo_education_scripts');