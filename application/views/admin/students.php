
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Students</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('admin/student/0');?>" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Student</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>No</th>
                                        <th>Roll No</th>
                                        <th>Photo</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email ID</th>
										<th>Address</th>
										<th>Gender</th>
                                        <th>Marks</th>
                                        <th>Grade</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                $count = 1;
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $count; ?></td>
                                        <td><?php echo $row->roll_no; ?></td>
                                        <td><img src="<?php echo base_url('studentpics/'.$row->id.'.png'); ?>"
                                        style="height:40px; width:60px;" /></td>
                                        <td><?php echo $row->name; ?></td> 
                                        <td><?php echo $row->mobile_no; ?></td>
                                        <td><?php echo $row->email_id; ?></td>
                                        <td><?php echo $row->address; ?></td>
                                        <td><?php echo $row->gender; ?></td>
                                        <td class="text-center" style="width:100px;">
                                            <a href="<?php echo base_url('admin/marks/'.$row->id);?> "
                                                title="click to edit" style="<?php echo($row->subcount>0 ?" color:green":"color:red");?>">Mark</a></td>
                                                <td><?php echo $row->result; ?></td>
                                        <td class="text-center" style="width:100px;">
                                            <a href="<?php echo base_url('admin/student/'.$row->id); ?>"
                                                title="click to edit">Edit</a>&nbsp;
                                            <a href="<?php echo base_url('admin/deletestudent/'.$row->id); ?>" style="color:red;"
                                                title="click to delete" onclick="return confirm('Sure to delete?');">Delete</a>
                                        </td>
                                    </tr>
                                    <?php ++$count;
                                    }?>
                                    </tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
           
		</div>