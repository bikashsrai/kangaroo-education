<?php
/**
 * The block for the milestone
 * 
 */

 ?>
<?php require get_template_directory() . '/bannersec.php';?>
<!-- Milestone info -->
<section class="pt-50">
    <div class="timeline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-container">
                        <div class="timeline-end">
                            <p>Now</p>
                        </div>
                        <?php 
                        if(have_rows('milestone_setup')):
                        while(have_rows('milestone_setup')):the_row();
                        $timeyear=get_sub_field('timeline_year_milestone_1');
                        $des_year=get_sub_field('timeline_text');
                        $timeyear2=get_sub_field('timeline__year_2');
                        $timedes2=get_sub_field('timeline_description2');
                        ?>
                        <div class="timeline-continue">
                            <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        <?php echo $timeyear;?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3><?php echo $des_year;?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        <?php echo $timeyear2;?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3> <?php echo $timedes2;?></h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                endif;?>

                                <div class="timeline-start">
                                    <p>Launch 2007</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>