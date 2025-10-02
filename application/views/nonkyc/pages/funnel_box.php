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
                      <a href="<?php echo base_url(); ?>NonKyc/add_mahakumbh_member_special" class="text-success" onclick="checkIfFinal(this);return false;"><img src="<?= base_url(); ?>assets/khoyapayafrontnew-removebg-preview.png" style="width: 100%;"></a>
                      <!--<a href="javascript:void(0)" onclick="showPopup()" class="text-success"><i class="fa fa-user"></i></a>-->
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/add_mahakumbh_member_special" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">GENERAL / KHOYA PAYA</p></a>
                      <!--<a href="javascript:void(0)" onclick="showPopup()" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Missing Person</p></a>-->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Manage - </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_mahakumbh_person_special" onclick="checkIfFinal(this);return false;" class="text-success"><i class="fa fa-history"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/manage_mahakumbh_person_special" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Edit / History Khoya Paya</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-3 col-md-auto">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Search By Filter</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>NonKyc/search_mahakumbh_filter" onclick="checkIfFinal(this);return false;" class="text-success"><img src="<?= base_url(); ?>assets/facephotofront-removebg-preview.png" class="img-fluid"></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>NonKyc/search_mahakumbh_filter" onclick="checkIfFinal(this);return false;" class="text-dark"><p style="font-size: 14px;font-weight: bold;">Search By Filter</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->