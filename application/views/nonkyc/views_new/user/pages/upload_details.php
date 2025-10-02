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
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Make Your Profile</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_personal_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_personal_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Profile Details</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add & Update Your ID Documents</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_additional_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="bi bi-filetype-doc"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_additional_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Aadhar/ PAN / Voter / DrivingLicense</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add Nominee</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_nominee_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_nominee_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Add Nominee</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add Spouse (H / W) Details</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_partner_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_partner_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Spouse Details</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Other Details</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_filter_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-filter"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_filter_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Add Your Other Details for FaceMatch & Biometric</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
        </div><!-- End Left side columns -->
        <div class="row">
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Vehicle Details</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-car-front"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-dark">
                          <ol>
                              <li style="font-weight:bold;list-style-type:none;">1) Add Your Vehicle.</li>
                              <li style="font-weight:bold;list-style-type:none;">2) View Your Vehicle.</li>
                              <li style="font-weight:bold;list-style-type:none;">3) Make Caretaker for your Vehicle.</li>
                          </ol>
                        </a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">E-Device Details</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/upload_mobile_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-phone"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_mobile_details" onclick="checkIfFinal(this);return false;" class="text-dark">
                          <ol>
                              <li style="font-weight:bold;list-style-type:none;">1) Add Your Device.</li>
                              <li style="font-weight:bold;list-style-type:none;">2) View Your Device.</li>
                              <li style="font-weight:bold;list-style-type:none;">3) Make Caretaker for your Device.</li>
                          </ol>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->