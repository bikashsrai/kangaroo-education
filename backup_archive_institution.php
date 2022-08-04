<?php 
/**
 * This is the cpt post for institution 
 */
get_header();?>

<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>
<?php 
$destinationTaxo = get_terms('country',
    array(
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
    ) );
?>

<section class="pt-50 pb-50">
    <div class="container">
        <div class="bg-light p-3">
            <div class="institute_filter">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <div class="align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label class="text-dark fs-6 opacity-75 text-nowrap me-2 d-none d-sm-block">
                                COUNTRY</label>
                            <select class="form-select filterby" id="select-destination">
                                <option value="-1" selected>Destination</option>
                                <?php foreach ( $destinationTaxo as $taxonomy ) : ?>
                                <option value="<?php echo $taxonomy->term_id; ?>">
                                    <?php echo $taxonomy->name; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>


                        </div>
                    </div>

                    <!--search institutions  -->

                    <div class="col-md-5">
                        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <div class="align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                                <label
                                    class="text-dark fs-6 opacity-75 text-nowrap me-2 d-none d-sm-block">INSTITUTION</label>
                                <input class="form-control" type="search" value="<?php echo get_search_query(); ?>"
                                    name="s" placeholder="Search an Institution..." aria-label="Search">
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="align-items-center ">
                            <a href="<?php the_permalink();?>"
                                class="btn btn-primary  mybtn mt-4  border bg-theme d-flex justify-content-center">
                                Search </a>
                            <!-- <button class="btn btn-primary  mybtn mt-4  border bg-theme d-flex justify-content-center"
                                type="submit">Search</button> -->
                        </div>
                    </div>
                    </form>
                    <!-- search institutions -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-50">
    <div class="container">
        <div class="inst_img">
            <div class="row" id="append">
                <?php
                $institution_selection=array(
                    'post_type'=>'Institution',
                    'posts_per_page'=>'12',
                    'post_status'=>'publish',
                    'orderby'=>'date'
                );

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
                endif;?>
                <!-- <div class=" col-md-3 australia">
                            <a href="universitysingle.html">
                                <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="../kangarooedu.com/images/thumbnail/1601630453.png"
                                        alt="">
                                    <p class="text-center">CRICOS: 00212K</p>
                                </div>
                            </a>
                        </div>
                       -->
            </div>
        </div>
    </div>
</section>
<!-- .............................start  00.......................................... -->

<!--........................... end 00 ..................................................-->
<script>
jQuery('#select-destination').change(function(e) {
    e.preventDefault();
    var destinationID = $(this).val();
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    // console.log(destinationID);

    var data = {
        'action': 'kangaro_filter_destination',
        'ID': destinationID, //destinationID is from above which is from select relative

    };
    $.ajax({ // you can also use $.post here
        url: ajaxurl, // AJAX handler
        data: data,
        type: 'POST',
        success: function(response) {
            if (response) {
                // console.log(response);
                jQuery('#append').html(response.data);
            }
        }
    });
});
</script>
<?php get_footer();?>


<?php

// <!-- test only -->
global $post;
$album_title="";

$album_title = isset($_GET['country-title']); // say the user entered 'foot'
$args = array(
'post_type' => 'institution',
'posts_per_page' => 5,
'tax_query' => array( // NOTE: array of arrays!
array(
'taxonomy' => 'country',
'field' => 'name',
'terms' => $album_title,
'operator' => 'LIKE'
)
)
);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php endforeach; 
wp_reset_postdata();?>
<!-- test 1111 -->