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
                  <h5 class="card-title">Complaint For Person</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_person_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_person_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Complaint For Person</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Complaint For Vehicle</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_missing_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-car-front"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_missing_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Complaint For Vehicle</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Complaint For Devices</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_mobile_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-phone"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_mobile_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Complaint For Devices</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->