<?php
add_action('acf/init','ke_theme_init_block_types');
function ke_theme_init_block_types(){

    //check function exists
    if(function_exists('acf_register_block_type')){
        //register the home block
        // acf_register_block_type(array(
        //     'name'=>'ke-theme-home', //a unique name that identifies the block
        //     'title'=>__('The Home'), //The display for your block
        //     'description'=>__('A custom block for home'), //optional
        //     'render_template' => 'template-parts/blocks/content-home.php',
		// 	'category'        => 'ke-blocks',
		// 	'icon'            => 'admin-appearance',// optional
		// 	'keywords'        => array( 'quote', 'mention' ), //optional
		// 	'mode'            => 'edit', //optional
		// 	'supports'        => array( //optional
		// 			'mode'  => false,
		// 			'align' => false,
		// 		), 
            
        //     ));
			  //register the home block
       		 acf_register_block_type(array(
            'name'=>'ke-theme-new-home', //a unique name that identifies the block
            'title'=>__('The New Home'), //The display for your block
            'description'=>__('A custom block for new home'), //optional
            'render_template' => 'template-parts/blocks/content-home.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-appearance',// optional
			'keywords'        => array( 'new', 'home' ), //optional
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
			'keywords'        => array( 'journey ', 'milestone' ), //optional
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
			'keywords'        => array( '404 ', 'error' ), //optional
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
            'name'            =>'ke-theme-message-study-Abroad', //a unique name that identifies the block
            'title'           =>__('Study Abroad In'), //The display for your block
            'description'     =>__('A custom block for about study abroad Abroad'), //optional
            'render_template' => 'template-parts/blocks/content-study-abroad.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'study ', 'abroad' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
			  // register the study  In different country each
            
             acf_register_block_type(array(
            'name'            =>'ke-theme-message-abroad', //a unique name that identifies the block
            'title'           =>__('Main Abroad'), //The display for your block
            'description'     =>__('A custom block for about study abroad in different country'), //optional
            'render_template' => 'template-parts/blocks/content-abroad.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'read ', 'studyin' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
            //Test preparation main parent page block
              acf_register_block_type(array(
            'name'            =>'ke-theme-message-preparation', //a unique name that identifies the block
            'title'           =>__('Main Preparation'), //The display for your block
            'description'     =>__('A custom block for test preparation'), //optional
            'render_template' => 'template-parts/blocks/content-preparation.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'message ', 'test' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
                 

            

            //Test preparation single page block
              acf_register_block_type(array(
            'name'            =>'ke-theme-message-test-preparation', //a unique name that identifies the block
            'title'           =>__('Test Preparation'), //The display for your block
            'description'     =>__('A custom block for test preparation for ielts, toefl , pte'), //optional
            'render_template' => 'template-parts/blocks/content-test_preparation.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'test ', 'preparation' ), //optional
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
			'keywords'        => array( 'university ', 'institution' ), //optional
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
            'render_template' => 'template-parts/blocks/content-single_institution.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'university ', 'institution' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			//Register the testimonial cpt block

             acf_register_block_type(array(
            'name'            =>'ke-theme-testimonial', //a unique name that identifies the block
            'title'           =>__('Testimonial details '), //The display for your block
            'description'     =>__('A custom block for testimonial'), //optional
            'render_template' =>'template-parts/blocks/content-single_testimonial.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'opinion', 'testimonial' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			 //Register for the single post block
              acf_register_block_type(array(
            'name'            =>'ke-theme-single post ', //a unique name that identifies the block
            'title'           =>__('Single Post '), //The display for your block
            'description'     =>__('A custom block forsingle post default'), //optional
            'render_template' => 'template-parts/blocks/content-singular.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'single ', 'post' ), //optional
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
			//Register the photo gallery

			acf_register_block_type(array(
            'name'            =>'ke-theme-photo-gallery', //a unique name that identifies the block
            'title'           =>__('Photo List'), //The display for your block
            'description'     =>__('A  block for photo gallery'), //optional
            'render_template' => 'archive-photogallery.php',
            // 'render_template' => 'template-parts/blocks/content-photocollection.php',
			'category'        => 'ke-blocks',
			'icon'            => 'format-gallery',// optional
			'keywords'        => array( 'gallery ', 'photo' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
			//Register the single subpage single-photo gallery from parent page media

			acf_register_block_type(array(
            'name'            =>'ke-theme-single-photo', //a unique name that identifies the block
            'title'           =>__('Photo Single'), //The display for your block
            'description'     =>__('A  block for  single photo gallery'), //optional
            'render_template' => 'template-parts/blocks/content-single_photo.php',
			'category'        => 'ke-blocks',
			'icon'            => 'camera',// optional
			'keywords'        => array( 'photo ', 'gallery' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			  //Register the video blog
              acf_register_block_type(array(
            'name'            =>'ke-theme-video-gallery', //a unique name that identifies the block
            'title'           =>__('Videos Gallery'), //The display for your block
            'description'     =>__('A custom block for videos gallery'), //optional
            'render_template' => 'template-parts/blocks/content-video_gallery.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'gallery ', 'video' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 
			 //Register the single video display block
              acf_register_block_type(array(
            'name'            =>'ke-theme-single-video', //a unique name that identifies the block
            'title'           =>__('Videos Single'), //The display for your block
            'description'     =>__('A custom block for  single videos gallery'), //optional
            'render_template' => 'template-parts/blocks/content-single_videos.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'gallery ', 'video' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			//Register the contact us button block page
			   acf_register_block_type(array(
            'name'            =>'ke-theme-contactus', //a unique name that identifies the block
            'title'           =>__('Contact KE'), //The display for your block
            'description'     =>__('A custom block for  Contact Us'), //optional
            'render_template' => 'template-parts/blocks/content-contact_us.php',
			'category'        => 'ke-blocks',
			'icon'            => 'admin-page',// optional
			'keywords'        => array( 'cintact ', 'us' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'    => false,
					'align'   => false,
				), 
            
            )); 

			
                 
                 






    }
}