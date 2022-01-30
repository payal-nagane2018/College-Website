<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Contacts</h4>
                    </div>
                    <!-- <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('college/contact/0');?>" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Contact</a>
                    </div> -->
                </div>
				<div class="row">
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>No</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Subject</th>
                                        <th>Phone</th>
                                        <th>Message</th>
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
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->email; ?></td> 
                                            <td><?php echo $row->subject; ?></td>
                                            <td><?php echo $row->phone; ?></td>
                                            <td><?php echo $row->message; ?></td>
                                            <td class="text-center" style="width:100px;">
                                                <a href="<?php echo base_url('admin/deletecontacts/'.$row->id); ?>" style="color:red;"
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