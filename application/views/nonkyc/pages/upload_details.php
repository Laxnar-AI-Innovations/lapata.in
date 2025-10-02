<style>
    .icon_green{
        color:#008000!important;
    }
    .icon_red{
        color:#ff1b01;
    }
    .icon_blue{
        color:#2879ff;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h5>Welcome, <?= $_SESSION['aadharName']; ?>!</h5>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Family Member</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/add_family_member" class="text-success" onclick="checkIfFinal(this);return false;"><img src="<?php echo base_url(); ?>assets/familyToken.png" style="height: 50px;"></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/add_family_member" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Add Family Member</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Make Your Profile</h5>

                    <div class="d-flex align-items-end">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Profile Details</p></a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-auto">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add & Update Your ID Documents</h5>

                    <div class="d-flex align-items-end justify-content-space-between">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="bi bi-filetype-doc"></i></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Aadhar/ PAN / Voter / DrivingLicense</p></a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add Well Wisher Contact Details - </h5>

                    <div class="d-flex align-items-end justify-content-space-between">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="fa fa-user"></i></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Add Well Wisher Contact No.</p></a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add Your Face Match Photo -</h5>

                    <div class="d-flex align-items-end">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:100px;height:100px;padding:1rem;border-radius:50%;"></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Add Face Photo</p></a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-auto">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Add Spouse (H / W) Details</h5>

                    <div class="d-flex align-items-end">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><img src="<?php echo base_url(); ?>assets/icons/spouse.png"></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Spouse Details</p></a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-auto">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Vehicle Details</h5>

                    <div class="d-flex align-items-end">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <a href="<?php echo base_url(); ?>login" class="text-success" onclick="checkIfFinal(this);return false;"><i class="bi bi-car-front"></i></a>
                        </div>
                        <div class="ps-3">
                            <a href="<?php echo base_url(); ?>login" onclick="checkIfFinal(this);return false;" class="text-dark">
                                <p style="font-size: 14px;font-weight: bold;">
                                    <ol>
                                        <li style="font-weight:bold;list-style-type:none;">1) Add Your Vehicle.</li>
                                        <li style="font-weight:bold;list-style-type:none;">2) View Your Vehicle.</li>
                                    </ol>    
                                </p>
                            </a>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-auto">
                          <a href="<?php echo base_url(); ?>login" class="text-success icon_green" onclick="checkIfFinal(this);return false;"><i class="fa fa-lock"></i></a>
                        </div>
                    </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
        </div>
      </div>
    </section>

  </main><!-- End #main -->