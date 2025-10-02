<style>
    .footer-img{
        height: 4rem;
        background: white;
        border-radius: 2px;
    }
    @media screen and (max-width: 768px) {
      .app_bar_bottom {
          position: fixed;
          width: 100%;
          bottom: 0;
          z-index: 10000;
          display: block !important;
      }
  }
</style>
<!-- /.content-wrapper -->
<?php 
    if(current_url() == base_url().'personal-profile-khoji')
    {
?>
<div class="app_bar_bottom d-md-none">
    <div class="row">
        <a href="javascript:void(0)" class="btn btn-danger theme_bk_color getStarted" style="border:1px dotted white;" >Get Started&nbsp; ></a>
    </div>
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
              <li><a href="<?php echo base_url(); ?>terms-of-use">Terms of Use</a></li>
              <li><a href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>
              <li><a href="<?php echo base_url(); ?>refund-policy">Refund Policy</a></li>
              <li><a href="<?php echo base_url(); ?>shipping-delivery">Shipping and Delivery Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    
    <div class="row text-center mx-0 d-md-none d-block">
        <p class="mb-4">Copyright © KHOJI INFOTECH PVT LTD All Right Reserved <br>Maintain By <a href="https://shammtech.in/">Shammtech IT Solution</a></p>
    </div>

    <div style="height:60px;" class="d-md-none d-block"></div>

    <div class="row text-center mx-0 d-md-block d-none">
        <p class="mb-0">Copyright © KHOJI INFOTECH PVT LTD All Right Reserved<br class="d-none d-lg-block" /></br>Maintain By <a href="https://shammtech.in/">Shammtech IT Solution</a></p>
    </div>
    
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>