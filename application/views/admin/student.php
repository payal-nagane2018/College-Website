<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Student</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/savestudent');?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Roll No <span class="text-danger">*</span></label>
                                        <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->roll_no); ?>" type="number" name="roll_no" id="roll_no" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Photo</label>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text"name="name" id="name"value="<?php echo ($id == 0 ? "" : $data->name); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile <span class="text-danger"></span></label>
                                        <input class="form-control" type="mobile"name="mobile_no" id="mobile_no" value="<?php echo ($id == 0 ? "" : $data->mobile_no); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password"name="password" id="password" value="<?php echo ($id == 0 ? "" : $data->password); ?>" required>
                                    </div>
                                </div>
                                
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                            <input class="form-control" type="text"name="address" id="address" value="<?php echo ($id == 0 ? "" : $data->address); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email ID <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email"name="email_id" id="email_id" value="<?php echo ($id == 0 ? "" : $data->email_id); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" value="Male" class="form-check-input" <?php echo ($id == 0 ? "" : ($data->gender=="Male" ? "checked" : "")); ?>checked>Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" value="Female" class="form-check-input" <?php echo ($id == 0 ? "" :($data->gender=="Female"?"checked":"")); ?>>Female
											</label>
										</div>
									</div>
                                </div>
							</div>
                            <div class="m-t-20 text-center">
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
