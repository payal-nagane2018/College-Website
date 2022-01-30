<div class="" id="printDiv" style="width: 100%;" >   
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Student</h4>
            </div>
        </div>
        <div class="card-box profile-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img class="avatar" src="<?php echo base_url('studentpics/'.$id.'.png'); ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0"><?php echo  $data->name;?></h3>
                                        <small class="text-muted">KPC</small>
                                        <div class="staff-id">Roll No:<?php echo  $data->roll_no;?></div>
                                        <div class="staff-msg"><button class="btn btn-primary" onclick="printResult()">Print Result</button></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Phone:</span>
                                            <span class="text"><?php echo  $data->mobile_no;?></span>
                                        </li>
                                        <li>
                                            <span class="title">Email:</span>
                                            <span class="text"><a href="#"><?php echo  $data->email_id;?></a></span>
                                        </li>
                                        <li>
                                            <span class="title">Address:</span>
                                            <span class="text"><?php echo  $data->address;?></span>
                                        </li>
                                        <li>
                                            <span class="title">Gender:</span>
                                            <span class="text"><?php echo  $data->gender;?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
    

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Marks</h4>
                </div>
            </div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
                    <form action="<?php echo base_url('admin/savemarks');?>" method="post">
                        <input type="hidden" value="<?php echo $id;?>" name="student_id"/>
                        
						<table class="table table-striped custom-table">
							<thead>
								<tr>
		    						<th>No</th>
                                    <th>Subject Name</th>
                                    <th>Out Of</th>
									<th  class="text-right">Marks</th>
								</tr>
							</thead>
	    					<tbody>
                            <?php
                                $count = 1;
                                foreach ($marks as $row) {
                            ?>
                            <tr>
                                <td><?php echo $count;?></td>
                                <td><?php echo $row->sub_name;?><input type="hidden" value="<?php echo $row->subject_id;?>" name="subject_id<?php echo $count;?>" id="subject_id<?php echo $count;?>"/></td>
                                <td><?php echo $row->out_of;?></td>
                                <td class="text-right"><input type="number" min="0" max="<?php echo $row->out_of;?>" value="<?php echo $row->mark;?>" id="mark<?php echo $count;?>" name="mark<?php echo $count;?>" onkeyup="calculatetotal()" required></td>
                            </tr>
                            <?php ++$count;
                            }?>
                        </tbody>
                    </table>
                    
                    </div>
                    <div class="form-group">
                        <div class="text-right">
                            <h4 style="color:red">Total=<span id="total"></span></h4>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo $count;?>" name="count" id="count"/>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                    </form>
                    <script>
                        function printResult()
                            {
                                var prtContent = document.getElementById("printDiv");
                                var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
                                WinPrint.document.write(prtContent.innerHTML);
                                WinPrint.document.close();    
                                WinPrint.focus();
                                WinPrint.print();
                                WinPrint.close();
                            }
                        function calculatetotal()
                        {
                            //alert("hi");
                            
                            var count,mark;
                            count=document.getElementById('count').value;
                            //alert(count);
                            var total=0;
                            for(var i=1;i<count;i++)
                            {
                                //alert(i);
                                mark=parseInt("0"+document.getElementById('mark'+i).value);
                                total+=mark;
                                
                                document.getElementById('total').innerText=total; 
                            }
                        }
                        calculatetotal();
                    </script>
				</div>
            </div>
        </div>
    </div>
</div>
</div>