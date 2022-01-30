<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title"> Subject</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/savesubject');?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <div class="row">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject Code <span class="text-danger">*</span></label>
                                            <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->sub_code); ?>" type="number" name="sub_code" id="sub_code" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text"name="sub_name" id="sub_name"value="<?php echo ($id == 0 ? "" : $data->sub_name); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Out Of <span class="text-danger"></span></label>
                                            <input class="form-control" type="number"name="out_of" id="out_of" value="<?php echo ($id == 0 ? "" : $data->out_of); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button class="btn btn-primary submit-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>


<!-- Mirrored from dreamguys.co.in/preclinic/template/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 05:12:50 GMT -->
