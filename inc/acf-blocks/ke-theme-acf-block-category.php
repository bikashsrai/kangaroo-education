<?php 
function ke_theme_block_category($categories,$post){
    return array_merge(
        $categories,
        array(
            array(
            'slug'=>'ke-blocks',
            'title'=>__('KE-Blocks','ke-blocks'),
           ),
        )
        
    );

}
add_filter('block_categories','ke_theme_block_category',10,2);