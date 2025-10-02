<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>user-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php 
        if($_SESSION['user_id'] == 27 || $_SESSION['user_id'] == 26 || $_SESSION['user_id'] == 19)
        {
      ?>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>user/bulkUploadUnknown">
          <i class="bi bi-upload"></i>
          <span>Upload Bulk Data</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#personal-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Personal Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="personal-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details">
              <i class="bi bi-person"></i><span>Make Your Profile</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_additional_details">
              <i class="bi bi-filetype-doc"></i><span>Add & Update Your ID Documents</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=3">
              <i class="bi bi-person"></i><span>Add Well Wisher Contact Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=5">
              <i class="fa fa-filter"></i><span>Add Your Face Match Photo</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_partner_details">
              <i class="bi bi-person"></i><span>Add Spouse (H / W) Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=8">
              <i class="fas fa-coins"></i><span>Add Gold HUID Number</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=7">
              <i class="fa fa-car"></i><span>Add Vehicle Number</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/notification_history">
              <i class="fa fa-bell"></i><span>Notification History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#search-nav" data-bs-toggle="collapse" href="javascript:void(0);">
          <i class="bi bi-search"></i><span>Search Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="search-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?php echo base_url(); ?>user/search_person_details">
                    <i class="fas fa-user"></i><span>Search Person</span>
                </a>
            </li>
            <li>
                <a class="nav-link collapsed" data-bs-target="#search-missingnav" data-bs-toggle="collapse" href="javascript:void(0);">
                    <i class="fas fa-search"></i><span>Search Missing Person</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="search-missingnav" class="nav-content collapse" data-bs-parent="#search-nav-3">
                    <li>
                        <!--<a href="<?php echo base_url();?>user/search_person_details?pn=7&type=missing">-->
                        <!--    <i class="fa fa-camera"></i><span>Search missing person by face photo</span>-->
                        <!--</a>-->
                        <a href="<?php echo base_url();?>user/manageGallery?type=missing">
                            <i class="fa fa-camera"></i><span>Search in missing person data by face photo</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>user/lapta_person_after_login">
                            <i class="fa fa-filter"></i><span>Search Missing Person By Filter</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-link collapsed" data-bs-target="#search-unknownnav" data-bs-toggle="collapse" href="javascript:void(0);">
                    <i class="fas fa-search"></i><span>Search Unknown Person</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="search-unknownnav" class="nav-content collapse" data-bs-parent="#unknown-person-nav">
                    <li>
                        <!--<a href="<?php echo base_url();?>user/search_person_details?pn=7&type=unknown">-->
                        <!--    <i class="fa fa-camera"></i><span>Search missing person by face photo</span>-->
                        <!--</a>-->
                        <a href="<?php echo base_url();?>user/manageGallery?type=unknown">
                            <i class="fa fa-camera"></i><span>Search in unknown person data by face photo</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>user/unknown_person_filter_after_login">
                            <i class="fa fa-filter"></i><span>Search Unknown Person By Filter</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url();?>user/search_person_details?pn=7&type=unknown">
                            <i class="fa fa-filter"></i><span>Search In Appeal For Identification Data</span>
                        </a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>user/search_vehicle_details">
                    <i class="fas fa-car fa-motorcycle"></i><span>Search Vehicle</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>user/searchhistory">
                    <i class="fas fa-car fa-motorcycle"></i><span>Search History</span>
                </a>
            </li>
        </ul>
    </li><!-- End Tables Nav -->

     
      <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#search-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fas fa-search"></i><span>Missing Person Details </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <!-- <a href="<?php echo base_url();?>user/lapata_login"> -->
                    <a href="<?php echo base_url();?>user/lapata_new_login">
                    <!--<a href="javascript:void(0)" onclick="showPopup()">-->
                      <i class="fas fa-user"></i><span>Upload Missing Person Detail</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>user/manage_lapata">
                      <i class="fas fa-user"></i><span>Manage Missing Persons</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#family-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fa fa-user-plus"></i><span>Family Member </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="family-nav-3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url();?>user/add_family_member">
                    <!--<a href="javascript:void(0)" onclick="showPopup()">-->
                      <i class="fas fa-user"></i><span>Add Family Member</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>user/manage_family_person">
                      <i class="fas fa-user"></i><span>Manage Family Member Details</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#unknown-person-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-list"></i><span>Unknown Person Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="unknown-person-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>user/upload_unknown_details">
              <i class="bi bi-person"></i><span>Upload Unknown Person Details</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>user/manage_unknown_details">
              <i class="bi bi-person"></i><span>Manage Unknown Person Details</span>
            </a>
          </li>
        </ul>
      </li>
 <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>user/upload_vehicle_details">
          <i class="bi bi-car-front"></i>
          <span>Vehicle Details</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
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
    </ul>

  </aside><!-- End Sidebar-->
  <script>
      function showPopup()
      {
          Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Upload Missing</strong>',
            iconHtml: "<img src='<?= base_url(); ?>assets/icons/work-in-progress.png' style='width:100%;height:55px;'>",
            customClass:{
                title:'pt-1',
                icon:'mb-0',
                htmlContainer:'pt-2',
                actions : 'mt-0'
            },
            allowOutsideClick:false,
            html:
                '<h6><b style="color:black;">Sorry, This page is under construction. Please try later.</b></h6>',
            showCloseButton: true,
            showCancelButton: false,
            confirmButtonText:'OK',
            cancelButtonText:'No',
            focusConfirm: false,
            showConfirmButton:true
        })
      }
  </script>