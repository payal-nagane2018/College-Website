   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url();?>assets/college/images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== COURSES PART START ======-->
    
    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                    <?php
                                    $count = 1;
                                    foreach ($result as $row) {
                                        ?>
           
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="<?php echo base_url('deptpics/'.$row->id.'.png'); ?>" height="250" width="200"  alt="Course">
                                    </div>
                                </div>
                                <div class="cont">
                                    <a href="<?php echo base_url('college/course/'.$row->id);?>"><h4><?php echo $row->name; ?></h4></a>
                                    <div class="course-teacher">
                                        <!-- <div class="thum">
                                            <a href="#"><img src="<?php echo base_url();?>assets/college/images/course/teacher/t-1.jpg" alt="teacher"></a>
                                        </div> -->
                                        <div class="name">
                                            <a href="#"><h6><?php echo $row->hod; ?></h6></a>
                                        </div>
                                        <!-- <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>

                        <?php ++$count;
                                        }?>
              
                        </div>

                        
             <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->