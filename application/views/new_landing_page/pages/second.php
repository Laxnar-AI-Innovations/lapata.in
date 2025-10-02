<style>
    .mob-view
{
  display:none !important;
}
@media (max-width: 767px)
    {
      .mob-view
      {
        display:block !important;
      }
      .desk-view
      {
        display:none !important;
      }
}
</style> 
 <section class="wrapper bg-dark desk-view">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="10000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <!--single photo or text ke liye -->
                    <!--<div class="swiper-slide " style="background-image:url('assets/img/photos/Red Modern Gaming Banner Landscape.png')">-->
            <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">India's First One Click Solution For Finding Missing Persons.</h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results. Families are automatically notified when missing loved ones are found, ensuring a seamless and efficient process.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-orange btn-outline-white rounded-pill ">Add Your Missing Person </a></div> 
                    <br>
                  </div>
                  <div class="col-md-6 " >
                     <img src="<?= base_url(); ?>assets/img/photos/mobile_1.jpg" alt="" style="border-radius:50%; border: 2px solid white;"/>
                </div>
                </div>
                
              </div>
              
            </div>
            <!--end -->
            
             <!--single photo or text ke liye -->
                <div class="swiper-slide " style="background-image:url('<?= base_url(); ?>assets/img/photos/Red Modern Gaming Banner Landscape.png')">
                    <!--<div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" style="background-color:#888888!important">-->
              <div class="container h-100">
                <div class="row h-100">
                   <div class="col-md-6 " >
                     <img src="<?= base_url(); ?>assets/img/photos/police_face_scan.jpg" alt="Search Person By Face Photo in Khoji" style="border-radius:50%; border: 2px solid white;"/>
                </div>
                  
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h4 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Search Person <br>by Face Photo.</h4>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Search by face photo to get the best possible results  providing you with accurate and similar matched results.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo base_url(); ?>check-person-face" class="btn btn-orange btn-lg  btn-outline-white rounded-pill">Search Your Person</a></div> 
                    <br>
                  </div>
                 
                </div>
                
              </div>
              
            </div>
            <!--end -->
            <!--start-->
               <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                         Search Your Person By Identity
                         </h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                        Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo base_url(); ?>check-person-details" class="btn btn-lg btn-orange btn-outline-white rounded-pill ">Search Person By Identity </a></div> 
                    <br>
                  </div>
                  <div class="col-md-6 " >
                     <img src="<?= base_url(); ?>assets/img/photos/sbidentity.jpg" alt="" style="border-radius:50%; border: 2px solid white;"/>
                </div>
                </div>
                
              </div>
              
            </div>
            <!--end-->
            
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>

<!--mobile view banner-->

<section class="wrapper mob-view" style="background-color:#f5f5f5">
  <div class="swiper-container dots-closer text-center mb-6" data-margin="30" data-autoplay="true" data-autoplaytime="5000"  data-dots="true" data-items="1">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <h2 class="text-justify p-2 mt-3 pb-1">India's First One Click Solution for finding Missing Persons</h2>
          <p class="text-justify p-2 pt-1 pb-0" >An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results.
          
          </p>
          <a href="javascript:void(0)" class="btn btn-danger mb-2" >Add Your Missing Person</a>
          
          <div class="w-100">
            <img src="<?= base_url(); ?>assets/img/photos/mobile_1.webp" alt="khoji" >
          </div>
        </div>
        
        <div class="swiper-slide">
          <h2 class="text-justify p-2 mt-3 pb-1">Search Your Person By Face Photo</h2>
           <p class="text-justify p-2 pt-1 pb-0" >Search Person by face photo to get the best possible results providing you with accurate and similar matched results.</p>
             <a href="<?php echo base_url(); ?>check-person-face" class="btn btn-danger mb-2">Search Missing Person</a>
          <div class="w-100">
            <img src="<?= base_url(); ?>assets/img/photos/pfc.jpg" alt="Khoji police face scan" >
           
          </div>
        </div>
        <!--end-->
        <!--start-->
        <div class="swiper-slide">
          <h2 class="text-justify p-2 mt-3 pb-1">Search Your Person <br> By Identity</h2>
           <p class="text-justify p-2 pt-1 pb-0" >Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.</p>
             <a href="<?php echo base_url(); ?>check-person-details" class="btn btn-danger mb-2">Search Person By Identity</a>
          <div class="w-100">
            <img src="<?= base_url(); ?>assets/img/photos/sbidentity.jpg" alt="Khoji search id" >
           
          </div>
        </div>
        <!--end-->
      </div>
    </div>
  </div>
</section>

<!--mobilw view banner end -->
<!-- clients -->
<section class="wrapper bg-light">
  <div class="container">
    <h3 class="text-center mt-4 mb-8">Affiliations And Partnerships</h3>
    <div class="row">
      <marquee behavior="" direction="">
        <img src="<?= base_url(); ?>assets_landing_page/logos/digilocker.webp" alt="" title="Digilocker"/>
        <img src="<?= base_url(); ?>assets_landing_page/logos/aim.webp" alt="" />
        
        <img src="<?= base_url(); ?>assets/img/photos/rru.png" alt="" />
        <img src="<?= base_url(); ?>assets_landing_page/logos/incubation.webp" alt="" />
      </marquee>
    </div>
  </div>
</section>
<section class="wrapper bg-light d-none">
  <div class="container py-5 ">
    <h3 class="text-center mb-8">Affiliations And Partnerships</h3>
   
    <!-- /.row -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
     
      <!--/column -->
      <div class="col">
        <div class="card  card-border-end border-soft-purple h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure ><img src="<?= base_url(); ?>assets_landing_page/logos/digilocker.webp" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-leaf h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure ><img src="<?= base_url(); ?>assets_landing_page/logos/incubation.webp" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-purple h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure ><img src="<?= base_url(); ?>assets_landing_page/logos/aim.webp" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-leaf h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure ><img src="./assets/img/photos/rru.png" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<!-- end clients -->
<!-- call to action start  -->
<section class="wrapper bg-light">
  <div class="container py-4 py-md-6">
    <div class="row">
      <div class="col-xl-12 mx-auto">
        <!--<div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">-->
        <div class="card image-wrapper bg-full  bg-overlay bg-overlay-400" style="background-image: linear-gradient(4deg, #4c0909, rgb(232 26 33))!important;">
          <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
            <h3 class="display-6 mb-2 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">⚡ Quickly find missing persons using advanced tools. Search by face photo 📷 or identity 🆔 for fast results.</h3>
            <a href="<?php echo base_url() ?>check-person-face" class="btn btn-white rounded-pill mb-0 text-nowrap fs-12">🔍 Search By Face Photo</a>
          </div>

          
          
        </div>
        
      </div>
      
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<!-- call to action end -->
<!-- why choose us  -->
 <!-- /section -->
    <section class="wrapper " style="background-color: #eeeeee57 !important;">

      <div class="overflow-hidden" >
        <div class="container" >

            <div class="row text-center py-6">
              <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-30 text-uppercase  mb-3 text-center text-dark">Why Choose KHOJI?</h2>
                <h3 class="display-3 mb-md-4 mb-0 text-center text-dark">Here are a few <span class="text-gradient gradient-1">reasons why</span> our customers choose KHOJI.IN</h3>
              </div>
              <!-- /column -->
            </div>
          <!-- <div class="row">
            <div class="col-xl-7 col-xxl-6 mx-auto text-center">
              <i class="icn-flower text-leaf fs-30 opacity-25"></i>
              <h2 class="display-5 text-center mt-2 mb-10 text-light">Why Choose <span class="text-light">KHOJI</span></h2>
            </div>
           
          </div> -->
          <!--/.row -->
          
          <style>
              .bg_fit{
                      background-size: contain;
              }
          </style>
          <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
            <div class="swiper overflow-visible pb-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                        <video poster="<?php echo base_url(); ?>assets/video/How to upload.jpg" class="player bg_fit" playsinline controls preload="none">
                          <source src="<?php echo base_url();?>assets/video/How to upload (khoji.in).mp4" type="video/mp4">
                        </video>
                    <!--<figure class="card-img-top overlay overlay-1">-->
                    <!--          <iframe width="410" height="315" src="https://www.youtube.com/embed/RjEadj44XkQ?si=vDkCWjow4mxMI_MM" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>-->
                              
                    <!--      </figure>-->
                      <div class="card-body pt-1  p-3 h-100vh">
                        <div class="post-header">
                          
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-0 mb-1">Quick Identification with just face photo</h2>

                          <p>Khoji.in uses only a face photo to quickly identify missing persons and contact their families. Our powerful fave recognition algorithm enables families, police, NGOs, and social workers to locate missing individuals without needing any verbal details.</p>
                        </div>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                        <video poster="<?php echo base_url(); ?>assets/video/How to upload.jpg" class="player bg_fit" playsinline controls preload="none">
                          <source src="<?php echo base_url();?>assets/video/How to upload (khoji.in).mp4" type="video/mp4">
                        </video>
                      <div class="card-body pt-1  p-3 h-100vh">
                        <div class="post-header">
                          
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-0 mb-1">Search by Identity</h2>
                          <p> Easily verify if a person is missing by searching with Govt issued IDs . This feature helps in quickly identifying individuals and contacting their families, especially in emergencies.</p>
                        </div>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
               <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                        <video poster="<?php echo base_url(); ?>assets/video/How to upload.jpg" class="player bg_fit" playsinline controls preload="none">
                          <source src="<?php echo base_url();?>assets/video/How to upload (khoji.in).mp4" type="video/mp4">
                        </video>
                      <div class="card-body pt-1  p-3 h-100vh">
                        <div class="post-header">
                          
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-0 mb-1">Real-Time Alerts</h2>
                          <p>Receive immediate notifications when a missing person  is found. Our system sends alerts through various channels, and a secure calling feature connects families directly with searchers, including police and NGOs.</p>
                        </div>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                       <video poster="<?php echo base_url(); ?>assets/video/How to upload.jpg" class="player bg_fit" playsinline controls preload="none">
                          <source src="<?php echo base_url();?>assets/video/How to upload (khoji.in).mp4" type="video/mp4">
                        </video>
                      <div class="card-body pt-1  p-3 h-100vh">
                        <div class="post-header">
                          
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-0 mb-1">Automatic Search During Upload</h2>
                          <p>When you upload details of a missing person, our system automatically checks and notify you , if they are already in the care of government organizations, NGOs, or shelter homes, providing instant feedback.</p>
                        </div>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>

                <div class="swiper-slide">
                  <article>
                    <div class="card shadow-lg">
                       <video poster="<?php echo base_url(); ?>assets/video/How to upload.jpg" class="player bg_fit" playsinline controls preload="none">
                          <source src="<?php echo base_url();?>assets/video/How to upload (khoji.in).mp4" type="video/mp4">
                        </video>
                      <div class="card-body pt-1  p-3 h-100vh">
                        <div class="post-header">
                          
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-0 mb-1">Personalized Profiles</h2>
                          <p>Create a personal profile to receive alerts if your loved one is found in emergencies or accidents, ensuring a quick response and peace of mind.</p>
                        </div>
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!--/.swiper-slide -->
                
                <!--/.swiper-slide -->
                
                
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
<!-- end why choose -->



<!-- signup video  -->
<section class="wrapper bg-light">
  <div class="container py-8 py-md-8">
      <div class="row text-center">
      <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <h2 class="fs-30 text-uppercase text-dark mb-3 text-center">Create Free Account</h2>
        
        <h3 class="display-3 mb-12 text-center">Our website offers <span class="text-gradient gradient-1">two options</span> for account creation</h3>
      </div>
      <!-- /column -->
    </div>
    
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
        <!--<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>-->
        <video poster="<?php echo base_url(); ?>assets/video/IMG-20240908-WA0023.jpg" class="player bg_fit" playsinline controls preload="none" >
                          <source src="<?php echo base_url();?>assets/video/VID-20240908-WA0025.mp4" type="video/mp4"></video>
        <!--<figure class="card-img-top overlay overlay-1">-->
        <!--    <iframe width="410" height="315" src="https://www.youtube.com/embed/RjEadj44XkQ?si=vDkCWjow4mxMI_MM" title="Khoji" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>-->
            
        <!--</figure>-->
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h2 class="display-4 mb-3">Create Your Account Using <mark>DigiLocker</mark> </h2>
        <p class="lead fs-lg">Nowadays, most people are familiar with DigiLocker. If you already have a DigiLocker account, you can watch the provided video to learn how to create your account using this method.
          <br>
        <a href="<?php echo base_url() ?>complete-your-kyc" class="mt-4 btn btn-navy rounded-pill"> Sign Up &nbsp; <i class="fa fa-sign-in"></i></a>
        </p>
        
       
        <!--/.row -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light" style="background-color: #eeeeee57 !important;">
  <div class="container py-6 py-md-6 text-center">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-30 text-uppercase text-dark mb-12">Explore More Services</h2>
       
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative ln-h-1-2">
    
      <div class="row gx-md-5 gy-5 text-center">
        <div class="col-md-6 col-xl-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <img src="./assets/img/icons/lineal/upload.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
              <h4>Upload Missing Person Details</h4>
              <p class="mb-2">
              Khoji.in offers an easy and fast method for citizens to upload missing person details. Once the information is activated, the uploader gains access to all platform features, 
                helping in reuniting the missing individual as soon as possible.
              </p>
              <!--<a href="#" class="more hover link-green">Learn More</a>-->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <img src="./assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
              <h4>Upload Unknown Person Details</h4>
              <p class="mb-2">This service is designed for police, NGOs, social workers, and organizations etc to upload details of unidentified persons for public identification living in these institutions from years.Once the information is saved, relatives of unidentified persons can easily search using a face photo, identity details, or filters etc.
                </p>
              <!--<a href="#" class="more hover link-red">Learn More</a>-->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <img src="./assets/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
              <h4>Create Personal Profile In Advance</h4>
              <p class="mb-2">Users can create a profile for themselves or their family members in advance, ensuring quick identification and contact in case of emergencies or accidents. This feature helps authorities or first responders reach out to the victim's 
                relatives within the crucial golden hour, improving chances for timely medical treatment and safety.</p>
              <!--<a href="#" class="more hover link-yellow">Learn More</a>-->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
        
        <!--/column -->
        
        <!--/column -->
        <div class="col-md-6 col-xl-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <img src="./assets/img/icons/lineal/truck.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
              <h4>Add Stolen Vehicle Details</h4>
              <p class="mb-2">With vehicle theft on the rise in India, Khoji.in allows you to register details of stolen vehicles. 
                This feature helps in quicker recovery by making the information accessible to law enforcement and the public.</p>
              <!--<a href="#" class="more hover link-blue">Learn More</a>-->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
  <div class="container py-6 py-md-6">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-4">
        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
        <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
        <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
        <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
      </div>
      <!--/column -->
      <div class="col-lg-8">
        <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="https://shammtech.in/assets/img/logo_new.png" srcset="https://shammtech.in/assets/img/logo_new.pngjpg 2x" alt="" />
                <h4 class="mb-1">Cory Zamora</h4>
                <div class="meta mb-2">Marketing Specialist</div>
                <p class="mb-2">Etiam porta sem magna malesuada mollis.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-slack"></i></a>
                  <a href="#"><i class="uil uil-linkedin"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="https://shammtech.in/assets/img/logo_new.png" srcset="https://shammtech.in/assets/img/logo_new.pngjpg 2x" alt="" />
                <h4 class="mb-1">Coriss Ambady</h4>
                <div class="meta mb-2">Financial Analyst</div>
                <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-youtube"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="https://shammtech.in/assets/img/logo_new.png" srcset="https://shammtech.in/assets/img/logo_new.pngjpg 2x" alt="" />
                <h4 class="mb-1">Nikolas Brooten</h4>
                <div class="meta mb-2">Sales Manager</div>
                <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-linkedin"></i></a>
                  <a href="#"><i class="uil uil-tumblr-square"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="https://shammtech.in/assets/img/logo_new.png" srcset="https://shammtech.in/assets/img/logo_new.pngjpg 2x" alt="" />
                <h4 class="mb-1">Jackie Sanders</h4>
                <div class="meta mb-2">Investment Planner</div>
                <p class="mb-2">Nullam risus eget urna mollis ornare vel eu leo.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="https://shammtech.in/assets/img/logo_new.png" srcset="https://shammtech.in/assets/img/logo_new.png" alt="" />
                <h4 class="mb-1">Tina Geller</h4>
                <div class="meta mb-2">Assistant Buyer</div>
                <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-slack"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>

<section class="wrapper bg-dark1" style="background-color: #fbe9e7!important;">
  <div class="container py-6 py-md-6">
    <h2 class="display-4 mb-3 text-center"> FAQ</h2>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
    <div class="row">
      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <div id="accordion-2" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any discounts for people in need?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-2-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">How do I reset my Account password?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>