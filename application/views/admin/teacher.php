<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Teacher</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/saveteacher');?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name<span class="text-danger"></span></label>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->name); ?>" type="text" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        
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
                                    <label>Designation<span class="text-danger"></span></label>
                                    
                                        <input class="form-control" type="text"name="designation" id="designation"value="<?php echo ($id == 0 ? "" : $data->designation); ?>" required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Qualification<span class="text-danger"></span></label>
                                    <input class="form-control" type="text"name="qualification" id="qualification"value="<?php echo ($id == 0 ? "" : $data->qualification); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Departments<span class="text-danger"></span></label>
                                    <select name="dept_name" id="dept_name" single="single" value="<?php echo ($id == 0 ? "" : $data->dept_name); ?>">
                                        <option value="Automobile Engineering">Automobile Engineering</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Computer Technology">Computer Technology</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="E & TC Department">E & TC Department</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Science & Humanities">Science & Humanities</option>



                                    </select>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Experience Teaching Year<span class="text-danger"></span></label>
                                    <input class="form-control" type="text"name="experience" id="experience"value="<?php echo ($id == 0 ? "" : $data->experience); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Appoinment<span class="text-danger"></span></label>
                                    <input class="form-control" type="date"name="dateofappointment" id="dateofappointment"value="<?php echo ($id == 0 ? "" : $data->dateofappointment); ?>" required>
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
