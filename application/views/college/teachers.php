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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url();?>assets/college/images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Teachers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('college/index');?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Teachers</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">

           <?php
                                    $count = 1;
                                    foreach ($result as $row) {
                                        ?>
               <div class="col-lg-3 col-sm-6">
                   <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="<?php echo base_url('teacherpics/'.$row->id.'.png'); ?>" height="340" width="150" alt="Teachers">
                        </div>
                        <div class="cont">
                        <a href="<?php echo base_url('college/teacher/'.$row->id); ?>"><h6><?php echo $row->name; ?></h6></a>
                            <span><?php echo $row->designation; ?></span>
                            <span>( <?php echo $row->qualification; ?> )</span>
                        </div>
                    </div> <!-- singel teachers -->
               </div>

               <?php ++$count;
                                        }?>
              

           </div> <!-- row -->
           
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
