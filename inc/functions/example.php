<?php 
add_action('wp-ajax_nopriv_filter','filter_ajax');
add_action('wp_ajax_filter','filter_ajax');
function filter_ajax(){


$category=$_post['category'];


$institution_selection=array(
                    'post_type'=>'Institution',
                    'posts_per_page'=>'12',
                    'post_status'=>'publish',
                    'orderby'=>'date'
                );
                if(isset($category)){
                    $institution_selection['category__in']=array($category);
                }
                $institution_featured= new WP_Query($institution_selection);?>
<?php if($institution_featured->have_posts()):
                    while($institution_featured->have_posts()):$institution_featured->the_post();

                              
                // $termsArray=get_the_terms($post->ID,'institution_category');
                // $termsSlug="";
                // foreach($termsArray as $term){
                //     $termsSlug.=$term->slug."";
                // }
                    ?>
<div class="col-md-3 australia">

    <a href="<?php echo get_the_permalink();?>">
        <div class="brands_item d-flex flex-column
                                justify-content-center">
            <img src="<?php the_post_thumbnail_url();?>" alt="...">
            <p class="text-center"> <?php the_title();?></p>
        </div>
    </a>
</div>
<?php endwhile;
                wp_reset_postdata();
                endif;


die();
}