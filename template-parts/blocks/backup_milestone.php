<?php
/**
 * The block for the milestone
 * 
 */

 ?>
<?php require get_template_directory() . '/bannersec.php';?>
<!-- Milestone info -->
<!-- Milestone info -->


<!-- Milestone info -->
<section class="pt-50">
    <div class="timeline">
        <div class="container">
            <?php 
            if(have_rows('year_main_rep')):
            ?>
            <?php while(have_rows('year_main_rep')):the_row();
                        $nowyear=get_sub_field('year__time');?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-container">
                        <!--  -->
                        <div class="timeline-end">
                            <p> <?php echo $nowyear;?></p>
                        </div>
                        <!--  -->
                        <div class="timeline-continue">
                            <!--  --> <?php 
                        if(have_rows('timeline_activity_rep')):
                        while(have_rows('timeline_activity_rep')):the_row();
                        $year1=get_sub_field('year_timeline_1');
                        $year2=get_sub_field('year_timeline_2');
                        $timeline_heading1=get_sub_field('timeline_heading_1');
                        $timeline_heading2=get_sub_field('timeline_heading_2');
                         ?>
                            <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        <?php echo $year1;?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3><?php echo $timeline_heading1;?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- r -->
                            <!-- l -->
                            <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        <?php echo $year2;
                                       ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3><?php echo $timeline_heading2;?></h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-block d-none">
                                    <p class="timeline-date">
                                        <?php echo $year2;?>
                                    </p>
                                </div>
                            </div>
                            <!-- l -->
                            <?php endwhile;
                                endif;?>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="timeline-year">
                                        <p>2020</p>
                                    </div>
                                </div>
                            </div>
                            <!-- c -->
                            <!-- r -->
                            <!-- <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        2019
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>British Council Trained Agent Certification</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- r -->
                            <!-- l -->
                            <!-- <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        2018
                                    </p> -->
                            <!-- </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Certified as Education New Zealand's Recognized Agency</h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- <div class="col-md-6 d-md-block d-none">
                                    <p class="timeline-date">
                                        2018
                                    </p>
                                </div>
                            </div> -->
                            <?php endwhile;
                              
                    endif;?>
                            <!-- l -->
                            <!-- r -->
                            <!-- <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        2017
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Sydney, Australia Onshore Office Started</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- r -->
                            <!-- left -->
                            <!-- <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        2015
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Birtamode, Butwal Branch Expansion</h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-block d-none">
                                    <p class="timeline-date">
                                        2015
                                    </p>
                                </div>
                            </div> -->
                            <!-- 3 -->
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="timeline-year">
                                        <p>2015</p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        2014
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Portfolio Expansion at Europe, Canada & USA</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        2012
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Recognized as New Zealand Specialist Agent by ENZ</h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-block d-none">
                                    <p class="timeline-date">
                                        2012
                                    </p>
                                </div>
                            </div> -->

                            <!-- <div class="row timeline-right">
                                <div class="col-md-6">
                                    <p class="timeline-date">
                                        2010
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Portfolio Expansion New Zealand & UK</h3>

                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="row timeline-left">
                                <div class="col-md-6 d-md-none d-block">
                                    <p class="timeline-date">
                                        2008
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-box">
                                        <div class="timeline-icon d-md-none d-block">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <h3>Pokhara & Chitwan Office Expansion</h3>
                                        </div>
                                        <div class="timeline-icon d-md-block d-none">
                                            <i class="fa fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-block d-none">
                                    <p class="timeline-date">
                                        2008
                                    </p>
                                </div>
                            </div> -->
                            <!-- </div> -->
                            <!-- 3 -->
                            <!-- 2 -->
                            <div class="timeline-start">
                                <p>Launch</p>
                            </div>
                            <!-- 2 -->


                            <!-- 1 -->
                        </div>
                        <!-- 1 -->

                    </div>
                </div>

            </div>

        </div>
        <!-- <div class="timeline-launch">
            <div class="timeline-box">
                <div class="timeline-text">
                    <h3>Launched our company on 2007</h3>

                </div>
            </div>
        </div> -->
</section>