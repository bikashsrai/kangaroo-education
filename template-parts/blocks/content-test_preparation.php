<?php require get_template_directory() . '/bannersec.php';?>

<!-- country info -->
<section class="pt-50">
    <div class="container">
        <div class="countryinfo">

            <?php $des1_test=get_field('description_1_test') ;?>
            <p><?php echo $des1_test;?>
            </p>

        </div>
    </div>
</section>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="testprepn">
            <div class="row">
                <?php 

                 $sub_heading_2_test=get_field('sub_heading_2_test');
                  $heading_main_2_test=get_field('heading_main_2_test');
                 $description_2_test=get_field('description_2_test');
                 $image_2_test=get_field('image_2_test');
   

?>
                <div class="col-md-6">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading "><?php echo $sub_heading_2_test;?></h4>
                        <h3><?php echo $heading_main_2_test;?></h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                    <div class="test_para">
                        <p><?php echo $description_2_test;?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="test_img">
                        <?php 
                            if(!empty($image_2_test)):?>
                        <img class="img-fluid" src="<?php echo esc_url($image_2_test['url']);?>"
                            alt="<?php echo esc_attr(   $image_2_test['alt'] ); ?>">
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>

        <!-- field -->
        <div class="row pt-50">
            <?php 
                        if(have_rows('activity_test')):?>
            <?php 
                         while(have_rows('activity_test')):the_row();
                        $icon_test=get_sub_field('icon_test');
                        $title_activity_test=get_sub_field('title_activity_test');
                        $description_activity_test=get_sub_field('description_activity_test');
                        ?>
            <div class="col-md-6 pb-3">
                <div class="service-single-item h-100">
                    <i class="fas fa-<?php echo $icon_test;?>"></i>
                    <h6><?php echo $title_activity_test;?></h6>
                    <p><?php echo $description_activity_test;?></p>
                </div>
            </div>
            <?php endwhile;
                    endif;?>


        </div>


    </div>
</section>
<section class="bg-light p-3 mb-5">
    <div class="container">
        <div class="bandscore">
            <div class="row ">
                <div class="col-md-12">
                    <div class="inner_section_title t_left text-start">
                        <h4 class="themestek-custom-heading ">TOEFL</h4>
                        <h3>What does the score mean ?</h3>


                        <div class="sec_line-main  text-start d-flex">
                            <div class="sec_line sec_line-big "></div>
                        </div>

                    </div>
                </div>
            </div>
            <p>The full length of TOEFL iBT test if four hour long which is followed by following structure.</p>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><strong>Section</strong></td>
                        <td><strong>Description </strong></td>
                        <td><strong>Test Time</strong></td>
                    </tr>
                    <tr>
                        <td>Reading</td>
                        <td>3–4 passages, each containing 12–14 questions</td>
                        <td>60–80 minutes</td>
                    </tr>
                    <tr>
                        <td>Listening</td>
                        <td>6–9 passages, each containing 5–6 questions</td>
                        <td>60–90 minutes</td>
                    </tr>
                    <tr>
                        <td>Break</td>
                        <td>-</td>
                        <td>10 minutes</td>
                    </tr>
                    <tr>
                        <td>Speaking</td>
                        <td>6 tasks</td>
                        <td>20 minutes</td>
                    </tr>
                    <tr>
                        <td>Writing</td>
                        <td>2 tasks</td>
                        <td>50 minutes</td>
                    </tr>
                </tbody>
            </table>
            <p>TOEFL iBT, is flexible in terms of test dates and results are available online after two weeks of test
                date. It’s score is valid for two years from the test date.</p>
            <p>For any assistance in TOEFL test date booking, please contact us @&nbsp;<strong>9801235173</strong> or
                email at <a href="mailto:academics@kangarooedu.com">academics@kangarooedu.com</a></p>
        </div>
    </div>
</section>