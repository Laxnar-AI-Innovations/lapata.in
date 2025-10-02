<main id="main" class="main">

    <div class="pagetitle">
      <h5>Welcome, <?= $_SESSION['aadharName']; ?></h5>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Upload Details Of - </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/lapata_new_login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                      <!--<a href="javascript:void(0)" onclick="showPopup()" class="text-success"><i class="fa fa-user"></i></a>-->
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/lapata_new_login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Missing Person</p></a>
                      <!--<a href="javascript:void(0)" onclick="showPopup()" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Missing Person</p></a>-->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Upload Details Of - </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/upload_unknown_details_new" onclick="checkIfFinal(this);return false;" class="text-success"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/upload_unknown_details_new" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Unknown Person</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Manage Details Of - </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_both_missing" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-person"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_both_missing" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Manage Missing</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Manage Details Of - </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_unknown_details_new" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-person"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_unknown_details_new" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Manage Unknown</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->