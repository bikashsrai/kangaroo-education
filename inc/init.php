<?php
/**
 * load all the required files
 * @packages kangaroo education
 */

 $files_loader=array(
    'inc/functions/assets.php',
    'inc/functions/setup.php',
    'inc/functions/acf-options.php',
    'inc/functions/custom-post-types.php',
    'inc/functions/scripts.php',
    'inc/functions/example.php',
   'inc/acf-blocks/ke-theme-acf-block-category.php',
   'inc/acf-blocks/ke-theme-acf-blocks.php',
   'inc/acf-blocks/ke-theme-render-callback.php',
   
 );

 foreach ($files_loader as $file){
    if(file_exists(get_template_directory().'/'.$file)){
        locate_template($file,true,true);
    }
 }
 unset($file);