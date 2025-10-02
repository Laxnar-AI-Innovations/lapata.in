<style>
    .heading_coral{
        background-color:coral!important;
    }

    .heading_gold{
        background-color:gold!important;
    }

    .heading_light_blue{
        background-color: lightblue!important;
    }

    .heading_black{
        color:black!important;
    }
    .icon_black{
        color:black;
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
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?php echo base_url(); ?>user/upload_details">
                    <div class="card info-card sales-card heading_coral" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title heading_black" >Upload Details (Self)of - </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="fa fa-user"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;">1. My Profile</p><p style="font-size: 14px;font-weight: bold;">2. My Vehicles</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?php echo base_url(); ?>user/search_person_details">
                    <div class="card info-card pb-0 revenue-card heading_gold" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title icon_black" >Search Details of- </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="bi bi-search"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;"><p style="font-size: 14px;font-weight: bold;">1. Person</p><p style="font-size: 14px;font-weight: bold;">2. Vehicles</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?php echo base_url(); ?>user/missing_details">
                    <div class="card info-card pb-0 revenue-card heading_light_blue" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title heading_black" >Upload Details of- </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="bi bi-person"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;"><p style="font-size: 14px;font-weight: bold;">1. Missing / Unknown Person</p><p style="font-size: 14px;font-weight: bold;">2. Theft / Stolen Vehicles</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->