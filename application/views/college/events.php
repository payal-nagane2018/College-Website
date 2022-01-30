    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url();?>assets/college/images/c12.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">

           <?php
                                    $count = 1;
                                    foreach ($result as $row) {
                                        ?>
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="<?php echo base_url('eventpics/'.$row->id.'.png'); ?>" height="170" width="170" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i><?php echo $row->date; ?></span>
                            <a href="<?php echo base_url('college/event/'.$row->id); ?>"><h4><?php echo $row->title; ?></h4></a>
                            <!-- <span><i class="fa fa-clock-o"></i><?php echo $row->time; ?></span> <br>  -->
                            <span><i class="fa fa-map-marker"></i>KPC</span>

                        </div>
                   </div>
               </div>
              
              
               <?php ++$count;
                                        }?>
              


           </div> <!-- row -->
           
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
