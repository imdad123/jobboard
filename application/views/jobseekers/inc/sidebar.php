





		  <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="<?php echo base_url();?>jobseekers" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="<?php echo site_url('jobseekers/add_profile_view');?>"><i class="fa fa-table "></i>Add Profile  </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('jobseekers/view_jobseeker');?>"><i class="fa fa-edit "></i>View profile </a>
                    </li>


                    <li>
                        <a href="<?php echo site_url('jobseekers/jobseeker_jobs');?>"><i class="fa fa-qrcode "></i>Jobs Invited <span class="badge"><?php if($job_num):echo $job_num;else:echo "0"; endif; ?></span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("jobseekers/jobseeker_messages");?>"><i class="fa fa-bar-chart-o"></i>Messages  <span class="badge"><?php if($messages_row):echo $messages_row;else:echo "0"; endif; ?></span></a>
                    </li>

                    <li>
                        <a href="<?php echo site_url("jobseekers/jobseeker_company_invited");?>"><i class="fa fa-edit "></i>job invitations <span class="badge"><?php if($job_company):echo $job_company;else:echo "0"; endif; ?></span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>