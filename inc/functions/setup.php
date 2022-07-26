<?php
/**
 * Functions and definitions
 * 
 */
if(!function_exists('ke_theme_setup')){
    /**
     * Sets up theme defaults and registers support for various WordPress features
     * Note that this function is hooked into the after setup theme hook which runs before the init 
     * hook.    The init hook is too late for some features such aails
     * 
     */
    function ke_theme_setup(){
        //customizing the logo header
        $logo_height=189;
        $logo_width=63;
        add_theme_support(
           'custom-logo',
           array(
            'height'=>$logo_height,
            'width'=>$logo_width,
            'flex-width'=>true,
            'flex-height'=>true,
            'unlink-homepage-logo' => true,
           )
           );
           // Customizing footer logo
        //    $logo_height_footer=414;
        //     $logo_width_footer=138;
        // add_theme_support(
        //    'custom-footer',
        //    array(
        //     'height'=>$logo_height,
        //     'width'=>$logo_width,
        //     'flex-width'=>true,
        //     'flex-height'=>true,
        //     'unlink-homepage-logo' => true,
        //    )
        //    );

        //Register the menu
        register_nav_menus(
            array(
                'primary-one'=>esc_html__('Primary Menu'),
                'footer-one'=>esc_html__('Footer Menu 1'),
                'footer-two'=>esc_html__('Footer Menu 2'),
                'footer-three'=>esc_html__('Footer Menu 3'),
            )
            );
        // add_theme_support('custom-logo',$argslogo);

        function add_additional_class_on_a( $classes, $Event, $args ) {
	     if ( isset( $args->add_a_class ) ) {
		$classes['class'] = $args->add_a_class;
      	}

	  return $classes;
}

         add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3 );

       
        add_theme_support( 'post-thumbnails' );
        add_post_type_support( 'page', 'excerpt' );
    }
}
add_action('after_setup_theme','ke_theme_setup',0);