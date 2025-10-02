<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url();?>ngo">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-4" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fa fa-question-circle"></i><span>Unknown Person </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url(); ?>ngo/upload_detail" >
                        <i class="fas fa-user"></i><span>Upload Unknown Person</span><i class="fa fa-user-police ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>ngo/manage_unknown_person" >
                        <i class="fas fa-user"></i><span>Manage Unknown Persons</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url();?>ngo/lapata_person_filter">
              <i class="fas fa-search"></i>
              <span>Search Missing Person</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"  href="<?php echo base_url();?>ngo/unknown_person_filter">
              <i class="fas fa-search"></i><span>Search Unknown Person</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
        <!--<li class="nav-item">-->
        <!--    <a class="nav-link collapsed"  href="<?php echo base_url();?>ngo/missing_person_filter">-->
        <!--      <i class="fas fa-user"></i><span>Search Missing Person</span><i class="fa fa-knife ms-auto"></i>-->
        <!--    </a>-->
        <!--</li>-->
     

     

    </ul>

  </aside><!-- End Sidebar-->