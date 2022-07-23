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
        //customizing the logo
        $logo_width=63;
        $logo_height=189;
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

        //Register the menu
        register_nav_menus(
            array(
                'primary-one'=>esc_html__('Primary Menu')
            )
            );
        // add_theme_support('custom-logo',$argslogo);
        add_theme_support( 'post-thumbnails' );
        add_post_type_support( 'page', 'excerpt' );
    }
}
add_action('after_setup_theme','ke_theme_setup',0);