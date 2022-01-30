<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li >
                            <a href="<?php echo base_url('admin/index');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="<?php echo base_url('admin/students');?>"><i class="fa fa-child"></i> <span>Students</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/subjects');?>"><i class="fas fa-book"></i> <span>Subjects</span></a>
                        </li>
                        <li>
                            <a href="<?php $active ='Teachers'; echo base_url('admin/teachers');?>"><i class="fa fa-child"></i> <span>Teachers</span></a>
                        </li>
                        <li >
                            <a class="<?php $active ='Events'; ?>" href="<?php echo base_url('admin/events');?>"><i class="fa fa-calendar"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/courses');?>"><i class="fa fa-child"></i> <span>Courses</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/contacts');?>"><i class="fa fa-phone"></i> <span>Contact</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('college/index');?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>