<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>user-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>user/upload_vehicle_details">
          <i class="bi bi-car-front"></i>
          <span>Upload Vehicle Details</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#search-nav" data-bs-toggle="collapse" href="javascript:void(0);">
          <i class="bi bi-search"></i><span>Search Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="search-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/search_person_details">
              <i class="bi bi-person"></i><span>Search Person</span>
            </a>
          </li>
        <!--  <li class="nav-item">-->
        <!--    <a class="nav-link collapsed"  href="<?php echo base_url();?>ngo/missing_person_filter">-->
        <!--      <i class="fas fa-user"></i><span>Search Missing Person</span><i class="fa fa-knife ms-auto"></i>-->
        <!--    </a>-->
        <!--</li>-->
          <li>
            <a href="<?php echo base_url(); ?>user/search_vehicle_details">
              <i class="bi bi-person"></i><span>Search Vehicle</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/search_device_details">
              <i class="bi bi-person"></i><span>Search Devices</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url();?>user/unknown_person_filter_after_login">
              <i class="fas fa-user"></i><span>Search Unknown Person</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#personal-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Personal Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="personal-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details">
              <i class="bi bi-person"></i><span>Upload Personal Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_additional_details">
              <i class="bi bi-filetype-doc"></i><span>Upload Your Documents</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_partner_details">
              <i class="bi bi-person"></i><span>Upload Spouse Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_nominee_details">
              <i class="bi bi-person"></i><span>Add Nominee</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_filter_details">
              <i class="fa fa-filter"></i><span>Add Your Filters</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#missing-person-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-list"></i><span>Missing Person Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="missing-person-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/upload_person_details">
              <i class="bi bi-person"></i><span>Upload Missing Person Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/manage_person_details">
              <i class="bi bi-person"></i><span>Manage Missing Person Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url();?>user/lapata_login">
              <i class="fas fa-user"></i><span>Upload लापता Details</span><i class="fa fa-knife ms-auto"></i>
            </a>
        </li>
        </ul>
      </li><!-- End Tables Nav -->
      
      <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fas fa-search"></i><span>लापता / गुमशुदा व्यक्ति को खोजे </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url();?>user/lapata_login">
                      <i class="fas fa-user"></i><span>Upload लापता Detail</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>user/manage_lapata">
                      <i class="fas fa-user"></i><span>Manage लापता Persons</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#missing-vehicle-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-car-front"></i><span>Missing Vehicle Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="missing-vehicle-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/upload_missing_vehicle_details">
              <i class="bi bi-upload"></i><span>Upload Missing Vehicle Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/manage_missing_vehicle_details">
              <i class="fa fa-filter"></i><span>Manage Missing Vehicle Details</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
        
         <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>" >
          <i class="bi bi-qr-code"></i>
          <span>Generate QR CODE</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->