<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url('teacherpics/'.$data->id.'.png'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo  $data->name; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/teachers');?>">Teachers</a></li>
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

    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
            <div class="col-lg-2">
                    <div class="about-image mt-25">
                        <img src="<?php echo base_url('teacherpics/'.$data->id.'.png'); ?>" height="175" width="50" alt="About">
                    </div>  <!-- about imag -->
                </div>
                <div class="col-lg-10">
                    <div class="section-title mt-50">
                        <span style="text-size:30px"><b>Department Name:- </b></h5><span><?php echo  $data->dept_name; ?></span> <br> <br>
                        <span style="text-size:30px"><b>Faculty Name:- </b></h5><span><?php echo  $data->name; ?></span> <br><br>
                        <span style="text-size:30px"><b>Faculty Designation:- </b></h5><span><?php echo  $data->designation; ?></span> <br> <br>
                        <span style="text-size:30px"><b>Highest Qualification:- </b></h5><span><?php echo  $data->qualification; ?></span> <br><br>
                        <span style="text-size:30px"><b>Experience Teaching Year:- </b></h5><span><?php echo  $data->experience; ?></span> <br> <br>
                        <span style="text-size:30px"><b>Date of Appoinment:- </b></h5><span><?php echo  $data->dateofappointment; ?></span> <br><br>
                    </div> <!-- section title -->
                </div> <!-- about cont -->
            
                
            </div>
        </div> <!-- row -->
    </section>