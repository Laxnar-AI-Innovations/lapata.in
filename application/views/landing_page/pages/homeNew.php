<style>
div:where(.swal2-container) div:where(.swal2-popup){
    width:auto;
}
#swal2-html-container{
    margin: 0 0rem!important;
}
</style>
<style>
    .proper_width{
        width:100%;
    }
    .btn:not(.btn-link):hover {
        transform: inherit;
        box-shadow: 0 0 0 0;
    }
</style>
    <section class="wrapper bg-dark angled lower-start">
      <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
          <div class="col-lg-7" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true">
            <h4 class="text-white mb-4" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">Khoji focuses on <br><span class="typer text-primary" data-delay="100" data-words="Search Person By Face Photo,Search Person By Identity, Upload Missing Person, Upload Unknown Person, Search Vehicle Detail" style="color: black;"> Search Devices</span><span class="cursor text-primary" data-owner="typer" style="transition: all 0.1s ease 0s; opacity: 1;">|</span></h4>
            <!--<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">We carefully consider our solutions to support each and every stage of your growth.</p>-->
            
            <div data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" 
            style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="row">
                    <div class="col-lg-6">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a class="btn btn-lg btn-secondary rounded m-1 p-1 proper_width" href="<?php echo base_url(); ?>check-person-face">
                            <div class="row btn btn-lg btn-secondary rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <img src="<?php echo base_url(); ?>assets/images/faceicon.webp" style="width:100%;">
                                </div>
                                <div class="col-9">
                                    Search <br> Person By Face Photo
                                </div>
                            </div>
                        </a>
                        <?php }else{ ?>
                        <a class="btn btn-lg btn-secondary rounded m-1 p-1 proper_width" href="<?php echo base_url(); ?>check-person-face">
                            <div class="row btn btn-lg btn-secondary rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <img src="<?php echo base_url(); ?>assets/images/faceicon.webp" style="width:100%;">
                                </div>
                                <div class="col-9">
                                    Search <br> Person By Face Photo
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-lg btn-success rounded m-1 p-1 proper_width" href="<?php echo base_url(); ?>check-person-details">
                            <div class="row btn btn-lg btn-success rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <i class="fa fa-address-card fa-3x"></i>
                                </div>
                                <div class="col-9">
                                    Search <br> Person By Identity
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-lg btn-danger rounded m-1 p-1 proper_width" href="javascript:void(0)" onclick="showLoginAccordingly('missing')">
                            <div class="row btn btn-lg btn-danger rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <img src="<?php echo base_url(); ?>assets_landing_page/img/missinglanding.png" style="width:100%;">
                                </div>
                                <div class="col-9">
                                    Upload <br> Missing Person
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-lg btn-primary rounded m-1 p-1 proper_width" href="javascript:void(0)" onclick="showLoginAccordingly('unknown')">
                            <div class="row btn btn-lg btn-primary rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <img src="<?php echo base_url(); ?>assets_landing_page/img/missingunknown.png" style="width:100%;">
                                </div>
                                <div class="col-9">
                                    Upload <br> Unknown Person
                                </div>
                            </div>
                        </a>
                    </div>
                 </div>
                 <div class="row justify-content-center">
                     <div class="col-lg-6">
                        <a class="btn btn-lg btn-info rounded m-1 p-1 proper_width" href="<?php echo base_url(); ?>check-vehicle-details">
                            <div class="row btn btn-lg btn-info rounded m-1 p-0 proper_width">
                                <div class="col-3">
                                    <i class="fa fa-car fa-3x text-dark"></i>
                                </div>
                                <div class="col-9">
                                    Search <br> Vehicle Detail
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
          </div>
          <!-- /column -->
          <div class="col-lg-4 offset-lg-1 mb-n118" data-cues="slideInDown" data-disabled="true">
            <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <figure class="rounded shadow-lg"><img src="assets/images/khoji.webp"  alt=""></figure>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-primary">
      <div class="container pt-19 pt-md-12 pb-16 pb-md-10">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-primary mb-3">What We Do?</h2>
            <h3 class="display-3 mb-10 px-xxl-10">The service we offer is specifically designed to meet your needs.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
          <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
              <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i31.png" srcset="assets_landing_page/img/illustrations/i31.png 2x" alt=""></figure>
              <h3>Create a new account with a verification</h3>
              <!--<p class="mb-2">General User, Commercial, Police Thana and NGO anyone can register here.</p>-->
              <a href="<?php echo base_url(); ?>all-registration-pages" class="btn btn-danger rounded  ">Learn More</a>
            </div>
            <!--/.px -->
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
              <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i30.png" srcset="assets_landing_page/img/illustrations/i30.png 2x" alt=""></figure>
              <h3>Search Person/ Vehicle/ Device Detail</h3>
              <!--<p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet. Sed posuere consectetur.</p>-->
              <a href="<?php echo base_url(); ?>all-search-pages" class="btn btn-danger rounded  ">Learn More</a>
              <!--<a href="#" class="more hover">Learn More</a>-->
            </div>
            <!--/.px -->
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
              <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i14.png" srcset="assets_landing_page/img/illustrations/i14.png 2x" alt=""></figure>
              <h3>File a complaint about missing person/vehicle and mobile</h3>
              <!--<h3>Make Missing Complaint of Person/ Vehicle & Device </h3>-->
              <!--<p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna scelerisque.</p>-->
               <a href="<?php echo base_url(); ?>make-missing-complaint" class="btn btn-danger rounded  ">Learn More</a>
            </div>
            <!--/.px -->
          </div>
          <!--/column -->
        </div>
        <!--<div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i9.png" srcset="assets_landing_page/img/illustrations/i9.png 2x" alt=""></figure>-->
        <!--      <h3>Add person / vehicle details </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Learn More</a>-->
        <!--    </div>-->
            
        <!--  </div>-->
          
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i12.png" srcset="assets_landing_page/img/illustrations/i12.png 2x" alt=""></figure>-->
        <!--      <h3>Add person / vehicle latest photos </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Learn More</a>-->
        <!--    </div>-->
            
        <!--  </div>-->
          
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i20.png" srcset="assets_landing_page/img/illustrations/i20.png 2x" alt=""></figure>-->
        <!--      <h3>Check detail with Biometric </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Coming Soon</a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--<div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i9.png" srcset="assets_landing_page/img/illustrations/i9.png 2x" alt=""></figure>-->
        <!--      <h3>Add person / vehicle details </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Learn More</a>-->
        <!--    </div>-->
            
        <!--  </div>-->
          
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i12.png" srcset="assets_landing_page/img/illustrations/i12.png 2x" alt=""></figure>-->
        <!--      <h3>Add person / vehicle latest photos </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Learn More</a>-->
        <!--    </div>-->
            
        <!--  </div>-->
          
        <!--  <div class="col-lg-4">-->
        <!--    <div class="px-md-15 px-lg-3">-->
        <!--      <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/i20.png" srcset="assets_landing_page/img/illustrations/i20.png 2x" alt=""></figure>-->
        <!--      <h3>Check detail with Biometric </h3>-->
        <!--      <a href="#" class="btn btn-danger rounded  ">Learn More</a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <section class="section-frame overflow-hidden">
      <div class="container-card ">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5" data-image-src="assets_landing_page/img/photos/bg22.png" style="background-image: url(&quot;assets_landing_page/img/photos/bg22.png&quot;);">
          <div class="card-body py-2 px-0">
            <div class="container">
              <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                <div class="col-lg-8" data-cues="slideInDown" data-group="page-title" data-delay="900" data-disabled="true">
                  <h1 class="display-3 mb-4 me-xl-5 me-xxl-0" data-cue="slideInDown" data-group="page-title" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">Networking <span class="text-gradient gradient-1">solutions</span> for worldwide Missing person , vehicle and device.</h1>
                  <p class="lead fs-20 lh-sm mb-7 pe-xxl-15" data-cue="slideInDown" data-group="page-title" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">We're a company that focuses on establishing long-term relationships and helping missing person with customers.</p>
                  <div data-cue="slideInDown" data-group="page-title" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="<?php echo base_url(); ?>login" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a></div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                  <img class="img-fluid mb-n1h8" src="assets_landing_page/img/illustrations/3d6.png" srcset="assets_landing_page/img/illustrations/3d6.png 2x" data-cue="fadeIn" data-delay="300" alt="" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                </div>
                <!--/column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!-- /.container-card -->
    </section>
    <section class="wrapper bg-light">
      <div class="container pt-10 pt-lg-8 pb-14 pb-md-0">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="fs-16 text-uppercase text-line text-primary mb-3">What We Do?</h2>
            <h3 class="display-4 mb-9">The service we offer is specifically designed to meet your needs.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 mb-14 mb-md-10">
          
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-block btn-lg btn-soft-primary pe-none mb-6"> <i class="uil uil-user-square"></i> </div>
            <h4>Search Person</h4>
            <p class="mb-3">Search any Person using Authentic detail , Face Matching and Fingerprint </p>
            <a href="<?php echo base_url().'check-person-details' ?>" class="more hover link-primary">Learn More</a>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-block btn-lg btn-soft-primary pe-none mb-6"> <i class="uil uil-bus-school"></i> </div>
            <h4>Search Vehicle</h4>
            <p class="mb-3">Search any Vehile using Authentic detail , Engine Number and Chassis Number .</p>
            <a href="<?php echo base_url().'check-vehicle-details' ?>" class="more hover link-primary">Learn More</a>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-block btn-lg btn-soft-primary pe-none mb-6"> <i class="uil uil-processor"></i> </div>
            <h4>Search Device</h4>
            <p class="mb-3">Search any Electronic Device using Authentic detail , IMEI Number and Model Number .</p>
            <a href="#" class="more hover link-primary">Learn More</a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-block btn-lg btn-soft-primary pe-none mb-6"> <i class="uil uil-gold"></i> </div>
            <h4>Search Gold</h4>
            <p class="mb-3">Search any Gold Jewellery using HUID.</p>
            <a href="javascript:void(0);" class="more hover link-primary">Coming Soon</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-10 align-items-center">
          <div class="col-md-8 col-lg-6 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="assets_landing_page/img/photos/m3.avif" srcset="assets_landing_page/img/photos/m3.avif 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5 col-xl-4 offset-lg-1">
            <h2 class="fs-16 text-uppercase text-line text-primary mb-3">How It Works?</h2>
            <h3 class="display-4 mb-7">Here are the 3 easy steps to Connecting with us.</h3>
            <div class="d-flex flex-row mb-6">
              <div>
                <span class="icon btn btn-block btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
              </div>
              <div>
                <h4 class="mb-1">Register Yourself With AADHAAR </h4>
                <p class="mb-0">Register yourself with Aadhar no and Aadhaar linked Mobile no.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-6">
              <div>
                <span class="icon btn btn-block btn-soft-primary pe-none me-5"><span class="number fs-18">2</span></span>
              </div>
              <div>
                <h4 class="mb-1">Verify Yourself</h4>
                <p class="mb-0">Verify Yourself with Aadhaar linked Mobile no. OTP.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-block btn-soft-primary pe-none me-5"><span class="number fs-18">3</span></span>
              </div>
              <div>
                <h4 class="mb-1">Fetch Khoji Detail</h4>
                <p class="mb-0">Fetching the Missing Person deatil and Find Missing Person </p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative">
            <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; left: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="assets_landing_page/img/photos/m4.avif" srcset="assets_landing_page/img/photos/m4.avif 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
            <h3 class="display-4 mb-7">A few reasons why our valued customers choose us.</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Easy Step to Search ( Person - Vehicle - Device) </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Search Any Person , Vehicle and Device With easy step using Face Matching , Fingerprint (Biometric) and Vehicle chassis no identifier and IMEI number. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
           
            
              <!--/.accordion-item -->
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  
   
  </div>
  <!-- /.content-wrapper -->
  <script>
    function showLoginAccordingly(type)
    {
        <?php 
            if(isset($_SESSION['landingMob']))
            {
        ?>
            if(type == 'missing')
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
                // location.href="<?= base_url(); ?>NonKyc/lapata_login";
            }else{
                location.href="<?= base_url(); ?>NonKyc/upload_unknown_details";
            }
        <?php
            }else{
                if(isset($_SESSION['user_login']))
                {
        ?>
        if(type == 'missing')
        {
            location.href="<?= base_url(); ?>user/lapata_login";
        }else{
            location.href="<?= base_url(); ?>user/upload_unknown_details";
        }
        <?php }else{ ?>
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0'
          },
          allowOutsideClick:false,
          html:
            '<h4 class="text-center text-red my-3"><b>Choose Option</b></h4><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`withoutLogin`,`'+type+'`)" class="w-100 btn-style-grey disabled-on-loading btn"> Without Login</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`login`,`'+type+'`)" class="w-100 btn-style-green disabled-on-loading btn"> Login</button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="jumpAccordingly(`signup`,`'+type+'`)" class="w-100 btn-style-five disabled-on-loading btn">Signup</button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })   
        <?php } ?>
        <?php } ?>
    }
    
    function proceedToStep1(isFinal)
    {
        if(isFinal == 1)
        {
            location.href="<?= base_url(); ?>non-kyc-dashboard-profile";   
        }else{
            location.href="<?= base_url(); ?>step1-guest";      
        }
    }
    
    function sendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $(ele).removeAttr('disabled');
                        $('#otp').attr('required',true);
                        toastr.success(parse.msg);
                        $('#mobileNumber').attr('readonly',true);   
                        $('#aadharmobileNumber').attr('disabled','disabled');
                        $('#mobileaadhardiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        if(parse.status == 'already')
                        {
                            proceedToStep1(parse.isFinal);
                        }else{
                            $(ele).removeAttr('disabled');
                            toastr.error('Something Went Wrong');
                            $('#otpdiv').addClass('d-none');   
                        }
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    function showOtpAccordingly(val)
    {
        var max_chars = 9;
        if(val.value.length > max_chars) {
            $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#btnaadharNext').removeClass('disabled');
            val.value = val.value.substr(0, (max_chars + 1));
        }else{
            $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#btnaadharNext').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    toastr.success(parse.msg);
                    $(ele).removeAttr('disabled');
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function getRegistered(type)
    {
        let data = new FormData();
        data.append('type',type);
        $('#aadharmobileNumber').empty();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('value',$('#mobileNumber').val());
        $.ajax({
            url:'<?php echo base_url(); ?>user/getMobileDetails',
            data:data,
            timeout: 60000,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                console.log(parse);
                if(parse.status == 'success')
                {
                    if(parse.isNew == 0)
                    {
                        $('#terms').parent().addClass('d-none');
                        $('#terms').addClass('required');
                        $('#mobileNumber').attr('readonly',true);
                        $('#aadharotpdiv').removeClass('d-none');
                        $('#btnaadharNext').addClass('d-none');
                        $('#mobileaadhardiv').removeClass('d-none');
                        $('#aadharmobileNumber').append('<option value="">Select Mobile Number</option>');
                        $('#aadharmobileNumber').attr('required',true);
                        if(parse.isAlternate)
                        {
                            if(parse.isAlternate1 && !parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }else if(!parse.isAlternate1 && parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }
                            else{
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                            }   
                        }else{
                            $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                        }   
                    }else{
                        if(parse.isRegistered == 1)
                        {
                            $('#terms').parent().addClass('d-none');
                            $('#terms').addClass('required');
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                       
                        }else{
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                    
                        }
                    }
                }else{
                    textMessage = 'Mobile Number';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#mobile').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border',
                            title:'px-2'
                        },
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        confirmButtonText:'Please Try Again',
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        location.reload();
                    })
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                if (textStatus == 'timeout') {
                    toastr.error('Please Try Again');
                    setTimeout(function()
                    {
                        location.reload();    
                    },2000);
                }
            }
        });
    }
    
    function jumpAccordingly(type1,type2)
    {
        if(type1 == 'login')
        {
            location.href="<?= base_url(); ?>login?clickedOn="+type2;
        }else{
            if(type1 == 'signup')
            {
                location.href="<?= base_url(); ?>create-an-account?clickedOn="+type2;
            }else{
                if(type2 == 'missing')
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
                }else{
                    Swal.fire({
                      title: '<span style="font-size:1rem;color:black;">Enter Your Mobile Number</span>',
                      customClass:{
                        popup:'py-0 col-lg-4',
                        title:'pt-0'
                      },
                      allowOutsideClick:false,
                      html:
                        `<form class="row g-3 mx-0 mb-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>landing/verifyNonKycOtp" novalidate id="stepCallingForm">
                            <?php 
                              $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-floating mt-4 col-12">
                              <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyUp="showOtpAccordingly(this)">
                              <label for="mobileNumber" class="px-4">Enter Mobile Number</label>
                              <div class="invalid-feedback">Please enter your mobile number.</div>
                            </div>
                            <div class="form-group col-auto" id="sendOtpDiv">
                                <button type="button" onclick="getRegistered('mobile')" class="btn btn-default btn-style-grey disabled w-100" id="btnaadharNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="col-12 d-none" id="mobileaadhardiv">
                                <div class="form-floating mb-3">
                                    <select name="aadharmobileNumber" style="font-weight:bold;color:black;" class="form-select" id="aadharmobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                        <option selected>Select Mobile Number</option>
                                    </select>
                                    <label for="aadharmobileNumber">Mobile Number</label>
                                    <div class="invalid-feedback">Please enter your Mobile Number.</div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="aadharotpdiv">
                                    <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="sendOtp(this)"> Send OTP</button>
                                </div>
                            </div>
                            <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                                <div class="form-floating mb-3">
                                  <input type="number" onkeydown="limit(this,'otp');" onkeyup="limit(this,'otp');" class="form-control" name="otp" id="otp" placeholder="Enter 4 Digit OTP">
                                  <label for="otp">Enter 4 Digit OTP</label>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-check-input text-success" type="checkbox" name="terms" id="terms" value="1">
                                    <label for="terms" style="display:inline;">
                                      By proceeding, you agree to our 
                                      <a href="<?= base_url(); ?>terms-of-use" target="_blank" style="color:blue; text-decoration:underline;">Terms</a>, 
                                      <a href="<?= base_url(); ?>privacy-policy" target="_blank" style="color:blue; text-decoration:underline;">Privacy Policy</a>, 
                                      and all other applicable policies, and confirm awareness of how this portal works.
                                    </label>
                                </div>
                                <button class="btn btn-success w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this)"> Proceed</button>
                                <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                    <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                        <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>`,
                      showCloseButton: true,
                      showCancelButton: false,
                      focusConfirm: false,
                      showConfirmButton:false
                    })   
                }
            }
        }
    }
    
    function toggleSendOtp(val)
    {
        if(val == '')
        {
            $('#aadharotpdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#aadharotpdiv button').addClass('disabled');
        }else{
            $('#aadharotpdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#aadharotpdiv button').removeClass('disabled');
        }
    }
    
    function limit(val,type){
        if(type == 'aadhar')
        {
            var max_chars = 11;
            if(val.value.length > max_chars) {
                $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnaadharNext').removeClass('disabled');
                val.value = val.value.substr(0, (max_chars + 1));
            }else{
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnaadharNext').addClass('disabled');
            }   
        }else{
            if(type == 'otp')
            {
                var max_chars = 3;
                if(val.value.length > max_chars) {
                    val.value = val.value.substr(0, (max_chars + 1));
                }
            }else{
                var min_chars = 0;
                if(val.value.length > min_chars) {
                    $('#btnuserNext').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnuserNext').removeClass('disabled');
                }else{
                    $('#btnuserNext').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnuserNext').addClass('disabled');
                }   
            }
        }
    }
    
    function saveForm(ele)
    {
        $(ele).attr('disabled',true);
        if($('#otp').val() != '')
        {
            if(!$('#terms').hasClass('required'))
            {
                if($('#terms').is(':checked'))
                {
                    $(ele).attr('disabled','disabled');
                    let data = new FormData($('#stepCallingForm')[0]);
                    if($('#aadharmobileNumber').val() != '')
                    {
                        data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                    }
                    $.ajax({
                        url:$('#stepCallingForm').attr('action'),
                        data:data,
                        timeout: 60000,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            if(parse.status == 'success')
                            {
                                proceedToStep1(parse.isFinal);
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            if (textStatus == 'timeout') {
                                toastr.error('Please Try Again');
                                setTimeout(function()
                                {
                                    location.reload();    
                                },2000);
                            }
                        }
                    });         
                }else{
                    toastr.error('Please select terms to continue');
                    $(ele).removeAttr('disabled');
                }
            }else{
                $(ele).attr('disabled','disabled');
                let data = new FormData($('#stepCallingForm')[0]);
                if($('#aadharmobileNumber').val() != '')
                {
                    data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                }
                $.ajax({
                    url:$('#stepCallingForm').attr('action'),
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            proceedToStep1(parse.isFinal);
                        }else{
                            toastr.error(parse.message);
                            $(ele).removeAttr('disabled');
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        if (textStatus == 'timeout') {
                            toastr.error('Please Try Again');
                            setTimeout(function()
                            {
                                location.reload();    
                            },2000);
                        }
                    }
                });
            }
        }else{
            toastr.error('Please Enter OTP');
            $(ele).removeAttr('disabled');
        }
    }
  </script>