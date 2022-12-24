<?php get_header();?>
<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>

<!-- Blogs -->
<section class="pt-50">
    <div class="container">
         <!-- 1 -->
        <div class="inner_section_title t_left text-start">
            <h4 class="themestek-custom-heading ">Blogs</h4>
            <h3>Recent Blogs Here</h3>


            <div class="sec_line-main  text-start d-flex">
                <div class="sec_line sec_line-big "></div>
            </div>

        </div>
        <!-- 1 -->
        <div class="myblog blog_wrap">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <!-- end -->
<?php
   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args_post = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
   	'paged'=>$paged,

);
$featured_post = new WP_Query($args_post);
if ($featured_post->have_posts()):
    while ($featured_post->have_posts()): $featured_post->the_post();

        ?>
                    <div class="blog_single">
                        <div class="blog_image">
                            <a href="<?php the_permalink();?>" title=""><img src="<?php the_post_thumbnail_url();?>"
                                    class="img-fluid-100"></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <p>Posted On :
                                    <?php the_date();?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php the_archive_title();?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>By : <?php the_author();?></span>
                                </p>
                            </div>
                            <h3><a href="<?php the_permalink();?>" title=""><?php echo the_title(); ?></a></h3>
                            <p><?php echo the_excerpt(); ?></p>
                            <div class="blog_user d-flex justify-content-between">
                                <a class="btn-get-started text-white" href="<?php the_permalink();?>">Read More</a>
                                <!-- <div class="blog_social d-flex">
                                    <span>Share On : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <?php     
    endwhile;?>
		 <!-- pagination -->
                    <nav  aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">	
							   <li class="page-item">
	<?php
	  echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        =>$featured_post->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
                'add_fragment' => '',
            ) ); 
    wp_reset_postdata();?>
							</li>
						</ul>
					</nav>
					<?php
endif;?>
                    <!-- pagination -->
<!--                <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> -->
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                    <div class="blog_right">
                        <div class="blog_search mb-4">
                            <form role="search" class="d-flex search-form" method="get"
                                action="<?php echo esc_url(home_url('/')); ?>">

                                <input class="form-control rounded-0 search-field" type="search" name="s"
                                    value="<?php echo get_search_query(); ?>" placeholder="Search" aria-label="Search">

                                <button
                                    class="btn btn-get-started rounded-0 m-0 d-flex align-items-center search-submit"
                                    type="submit"><span class=" screen-reader-text"></span><i
                                        class="fas fa-search me-2"></i> search</button>



                            </form>
                        </div>
                        <div class="archives widget_single">
                            <div class="items-title">
                                <h3 class="title">All Categories!!</h3>
                            </div>
                            <div class="archives-items">
                                <ul class="list-unstyled">
                                    <?php
                                        $args = array(
                                            'type'                     => 'post',
                                            // 'child_of'                 => 0,
                                            // 'parent'                   => '',
                                            'orderby'                  => 'name',
                                            'order'                    => 'ASC',
                                            'hide_empty'               => 1,
                                            'hierarchical'             => 1,
                                            'exclude'                  => '',
                                            'include'                  => '',
                                            'number'                   => '',
                                            'taxonomy'                 => 'category',
                                            'pad_counts'               => false );
                                        $categories = get_categories($args);

                                        echo '<ul>';

                                        foreach ($categories as $category) {
                                            $url = get_term_link($category);?>
                                    <li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
                                    <?php
                                        }

                                        echo '</ul>';
                                        ?>
                                </ul>
                            </div>
                        </div>

                        <div class="archives widget_single popular_tags">
                            <div class="items-title">
                                <h3 class="title">Popular Tags</h3>
                            </div>
                            <!-- <div class="tags-items">
                                <ul class="list-unstyled">
                                    <li><a href="" title="">485 Visa</a></li>
                                    <li><a href="" title="">PTE</a></li>
                                </ul>
                            </div> -->

                            <div class="tags-items">
                                <?php 
                                $tags=get_tags();
                                $html='<ul class="list-unstyled">';
                                foreach ($tags as $tag){
                                    $tag_link =get_tag_link($tag->term_id);
                                    $html.="<li><a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug}'>";
                                    $html.="{$tag->name}</a></li>";
                                }
                                $html.='</ul>';
                                echo $html;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer();?>
