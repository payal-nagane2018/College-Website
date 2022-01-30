<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/saveevent');?>">
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
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->title); ?>" type="text" name="title" id="title" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date<span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control" type="date"name="date" id="date"value="<?php echo ($id == 0 ? "" : $data->date); ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Body<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text"name="body" id="body"value="<?php echo ($id == 0 ? "" : $data->body); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Time<span class="text-danger">*</span></label>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->starttime); ?>" type="time" name="starttime" id="starttime" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Finish Time<span class="text-danger">*</span></label>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->finishtime); ?>" type="time" name="finishtime" id="finishtime" required>
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
