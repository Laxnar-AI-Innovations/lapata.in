<?php
// Helper: can be moved to a common include if reused elsewhere.
function current_path_full() {
    // e.g., "NonKyc/manageGallery?type=unknown"
    $uri = $_SERVER['REQUEST_URI'];
    $trimmed = ltrim($uri, '/');
    return $trimmed;
}

function current_path_base() {
    // path without leading/trailing slashes and without query string, e.g., "NonKyc/manageGallery"
    $path = parse_url($_SERVER['PATH_INFO'], PHP_URL_PATH);
    return trim($path, '/');
}

// exact match (ignores trailing slash differences)
function is_active($targets = []) {
    $current_base = current_path_base();
    foreach ((array)$targets as $t) {
        $t_norm = trim(parse_url($t, PHP_URL_PATH), '/');
        if (strcasecmp($t_norm, $current_base) === 0) {
            return true;
        }
    }
    return false;
}

// match including query-string prefix (useful for ?type=... variants)
function is_active_full($targets = []) {
    $current_full = current_path_full();
    foreach ((array)$targets as $t) {
        $t_trim = ltrim($t, '/');
        if (str_starts_with($current_full, $t_trim)) { // PHP 8+
            return true;
        }
    }
    return false;
}
?>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link <?= is_active(['non-kyc-dashboard-profile','NonKyc']) ? 'active' : '' ?>" href="<?php echo base_url('non-kyc-dashboard-profile'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php $mahakumbh_open = is_active(['NonKyc/add_mahakumbh_member_special', 'NonKyc/manage_mahakumbh_person_special']); ?>
        <li class="nav-item">
            <a class="nav-link <?= $mahakumbh_open ? '' : 'collapsed' ?>" data-bs-target="#mahakumbh-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fa fa-user-plus"></i><span> Bhadarvi Poonam Mahamela </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="mahakumbh-nav-3" class="nav-content collapse <?= $mahakumbh_open ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('NonKyc/add_mahakumbh_member_special'); ?>" class="<?= is_active(['NonKyc/add_mahakumbh_member_special']) ? 'active' : '' ?>">
                        <i class="fas fa-cloud-upload-alt"></i><span>Upload</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('NonKyc/manage_mahakumbh_person_special'); ?>" class="<?= is_active(['NonKyc/manage_mahakumbh_person_special']) ? 'active' : '' ?>">
                        <i class="fas fa-tasks"></i><span>Manage </span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Search Details -->
        <li class="nav-item">
            <a class="nav-link <?= is_active(['NonKyc/search_person_details']) ? 'active' : '' ?>" href="<?php echo base_url('NonKyc/search_person_details'); ?>">
                <i class="bi bi-search"></i>
                <span>Search Details By</span>
            </a>
        </li>

        <!-- Add Family Member -->
        <?php $family_open = is_active(['NonKyc/add_family_member', 'NonKyc/manage_both_family']); ?>
        <li class="nav-item">
            <a class="nav-link <?= $family_open ? '' : 'collapsed' ?>" data-bs-target="#family-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fa fa-user-plus"></i><span>Add Family Member </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="family-nav-3" class="nav-content collapse <?= $family_open ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('NonKyc/add_family_member'); ?>" class="<?= is_active(['NonKyc/add_family_member']) ? 'active' : '' ?>">
                        <i class="fas fa-user"></i><span>Add Family Member</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('NonKyc/manage_both_family'); ?>" class="<?= is_active(['NonKyc/manage_both_family']) ? 'active' : '' ?>">
                        <i class="fas fa-user"></i><span>Manage Family Member Details</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Upload Missing Person -->
        <?php 
            $missing_parent_open = is_active(['NonKyc/lapata_new_login', 'NonKyc/manage_both_missing', 'NonKyc/manageGallery?type=missing', 'NonKyc/lapta_person_after_login']);
            $search_missing_open = is_active_full(['NonKyc/manageGallery?type=missing', 'NonKyc/lapta_person_after_login']);
        ?>
        <li class="nav-item">
            <a class="nav-link <?= $missing_parent_open ? '' : 'collapsed' ?>" data-bs-target="#search-nav-3" data-bs-toggle="collapse" href="javascript:void(0);">
                <i class="fas fa-search"></i><span>Upload Missing Person </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="search-nav-3" class="nav-content collapse <?= $missing_parent_open ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('NonKyc/lapata_new_login'); ?>" class="<?= is_active(['NonKyc/lapata_new_login']) ? 'active' : '' ?>">
                        <i class="fas fa-user"></i><span>Upload Missing Person Detail</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('NonKyc/manage_both_missing'); ?>" class="<?= is_active(['NonKyc/manage_both_missing']) ? 'active' : '' ?>">
                        <i class="fas fa-user"></i><span>Manage Missing Persons</span><i class="fa fa-knife ms-auto"></i>
                    </a>
                </li>
                <li>
                    <?php 
                        $search_missing_collapsed = $search_missing_open ? '' : 'collapsed';
                    ?>
                    <a class="nav-link <?= $search_missing_collapsed ?>" data-bs-target="#search-missingnav" data-bs-toggle="collapse" href="javascript:void(0);">
                        <i class="fas fa-search"></i><span>Search Missing Person</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="search-missingnav" class="nav-content collapse <?= $search_missing_open ? 'show' : '' ?>" data-bs-parent="#search-nav-3">
                        <li>
                            <a href="<?php echo base_url('NonKyc/manageGallery?type=missing'); ?>" class="<?= is_active_full(['NonKyc/manageGallery?type=missing']) ? 'active' : '' ?>">
                                <i class="fa fa-camera"></i><span>Search in missing person data by face photo</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('NonKyc/lapta_person_after_login'); ?>" class="<?= is_active(['NonKyc/lapta_person_after_login']) ? 'active' : '' ?>">
                                <i class="fa fa-filter"></i><span>Search Missing Person By Filter</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Unknown Person Details -->
        <?php 
            $unknown_parent_open = is_active([
                'NonKyc/upload_unknown_details_new',
                'NonKyc/manage_unknown_details_new',
                'NonKyc/manageGallery?type=unknown',
                'NonKyc/unknown_person_filter_after_login'
            ]);
            $search_unknown_open = is_active_full(['NonKyc/manageGallery?type=unknown', 'NonKyc/unknown_person_filter_after_login']);
        ?>
        <li class="nav-item">
            <a class="nav-link <?= $unknown_parent_open ? '' : 'collapsed' ?>" data-bs-target="#unknown-person-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list"></i><span>Unknown Person Details</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="unknown-person-nav" class="nav-content collapse <?= $unknown_parent_open ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('NonKyc/upload_unknown_details_new'); ?>" class="<?= is_active(['NonKyc/upload_unknown_details_new']) ? 'active' : '' ?>">
                      <i class="bi bi-person"></i><span>Upload Unknown Person Details</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('NonKyc/manage_unknown_details_new'); ?>" class="<?= is_active(['NonKyc/manage_unknown_details_new']) ? 'active' : '' ?>">
                        <i class="bi bi-person"></i><span>Manage Unknown Person Details</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $search_unknown_open ? '' : 'collapsed' ?>" data-bs-target="#search-unknownnav" data-bs-toggle="collapse" href="javascript:void(0);">
                        <i class="fas fa-search"></i><span>Search Unknown Person</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="search-unknownnav" class="nav-content collapse <?= $search_unknown_open ? 'show' : '' ?>" data-bs-parent="#unknown-person-nav">
                        <li>
                            <a href="<?php echo base_url('NonKyc/manageGallery?type=unknown'); ?>" class="<?= is_active_full(['NonKyc/manageGallery?type=unknown']) ? 'active' : '' ?>">
                                <i class="fa fa-camera"></i><span>Search in unknown person data by face photo</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('NonKyc/unknown_person_filter_after_login'); ?>" class="<?= is_active(['NonKyc/unknown_person_filter_after_login']) ? 'active' : '' ?>">
                                <i class="fa fa-filter"></i><span>Search Unknown Person By Filter</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- General Profile -->
        <li class="nav-item">
            <a class="nav-link <?= is_active(['NonKyc/profile']) ? 'active' : '' ?>" href="<?php echo base_url('NonKyc/profile'); ?>">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Add / Edit General Profile</span>
            </a>
        </li>

        <!-- Notifications -->
        <li class="nav-item">
            <a class="nav-link <?= is_active(['NonKyc/notification_history']) ? 'active' : '' ?>" href="<?php echo base_url('NonKyc/notification_history'); ?>">
                <i class="fa fa-bell"></i>
                <span>Notifications</span>
            </a>
        </li>

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

    // Fallback: client-side highlight if for some reason server path matching misses
    document.addEventListener('DOMContentLoaded', function () {
        const current = window.location.pathname.replace(/^\/+|\/+$/g, '');
        document.querySelectorAll('#sidebar-nav a').forEach(a => {
            const href = a.getAttribute('href') || '';
            const normalized = href.replace(window.location.origin + '/', '').replace(/^\/+|\/+$/g, '');
            if (normalized && current.startsWith(normalized)) {
                a.classList.add('active');
                // open parent collapses
                const parentCollapse = a.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');
                    const toggler = document.querySelector(`[data-bs-target="#${parentCollapse.id}"]`);
                    if (toggler) toggler.classList.remove('collapsed');
                }
            }
        });
    });
</script>
