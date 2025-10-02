<style>
    .nav-item .active{
        color:#4154f1!important;
    }
</style>
<?php 
    $current_page = $this->uri->segment('2');
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= ($current_page == '' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_relations' || $current_page == 'editRelation' ? 'active' : 'collapsed'); ?>" data-bs-target="#relation-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-user"></i><span>Relations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="relation-nav" class="nav-content <?php echo ($current_page == 'create_relations' || $current_page == 'editRelation' ? 'active' : 'collapse'); ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?php echo ($current_page == 'create_relations' || $current_page == 'editRelation' ? 'active' : 'collapse'); ?>" href="<?php echo base_url(); ?>admin/create_relations">
              <i class="bi bi-circle"></i><span>Create Relations</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_state' || $current_page == 'create_district' || $current_page == 'create_thana' || $current_page == 'manage_thana' || $current_page == 'editState' || $current_page == 'editDistrict' || $current_page == 'editThana' ? 'active' : 'collapsed'); ?>" data-bs-target="#state-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-user"></i><span>Thana Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="state-nav" class="nav-content <?= ($current_page == 'create_state' || $current_page == 'create_district' || $current_page == 'create_thana' || $current_page == 'manage_thana' || $current_page == 'editState' || $current_page == 'editDistrict' || $current_page == 'editThana' ? 'active' : 'collapse'); ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_state' || $current_page == 'editState' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_state">
              <i class="bi bi-circle"></i><span>State</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'create_district' || $current_page == 'editDistrict' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_district">
              <i class="bi bi-circle"></i><span>District</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'create_thana' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_thana">
              <i class="bi bi-circle"></i><span>Create Thana</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'manage_thana' || $current_page == 'editThana' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/manage_thana">
              <i class="bi bi-circle"></i><span>Manage Thana</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_age_bands' ? 'active' : 'collapsed'); ?>" data-bs-target="#age-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-user"></i><span>Age Bands</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="age-nav" class="nav-content <?= ($current_page == 'create_age_bands' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_age_bands' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_age_bands">
              <i class="bi bi-circle"></i><span>Create Age Bands</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_religion' || $current_page == 'editReligion' ? 'active' : 'collapsed'); ?>" data-bs-target="#religion-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-church"></i><span>Relgions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="religion-nav" class="nav-content <?= ($current_page == 'create_religion' || $current_page == 'editReligion' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_religion' || $current_page == 'editReligion' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_religion">
              <i class="bi bi-circle"></i><span>Create Religion</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'settings' ? 'active' : 'collapsed'); ?>" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-cog"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="setting-nav" class="nav-content <?= ($current_page == 'settings' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'settings' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/settings">
              <i class="bi bi-circle"></i><span>Settings</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_categories' || $current_page == 'editCategory' ? 'active' : 'collapsed'); ?>" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category-nav" class="nav-content <?= ($current_page == 'create_categories' || $current_page == 'editCategory' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_categories' || $current_page == 'editCategory' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_categories">
              <i class="bi bi-circle"></i><span>Create Categories</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_sub_categories' || $current_page == 'manage_sub_categories' || $current_page == 'editSubCategory' ? 'active' : 'collapsed'); ?>" data-bs-target="#sub-category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Sub Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sub-category-nav" class="nav-content <?= ($current_page == 'create_sub_categories' || $current_page == 'manage_sub_categories' || $current_page == 'editSubCategory' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'manage_sub_categories' || $current_page == 'editSubCategory' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/manage_sub_categories">
              <i class="bi bi-circle"></i><span>Manage Sub Categories</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'create_sub_categories' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_sub_categories">
              <i class="bi bi-circle"></i><span>Create Sub Categories</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'missing_report' || basename($_SERVER['PHP_SELF']) == 'vector_response' ? 'active' : 'collapsed'); ?>" data-bs-target="#report" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="report" class="nav-content <?= ($current_page == 'missing_report' || basename($_SERVER['PHP_SELF']) == 'vector_response' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'missing_report_person' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/missing_report/missing_report_person">
              <i class="bi bi-circle"></i><span>Missing Person</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'missing_report_vehicle' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/missing_report/missing_report_vehicle">
              <i class="bi bi-circle"></i><span>Missing Vehicle</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'missing_report_user' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/missing_report/missing_report_user">
              <i class="bi bi-circle"></i><span>Missing Device</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'vector_response' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/vector_response">
              <i class="bi bi-circle"></i><span>Vector Response</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'search_history' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/search_history">
              <i class="bi bi-circle"></i><span>Search History</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'search_history_filter' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/search_history_filter">
              <i class="bi bi-circle"></i><span>Search History Filter</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'allot_search_package' || $current_page == 'allot__mahakumbh_package' || $current_page == 'create_package' || $current_page == 'allot_package' || $current_page == 'allot_personal_package' ? 'active' : 'collapsed'); ?>" data-bs-target="#package-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-gift"></i><span>Package </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="package-nav" class="nav-content <?= ($current_page == 'allot_search_package' || $current_page == 'allot__mahakumbh_package' || $current_page == 'create_package' || $current_page == 'allot_package' || $current_page == 'allot_personal_package' ? 'active' : 'collapse'); ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_package' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_package">
              <i class="bi bi-circle"></i><span>Create Package</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'allot_package' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/allot_package">
              <i class="bi bi-circle"></i><span>Allot Package</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'allot__mahakumbh_package' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/allot__mahakumbh_package">
              <i class="bi bi-circle"></i><span>Allot Mahakumbh Package</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'allot_personal_package' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/allot_personal_package">
              <i class="bi bi-circle"></i><span>Allot Personal Package</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'allot_search_package' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/allot_search_package">
              <i class="bi bi-circle"></i><span>Allot Search Package</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_faq' || $current_page == 'create_faq_types' || $current_page == 'manage_faqs' ? 'active' : 'collapsed'); ?>" data-bs-target="#faq-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-question-circle"></i><span>Faqs </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="faq-nav" class="nav-content <?= ($current_page == 'create_faq' || $current_page == 'create_faq_types' || $current_page == 'manage_faqs' ? 'active' : 'collapse'); ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_faq_types' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_faq_types">
              <i class="bi bi-circle"></i><span>Create FAQ Types</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'create_faq' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_faq">
              <i class="bi bi-circle"></i><span>Create FAQ</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= ($current_page == 'manage_faqs' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/manage_faqs">
              <i class="bi bi-circle"></i><span>Manage FAQ</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($current_page == 'create_faqs' || $current_page == 'create_guidence_video' ? 'active' : 'collapsed'); ?>" data-bs-target="#other-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-cog"></i><span>Other</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="other-nav" class="nav-content <?= ($current_page == 'create_guidence_video' ? 'active' : 'collapse'); ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link <?= ($current_page == 'create_guidence_video' ? 'active' : 'collapsed'); ?>" href="<?php echo base_url(); ?>admin/create_guidence_video">
              <i class="bi bi-circle"></i><span>Create Guidence Video</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->