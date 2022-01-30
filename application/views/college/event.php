<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url('eventpics/'.$data->id.'.png'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo  $data->title; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/events');?>">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo  $data->title; ?></li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-singel" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3><?php echo  $data->title; ?></h3>
                            <a href="#"><span><i class="fa fa-calendar"></i> <?php echo  $data->date; ?></span></a>
                            <img src="<?php echo base_url('eventpics/'.$data->id.'.png'); ?>" height="480" width="600"alt="Event">
                            <p><?php echo  $data->body; ?></p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                        <div class="events-coundwon bg_cover" E-Learning style="background-image: url(<?php echo base_url();?>assets/college/images/event/singel-event/coundown.jpg)">
                        <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Start Time</h6>
                                                <span><?php echo  $data->starttime; ?></span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Finish Time</h6>
                                                <span><?php echo  $data->finishtime; ?></span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Address</h6>
                                                <span>KPC Shelve, Pandharpur</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                                <div id="contact-map" class="mt-25"></div> <!-- Map -->
                            </div>   
                            </div>  
                             <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>
