<style>
.highlight {
    border: 2px solid darkred;
}
@media (max-width: 768px) {
  .mobile-carousel-wrapper {
    overflow-x: auto;
    padding-left: 16px;
  }

  .mobile-carousel-scroll {
    display: flex;
    gap: 16px;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
  }

  .testimonial-card-wrapper {
    flex: 0 0 80%; /* 80% of viewport = 1 full + 0.2 of next */
    scroll-snap-align: start;
  }

  .testimonial-card {
    background: #222;
    color: white;
    padding: 1rem;
    border-radius: 12px;
    min-height: 250px;
    /* Add any other styling */
  }

  .carousel-control-prev,
  .carousel-control-next {
    display: none !important; /* Hide default controls */
  }
}
</style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style type="text/css">
    .carousel-control-prev i,
    .carousel-control-next i {
      background-color: white;
      border-radius: 50%;
      padding: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }

    .vertGrad {
        border-left: 5px solid;
        border-image: linear-gradient(to bottom, red, orange, green, blue) 1;
        padding: 1px;
        margin-left: .25rem !important;
        border-radius: 8px;
        font-family:sans-serif;
    }
    .videoDiv img{
        width: 100%;
        height: 300px;
    }
    .marquee-item img,
    .marquee-item video {
        width: 75px!important;
        height: 75px!important;
        object-fit: cover;
        border-radius: 5px;
    }
    .marquee-item {
        margin: 0 10px;
        cursor: pointer;
        display: inline-block;
       
    }
    #users .marquee-container {
            width: 100%;
            overflow: hidden;
            background-color: #1b0a42!important;
            padding: 10px 0;
        }
        #users .marquee-container h6{
            color: white;
        }
        #users marquee {
            display: block;
        }
        #users .marquee-container:hover marquee {
            animation-play-state: paused;
        }
        #users .marquee-item {
            margin: 0 10px;
            cursor: pointer;
            display: inline-block;
           
        }
        #users .marquee-item img,
        #users .marquee-item video {
            width: 260px!important;
            height: 150px!important;
            object-fit: cover;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
    .testimonial-card {
      background: linear-gradient(to right, #0d47a1, #d50000); /* Blue to red */
      color: white;
      border-radius: 1.5rem;
      padding: 1rem;
      height: 100%;
    }
    .star-rating {
      color: gold;
      font-size: 1rem;
    }
    .text-black{
        color: black;
    }
    .text-dark-green{
        color: green;
    }
    .swiper-button-prev,
    .swiper-button-next {
    width: 40px;
    height: 40px;
    background-color: #000; /* Change to your preferred color */
    border-radius: 50%;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }
    .swiper-button-prev::after,
    .swiper-button-next::after {
    font-size: 16px;
    }
    /* Optional: Change arrow direction color */
    .swiper-button-prev::after {
    content: '←'; /* Or use a FontAwesome icon if preferred */
    }
    .swiper-button-next::after {
    content: '→';
    }
    .video-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center; /* optional, to center the label under the video */
    margin-bottom: 10px; /* space between slides if needed */
    max-width: 300px;
    }
    .video-wrapper label {
    margin-top: 8px;
    font-size: 16px;
    text-align: center;
    }
    .swiper-container-explore {
    width: 100%;
    padding: 20px 0;
    position: relative;
    overflow: hidden;
    }
    .swiper-container-explore .swiper-slide {
    width: auto;
    display: flex;
    justify-content: center;
    }
    .swiper-container-explore video {
    width: 100%;
    max-width: 300px;
    border-radius: 10px;
    }
    .theme_bk_color {
    background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;
    }
    .marquee-container {
    width: 100%;
    overflow: hidden;
    background-color: #f0f0f0;
    padding: 10px 0;
    }
    marquee {
    display: block;
    }
    .marquee-container:hover marquee {
    animation-play-state: paused;
    }
    .marquee-item {
    margin: 0 10px;
    cursor: pointer;
    display: inline-block;
    }
    /* Popup styles */
    .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 9999;
    }
    .popup-content {
    max-width: 90%;
    max-height: 90%;
    position: relative;
    height: 100%;
    }
    .popup-content img,
    .popup-content video {
    max-width: 100%;
    max-height: 100%;
    }
    .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #fff;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 18px;
    cursor: pointer;
    }
    .h3-main {
    text-align: center;
    font-size: 3rem;
    font-family: Arial, sans-serif;
    color: #0d0c4a;
    -webkit-text-stroke: 2px #e11313;
    }
    .d-none
    {
    display: none;
    }
    .v-none
    {
    visibility: hidden;
    }
    iframe
    {
    width:100%;
    height: 100%;
    }
    span.play-button {
    position: absolute;
    top: 40%;
    margin-left: 8%;
    color: white;
    font-size: 50px;
    cursor:pointer;
    }
    .ytp-impression-link
    {
    display: none !important;
    }
    .ytp-woyt-emc3ds-cf.ytp-impression-link {
    border-radius: 24px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background: rgba(0,0,0,.3);
    right: 12px;
    display: none;
    }
    @media screen and (max-width: 768px) {
    span.play-button {
    margin-left: 25%;
    }
    }
</style>
<style>
    .parent-why-us {
    background-color: #d4f4ee; /* Light greenish background */
    }
    .feature-box {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
    }
    .feature-icon img {
    width: 40px; /* Adjust size to match the design */
    }
    .feature-text p {
    font-size: 0.9rem;
    line-height: 1rem;
    margin-bottom: 5px;
    }
</style>
<style>
    .background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: url('<?= base_url(); ?>assets_landing_page/img/Mahakumbh-main.jpg') no-repeat center center/cover;
    z-index: 1; /* Behind content */
    }
    .gradient-theme {
    background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
    }
    .text-gradient-core {
    -webkit-background-clip: text;
    -webkit-text-fill-color: #fff0;
    display: inline-block;
    }
    .text-gradient2 {
    background: linear-gradient(to right, #f23a00, #ff0000, #FF0000);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(255, 153, 51, 0.6);
    font-family: Cinzel !important;
    }
    /* Dark content on top */
    .content {
    position: relative;
    z-index: 2; /* Above background */
    color: #ffffff; /* White text */
    margin: auto;
    text-align: center;
    border-radius: 10px; /* Optional rounded corners */      
    transform: translateY(0%);
    }
    div:where(.swal2-container).swal2-center>.swal2-popup
    {
    position: fixed;
    top:10px;
    padding-right: .25rem!important;
    padding-left: .25rem!important;
    }
    .swal2-close{
    position: relative!important;
    color: #fff!important;
    font-size: 20px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color:black!important;
    }
    .partnerLogo{
    width:auto;
    height: 130px;
    }
    .ln-h-1-2 .card-body{
    height: auto!important;
    }
    .row{
    margin: 0!important;
    }
    .row.mt-4{
    margin-top: 1rem!important;
    }
    .row.mb-4{
    margin-bottom: 1rem!important;
    }
    .ms-auto{
    margin-left: auto!important;
    }
    .plyr--full-ui.plyr--video .plyr__control--overlaid{
    background: #d72222;
    color: white !important;
    }
    .swiper-slide-active {
    font-size: 0.7rem!important;
    }
    .swiper-slide-active p{
    font-size: larger;
    }
    .plyr__poster{
    background-size: 100% 100%;
    }
    #myVideo5{
    border: 2px solid black;
    }
    .v_width{
    object-fit: fill;
    }
    .plyr__video-wrapper{
    height: auto!important;
    }
    .plyr--video{
    height: 200px;
    }
    .mob-view
    }
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
    .partnerLogo{
    width:auto;
    height: 100px;
    }
    }
    .btn_new_css{
    background-image:linear-gradient(93deg, #061aa3, #d90f0f)!important;
    border:none;
    font-size:0.9rem;
    color:white;
    }
    .btn_new_css:hover{
    background-image:linear-gradient(93deg, green, red);
    border:none;
    font-size:0.9rem;
    color:white;
</style>
<style>
    .bt11:hover {
    background-color: #ff7043;
    border: 1px solid #ff7043;
    color: white !important;
    }
</style>
<section class="wrapper bg-dark desk-view">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="false" data-autoplaytime="10000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s"><span class="text-gradient gradient-theme" style="display:unset;">"Your family members safety starts with you and ends with Khoji"</span></h5>
                                <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Upload basic details of your family members on Khoji.in — so if they ever go <b>missing, face an accident, or any emergency</b>, you’ll be instantly and securely notified. Because your <b class="text-dark-green">family’s safety matters most.</b></p>
                            </div>
                            <div class="col-md-6 ">
                                <picture>
                                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/main.webp" type="image/webp">
                                    <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/main.webp" style="border-radius:15%; border: 2px solid white;" alt="Banner 1">
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
<section class="wrapper mob-view d-none" style="background-color:#f5f5f5;">
    <div class="swiper-container dots-closer text-center mb-6" style="height: auto;" data-margin="30" data-autoplay="false" data-autoplaytime="5000"  data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h3 class="text-center pt-2 mb-0"><span class="text-gradient gradient-theme">"Your family members safety starts with you and ends with Khoji"</span></h3>
                    <p class="text-center text-black p-1 pt-1 pb-0" >Upload basic details of your family members on Khoji.in — so if they ever go <b>missing, face an accident, or any emergency</b>, you’ll be instantly and securely notified. Because your <b class="text-dark-green">family’s safety matters most.</b></span>
                    </p>
                    <div class="w-100">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/main.webp" type="image/webp">
                            <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/main.webp" alt="Banner 1">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-gray pt-0">
    <div class="container">
        <h3 class="text-center mt-4 mb-8">Affiliations And Partnerships</h3>
        <div class="row">
            <marquee behavior="scroll" scrollamount="10" direction="">
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" type="image/webp">
                    <img loading="lazy" class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" alt="" title="Digilocker"/>
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/png">
                    <img loading="lazy" class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM"/>
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" type="image/png">
                    <img loading="lazy" class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" alt="RRU" />
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" type="image/webp">
                    <img loading="lazy" class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" alt="incubation" />
                </picture>
            </marquee>
        </div>
    </div>
</section>
<section class="wrapper bg-light" id="targetSection" style="background-color: #eeeeee57 !important;">
  <div class="container py-3 py-md-3 text-center">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 desk-view">
         <h2 class="text-center mt-2 mb-2 ">Get Started with <span class="text-gradient gradient-theme"> "Any Option"</span></h2>
      </div>

      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2  mob-view d-none">
         <h2 class="text-center mt-2 mb-2 ">Get Started with <span class="text-gradient gradient-theme "> "Any Option"</span></h2>
      </div>
      <!-- /column -->
    </div>
    <?php 
      if($_SESSION['user_login'] == 'yes')
      {
    ?>
    <div class="position-relative ln-h-1-2">
    
      <div class="row gx-md-5 gy-5 justify-content-center text-center">
        <?php 
            if(!isset($_SESSION['isFunnel']))
            {
        ?>
        <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
            
                    <button type="button" onclick="location.href='<?= base_url(); ?>thank-you-family-page'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Want to add Family Member<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:55px;height:50px;"></button>
            
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <?php }else{ 
            $getLastTransaction = $this->db->query('select * from funneltransactions where userId='.$_SESSION['user_id'].' and isFinalSubmitted="0" order by Id desc')->result_array();
            if(count($getLastTransaction) > 0)
            {
        ?>
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
                <button type="button" onclick="location.href='<?= base_url(); ?>upload-family-member-funnel'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Want to add Family Member<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:55px;height:50px;"></button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
                <button type="button" onclick="location.href='<?= base_url(); ?>thank-you-family-page'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Want to add Family Member<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:55px;height:50px;"></button>
            </div>
        </div>
      <?php } } ?>
       
      </div>
      <!--/.row -->
    </div>
    <?php }else{ ?>
    <div class="position-relative ln-h-1-2">
    
      <div class="row gx-md-5 gy-5 text-center">
        <?php 
            if(!isset($_SESSION['isFunnel']))
            {
        ?>
        <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
            
                    <button type="button" onclick="location.href='<?= base_url(); ?>mobile-family-login'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Continue with Mobile Number<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/img/mboile.png" style="width:55px;height:50px;"></button>
            
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
      <?php }else{ 
          $getLastTransaction = $this->db->query('select * from funneltransactions where paymentType="family" and userId='.$_SESSION['user_id'].' and isFinalSubmitted="0" order by Id desc')->result_array();
          if(count($getLastTransaction) > 0)
          {
      ?>
      <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
            
                    <button type="button" onclick="location.href='<?= base_url(); ?>payment-page?type=family ?>'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Continue with Mobile Number<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/img/mboile.png" style="width:55px;height:50px;"></button>
            
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
      <?php }else{ ?>
      <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
            
                    <button type="button" onclick="location.href='<?= base_url(); ?>thank-you-family-page'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Continue with Mobile Number<br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/img/mboile.png" style="width:55px;height:50px;"></button>
            
            <!--/.card-body -->
          </div>
          <!--/.card -->
      </div>
      <?php } } ?>
        <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1"  onclick="toggleActive(this)" >
            
              <button type="button" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " onclick="getRegisteredNew('digilocker')" style="color:black;justify-content:space-around;text-align: -webkit-center;">Continue with DigiLocker <br><img class="ms-1 d-block d-md-inline w-auto" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" style="width:100px;height:50px;"></button>
            
          </div>
          <!--/.card -->
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="card shadow-lg service-card box_1" onclick="toggleActive(this)">
           
            <button type="button" onclick="location.href='<?= base_url(); ?>create-an-account'" class="btn btn-default d-block card me-md-0 me-0 px-2 w-100 " style="color:black;justify-content:space-around;">Continue with Direct AADHAAR <br><img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/img/aadhar.webp" style="width:50px;height:50px;"></button>
           
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
       
      </div>
      <!--/.row -->
    </div>
    <?php } ?>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<section class="mt-5 d-md-block d-none">
    <div class="container py-5 px-0">
        <h5 class="text-center mb-3">Thousands Already <span class="text-gradient gradient-theme d-inline">Trusted Us</span></h5>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">"I saw people in my city—police, NGOs, and local citizens—using Khoji. Adding my children in advance gives me peace of mind and a sense of safety."</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Prachi</h5>
                    <p class="mb-0">Uttar Pradesh</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">"My father works remotely and has health issues. I find Khoji’s emergency features useful and reassuring during any urgent situation."</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Raghav</h5>
                    <p class="mb-0">West Bengal</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">On 13 April 2025, a local social worker used Khoji to find my grandfather. The support was quick and valuable for the price I paid.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Ruchika</h5>
                    <p class="mb-0">Delhi</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">My grandmother forgets her ID while going out. Making her profile in advance helped us, just like it worked for a friend’s family too.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Rajdevi</h5>
                    <p class="mb-0">Haryana</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">In Gonda, I saw a serious accident. A bystander used Khoji to contact the victim’s family before the police, saving precious time.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Imran</h5>
                    <p class="mb-0">Uttar Pradesh</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">I added profiles of my parents and grandfather as I live far away. It’s value for money and a smart step to stay prepared early.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Neha</h5>
                    <p class="mb-0">Madhya Pradesh</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">My 10-year-old son ran away. A cop found him but he couldn't speak much. Thanks to Khoji, we were reunited quickly and safely.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Rajkumari</h5>
                    <p class="mb-0">Maharashtra</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">My uncle, who has dementia, went missing once. If only we had made his profile earlier, the search could have been much easier.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Kiran</h5>
                    <p class="mb-0">Rajasthan</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">We added our house help’s info after seeing how others benefited. It’s a small step that could help in big ways during any crisis.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Rajat</h5>
                    <p class="mb-0">Bihar</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="testimonial-card">
                    <p class="mb-1">During a temple event, a lost child was found via Khoji. That moment showed me how tech can bring families together in minutes.</p>
                    <h5 class="fw-bold mt-0 text-white mb-1">Sonal</h5>
                    <p class="mb-0">Gujarat</p>
                    <div class="star-rating">★★★★★</div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <i class="fa fa-chevron-circle-left text-black fa-2x"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <i class="fa fa-chevron-circle-right text-black fa-2x"></i>
          </button>
          </div>
        </div>
      </div>
</section>
<section class="mt-5 d-md-none d-block">
  <div class="container py-5 px-0">
    <h5 class="text-center mb-5">Thousands Already <span class="text-gradient gradient-theme">Trusted Us</span></h5>
    <div class="mobile-carousel-wrapper">
      <div class="mobile-carousel-scroll">

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">"I saw people in my city—police, NGOs, and local citizens—using Khoji. Adding my children in advance gives me peace of mind and a sense of safety."</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Prachi</h5>
            <p class="mb-0">Uttar Pradesh</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">"My father works remotely and has health issues. I find Khoji’s emergency features useful and reassuring during any urgent situation."</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Raghav</h5>
            <p class="mb-0">West Bengal</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">On 13 April 2025, a local social worker used Khoji to find my grandfather. The support was quick and valuable for the price I paid.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Ruchika</h5>
            <p class="mb-0">Delhi</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">My grandmother forgets her ID while going out. Making her profile in advance helped us, just like it worked for a friend’s family too.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Rajdevi</h5>
            <p class="mb-0">Haryana</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">In Gonda, I saw a serious accident. A bystander used Khoji to contact the victim’s family before the police, saving precious time.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Imran</h5>
            <p class="mb-0">Uttar Pradesh</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">I added profiles of my parents and grandfather as I live far away. It’s value for money and a smart step to stay prepared early.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Neha</h5>
            <p class="mb-0">Madhya Pradesh</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">My 10-year-old son ran away. A cop found him but he couldn't speak much. Thanks to Khoji, we were reunited quickly and safely.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Rajkumari</h5>
            <p class="mb-0">Maharashtra</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">My uncle, who has dementia, went missing once. If only we had made his profile earlier, the search could have been much easier.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Kiran</h5>
            <p class="mb-0">Rajasthan</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">We added our house help’s info after seeing how others benefited. It’s a small step that could help in big ways during any crisis.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Rajat</h5>
            <p class="mb-0">Bihar</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

        <div class="testimonial-card-wrapper">
          <div class="testimonial-card">
            <p class="mb-1">During a temple event, a lost child was found via Khoji. That moment showed me how tech can bring families together in minutes.</p>
            <h5 class="fw-bold mt-0 text-white mb-1">Sonal</h5>
            <p class="mb-0">Gujarat</p>
            <div class="star-rating">★★★★★</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<div class="row text-center py-6">
    <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <h3 class="text-center mt-2 mb-2 text-black">What Happens When You <br><span class="text-gradient gradient-theme">Add Your Family to Khoji</span></h3>
    </div>
</div>
<div class="vertGrad">
    <section class="wrapper bg-light videoDiv">
        <div class="container py-2 py-md-2">
            <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
                <div class="col-lg-4 col-12 px-0 position-relative">
                    <picture>
                        <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Resize+1.jpg" type="image/webp">
                        <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Resize+1.jpg" alt="Khoji police face scan"/>
                    </picture>
                </div>
                <div class="col-lg-7 px-0 px-md-5">
                    <h2 class="post-title h5 mt-2 mb-1">Every <span class="text-gradient gradient-theme d-inline">8 Minutes, Someone Goes Missing </span> — Don’t Let It Be <span class="text-dark-green">Your loved Ones?</span></h2>
                    <p>People go missing every day — while walking to school, visiting a temple, or just stepping outside. But what if adding their photo and basic details now on Khoji could bring them back sooner?</p>
                    <p class="mb-0 text-black"><b>Create their profile now using the "Add Family Member"</b>  option.</p>
                    <p class="mb-0 text-black">Even if no one knows their name, this small step could help reunite them faster.</p>
                </div>
            </div>
        </div>
    </section>
    <!--another section-->
    <section class="wrapper videoDiv" style="background-color: #eeeeee57 !important;">
      <div class="container py-2 py-md-2">
        
        <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center" >
          <div class="col-lg-4 col-12 px-0 order-lg-2 position-relative">
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/L.webp" type="image/webp">
                    <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/L.webp" alt="Khoji police face scan"/>
                </picture>
          </div>
          <!--/column -->
          <div class="col-lg-7 px-0 px-md-5">
                <h2 class="post-title h5 mt-2 mb-1">What If Your Aging Parent <span class="text-gradient gradient-theme d-inline">Forgets the Way Home or Faces an Accident</span> — Who Will <span class="text-dark-green">Inform You Instantly</span>?</span></h2>
                <p>Wandering is common with Alzheimer’s, dementia, or age-related confusion.They may be found sitting quietly, not remembering names or where to go. <b class="text-black">Add the details now on Khoji,</b> anyone — police, hospitals, or even strangers — can notify you instantly.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <section class="wrapper bg-light videoDiv">
        <div class="container py-2 py-md-2">
            <div class="row gx-lg-8 justify-content-center gx-xl-12 align-items-center">
                <div class="col-lg-4 px-0 position-relative col-12">
                    <picture>
                        <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/hh.webp" type="image/webp">
                        <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/hh.webp" alt="Khoji police face scan"/>
                    </picture>
                </div>
                <div class="col-lg-7 px-0 px-md-5">
                    <h2 class="post-title h5 mt-2 mb-1">A Life Is <span class="text-gradient gradient-theme d-inline">Lost Every 4 Minutes to Accidents</span>, but can be saved if family is notified <span class="text-dark-green">within time!</span></h2>
                    <p>Whether it’s a road accident or any unwanted emergency, time is sensitive.If your loved one is unconscious, who will inform you on in Golden Hour?</p>
                    <p class="text-black mb-0"><b>Adding their details in advance</b> allows police, hospitals or bystanders to identify them and contact you during the golden hour.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper videoDiv" style="background-color: #eeeeee57 !important;">
        <div class="container py-2 py-md-2">
            <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center" >
                <div class="col-lg-4 px-0 order-lg-2 col-12 position-relative">
                    <picture>
                        <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/GG.webp" type="image/webp">
                        <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/GG.jpg" alt="Khoji police face scan"/>
                    </picture>
                </div>
                <div class="col-lg-7 px-0 px-md-5">
                    <h2 class="post-title h5 mt-2 mb-1">You Hold Your <span  class="text-gradient gradient-theme d-inline">Child’s Hand Tightly</span> — <span class="text-dark-green">Because Losing Them Is Your Biggest Fear</span></h2>
                    <p class="text-black mb-0">Whether at the market, train station, school, or playground — the fear never fades if they don’t return on time. <b>Add their profiles on</b> Khoji.in in advance means if anything happens, our system can instantly match and notify you — safely, privately, and within seconds.Let technology hold their hand when you can’t.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light videoDiv">
        <div class="container py-2 py-md-2">
            <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
                <div class="col-lg-4 px-0 position-relative col-12">
                    <picture>
                        <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/hhh-Recovered.webp" type="image/jpg">
                        <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/hhh-Recovered.webp" alt="Khoji police face scan"/>
                    </picture>
                </div>
                <div class="col-lg-7 px-0 px-md-5">
                    <h2 class="post-title h5 mt-2 mb-1">People <span class="text-gradient gradient-theme d-inline">Want to Help</span> , Khoji Makes It Safe & Easy to <span class="text-dark-green">Reach Families.</span></h2>
                    <p>A stranger may find someone lost or confused—but without knowing who they are, they feel helpless. <b class="text-black">With a pre-created profile on Khoji</b>, well-wishers can securely notify families without needing direct contact.</p>
                    <p class="mb-0">It’s safe. It’s private. It works.</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="row justify-content-center" style="margin-top:1.25rem!important;margin-bottom:1.25rem!important;">
    <div class="col-12 col-md-3 text-center">
        <button type="button" class="btn btn-danger theme_bk_color w-100 getStarted">Add Family Member <img class="ms-1 w-auto" src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="width:55px;height:40px;"></button>
    </div>
</div>
    <section id="users" class="page-section">
        <div class="row text-center py-2">
            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-25 mb-0 text-center text-dark">Officials Also Find khoji.in Effective</h2>
            </div>
        </div>
        <div class="marquee-container d2 d-none1">
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
    </section>
</div>
<section class="wrapper coverageDiv page-section" id="inTeam">
    <div class="container py-0 py-md-0">
        <div class="row text-center pt-3">
            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-25 mb-0 text-center"><b class="text-black">KHOJI in the </b><b class="text-gradient gradient-theme">News</b></h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            <marquee class="w-100 py-3 mt-0" behavior="alternate"  scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/yourstory.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://yourstory.com/2025/01/artificial-intelligence-ai-missing-children-search-police-crime-solve','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/startuppedia.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://startuppedia.in/startup-stories/24-yo-btech-launches-innovative-ai-based-tech-startup-to-reunite-missing-individuals-with-family-8855843','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/news18com8769.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://hindi.news18.com/amp/news/uttar-pradesh/jhansi-khoji-website-to-help-find-lost-kids-and-others-patent-by-youth-local18-8813090.html','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/inshorts.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://inshorts.com/en/news/btech-grad-launches-ai-startup-to-reunite-missing-individuals-1743240334869','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/punenews.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://pune.news/apps-and-software/ai-powered-solutions-are-transforming-the-fight-against-child-disappearances-293277/','_blank')" class="btn btn-danger p-1 theme_bk_color" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/eenadu.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://www.eenadu.net/telugu-article/sunday-magazine/how-ai-is-bringing-hope-to-families-looking-for-missing-children/28/325000148','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/dainiklogo.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/dainikimage.webp" style="font-size: 0.7rem;background: rgb(227 28 34);color: white;" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2 pt-0">
                            <div class="col-12 text-center">
                                <img loading="lazy" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/amarujalalogo.webp" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/amarujalalogo.webp" style="font-size: 0.7rem;background: rgb(227 28 34);color: white;" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </marquee>
        </div>  
    </div>
</section>
<section class="wrapper bg-light mb-5">
  <div class="container py-6 py-md-6 text-center">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-25 text-dark mb-3">Our Service Is  <span class="text-gradient gradient-theme">Patented </span> </h2>
       
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative ln-h-1-2">
    
      <div class="row gx-md-5 gy-5 text-center">
     <div class="col-6 col-md-3 col-xl-3">
                <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent1.jpg"  data-lightbox="roadtrip">
                  <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent1.jpg" loading="lazy" class="img-fluid wh1" alt="shiva-gupta" />
                </a>
        </div>
        <div class="col-6  col-md-3 col-xl-3">
            <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent2.jpg"  data-lightbox="roadtrip">
             <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent2.jpg" loading="lazy" class="img-fluid wh1" alt="shammtech-khoji" />
            </a>
        </div>
        
        <div class="col-6   col-md-3  col-xl-3">
          <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent3.jpg"  data-lightbox="roadtrip">
            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent3.jpg" loading="lazy" class="img-fluid wh1" alt="khoji-find-missing-person" />
          </a>
        </div>
    
    <div class="col-6   col-md-3  col-xl-3">
        <a href="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent4.jpg"  data-lightbox="roadtrip">
            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/patent/patent4.jpg" loading="lazy" class="img-fluid wh1" alt="khoji-patent" />
        </a>
        </div>
        
        <!--/column -->
        
       
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
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
                // Swal.fire({
                //     title: '<strong class="text-danger" style="font-size:20px;">Upload Missing</strong>',
                //     iconHtml: "<img src='<?= base_url(); ?>assets/icons/work-in-progress.png' style='width:100%;height:55px;'>",
                //     customClass:{
                //         title:'pt-1',
                //         icon:'mb-0',
                //         htmlContainer:'pt-2',
                //         actions : 'mt-0'
                //     },
                //     allowOutsideClick:false,
                //     html:
                //         '<h6><b style="color:black;">Sorry, This page is under construction. Please try later.</b></h6>',
                //     showCloseButton: true,
                //     showCancelButton: false,
                //     confirmButtonText:'OK',
                //     cancelButtonText:'No',
                //     focusConfirm: false,
                //     showConfirmButton:true
                // })
                location.href="<?= base_url(); ?>NonKyc/lapata_new_login";
            }else{
                if(type == 'searchUnknown')
                {
                    location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                }else{
                    location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
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
                    let parse = JSON.parse(res);
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

    function getRegisteredNew(type)
    {
        if(type == 'digilocker')
        {
            location.href="https://api.digitallocker.gov.in/public/oauth2/1/authorize?response_type=code&client_id=MHA136549B&redirect_uri=<?php echo base_url(); ?>digilockerCallback&state=Development&code_challenge=CBUw14zO94M8trTZzPE99ZAvb3N0bRsfy_6vbDcba0c&code_challenge_method=S256";   
        }else{
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
                            iconHtml: '<img loading="lazy" src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
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
                        iconHtml: '<img loading="lazy" src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
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
                location.href="<?= base_url(); ?>complete-your-kyc?clickedOn="+type2;
            }else{
                Swal.fire({
                  title: '<span style="font-size:1rem;color:black;">Enter Your Mobile Number</span>',
                  customClass:{
                    popup:'py-0 col-lg-4',
                    title:'pt-0'
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