<?php
 /**
  * single post
  */
  
  ;?>
<!-- main bosy part start -->
<!-- breadcrumb -->
<?php require get_template_directory() . '/bannersec.php';?>


<!-- Blogs -->
<section class="pt-50">
    <div class="container">
        <div class="myblog blog_wrap">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="blog_single">
                        <div class="blog_image">
                            <a href="blog_single.html" title=""> <?php 
                             
                             $img_post1=get_field('image_post'); 
                             $content_post1=get_field('content_post'); 
                             
                            if(!empty($img_post1)):?>
                                <img class="img-fluid w-100" src="<?php echo esc_url($img_post1['url']);?>"
                                    alt="<?php echo esc_attr(   $img_post1['alt'] ); ?>" width="100%" height="500">
                                <?php endif;?></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <p>Posted On :<?php echo get_the_date();?>
                                    -Category &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>By : <?php the_author();?></span>
                                </p>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>" title=""><?php the_title();?></a></h3>
                            <p class="excert">
                                <?php echo $content_post1;?> </p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    To be successful in IELTS exam, we should be psychologically in a very strong state.
                                    Your motivation and determination are very important to strengthen your psychology.
                                    Furthermore, making a career goal in advance will boost your determination to
                                    achieve
                                    success in IELTS. Here, I give you an example, well, if your career goal is to be a
                                    lawyer in life, then you know you have to join a good law school and work hard.
                                </div>
                            </div>
                            <p>
                                Therefore, having a career goal in life helps you to be organized, motivated and
                                determined, which are the important psychological aspects that put you in a position of
                                doing better in IELTS.
                            </p>
                            <div class="blog_user d-flex justify-content-between">

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
                    <!-- end -->

                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4  ">
                    <div class="blog_right">
                        <div class="blog_search mb-4">
                            <form role="search" class="d-flex search-form" method="get"
                                action="<?php echo esc_url(home_url('/')); ?>">
                                <input class="form-control rounded-0" type="search" name="s"
                                    value="<?php echo get_search_query(); ?>" placeholder="Search" aria-label="Search">
                                <button class="btn btn-get-started rounded-0 m-0 d-flex align-items-center"
                                    type="submit"><i class="fas fa-search me-2"></i> Search</button>
                            </form>
                        </div>

                        <div class="archives widget_single">
                            <div class="items-title">
                                <h3 class="title">Recent Post</h3>
                            </div>
                            <div class="new_post">
                                <?php $args_blog_all=array(
                                    'post_type'=>'post',
                                    'posts_per_page'=>2,
                                    'post_status'=>'publish',
                                    'order'=>'DESC',       
                                     );                      
                                    $featured_blog_single=new WP_Query($args_blog_all);
                                     if($featured_blog_single->have_posts()):
                                         while($featured_blog_single->have_posts()):$featured_blog_single->the_post();
                                ?>

                                <div class="single-post d-flex align-items-center">
                                    <div class="recent_img">
                                        <a href="<?php the_permalink();?>" title=""><img
                                                src="<?php the_post_thumbnail_url();?>"
                                                alt="<?php echo get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt',true);?>"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="post_title">
                                        <a href="<?php the_permalink();?>" title=""><?php the_title();?></a>
                                        <div class="post-date">
                                            <span><?php the_date(); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                          wp_reset_postdata();
                         endif;?>
                            </div>
                        </div>
                        <div class="archives widget_single">
                            <div class="items-title">
                                <h3 class="title">All Categories</h3>
                            </div>
                            <div class="archives-items">
                                <!-- <ul class="list-unstyled">
                                    <li><a href="" title="">Study Abroad </a></li>
                                    <li><a href="" title="">International Students</a></li>
                                    <li><a href="" title="">Tourist Visa</a></li>
                                    <li><a href="" title="">English Proficency</a></li>
                                    <li><a href="" title="">Visa</a></li>
                                    <li><a href="" title="">Others</a></li>
                                </ul> -->
                                <ul class="list-unstyled">
                                    <?php
                                        $args = array(
                                            'type'                     => 'post',
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