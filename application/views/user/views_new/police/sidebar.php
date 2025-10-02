<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url(); ?>police">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

              <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#search-nav" data-bs-toggle="collapse" href="javascript:void(0);">
          <i class="fa fa-gavel"></i><span>Criminal </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="search-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>police/upload_criminal_detail" >
              <i class="fa fa-gavel"></i><span>Upload Criminal Detail</span><i class="fa fa-user-police ms-auto"></i>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>police/criminal_report" >
              <i class="fa fa-gavel"></i><span>Manage Criminal Records</span><i class="fa fa-knife ms-auto"></i>
            </a>
          </li>
         
        </ul>
      </li>
      
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-2" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fas fa-user-secret"></i><span>Wanted </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url(); ?>police/upload_wanted_detail" >
                        <i class="fas fa-user-secret"></i><span>Upload Wanted Detail</span><i class="fa fa-user-police ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>police/wanted_report" >
                        <i class="fas fa-user-secret"></i><span>Manage Wanted Records</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fas fa-search"></i><span>लापता / गुमशुदा व्यक्ति को खोजे </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!--<li>-->
                <!--    <a href="<?php echo base_url();?>police/unknown_person_filter?type=police">-->
                <!--      <i class="fas fa-user"></i><span>All Police Thana Entries</span><i class="fa fa-knife ms-auto"></i>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="<?php echo base_url();?>police/unknown_person_filter?type=ngo">-->
                <!--      <i class="fas fa-user"></i><span>All Social NGO Entries</span><i class="fa fa-knife ms-auto"></i>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="<?php echo base_url();?>police/unknown_person_filter?type=user">
                      <i class="fas fa-user"></i><span>All User Entries</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-4" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fa fa-question-circle"></i><span>Unknown Person </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url(); ?>police/upload_detail" >
                        <i class="fas fa-user"></i><span>Upload Unknown Person</span><i class="fa fa-user-police ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>police/manage_unknown_person" >
                        <i class="fas fa-user"></i><span>Manage Unknown Persons</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>
      
        <li class="nav-item">
            <a class="nav-link collapsed"  href="<?php echo base_url();?>police/unknown_person_filter?type=police">
              <i class="fas fa-user"></i><span>Search Unknown Person</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed"  href="<?php echo base_url();?>police/missing_person_filter">
              <i class="fas fa-user"></i><span>Search Missing Person</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"  href="<?php echo base_url();?>police/search_person_details">
              <i class="fas fa-search"></i><span>Search Person By Filter</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
     

    </ul>

  </aside><!-- End Sidebar-->