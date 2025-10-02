<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#relation-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-user"></i><span>Relations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="relation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/create_relations">
              <i class="bi bi-circle"></i><span>Create Relations</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#religion-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-church"></i><span>Relgions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="religion-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/create_religion">
              <i class="bi bi-circle"></i><span>Create Religion</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-cog"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/settings">
              <i class="bi bi-circle"></i><span>Settings</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/create_categories">
              <i class="bi bi-circle"></i><span>Create Categories</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sub-category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Sub Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sub-category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/manage_sub_categories">
              <i class="bi bi-circle"></i><span>Manage Sub Categories</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/create_sub_categories">
              <i class="bi bi-circle"></i><span>Create Sub Categories</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#report" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="report" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person">
              <i class="bi bi-circle"></i><span>Missing Person</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_vehicle">
              <i class="bi bi-circle"></i><span>Missing Vehicle</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_user">
              <i class="bi bi-circle"></i><span>Missing Device</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#package-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-gift"></i><span>Package </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="package-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/create_package">
              <i class="bi bi-circle"></i><span>Create Package</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#other-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-cog"></i><span>Other</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="other-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url(); ?>admin/create_faqs">
              <i class="bi bi-circle"></i><span>Create Faq</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/create_guidence_video">
              <i class="bi bi-circle"></i><span>Create Guidence Video</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->