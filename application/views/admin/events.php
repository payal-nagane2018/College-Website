<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Events</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('admin/event/0');?>" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Event</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-11">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
										<th>Body</th>
                                        <th>Start Time</th>
										<th>Finish Time</th>
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
                                            <td><img src="<?php echo base_url('eventpics/'.$row->id.'.png'); ?>"
                                        style="height:40px; width:60px;" /></td>
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo $row->date; ?></td> 
                                            <td><?php echo $row->body; ?></td>
                                            <td><?php echo $row->starttime; ?></td>
                                            <td><?php echo $row->finishtime; ?></td>
                                            <td class="text-center" style="width:100px;">
                                                <a href="<?php echo base_url('admin/event/'.$row->id); ?>"
                                                    title="click to edit">Edit</a>&nbsp;
                                                <a href="<?php echo base_url('admin/deleteevent/'.$row->id); ?>" style="color:red;"
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