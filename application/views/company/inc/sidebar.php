





		 
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="<?php echo base_url();?>Company" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="<?php echo site_url('Company/profile_view');?>"><i class="fa fa-table "></i>Manage  profile  </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('company/profile/'.$this->session->userdata("id"));?>"><i class="fa fa-edit "></i>View Profile </a>
                    </li>


                    <li>
                        <a href="<?php echo site_url('company/post_job/'.$this->session->userdata("id"));?>"><i class="fa fa-qrcode "></i>Post Job</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('company/view_jobs/'.$this->session->userdata("id"));?>"><i class="fa fa-bar-chart-o"></i>view jobs</a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('company/applicants_jobs/'.$this->session->userdata("id"));?>"><i class="fa fa-edit "></i>Job Proposals</a>
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
      