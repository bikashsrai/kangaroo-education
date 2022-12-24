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
						<!-- repeater for post start -->
							<?php $enable_blog_content=get_field('enable_blog_section');
							if($enable_blog_content){?>
							<?php if ( have_rows( 'blog_rep' ) ) : ?>
							<?php while ( have_rows( 'blog_rep' ) ) :
							the_row(); ?>
							<?php if ( $heading_blog = get_sub_field( 'heading_blog' ) ) : ?>
                            <h3><a href="<?php the_permalink(); ?>" title=""><?php echo esc_html( $heading_blog ); ?></a>                               </h3>
							<?php endif; ?>
								<!-- image1 -->
							 <div class="blog_image" style = "margin-top: 20px ;">
                            <a href="blog_single.html" title=""> <?php
								$image_blog = get_sub_field( 'image_blog' );
								if ( $image_blog ) : ?>
                                <img class="img-fluid w-100" src="<?php echo esc_url( $image_blog['url'] ); ?>" alt="<?php echo esc_attr( $image_blog['alt'] );?>" width="100%" height="500">
                                <?php endif;?></a>
                        </div>
							<!-- image1 -->
							<?php if ( $content_blog = get_sub_field( 'content_blog' ) ) : ?>
                            <p class="excert">
                              	<?php echo $content_blog; ?> </p>
							<?php endif; ?>
					
							
						<?php endwhile; ?>
						<?php endif; ?>
							<?php }?>
						<!-- repeater for post end -->
							<?php $quote_text=get_field('enable_quote_section');
							if($quote_text){?>
                            <div class="quote-wrapper">
								<?php if ( $quotes_blog = get_field( 'quotes_blog' ) ) : ?>
	
                               <div class="quotes">
                                  <?php echo $quotes_blog; ?>
                                </div>
								<?php endif; ?>
                            </div>
							<?php }?>
							<?php $conclusion_blog=get_field('enable_conclusion_section');
							if($conclusion_blog){?>
							 <?php if ( $conclusion_blog = get_field( 'conclusion_blog' ) ) : ?>
                            <p>
                             
							<?php echo $conclusion_blog; ?>

                            </p>
							<?php endif; ?>
							<?php }?>
                            <div class="blog_user d-flex justify-content-between">
                            <?php  $social_share=get_field('enable_social_media_section');
								if($social_share){?>
                                <div class="blog_social d-flex">
                                    <span>Share On : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>
                                </div>
										<?php }?>
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
                                                alt="<?php echo 				get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt',true);?>"
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