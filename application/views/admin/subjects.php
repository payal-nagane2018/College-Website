<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Subjects</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('admin/subject/0');?>" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Subject</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>No</th>
                                        <th>Subject Code</th>
										<th>Subject Name</th>
										<th>Out Of</th>
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
                                        <td><?php echo $row->sub_code; ?></td>
                                        <td><?php echo $row->sub_name; ?></td> 
                                        <td><?php echo $row->out_of; ?></td>
                                        <td class="text-center" style="width:100px;">
                                            <a href="<?php echo base_url('admin/subject/'.$row->id); ?>"
                                                title="click to edit">Edit</a>&nbsp;
                                            <a href="<?php echo base_url('admin/deletesubject/'.$row->id); ?>" style="color:red;"
                                                title="click to delete" onclick="return confirm('Sure to delete?');">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    <?php
                                        ++$count;
                                    }?>
                                </tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>