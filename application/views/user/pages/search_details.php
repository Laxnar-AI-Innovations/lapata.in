<main id="main" class="main">

    <div class="pagetitle">
      <h5>Welcome, <?= $_SESSION['aadharName']; ?>!</h5>
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
                  <h5 class="card-title">Search Persons</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/search_person_details" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/search_person_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Search Persons</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
             <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Search Unknwon Person</h5>
                   
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/unknown_person_filter_after_login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/unknown_person_filter_after_login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">
                           <span>Details uploaded by </span><span class="text-danger">POLICE THANA</span>
                      <span>&</span><span class="text-danger"> SOCIAL NGO</span></p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


             <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Search Missing Person</h5>
                   
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/lapta_person_after_login?type=user" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/lapta_person_after_login?type=user" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">
                           <span>Details uploaded by </span><span class="text-danger">Registered Users</span>
                      </p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Search Vehicles</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/search_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-car-front"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/search_vehicle_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Search Vehicles</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Search Devices</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>user/search_device_details" onclick="checkIfFinal(this);return false;" class="text-success"><i class="bi bi-phone"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>user/upload_mobile_details" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Search Devices</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->