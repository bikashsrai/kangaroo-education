<?php
add_action('acf/init','ke_theme_init_block_types');
function ke_theme_init_block_types(){

    //check function exists
    if(function_exists('acf_register_block_type')){
        //register the home block
        acf_register_block_type(array(
            'name'=>'ke-theme-home', //a unique name that identifies the block
            'title'=>__('The Home'), //The display for your block
            'description'=>__('A custom block for home'), //optional
            'render_template' => 'template-parts/blocks/content-home.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-appearance',// optional
			'keywords'        => array( 'quote', 'mention' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				), 
            
            ));

         //Register the who we are block
          acf_register_block_type(array(
          'name'=>'ke-theme-who-we-are', //a unique name that identifies the block
            'title'=>__('Who We Are'), //The display for your block
            'description'=>__('A custom block for about who we are'), //optional
            'render_template' => 'template-parts/blocks/content-who_we_are.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'quote', 'mention' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				), 
            
            )); 
            
            // Register Our Approach
             acf_register_block_type(array(
            'name'            =>'ke-theme-our-approach', //a unique name that identifies the block
            'title'           =>__('Our Approach'), //The display for your block
            'description'     =>__('A custom block for about our approach'), //optional
            'render_template' => 'template-parts/blocks/content-our_approach.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

            //register the milestone

              acf_register_block_type(array(
            'name'            =>'ke-theme-milestone', //a unique name that identifies the block
            'title'           =>__('Milestone'), //The display for your block
            'description'     =>__('A custom block for about milestone'), //optional
            'render_template' => 'template-parts/blocks/content-milestone.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
            

            //register the 404

             acf_register_block_type(array(
            'name'            =>'ke-theme-404', //a unique name that identifies the block
            'title'           =>__('Not Found'), //The display for your block
            'description'     =>__('A custom block for about not found'), //optional
            'render_template' => 'template-parts/blocks/content-not_found.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

            //register the message from the ceo

             acf_register_block_type(array(
            'name'            =>'ke-theme-message-from-ceo', //a unique name that identifies the block
            'title'           =>__('Message from'), //The display for your block
            'description'     =>__('A custom block for about message from ceo'), //optional
            'render_template' => 'template-parts/blocks/content-message_from_ceo.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

            // register the study Abroad
            
             acf_register_block_type(array(
            'name'            =>'ke-theme-message-study-abroad', //a unique name that identifies the block
            'title'           =>__('Study Abroad'), //The display for your block
            'description'     =>__('A custom block for about study abroad'), //optional
            'render_template' => 'template-parts/blocks/content-study-abroad.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
            

            //Test preparation
              acf_register_block_type(array(
            'name'            =>'ke-theme-message-test-preparation', //a unique name that identifies the block
            'title'           =>__('Test Preparation'), //The display for your block
            'description'     =>__('A custom block for test preparation'), //optional
            'render_template' => 'template-parts/blocks/content-test_preparation.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
                 

			//Register the institution cpt block

             acf_register_block_type(array(
            'name'            =>'ke-theme-institution', //a unique name that identifies the block
            'title'           =>__('Instiution'), //The display for your block
            'description'     =>__('A custom block for institution'), //optional
            'render_template' => 'archive-institution.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			//Register for the single block for the single-institution page

			
             acf_register_block_type(array(
            'name'            =>'ke-theme-single-institution', //a unique name that identifies the block
            'title'           =>__('Single Instiution'), //The display for your block
            'description'     =>__('A custom block for single institution'), //optional
            'render_template' => 'single-institution.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'approach' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
         //Register the block for post

		  acf_register_block_type(array(
            'name'            =>'ke-theme-post', //a unique name that identifies the block
            'title'           =>__('Post Block'), //The display for your block
            'description'     =>__('A  block for inbuilt'), //optional
            'render_template' => 'archive.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'our ', 'post' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 




    }
}