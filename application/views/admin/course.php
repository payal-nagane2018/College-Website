<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Course</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/savecourse');?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="row">        
                            <div class="col-sm-6">
								<div class="form-group">
									<label>Image</label>
									<div class="profile-upload">
										<div class="upload-img">
											<img alt="" src="<?php echo base_url();?>assets/img/user.jpg">
										</div>
										<div class="upload-input">
											<input type="file" name="pic" id="pic" class="form-control">
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Department Name<span class="text-danger">*</span></label>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->name); ?>" type="text" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>HOD Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text"name="hod" id="hod"value="<?php echo ($id == 0 ? "" : $data->hod); ?>" required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Body<span class="text-danger">*</span></label>
                                    <textarea row="70" col="70" name="body" id="body"value="<?php echo ($id == 0 ? "" : $data->body); ?>" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20 text-left">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>


<!-- Mirrored from dreamguys.co.in/preclinic/template/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 05:12:50 GMT -->
</html>
