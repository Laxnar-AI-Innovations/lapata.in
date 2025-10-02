<style>
    .heading_white{
        color:white!important;
    }
    .heading_green{
        background-color:#008000;
    }
    .heading_red{
        background-color:#ff1b01;
    }
    .heading_blue{
     background-color:#2879ff;   
    }
    .icon_green{
        color:#008000;
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card sales-card heading_green">

                <div class="card-body ">
                  <h5 class="card-title heading_white" >Add Guest Entry</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>hotel/add_entries" class="icon_green"><i class="fa fa-plus"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>hotel/add_entries" class="heading_white"><p style="font-size: 14px;font-weight: bold;">Add Guest Entry</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-auto">
              <div class="card info-card revenue-card heading_blue">

                <div class="card-body ">
                  <h5 class="card-title heading_white" >View Guest Entries</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="<?php echo base_url(); ?>hotel/view_entries" class="icon_blue"><i class="bi bi-eye"></i></a>
                    </div>
                    <div class="ps-3">
                      <a href="<?php echo base_url(); ?>hotel/view_entries" class="heading_white"><p style="font-size: 14px;font-weight: bold;">View Guest Entries</p></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->