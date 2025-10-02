<style>
    footer li button {
      background: none;
      border: none;
      cursor: pointer;
      color: #cacaca;
      padding: 0;
      font: inherit;
    }
    .footer-img{
        height: 4rem;
        background: white;
        border-radius: 2px;
    }

    .gradient-theme {
        background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
    }
    .text-gradient {
        -webkit-background-clip: text;
        -webkit-text-fill-color: #fff0;
        display: inline-block;
    }

    .bottom-bar {
      position: fixed;
      background: white;
      bottom: 0px;
      left: 0;
      right: 0;
      border-top: 1px solid #ccc;
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 60px;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .bottom-bar button {
      background-color: transparent;
      border: none;
      font-size: 14px;
      cursor: pointer;
      color: #464545;
      padding: 10px;
      font-weight: bold;
    }

    .bottom-bar button:hover {
      color: #007bff;
    }

    .activeBottom{
      color: #8b0000!important;
      border: 3px solid #8b0000!important;
      border-left: none!important;
      border-right: none!important;
    }
</style>
<?php 
    if(current_url() == base_url().'check-person-face-funnel' || current_url() == base_url().'login')
    {
?>
<div class="bottom-bar d-md-none d-flex text-center">
    <?php 
        if(current_url() == base_url().'check-person-face-funnel')
        {
    ?>
    <button style="color: #8b0000;border: 3px solid #8b0000;border-left: none;border-right: none;"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /><path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" /></svg><br>Face Search</button>
    <?php }else{ ?>
    <?php 
        if($_SESSION['user_login'] == 'yes')
        {
          $url = '';
          if($_SESSION['login_type'] == 'user')
          {
              $url = 'user/newSearchPerson';
          }else{
              $url = 'non-kyc-funnel-facematch';
          }
    ?>
    <button onclick="location.href='<?= base_url().''.$url; ?>'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /><path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" /></svg>
<br>Face Search</button>
    <?php }else{ ?>
    <button onclick="location.href='<?= base_url(); ?>check-person-face-funnel'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /><path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" /></svg><br>Face Search</button>
    <?php } ?>
    <?php } ?>
    <?php 
        if($_SESSION['user_login'] == 'yes')
        {
    ?>
    <button onclick="location.href='<?= base_url().''.$_SESSION['login_type']; ?>/missing_details'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
<br>Upload</button>
    <?php }else{ ?>
    <button onclick="location.href='<?= base_url(); ?>login?clickedOn=upload'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
<br>Upload</button>
    <?php } ?>
    <?php 
        if($_SESSION['user_login'] == 'yes')
        {
    ?>
    <button onclick="location.href='<?= base_url().''.$_SESSION['login_type']; ?>/profile'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
<br>My Profile</button>
    <?php }else{ ?>
    <button class="<?= current_url() == base_url().'login' ? 'activeBottom' : ''; ?>" onclick="location.href='<?= base_url(); ?>login'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M3 12h13l-3 -3" /><path d="M13 15l3 -3"/></svg>
<br>Login</button>
    <?php } ?>
    <button onclick="location.href='tel:+918707624604'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-headset"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 14v-3a8 8 0 1 1 16 0v3" /><path d="M18 19c0 1.657 -2.686 3 -6 3" /><path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /><path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"/></svg>
<br>Help</button>
</div>
<?php } ?>
  <footer class="bg-dark text-inverse" style="font-size:0.8rem!important">
    <div class="container pt-5  pb-10 ">
        <!--<div class="container pt-5 pt-md-19 pb-10 pb-md-15">-->
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <picture>
                  <source srcset="<?php echo base_url(); ?>assets/images/khoji.webp" type="image/webp">
                  <img class="mb-4 footer-img" src="<?php echo base_url(); ?>assets/images/khoji.webp" alt="khoji logo">
            </picture>
            
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <!--<address class="pe-xl-15 pe-xxl-17">Jhansi</address>-->
            <a href="mailto:dhruvdirector@khoji.in">dhruvdirector@khoji.in</a>
           </br> <a href="tel:+918707624604"> +91 8707624604</a>
          </div>
          
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Register</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="<?php echo base_url(); ?>create-an-account">General User</a></li>
              <!-- <li><a href="<?php echo base_url(); ?>commercial-register">Commercial FIRM</a></li> -->
              <li><a href="<?php echo base_url(); ?>ngo-register">Social NGO</a></li>
              
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
    <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Login</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="<?php echo base_url(); ?>login">General User</a></li>
              <!-- <li><a href="<?php echo base_url(); ?>hotel">Commercial FIRM</a></li> -->
              <li><a href="<?php echo base_url(); ?>social-login">Social NGO</a></li>
              <li><a href="<?php echo base_url(); ?>police-thana-login">Police Thana</a></li>
              
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Policy</h4>
            <ul class="list-unstyled  mb-0">
              <li><button onclick="location.href='<?php echo base_url(); ?>terms-of-use'">Terms of Use</button></li>
              <li><button onclick="location.href='<?php echo base_url(); ?>privacy-policy'">Privacy Policy</button></li>
              <li><button onclick="location.href='<?php echo base_url(); ?>refund-policy'">Refund Policy</button></li>
              <li><button onclick="location.href='<?php echo base_url(); ?>about-us'">About Us</button></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    
    <!-- Mobile copyright -->
    <div class="row text-center mx-0 d-md-none d-block">
        <p class="mb-1" style="color:#ff7f00;">Technology By Laxnar AI Innovations</p>
        <p class="mb-0" style="line-height: 2rem;">Copyright © KHOJI INFOTECH PVT LTD All Right Reserved <br>
            Maintain By <a href="https://shammtech.in/">Shammtech IT Solution</a>
        </p>
    </div>

    <div style="height:60px;" class="d-md-none d-block"></div>

    <!-- Desktop copyright -->
    <div class="row text-center mx-0 d-md-block d-none">
        <p class="mb-1" style="color:#ff7f00;">Technology By Laxnar AI Innovations</p>
        <p class="mb-0" style="line-height: 2rem;">Copyright © KHOJI INFOTECH PVT LTD All Right Reserved
            <br class="d-none d-lg-block" />
            Maintain By <a href="https://shammtech.in/">Shammtech IT Solution</a>
        </p>
    </div>
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>