<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url('deptpics/'.$data->id.'.png'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo  $data->name; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/courses');?>">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo  $data->name; ?></li>
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
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h2>Welcome to <?php echo  $data->name; ?></h2>
                            <img src="<?php echo base_url('deptpics/'.$data->id.'.png'); ?>" height="300" width="350" alt="dept">
                            <p><?php echo  $data->body; ?></p>
                        </div> <!-- events left -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>