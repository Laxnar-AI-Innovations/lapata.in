<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.pure.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<style>
    .lapViewSearch{
      background-color: rgb(97, 57, 159);
      padding: 2rem;
    }
    .gslide-inline {
      background: transparent;
      text-align: left;
      max-height: calc(100vh - 40px);
      overflow: auto;
      max-width: 100%;
      margin: auto;
  }

    #users{
        background-color: #1b0a42;
        color: white;
        margin-top: 2rem;
    }

    #users h6{
      color: white;
    }

   .box1 {
      border-radius: 25px;
      padding: .25rem!important;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      border: 1px solid #16033d;
      transition: transform 0.3s ease;
  }

  .arrow {
      position: absolute;
      top: 5px;
      font-size: 24px;
      font-weight: bold;
      color: black;
      right: 10px; /* default: right-aligned */
  }

  @media (min-width: 768px) {
    .arrow {
      left: 50%;
      transform: translateX(-50%);
      right: auto;
    }
  }

  .image {
      width: auto;
      height: 125px;
      object-fit: cover;
      border-radius: 10px;
      align-self: flex-end;
  }

  @media (min-width: 768px) {
  .image {
    align-self: center; /* center the image horizontally in flex */
  }
}

  .image1 {
      width: 85px;
      height: 125px;
      object-fit: cover;
      border-radius: 10px;
      align-self: flex-end;
  }

  @media (min-width: 768px) {
    .image1 {
      align-self: center; /* center the image horizontally in flex */
    }
  }

  .text {
      font-size: 0.65rem;
      text-align: right;
      color: black;
      margin: 40px 0 0px 0px;
  }

  @media (max-width: 767.98px) {
    .text {
      text-align: right !important;
      align-self: flex-end;
    }

    .text1 {
      text-align: right !important;
      align-self: flex-end;
    }
  }

  @media (min-width: 768px) {
    .text {
      text-align: center !important;
      align-self: center;
    }

    .text1 {
      text-align: center !important;
      align-self: center;
    }
  }

  .text1 {
      font-size: 0.75rem;
      text-align: right;
      color: black;
      margin: 40px 0 0px 0px;
  }


  .yellow1 {
      background-color: #fab75885;
  }

  .blue1 {
      background-color: #e6f2ff;
  }

  .light-blue1 {
      background-color: lavender;
  }

  .light-pink1 {
      background-color: #9370dbc4;
  }

  .section1 {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
  }

  .text-row {
      text-align: center;
      margin-bottom: 30px;
    }
    .text-row h2 {
      font-size: 32px;
      font-weight: 700;
      color: #1a237e;
      margin-bottom: 10px;
    }
    .text-row p {
      font-size: 20px;
      line-height: 1.6;
      color: #444;
      max-width: 800px;
      margin: 0 auto 20px auto;
    }
    .cta-button {
      display: inline-block;
      padding: 6px 58px!important;
      font-size: 16px;
      color: #fff;
      background: linear-gradient(135deg, #e53935, #d32f2f);
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      font-weight: 600;
      box-shadow: 0 8px 15px rgba(229, 57, 53, 0.3);
    }
    .cta-button:hover {
      background: white;
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(229, 57, 53, 0.5);
      color: linear-gradient(135deg, #d32f2f, #b71c1c);
      border:1px solid red;
    }
    .image-row {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }
    .img-col {
      flex: 1;
      max-width: 400px;
    }
    .img-col img {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }
    .img-col img:hover {
      transform: scale(1.05);
    }
    @media screen and (max-width: 768px) {
      .image-row {
        flex-direction: column;
      }
    }

</style>
 <section class="wrapper bg-dark desk-view">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="false" data-autoplaytime="10000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide bak-coll">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 style="font-style: italic;" class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">India's First One Click Solution For Finding Missing Persons.</h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results. Families are automatically notified when missing loved ones are found, ensuring a seamless and efficient process.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="javascript:void(0)" onclick="showLoginAccordingly('missing')"
                    class="btn btn-lg rounded-pill btn_new_css">Upload Missing Person </a></div> 
                    <br>
                  </div>
                  <div class="col-md-6 ">
                      <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.webp" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.webp" class="foto-border" alt="Banner 1" fetchpriority="high">
                      </picture>
                </div>
                </div>
                
              </div>
              
            </div>
            <div class="swiper-slide " style="background-image:url('https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Red Modern Gaming Banner Landscape.png')">
              <div class="container h-100">
                <div class="row h-100">
                   <div class="col-md-6 " >
                      <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.webp" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.webp" class="foto-border" alt="Search Person By Face Photo in Khoji" loading="lazy">
                      </picture>
                </div>
                  
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h4 style="font-style: italic;" class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Search Person <br>by Face Photo.</h4>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Search by face photo to get the best possible results  providing you with accurate and similar matched results.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s">
                        <a href="<?php echo base_url(); ?>check-person-face-funnel" class="btn btn-lg rounded-pill btn_new_css">Search Person By Face Photo</a></div> 
                    <br>
                  </div>
                 
                </div>
                
              </div>
              
            </div>
            <!--end -->

            <div class="swiper-slide bak-coll">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 style="font-style: italic;" class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Upload Unknown Person (Unidentified Person)</h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">NGOs, Child care institutions, shelters homes, and social workers can easily upload unidentified person details on <a href="<?= base_url(); ?>">khoji.in</a></p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')"
                    class="btn btn-lg rounded-pill btn_new_css">Upload Unknown Person </a></div> 
                    <br>
                  </div>
                  <div class="col-md-6 " >
                    <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/unknownbanner.webp" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/unknownbanner.webp" alt="Upload Appeal for Identification" class="foto-border-2" loading="lazy" />
                    </picture>
                </div>
                </div>
                
              </div>
              
            </div>
            <!--end -->
            <!--start-->
            <div class="swiper-slide bak-coll">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 style="font-style: italic;" class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                         Search Your Person By Identity
                         </h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                        Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo base_url(); ?>check-person-details"
                    class="btn btn-lg rounded-pill btn_new_css">Search Person By Identity </a></div> 
                    <br>
                  </div>
                  <div class="col-md-6 " >
                    <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.webp" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.webp" class="foto-border" alt="Search Your Person By Identity" loading="lazy">
                      </picture>
                </div>
                </div>
                
              </div>
              
            </div>
            <!--end-->
            <div class="swiper-slide bak-coll">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                     <h5 style="font-style: italic;" class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                         Add Your Family Members
                         </h5>
                    <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                        With <a href="javascript:void(0)">Khoji.in</a>, Add your family members profile in advance to keep your family safe & get instant alerts in case of any emergency.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s">
                      <?php 
                          if($_SESSION['user_login'] == 'yes')
                          {
                      ?>
                      <button class="btn btn-lg btn_new_css rounded-pill" onclick="window.location.href='<?php echo base_url() . $_SESSION['login_type']; ?>/add_family_member';">Add Family Member</button>
                      <?php }else{ ?>
                      <a href="<?php echo base_url() ?>login?clickedOn=family" class="btn_new_css btn btn-lg rounded-pill"> Add Family Member </a>
                      <?php } ?>
                    </div> 
                    <br>
                  </div>
                  <div class="col-md-6 " >
                    <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Jp.jpg" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Jp.jpg" alt="Add Family Members" class="foto-border" loading="lazy">
                      </picture>
                </div>
                </div>
                
              </div>
              
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>

<section class="wrapper mob-view d-none bc-f5">
    <div class="swiper-container dots-closer text-center mb-10" style="height: auto;" data-margin="30" data-autoplay="false" data-autoplaytime="5000"  data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-none">
                    <h4 style="font-style: italic;" class="text-justify p-2 mt-3 pb-1 text-gradient1">DIGITAL MAHAKUMBH 2025</h4>
                    <p class="text-justify p-1 pt-1 pb-0" style="font-weight: bold;">मेले में शामिल होने से पहले <a href="<?= base_url(); ?>">khoji.in</a> के "<span style="border-bottom: 2px solid grey;padding-bottom: 2px;">Add your family members</span>" वाले ऑप्शन को अपनाएं, " बिछड़े हुए "  को मिनटों में वापस पाएं</p>
                    <a href="<?= base_url(); ?>how-it-works-mahakumbh" class="btn btn-danger mb-2 btn_new_css">Add Your Family Member Now <i class="fa fa-user-plus"></i></a>
                    <div class="w-100">
                        <picture>
                            <source srcset="<?= base_url(); ?>assets/prayagrajbanner.png"  type="image/png">
                            <img src="<?= base_url(); ?>assets/prayagrajbanner.png" alt="Khoji police face scan"/>
                        </picture>          
                    </div>
                </div>
                <div class="swiper-slide">
                  <h4 style="font-style: italic;font-weight: bold;color: black;" class="text-justify p-2 mt-3 pb-1">India's First One Click Solution for finding Missing Persons</h4>
                  <p class="text-justify p-1 pt-1 pb-0" >An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results.
                  
                  </p>
                  <a href="javascript:void(0)" onclick="showLoginAccordingly('missing')" class="btn btn-danger mb-2 btn_new_css" >Upload Missing Person</a>
                  
                  <div class="w-100">
                    <picture>
                        <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.webp" type="image/jpg">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.webp" alt="Add Your Missing Person" fetchpriority="high">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <h4 style="font-style: italic;font-weight: bold;color: black;" class="text-justify p-2 mt-3 pb-1">Search Your Person <br> By Face Photo</h4>
                   <p class="text-justify p-1 pt-1 pb-0" >Search Person by face photo to get the best possible results providing you with accurate and similar matched results.</p>
                     <a href="<?php echo base_url(); ?>check-person-face-funnel" class="btn btn-danger mb-2 btn_new_css">Search Person By Face Photo</a>
                  <div class="w-100">
                    <picture>
                          <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/pfc.jpg" type="image/jpg">
                          <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/pfc.jpg" alt="Khoji police face scan" loading="lazy"/>
                    </picture>          
                  </div>
                </div>

                <div class="swiper-slide">
                  <h4 style="font-style: italic;font-weight: bold;color: black;" class="text-justify p-2 mt-3 pb-1">Upload Unknown Person (Unidentified Person)</h4>
                  <p class="text-justify p-1 pt-1 pb-0" >NGOs, Child care institutions, shelters homes, and social workers can easily upload unidentified person details on <a href="<?= base_url(); ?>">khoji.in</a>
                  
                  </p>
                  <a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')" class="btn btn-danger mb-2 btn_new_css" >Upload Unknown Person</a>
                  
                  <div class="w-100">
                      <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/unknownbanner.webp" type="image/jpg">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/unknownbanner.webp" alt="Upload Unknown Person" loading="lazy"/>
                      </picture>
                  </div>
                </div>
            <!--start-->
            <div class="swiper-slide">
              <h4 style="font-style: italic;font-weight: bold;color: black;" class="text-justify p-2 mt-3 pb-1">Search Your Person <br> By Identity</h4>
               <p class="text-justify p-1 pt-1 pb-0" >Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.</p>
                 <a href="<?php echo base_url(); ?>check-person-details" class="btn btn-danger mb-2 btn_new_css">Search Person By Identity</a>
              <div class="w-100">
                <picture>
                      <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.webp" type="image/jpg">
                      <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.webp" alt="Khoji search id" loading="lazy" >
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <h4 style="font-style: italic;font-weight: bold;color: black;" class="text-justify p-2 mt-3 pb-1">Add Your <br>Family Members</h4>
               <p class="text-justify p-1 pt-1 pb-0" >With <a href="javascript:void(0)">Khoji.in</a>, Add your family members profile in advance to keep your family safe & get instant alerts in case of any emergency.</p>
               <?php 
                  if($_SESSION['user_login'] == 'yes')
                  {
              ?>
              <button class="btn btn_new_css mb-2" onclick="window.location.href='<?php echo base_url() . $_SESSION['login_type']; ?>/add_family_member';">Add Family Member</button>
              <?php }else{ ?>
              <a href="<?php echo base_url() ?>login?clickedOn=family" class="mb-2 btn_new_css btn"> Add Family Member </a>
              <?php } ?>
              <div class="w-100">
                <picture>
                      <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Jp.jpg" type="image/jpg">
                      <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Jp.jpg" alt="Add Family Members" loading="lazy" >
                </picture>
              </div>
            </div>
        <!--end-->
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light pt-0 d-block d-md-none">
  <div class="container">
    <h3 class="text-center mt-4 mb-8">Affiliations And Partnerships</h3>
    <div class="row">
      <marquee behavior="alternate" scrollamount="5" direction="">
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" type="image/webp">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" alt="Digilocker" title="Digilocker" loading="lazy"/>
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/png">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM" loading="lazy"/>
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" type="image/png">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" alt="RRU" loading="lazy" />
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" type="image/webp">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" alt="incubation" loading="lazy" />
        </picture>
      </marquee>
    </div>
  </div>
</section>
<section class="wrapper bg-light pt-0 d-none d-md-block">
  <div class="container">
    <h3 class="text-center mt-4 mb-8">Affiliations And Partnerships</h3>
    <div class="row">
      <marquee behavior="alternate" scrollamount="8" direction="">
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" type="image/webp">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" alt="Digilocker" title="Digilocker" loading="lazy"/>
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/png">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM" loading="lazy"/>
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" type="image/png">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" alt="RRU" loading="lazy" />
        </picture>
        <picture>
              <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" type="image/webp">
              <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" alt="incubation" loading="lazy" />
        </picture>
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
              <picture>
                  <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" type="image/webp">
                  <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" alt="Digilocker" title="Digilocker" loading="lazy"/>
              </picture>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-leaf h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <picture>
                  <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/incubation.webp" type="image/webp">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/incubation.webp" alt="incubation" title="incubation" loading="lazy"/>
              </picture>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-purple h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <picture>
                  <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/webp">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM" loading="lazy"/>
              </picture>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card card-border-end border-soft-leaf h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <picture>
                  <source srcset="./assets/img/photos/rru.png" type="image/png">
                  <img src="./assets/img/photos/rru.png" alt="RRU" title="RRU" loading="lazy"/>
            </picture>
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

<?php 
    if($this->session->userdata('user_login') == 'yes'){ 
      if($_SESSION['login_type'] == 'NonKyc')
      {
?>
<div class="festival-bg py-5">
  <div class="container text-center py-5" style="max-width: 900px;">
      <!-- Title -->
      <h3 class="fw-bold mb-4 festival-title">
          🌸 <b style="color:black;">Welcome to</b> <b style="color:#e51b1f;text-transform: uppercase;">Simhastha 2028 </b>🌸
      </h3>

      <!-- Mandir Image (Top) -->
      <div class="row justify-content-center mb-4">
          <div class="col-12 col-md-8">
              <div class="p-3 bg-white shadow-lg rounded-4 hover-scale">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/bhadarvimandir.jpeg" 
                       class="img-fluid rounded-4" 
                       style="height:220px;object-fit:cover;">
              </div>
          </div>
      </div>

      <!-- Logo Below Mandir -->
      <div class="row justify-content-center mb-4">
          <div class="col-12 col-md-6">
              <div class="p-3 bg-white shadow-lg rounded-4 hover-scale">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/Ujjain-Kumbh-Final-01.png" 
                       class="img-fluid" 
                       style="height:160px;width:160px;">
              </div>
          </div>
      </div>

      <!-- Upload Buttons -->
      <div class="row justify-content-center mt-5 g-3">
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="location.href='<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type=khoya'" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload Khoya</button>
          </div>
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="location.href='<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type=paya'" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload Paya</button>
          </div>
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="location.href='<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type=general'" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload General</button>
          </div>
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="location.href='<?= base_url(); ?>non-kyc-funnel-facematch'" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-search"></i> &nbsp;Search By Face Photo</button>
          </div>
      </div>
  </div>
</div>

<!-- CSS -->
<style>
  /* Background with festive gradient + decorative pattern */
  .festival-bg {
      background: rgb(243, 245, 254);
      background-attachment: fixed;
      position: relative;
      overflow: hidden;
  }

  /* Title Styling */
  .festival-title {
      font-size: larger;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.1);
  }

  /* Buttons */
  .btn-gradient {
      background: linear-gradient(45deg, #ff512f, #dd2476);
      color: #fff;
      font-weight: 600;
      border: none;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 0 15px rgba(255,80,100,0.4);
  }
  .btn-gradient:hover {
      background: linear-gradient(45deg, #dd2476, #ff512f);
      transform: scale(1.08);
      box-shadow: 0 0 25px rgba(221,36,118,0.6);
  }

  /* Hover Effects */
  .hover-scale {
      transition: transform 0.3s ease;
      position: relative;
      z-index: 1;
  }
  .hover-scale:hover {
      transform: scale(1.05);
  }
  .hover-rise {
      transition: all 0.3s ease;
  }
  .hover-rise:hover {
      transform: translateY(-5px);
  }
</style>
<?php } }else{ ?>
<div class="festival-bg py-5">
  <div class="container text-center py-5" style="max-width: 900px;">
      <!-- Title -->
      <h3 class="fw-bold mb-4 festival-title">
          🌸 <b style="color:black;">Welcome to</b> <b style="color:#e51b1f;text-transform: uppercase;">Simhastha 2028 </b>🌸
      </h3>

      <!-- Mandir Image (Top) -->
      <div class="row justify-content-center mb-4">
          <div class="col-12 col-md-8">
              <div class="p-3 bg-white shadow-lg rounded-4 hover-scale">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/bhadarvimandir.jpeg" 
                       class="img-fluid rounded-4" 
                       style="height:220px;object-fit:cover;">
              </div>
          </div>
      </div>

      <!-- Logo Below Mandir -->
      <div class="row justify-content-center mb-4">
          <div class="col-12 col-md-6">
              <div class="p-3 bg-white shadow-lg rounded-4 hover-scale">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/Ujjain-Kumbh-Final-01.png" 
                       class="img-fluid" 
                       style="height:160px;width:160px;">
              </div>
          </div>
      </div>

      <!-- Upload Buttons -->
      <div class="row justify-content-center mt-5 g-3">
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="jumpAccordingly(`withoutLogin`,'khoya')" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload Khoya</button>
          </div>
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="jumpAccordingly(`withoutLogin`,'paya')" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload Paya</button>
          </div>
          <div class="col-12 col-md-auto">
              <button style="border:1px solid #16033d;" onclick="jumpAccordingly(`withoutLogin`,'general')" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-cloud-upload"></i> &nbsp;Upload General</button>
          </div>
          <div class="col-12 col-md-auto">
              <a style="border:1px solid #16033d;" href="<?php echo base_url(); ?>check-person-face-funnel" class="btn btn-lg w-100 btn-light bg-light text-dark rounded-pill px-4 py-2 shadow-lg hover-rise"><i class="fa fa-search"></i> &nbsp;Search By Face Photo</a>
          </div>
      </div>
  </div>
</div>

<!-- CSS -->
<style>
  /* Background with festive gradient + decorative pattern */
  .festival-bg {
      background: rgb(243, 245, 254);
      background-attachment: fixed;
      position: relative;
      overflow: hidden;
  }

  /* Title Styling */
  .festival-title {
      font-size: larger;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.1);
  }

  /* Buttons */
  .btn-gradient {
      background: linear-gradient(45deg, #ff512f, #dd2476);
      color: #fff;
      font-weight: 600;
      border: none;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 0 15px rgba(255,80,100,0.4);
  }
  .btn-gradient:hover {
      background: linear-gradient(45deg, #dd2476, #ff512f);
      transform: scale(1.08);
      box-shadow: 0 0 25px rgba(221,36,118,0.6);
  }

  /* Hover Effects */
  .hover-scale {
      transition: transform 0.3s ease;
      position: relative;
      z-index: 1;
  }
  .hover-scale:hover {
      transform: scale(1.05);
  }
  .hover-rise {
      transition: all 0.3s ease;
  }
  .hover-rise:hover {
      transform: translateY(-5px);
  }
</style>
<?php } ?>


<div class="container text-center mt-5 d-lg-none p-3" style="background-color:#f2ecfd96;">
    <h3 class="text-center mb-4" style="color:black;"><b class="text-gradient gradient-theme">Search</b> OR <b class="text-gradient gradient-theme">Upload</b> Details</h3>
    <div class="row justify-content-md-center justify-content-between text-md-center text-end">
        <div class="col-lg-2 col-6 col-md-3">
            <a href="<?php echo base_url() ?>check-person-face-funnel">
              <div class="box1 p-0 bg-white">
                  <div class="arrow"><i class="fa fa-search"></i></div>
                  <div class="text text-black"><b>Search By Face Photo</b></div>  
                  <div class="image" id="lottie-animation-yellow-mobile"></div>
              </div>
            </a>
        </div>
        <!-- Box 2 -->
        <div class="col-lg-2 col-6 mt-md-0 col-md-3">
            <a href="<?php echo base_url() ?>check-person-details">
              <div class="box1 p-0 bg-white">
                <div class="arrow"><i class="fa fa-search"></i></div>
                <div class="text1"><b>Search By Identity</b></div>
                <div class="image" id="lottie-animation-blue-mobile"></div>
              </div>
            </a>
        </div>

        <div class="col-lg-2 col-6 mt-md-0 col-md-3 mt-5">
            <a href="javascript:void(0)" onclick="showLoginAccordingly('missing')">
              <div class="box1 p-0 bg-white">
                  <div class="arrow"><i class="fa fa-cloud-upload"></i></div>
                  <div class="text text-black"><b>Upload Missing Person</b></div>  
                  <div class="image1" id="lottie-animation-light-blue-mobile"></div>
              </div>
            </a>
        </div>

        <!-- Box 2 -->
        <div class="col-lg-2 col-6 mt-md-0 col-md-3 mt-5">
            <a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')">
              <div class="box1 p-0 bg-white">
                <div class="arrow"><i class="fa fa-cloud-upload"></i></div>
                <div class="text"><b>Upload Unknown Person</b></div>
                <div class="image" id="lottie-animation-light-pink-mobile"></div>
              </div>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid text-center mt-5 d-none d-lg-block lapViewSearch">
    <h3 class="text-center mb-4 px-5 pb-3" style="color:white;">Search OR Upload Details</h3>
    <div class="row text-center justify-content-center">
        <div class="col-lg-2 col-6 col-md-3">
            <a href="<?php echo base_url() ?>check-person-face-funnel">
              <div class="box1 p-0 bg-white">
                  <div class="arrow"><i class="fa fa-search"></i></div>
                  <div class="text text-black"><b>Search By Face Photo</b></div>  
                  <div class="image" id="lottie-animation-yellow"></div>
              </div>
            </a>
        </div>
        <!-- Box 2 -->
        <div class="col-lg-2 col-6 mt-md-0 col-md-3">
            <a href="<?php echo base_url() ?>check-person-details">
              <div class="box1 p-0 bg-white">
                <div class="arrow"><i class="fa fa-search"></i></div>
                <div class="text1"><b>Search By Identity</b></div>
                <div class="image" id="lottie-animation-blue"></div>
              </div>
            </a>
        </div>

        <div class="col-lg-2 col-6 mt-md-0 col-md-3 mt-5">
            <a href="javascript:void(0)" onclick="showLoginAccordingly('missing')">
              <div class="box1 p-0 bg-white">
                  <div class="arrow"><i class="fa fa-cloud-upload"></i></div>
                  <div class="text text-black"><b>Upload Missing Person</b></div>  
                  <div class="image1" id="lottie-animation-light-blue"></div>
              </div>
            </a>
        </div>

        <!-- Box 2 -->
        <div class="col-lg-2 col-6 mt-md-0 col-md-3 mt-5">
            <a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')">
              <div class="box1 p-0 bg-white">
                <div class="arrow"><i class="fa fa-cloud-upload"></i></div>
                <div class="text"><b>Upload Unknown Person</b></div>
                <div class="image" id="lottie-animation-light-pink"></div>
              </div>
            </a>
        </div>
    </div>
</div>

<section class="section1 d-lg-block d-none">
  <div class="text-row">
    <h2>Make Your Family Safe !</h2>
    <p>
      With <span style="color:#e53935; font-weight:600;">Khoji.in</span>, add your family member's profile in advance to keep your family safe. Add family members and get instant alerts and calls if any accident or emergency happens to them anywhere, so you can act quickly during the golden hour to provide the help they need.
    </p>
    <?php 
      if($_SESSION['user_login'] == 'yes') {
          $url = base_url() . $_SESSION['login_type'] . "/add_family_member";
      } else {
          $url = base_url() . "login?clickedOn=family";
      }
      ?>
      <button 
          type="button" 
          onclick="window.location.href='<?= $url ?>'" 
          class="mt-4 btn d-block d-md-inline p-1 px-4 cta-button">
          Add Family Member 
          <img class="ms-1 w-auto mb-1" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:35px;height:35px;">
      </button>
  </div>
  <div class="image-row">
    <div class="img-col">
      <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/hh-new.webp" alt="Image 1" />
    </div>
    <div class="img-col">
      <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/Jp.webp" alt="Image 2" />
    </div>
    <div class="img-col">
      <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/GG-new.webp" alt="Image 3" />
    </div>
  </div>
</section>

<section class="wrapper bg-light d-lg-none d-block">
    <div class="container py-4 py-md-8 px-0 ">
        <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
            <h3 class="text-center mt-2 mb-4 "><span class="text-gradient gradient-theme">Families Prefer this Service Most</span></h3>
            <div class="col-md-8 col-lg-6 col-12 col-xl-5 position-relative px-0 text-end">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Jp.jpg" class="img-fluid" loading="lazy" style="height:350px;width: 100%;">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 my-3">Make Your Family Safe !</h2>
                <p class="lead fs-lg" style="font-family:inherit;">With <a href="">Khoji.in</a>, Add your family members profile in advance to  keep your family safe. Add family members and get instant alerts and calls  if any accident or emergency happens to them anywhere , so you can act quickly during the golden hour to provide the help they need.
                </p>
                <?php 
                  if($_SESSION['user_login'] == 'yes') {
                      $url = base_url() . $_SESSION['login_type'] . "/add_family_member";
                  } else {
                      $url = base_url() . "login?clickedOn=family";
                  }
                  ?>
                  <button 
                      type="button" 
                      onclick="window.location.href='<?= $url ?>'" 
                      class="mt-4 btn d-block d-md-inline p-1 px-4 btn_new_css rounded-pill">
                      Add Family Member 
                      <img class="ms-1 w-auto mb-1" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:35px;height:35px;">
                  </button>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 parent-why-us">
    <h3 class="mb-4 text-center">Why Add Family Member ?</h3>
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/masking.png" alt="Best Prices" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>Instant Alerts to Well Wishers Via Search by Face Photo of family Member</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/instantIdentity.png" alt="Simple & Convenient" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>Instant Alerts to Well Wishers Via Search by identity of family Member</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/3rdWhyUs.png" alt="Factory Grade Data Wipe" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>No Personal Contact Number of Well Wishers is disclosed When calling is done .,Number Masking</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/privacywhyus.png" alt="Instant Payment" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>Privacy of your data is the first priority of ours , Your Data is Secured .</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/5thWhyUs.png" alt="Free Doorstep Pickup" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>Instant Calling and  Alert Notifications as soon as Search is found .</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/lockWhyUs.png" alt="Valid Purchase Invoice" loading="lazy">
                </div>
                <div class="feature-text">
                    <p>Lock or Unlock your added family Member Profile anytime .</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="users" class="page-section container pb-2">
    <div class="row text-center py-2">
        <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
            <h2 class="fs-25 mb-0 text-center text-white">Officials Also Find khoji.in Effective</h2>
        </div>
    </div>
    <div class="marquee-container d2 d-none1" style="background-color:#1b0a42;">
        <marquee behavior="alternate" direction="right" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();">
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/1.webp"  alt="Image 1" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Start Up India Official </h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/5.webp"  alt="Image 2" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P) - Crime</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/6.webp"  alt="Image 3" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P) - Technical</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/7.webp"  alt="Image 4" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Director General of Police ( U.P)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/8.webp"  alt="Image 5" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P)</h6>
            </div>          
            <div class="marquee-item">
                <img src="assets_landing_page/government/9.jpg"  alt="Image 6" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Additional Secretary ( MoWCD)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/10.webp"  alt="Image 7" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Director General Railway ( RPF)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/12.webp"  alt="Image 8" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Cabinet Minister ( MoWCD)</h6>
            </div>
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/13.webp"  alt="Image 9" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">D.Director of UIDAI (Aadhar)</h6>
            </div>
        </marquee>
    </div>
</section>

<section class="bg-light">
    <div class="row text-center py-6 d-none">
        <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
            <h2 class="fs-25 mb-3 text-center text-dark">Officials Also Find <span class="text-gradient gradient-theme">khoji.in</span> Effective</h2>
        </div>
    </div>
    <div class="marquee-container d2" style="display:none!important;">
        <marquee behavior="alternate" direction="right" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();">
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/1.webp"  alt="Image 1" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Start Up India Official </h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/5.webp"  alt="Image 2" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P) - Crime</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/6.webp"  alt="Image 3" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P) - Technical</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/7.webp"  alt="Image 4" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Director General of Police ( U.P)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/8.webp"  alt="Image 5" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">ADG ( U.P)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/9.webp"  alt="Image 6" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Additional Secretary ( MoWCD)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/10.webp"  alt="Image 7" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Director General Railway ( RPF)</h6>
            </div>          
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/12.webp"  alt="Image 8" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">Cabinet Minister ( MoWCD)</h6>
            </div>
            <div class="marquee-item">
                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/13.webp"  alt="Image 9" loading="lazy" onclick="showPopup(this)" />
                <br>
                <h6 class="text-center mb-0">D.Director of UIDAI (Aadhar)</h6>
            </div>
        </marquee>
    </div>
    <div class="popup" id="popup">
        <div class="popup-content" id="popup-content"></div>
        <button class="close-btn" onclick="closePopup()">&times;</button>
    </div>

    <section class="wrapper coverageDiv mt-4">
        <div class="container py-0 py-md-0">
            <div class="row text-center py-3">
                <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                    <h2 class="fs-25 mb-3 text-center text-dark"><span class="text-gradient gradient-theme">Media</span> Coverage</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <marquee class="w-100 py-3" behavior="alternate"  scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();" id="marqueeCoverage">
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/GNTi.jpg" alt="ET Logo" loading="lazy" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;">
                                    <br>
                                    <button onclick="window.open('https://share.google/2VayA7aREJT9cgY6I','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2 read-mr" >Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/yourstory.webp" alt="ET Logo" loading="lazy" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;">
                                    <br>
                                    <button onclick="window.open('https://yourstory.com/2025/01/artificial-intelligence-ai-missing-children-search-police-crime-solve','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2 read-mr" >Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/startuppedia.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <button onclick="window.open('https://startuppedia.in/startup-stories/24-yo-btech-launches-innovative-ai-based-tech-startup-to-reunite-missing-individuals-with-family-8855843','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/news18com8769.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <button onclick="window.open('https://hindi.news18.com/amp/news/uttar-pradesh/jhansi-khoji-website-to-help-find-lost-kids-and-others-patent-by-youth-local18-8813090.html','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/inshorts.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <button onclick="window.open('https://inshorts.com/en/news/btech-grad-launches-ai-startup-to-reunite-missing-individuals-1743240334869','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/punenews.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <button onclick="window.open('https://pune.news/apps-and-software/ai-powered-solutions-are-transforming-the-fight-against-child-disappearances-293277/','_blank')" class="btn btn-danger p-1 mt-2 theme_bk_color" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/eenadu.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <button onclick="window.open('https://www.eenadu.net/telugu-article/sunday-magazine/how-ai-is-bringing-hope-to-families-looking-for-missing-children/28/325000148','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2 bk-mar">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/dainiklogo.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/dainikimage.jpg" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1 mt-2 bk-mar">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marquee-item">
                        <div class="card h-100">
                            <div class="card-body p-2">
                                <div class="col-12 text-center">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/amarujalalogo.webp" alt="ET Logo" class="card-icon me-0 w-100" style="height:100px;object-fit: contain;width: 150px!important;" loading="lazy">
                                    <br>
                                    <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/amarujalalogo.webp" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1 mt-2 bk-mar">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </marquee>
            </div>  
        </div>
    </section>
<!--mobile view banner-->


<!-- call to action start  -->
<section class="wrapper bg-light">
    <div class="container py-4 py-md-6 px-0">
        <div class="row">
            <div class="col-xl-12 mx-auto px-1">
                <div class="card image-wrapper bg-full  bg-overlay bg-overlay-400 lg-color">
                    <div class="card-header pb-2 border-0">
                        <h3 class="text-white text-center mb-0"> Start Your Search Now</h3>
                    </div>
                    <div class="card-body p-2 p-md-2 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2   text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-person-face-funnel" class="btn btn-white mb-2 rounded-pill  mb-0 text-nowrap fs-16 bt11" >🔍 Search By Face Photo 📷 </a>    
                            </div>
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2  text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-person-details" class="btn btn-white mb-2 rounded-pill mb-0 text-nowrap fs-16 bt11" >🔍 Search By Identity 🆔 </a>    
                            </div>
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2  text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-vehicle-details" class="btn btn-white mb-2 rounded-pill mb-0 text-nowrap fs-16 bt11" >🔍 Search Vehicle Details 🚗 </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row text-center py-6">
    <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <h2 class="text-center mt-2 mb-2 "><span class="text-gradient gradient-theme">Why Choose KHOJI?</span></h2>
        <p class="mb-0">Here are a few reasons why our customers choose <b style="color: black;">KHOJI.IN</b></p>
    </div>
</div>
<section class="wrapper bg-light videoDiv">
  <div class="container py-2 py-md-2">
    <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
      <div class="col-lg-5 col-10 position-relative">
        <div id="lottie-animation" class="lo-hw"></div>
    </div>
      <!--/column -->
      <div class="col-lg-6">
         <h2 class="post-title h3 mt-0 mb-1">Quick Identification with <b class="text-gradient gradient-theme">just face photo</b></h2>
            <p>Khoji.in uses only a face photo to quickly identify missing persons and contact their families.
            Our powerful face recognition algorithm enables families, police, NGOs, and social workers to locate missing individuals without needing any verbal details.</p>
        
        <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
      </div>
    </div>
</div>
</section>
<!--another section-->
<section class="wrapper videoDiv v-bak-col">
  <div class="container py-2 py-md-2">
    
    <div class="row gx-lg-8 gx-xl-12 justify-content-center gy-10 align-items-center" >
      <div class="col-lg-5 col-10 order-lg-2 position-relative">
        <div id="lottie-animation2" class="lo-hw"></div>
         
      </div>
      
      <div class="col-lg-6">
        <h2 class="post-title h3 mt-0 mb-1">Search by <b class="text-gradient gradient-theme">Identity</b></h2>
        <p> Easily verify if a person is missing by searching with Govt issued IDs . This feature helps in quickly identifying individuals and contacting their families, especially in emergencies.</p>
        <a href="#" class="btn btn-soft-aqua rounded-pill  mb-0 d-none">More Details</a>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light videoDiv">
  <div class="container py-2 py-md-2">
    <div class="row gx-lg-8 justify-content-center gx-xl-12 align-items-center">
      <div class="col-lg-5 position-relative col-10">
        <div id="lottie-animation3" class="lo-hw" ></div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
         <h2 class="post-title h3 mt-0 mb-1">Real-Time <b class="text-gradient gradient-theme">Alerts</b></h2>
            <p>Receive immediate notifications when a missing person  is found. Our system sends alerts through various channels, and a secure calling feature connects families directly with searchers, including police and NGOs.</p>
        <!--/.row -->
        <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    </div>
</section>
<section class="wrapper videoDiv v-bak-col">
  <div class="container py-2 py-md-2">
    
    <div class="row gx-lg-8 gx-xl-12 gy-10 justify-content-center align-items-center" >
      <div class="col-lg-5 order-lg-2 col-10 position-relative">
         <div id="lottie-animation4" class="lo-hw"></div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h2 class="post-title h3">Automatic <b class="text-gradient gradient-theme">Search During Upload</b></h2>
         <p>When you upload details of a missing person, our system automatically checks and notify you , if they are already in the care of government organizations, NGOs, or shelter homes, providing instant feedback.</p>
        <!--/.row -->
        <a href="#" class="btn btn-soft-aqua rounded-pill  mb-0 d-none">More Details</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<section class="wrapper bg-light videoDiv">
  <div class="container py-2 py-md-2">
    <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
      <div class="col-lg-5 position-relative col-10">
        <div id="lottie-animation5" class="lo-hw"></div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
           <h2 class="post-title h3 ">Add <b class="text-gradient gradient-theme">Family Members</b></h2>
          <p>Add Family Members to receive alerts if your loved one is found in emergencies or accidents, ensuring a quick response and peace of mind.</p>
        <!--/.row -->
        <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    </div>
</section>

<script>
        
  // Lottie animation initialize karna
  lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    path: '<?= base_url(); ?>assets/jsons/frt2.json', // JSON file ka path
  });

  lottie.loadAnimation({
    container: document.getElementById('lottie-animation2'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    path: '<?= base_url(); ?>assets/jsons/identity.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation3'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/Notification orange.json', // JSON file ka path
    path: '<?= base_url(); ?>assets_landing_page/Notifications-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation4'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/Animation - 1732601941023.json', // JSON file ka path
    path: '<?= base_url(); ?>assets_landing_page/data.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation5'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: '<?= base_url(); ?>assets_landing_page/family.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-yellow'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/Animation - 1732601941023.json', // JSON file ka path
    path: 'assets/other_landing/frt_new.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-blue'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Review+ID-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-light-blue'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Profile-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-light-pink'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Profile+Creation+Loader-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-yellow-mobile'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/Animation - 1732601941023.json', // JSON file ka path
    path: '<?= base_url(); ?>assets/other_landing/frt_new.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-blue-mobile'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Review+ID-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-light-blue-mobile'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Profile-1.json', // JSON file ka path
  });

   lottie.loadAnimation({
    container: document.getElementById('lottie-animation-light-pink-mobile'), // Animation render hone ka container
    renderer: 'svg', // SVG format me render karne ke liye
    // path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    path: 'https://khoji-new.s3.ap-south-1.amazonaws.com/Profile+Creation+Loader-1.json', // JSON file ka path
  });
</script>
<div class="row py-2">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
         <h2 class="text-center mt-2 mb-2 ">Explore Our <span class="text-gradient gradient-theme"> Videos</span></h2>
      </div>
</div>
<?php 
    $labels = array(
                '1' => 'Khoji.in लापता व्यक्तियों को खोजने में कैसे मदद करता है',
                '2' => 'Khoji.in की मदद से किस तरीके से बिछड़े लोग अपने परिवार से मिल चुके हैं',
                '3' => 'Khoji.in पर Search by Face Photo का इस्तेमाल कैसे करें ',
                '4' => 'Khoji.in कैसे काम करता है ',
                '5' => 'लापता व्यक्ति की जानकारी अपलोड करना देखें'
            );
?>
<div class="container">
  <div class="swiper-container-explore">
    <div class="swiper-wrapper">

      <!-- Static First Slide -->
      <div class="swiper-slide">
        <div class="video-wrapper">
          <a href="#video5" class="glightbox w-100">
            <img src="<?= base_url(); ?>assets_landing_page/img/khojithumbnail-1.png" class="img-fluid" style="width: 100%; height: 200px;" alt="Video Thumbnail">
          </a>
          <label><b class="text-gradient gradient-theme"><?= $labels[5]; ?> <i class="fa fa-arrow-circle-right we-kit"></i></b></label>
        </div>
      </div>

      <!-- Dynamic Slides -->
      <?php for ($i = 1; $i <= 4; $i++) { ?>
        <div class="swiper-slide">
          <div class="video-wrapper">
            <a href="#video<?= $i ?>" class="glightbox w-100">
              <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/khojiuploads/explore<?= $i; ?>.jpg" class="img-fluid" alt="Video Thumbnail <?= $i; ?>" style="width: 300px; height: 200px;">
            </a>
            <label><b class="text-gradient gradient-theme"><?= $labels[$i]; ?> <i class="fa fa-arrow-circle-right we-kit"></i></b></label>
          </div>
        </div>
      <?php } ?>

    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<!-- Hidden Video HTML (lightbox targets these by ID) -->
<div style="display: none;">
  <!-- Static First Video -->
  <div id="video5">
    <video controls playsinline style="width:100%; height:100%;">
      <source src="<?= base_url(); ?>assets_landing_page/missingvideo.mp4" type="video/mp4">
    </video>
  </div>

  <!-- Dynamic Video IDs -->
  <?php for ($i = 1; $i <= 4; $i++) { ?>
    <div id="video<?= $i ?>">
      <video controls playsinline style="width:100%; height:100%;">
        <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/khojiuploads/explore<?= $i; ?>.mp4" type="video/mp4">
      </video>
    </div>
  <?php } ?>
</div>

<!-- /section -->
<section class="wrapper bg-light v-bak-col">
  <div class="container py-2 text-center">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-20 text-uppercase text-dark mb-0"><b >Our </b><b class="text-gradient gradient-theme"> Services</b></h2>
       
      </div>
    </div>
  </div>
</section>

<style>
    @media screen and (min-width: 925px)
    {
        .px-lg-any{
            padding: 0px 96px!important;
        }
    }
</style>
<section class="wrapper d-md-block d-none">
    <div class="container px-md-5 px-lg-any">
        <div class="row position-relative" style="background-color:rgb(243, 245, 254);margin-top: 5rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row align-items-center justify-content-md-between" style="padding:24px 48px;">
                    <div class="col-md-7 col-12">
                        <h2 class="text-start mb-5" style="color: black;font-size: 2rem;">Add your loved ones in advance for safety and alerts</h2>
                        <p class="text-start mb-0" style="color: black;">Create a profile in advance to get instant alerts if any emergency, accident, or tragedy happens with your family member.</p>
                    </div>
                    <div class="col-md-5 col-12 text-md-end">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-1.webp" style="height: 300px;">
                    </div>
                </div>
                <div class="row" style="position:absolute;z-index: 2;bottom: 30px;height: 500px;right: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/2.webp" style="height: 700px;width: 100%;">
                    </div>
                </div>  
            </div>
        </div>
        <div class="row position-relative" style="background-color:rgb(252, 245, 238);margin-top: 10rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row" style="position:absolute;z-index: 2;bottom: 30px;height: 500px;left: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/4.webp" style="height: 700px;width: 100%;">
                    </div>
                </div>  
                <div class="row align-items-center flex-md-row-reverse justify-content-md-between" style="padding:24px 48px;">
                    <div class="col-md-7 col-12">
                        <h2 class="text-start mb-5" style="color: black;font-size: 2rem;">Upload missing person details easily and instantly</h2>
                        <p class="text-start mb-0" style="color: black;">Add details to get instant alert notifications with an alarm when someone searches and matches the info you've uploaded.</p>
                    </div>
                    <div class="col-md-5 col-12 text-md-start">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-2.webp" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row position-relative" style="background-color:rgb(243, 245, 254);margin-top: 10rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row align-items-center justify-content-md-between" style="padding:24px 48px;">
                    <div class="col-md-7 col-12">
                        <h2 class="text-start mb-5" style="color: black;font-size: 2rem;">Use our advanced Search by Face Photo feature</h2>
                        <p class="text-start mb-0" style="color: black;">Search and get visually similar results from missing or unknown persons uploaded by families and the public for identification.</p>
                    </div>
                    <div class="col-md-5 col-12 text-md-end">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-1.webp" style="height: 300px;">
                    </div>
                </div>
                <div class="row" style="position:absolute;z-index: 2;bottom: 30px;height: 500px;right: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/3.webp" style="height: 700px;width: 100%;">
                    </div>
                </div>  
            </div>
        </div>
        <div class="row position-relative" style="background-color:rgb(252, 245, 238);margin-top: 10rem!important;margin-bottom: 7rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row" style="position:absolute;z-index: 2;bottom: 30px;height: 500px;left: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newImages/mobilescreens/1.webp" style="height: 700px;width: 100%;">
                    </div>
                </div>  
                <div class="row align-items-center flex-md-row-reverse justify-content-md-between" style="padding:24px 48px;">
                    <div class="col-md-7 col-12">
                        <h2 class="text-start mb-5" style="color: black;font-size: 2rem;">Upload unknown person details for public Identification</h2>
                        <p class="text-start mb-0" style="color: black;">When you upload rescued or unidentified persons, their families can easily search and confirm if their loved one has been found.</p>
                    </div>
                    <div class="col-md-5 col-12 text-md-start">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-2.webp" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper d-md-none d-block">
    <div class="container">
        <div class="row position-relative mx-0" style="background-color:rgb(243, 245, 254);border-radius: 25px;margin-top: 2rem!important;">
            <div class="col-12 px-0">
                <div class="row align-items-center justify-content-md-between p-5">
                    <div class="col-md-6 col-12 px-0">
                        <h2 class="text-start mb-5" style="color: black;">Add your loved ones in advance for safety and alerts</h2>
                        <p class="text-start mb-0" style="color: black;">Create a profile in advance to get instant alerts if any emergency, accident, or tragedy happens with your family member.</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-end">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-1.webp" style="height: 300px;width: 100%;">
                    </div>
                </div>
                <div class="row mx-0" style="position:absolute;z-index: 2;bottom: 30px;height: 375px;right: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/mobilescreens/2.png" style="height: 100%;width: 100%;">
                    </div>
                </div>  
            </div>
        </div>
        <div class="row position-relative mx-0" style="background-color:rgb(252, 245, 238);margin-top: 15rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row mx-0" style="position:absolute;z-index: 2;bottom: 30px;height: 375px;left: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/mobilescreens/4.png" style="height: 100%;width: 100%;">
                    </div>
                </div>  
                <div class="row align-items-center flex-md-row-reverse justify-content-md-between p-5">
                    <div class="col-md-6 col-12">
                        <h2 class="text-start mb-5" style="color: black;">Upload missing person details easily and instantly</h2>
                        <p class="text-start mb-0" style="color: black;">Add details to get instant alert notifications with an alarm when someone searches and matches the info you've uploaded.</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-start">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-2.webp" style="height: 300px;width: 100%;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row position-relative mx-0" style="background-color:rgb(243, 245, 254);margin-top: 15rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row align-items-center justify-content-md-between p-5">
                    <div class="col-md-6 col-12">
                        <h2 class="text-start mb-5" style="color: black;">Use our advanced Search by Face Photo feature</h2>
                        <p class="text-start mb-0" style="color: black;">Search and get visually similar results from missing or unknown persons uploaded by families and the public for identification.</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-end">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-1.webp" style="height: 300px;width: 100%;">
                    </div>
                </div>
                <div class="row mx-0" style="position:absolute;z-index: 2;bottom: 30px;height: 375px;right: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/mobilescreens/3.png" style="height: 100%;width: 100%;">
                    </div>
                </div>  
            </div>
        </div>
        <div class="row position-relative mx-0" style="background-color:rgb(252, 245, 238);margin-top: 15rem!important;margin-bottom: 15rem!important;border-radius: 25px;">
            <div class="col-12 px-0">
                <div class="row mx-0" style="position:absolute;z-index: 2;bottom: 30px;height: 375px;left: 0;">
                    <div class="col-12 text-end">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/mobilescreens/1.png" style="height: 100%;width: 100%;">
                    </div>
                </div>  
                <div class="row align-items-center flex-md-row-reverse justify-content-md-between p-5">
                    <div class="col-md-6 col-12">
                        <h2 class="text-start mb-5" style="color: black;">Upload unknown person details for public Identification</h2>
                        <p class="text-start mb-0" style="color: black;">When you upload rescued or unidentified persons, their families can easily search and confirm if their loved one has been found.</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-start">
                        <img src="<?= base_url(); ?>assets_landing_page/img/abstract-2.webp" style="height: 300px;width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $getHomeCategory = $this->db->query('select * from faqTypes where EnglishName="About Khoji.in" and Status=1')->result_array();
    if(count($getHomeCategory) > 0)
    {
        $getHomeFaqs = $this->db->query('select * from faq where typeId='.$getHomeCategory[0]['Id'].' and status=1 limit 8')->result_array();
    }else{
        $getHomeFaqs = array();
    }
    if(count($getHomeFaqs) > 0)
    {
?>
<section class="wrapper bg-dark1" style="background-color: #fbe9e7!important;">
    <div class="container py-6 py-md-6">
        <div class="row justify-content-end">
            <div class="col-md-2 col-6">
                <select class="form-control" style="appearance:auto!important;" onchange="showAccordingly(this.value)">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
            </div>
        </div>
        <div class="row" style="justify-content:space-between;">
            <div class="col-md-12 col-12">
                <h2 class="display-4 mb-3 text-center">FAQ</h2>
            </div>
        </div>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row englishDiv" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                    ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                          <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= $v['englishQuestion']; ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= $v['englishAnswer']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row hindiDiv d-none" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                    ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                          <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= $v['hindiQuestion']; ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= $v['hindiAnswer']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php 
            if(count($getHomeFaqs) > 0)
            {
        ?>
        <div class="row justify-content-center">
            <div class="col-12 col-md-auto text-center">
                <button type="button" onclick="location.href='<?= base_url(); ?>faqs/about-khoji.in'" class="btn btn-success save">View All</button>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>
<script>
  const swiper = new Swiper('.swiper-container-explore', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {  // Desktop
        slidesPerView: 3
      }
    }
  });
</script>
<script>
    function showAccordingly(val)
    {
        if(val == 'en')
        {
            $('.englishDiv').removeClass('d-none');
            $('.hindiDiv').addClass('d-none');
        }else{
            $('.englishDiv').addClass('d-none');
            $('.hindiDiv').removeClass('d-none');
        }
    }
    
     // Toggle active class on service cards
        function toggleActive(card) {
            var allCards = document.querySelectorAll('.service-card');
            allCards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        }

</script>
<script>
    function showLoginAccordingly(type)
    {
        <?php 
            if(isset($_SESSION['landingMob']))
            {
                if(isset($_SESSION['user_login']))
                {
        ?>
            if(type == 'missing')
            {
                
                location.href="<?= base_url(); ?>NonKyc/lapata_new_login";
            }else{
                if(type == 'searchUnknown')
                {
                    location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                }else{
                    if(type == 'khoya' || type == 'paya' || type == 'general')
                    {
                        location.href="<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type="+type;
                    }else{
                        location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                    }
                }
            }
        <?php
                }else{
        ?>
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0',
            htmlContainer:'m-0'
          },
          position:'top',
          allowOutsideClick:false,
          html:
            '<h4 class="text-center text-red my-3"><b>Choose Option</b></h4><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`withoutLogin`,`'+type+'`)" class="w-100 btn-style-grey disabled-on-loading btn"> <i class="fa fa-mobile fa-2x"></i> &nbsp;SIGNUP Using Mobile Number </button></div><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`signup`,`'+type+'`)" class="w-100 btn-style-five disabled-on-loading btn"> <i class="fa fa-vcard"></i> &nbsp;Signup with KYC</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`login`,`'+type+'`)" class="w-100 btn-style-green disabled-on-loading btn"> <i class="fa fa-sign-in fa-2x"></i> &nbsp;Login</button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })
        <?php
                }
            }else{
                if(isset($_SESSION['user_login']))
                {
        ?>
        if(type == 'missing')
        {
            location.href="<?= base_url(); ?>user/lapata_new_login";
        }else{
            if(type == 'searchUnknown')
            {
                location.href="<?= base_url(); ?>user/search_person_details?pn=7&type=unknown";
            }else{
                location.href="<?= base_url(); ?>user/upload_unknown_details";
            }
        }
        <?php }else{ ?>
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0',
            htmlContainer:'m-0'
          },
          allowOutsideClick:false,
          html:
            '<h4 class="text-center text-red my-3"><b>Choose Option</b></h4><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`withoutLogin`,`'+type+'`)" class="w-100 btn-style-grey disabled-on-loading btn"> <i class="fa fa-mobile fa-2x"></i> &nbsp;SIGNUP Using Mobile Number </button></div><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`signup`,`'+type+'`)" class="w-100 btn-style-five disabled-on-loading btn"> <i class="fa fa-vcard"></i> &nbsp;Signup with KYC</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`login`,`'+type+'`)" class="w-100 btn-style-green disabled-on-loading btn"> <i class="fa fa-sign-in fa-2x"></i> &nbsp;Login</button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })   
        <?php } ?>
        <?php } ?>
    }
    
    function proceedToStep1(isFinal,type)
    {
        if(isFinal == 1)
        {
            toastr.success('You are a Registered user. Please Continue');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>non-kyc-dashboard-profile";        
            },2000);
        }else{
            toastr.success('You are a new user. Please Fill Details');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>step1-guest?type="+type;     
            },2000);
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
                        setTimeout(function(){
                            $("#otp").filter(':visible').focus();
                        }, 500);
                    }else{
                        if(parse.status == 'already')
                        {
                            proceedToStep1(parse.isFinal);
                        }else{
                            $(ele).removeAttr('disabled');
                            toastr.error(parse.msg);
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
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.msg);
                        $(ele).removeAttr('disabled');
                    }else{
                        toastr.error(parse.msg);
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
                    if(parse.msg == 'Invalid Credentials')
                    {
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
                    }else{
                        toastr.error(parse.msg);
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                location.href="<?= base_url(); ?>complete-your-kyc?clickedOn="+type2;
            }else{
                Swal.fire({
                  title: '<span style="font-size:1rem;color:black;">Enter Your Mobile Number</span>',
                  customClass:{
                    popup:'py-0 col-lg-4',
                    title:'pt-0',
                    htmlContainer:'mx-2'
                  },
                  didOpen: () => {
                    const nameInput = document.getElementById('mobileNumber');
                    if (nameInput) {
                      nameInput.focus();
                    }
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
                                <input class="form-check-input text-danger border border-3 border-danger" type="checkbox" name="terms" id="terms" value="1">
                                <label for="terms" style="display:inline;">
                                  By proceeding, you agree to our 
                                  <a href="<?= base_url(); ?>terms-of-use" target="_blank" style="color:blue; text-decoration:underline;">Terms</a>, 
                                  <a href="<?= base_url(); ?>privacy-policy" target="_blank" style="color:blue; text-decoration:underline;">Privacy Policy</a>, 
                                  and all other applicable policies, and confirm awareness of how this portal works.
                                </label>
                            </div>
                            <button class="btn btn-success w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this,'`+type2+`')"> Proceed</button>
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
    
    function saveForm(ele,type)
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
                                if(parse.isFinal == 1)
                                {
                                    if(type == 'missing')
                                    {
                                        toastr.success('You are a Registered user. Please Continue');
                                        setTimeout(function()
                                        {
                                         location.href="<?= base_url(); ?>NonKyc/lapata_new_login";        
                                        },2000);
                                    }else{
                                        if(type == 'khoya' || type == 'paya' || type == 'general')
                                        {
                                            toastr.success('You are a Registered user. Please Continue');
                                            setTimeout(function()
                                            {
                                                location.href="<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type="+type;
                                            },2000);
                                        }else{
                                            if(type == 'search')
                                            {
                                                toastr.success('You are a Registered user. Please Continue');
                                                setTimeout(function()
                                                {
                                                    location.href="<?= base_url(); ?>non-kyc-funnel-facematch";
                                                },2000);
                                            }else{
                                                toastr.success('You are a Registered user. Please Continue');
                                                setTimeout(function()
                                                {
                                                    if(type == 'searchUnknown')
                                                    {
                                                        location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                                                    }else{
                                                        location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                                                    }
                                                },2000);
                                            }
                                        }
                                    }
                                }else{
                                    proceedToStep1(parse.isFinal,type);
                                }
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
                            if(parse.isFinal == 1)
                            {
                                if(type == 'missing')
                                {
                                    toastr.success('You are a Registered user. Please Continue');
                                    setTimeout(function()
                                    {
                                     location.href="<?= base_url(); ?>NonKyc/lapata_new_login";        
                                    },2000);
                                }else{
                                    if(type == 'khoya' || type == 'paya' || type == 'general')
                                    {
                                        toastr.success('You are a Registered user. Please Continue');
                                        setTimeout(function()
                                        {
                                            location.href="<?= base_url(); ?>NonKyc/add_mahakumbh_member_special?type="+type;
                                        },2000);
                                    }else{
                                        if(type == 'search')
                                        {
                                            toastr.success('You are a Registered user. Please Continue');
                                            setTimeout(function()
                                            {
                                                location.href="<?= base_url(); ?>non-kyc-funnel-facematch";
                                            },2000);
                                        }else{
                                            toastr.success('You are a Registered user. Please Continue');
                                            setTimeout(function()
                                            {
                                                if(type == 'searchUnknown')
                                                {
                                                    location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                                                }else{
                                                    location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                                                }
                                            },2000);
                                        }
                                    }
                                }
                            }else{
                                proceedToStep1(parse.isFinal,type);
                            }
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
<script>
    function showPopup(element) 
        {
            const popup = document.getElementById('popup');
            const popupContent = document.getElementById('popup-content');

            popupContent.innerHTML = ''; // Clear previous content
            var type=$(element).attr('data-type')??'no';
            //alert(type);
            if (element.tagName === 'IMG') 
            {
                if(type=='no')
                {
                    const img = document.createElement('img');
                    img.src = element.src;
                    popupContent.appendChild(img);
                }
                else
                {
                    const video = document.createElement('iframe');
                    video.classList.add("iframe_pop");
                    video.src = $(element).attr('data-src');
                    video.controls = true;
                    video.autoplay = true;
                    popupContent.appendChild(video);
                }
                
            } 
            else if (element.tagName === 'VIDEO') 
            {
                const video = document.createElement('video');
                video.src = element.src;
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }
            else if (element.tagName === 'SPAN') 
            {
                const video = document.createElement('iframe');
                video.classList.add("iframe_pop");
                video.src = $(element).attr('data-src');
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }

            popup.style.display = 'flex';
            $('.ytp-impression-link').addClass('d-none');
        }

        function closePopup() 
        {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
            const popupContent = document.getElementById('popup-content');
            popupContent.innerHTML = ''; 
        }
        $('.d2').addClass('v-none');
        $(document).ready(function(){
            setTimeout(() => {
                $('.d1').addClass('d-none');
                $('.d2').removeClass('d-none v-none');
            }, 2000);
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  const lightbox = GLightbox({
    selector: '.glightbox',
    autoplayVideos: false
  });

  function pauseAllLightboxVideos() {
    document.querySelectorAll('.glightbox-container video').forEach(video => {
      video.pause();
      video.currentTime = 0;
    });
  }

  function cleanUrlHash() {
    if (window.location.hash) {
      history.pushState("", document.title, window.location.pathname + window.location.search);
    }
  }

  lightbox.on('open', () => {
    pauseAllLightboxVideos();

    setTimeout(() => {
      const activeContainer = document.querySelector('.glightbox-container .gslide.current');
      if (!activeContainer) return;

      const video = activeContainer.querySelector('video');
      if (video) {
        video.play();
      }
    }, 300);
  });

  lightbox.on('slide_changed', ({ slide }) => {
    pauseAllLightboxVideos();
    cleanUrlHash(); // Remove #videoX from URL
  });

  lightbox.on('close', () => {
    pauseAllLightboxVideos();
    cleanUrlHash(); // Remove #videoX from URL
  });
</script>
<script>
document.querySelectorAll('#marqueeCoverage button, #marqueeCoverage a').forEach(btn => {
    btn.addEventListener('click', () => {
        setTimeout(() => {
            document.getElementById('marqueeCoverage').start();
        }, 500); // small delay to ensure start is called after open
    });
});
</script>