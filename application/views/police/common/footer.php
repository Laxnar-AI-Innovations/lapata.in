<!-- /.content-wrapper -->
  <style>
    .footer-img{
        height: 4rem;
        background: white;
        border-radius: 2px;
    }
</style>
<!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse" style="font-size:0.8rem!important">
    <div class="container pt-5  pb-10 ">
        <!--<div class="container pt-5 pt-md-19 pb-10 pb-md-15">-->
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <img class="mb-4 footer-img" src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp 2x" alt="KHoji"  />
            
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <!--<address class="pe-xl-15 pe-xxl-17">Jhansi</address>-->
            <a href="mailto:contact@missingandlaert.com">contact@khoji.in</a><br>
            <a href="mailto:info@missingandlaert.com">info@khoji.in</a>
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
              <li><a href="javascript:void(0)">Commercial FIRM</a></li>
              <li><a href="javascript:void(0)">Social NGO</a></li>
              
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
              <li><a href="<?php echo base_url(); ?>hotel">Commercial FIRM</a></li>
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
    
    <div class="row text-center">
        <p class="mb-4">Copyright © KHOJI INFOTECH PVT LTD All Right Reserved<br class="d-none d-lg-block" /></br>Maintain By <a href="https://shammtech.in/">Shammtech IT Solution</a></p>
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
<script src="<?php echo base_url(); ?>assets_landing_page/js/plugins.js"></script>
  <script src="<?php echo base_url(); ?>assets_landing_page/js/theme.js"></script>
  <script src="<?php echo base_url(); ?>assets_landing_page/js/main.js"></script>
  
  <!--js file from user footer-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Template Main JS File -->
  
  <script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <style type="text/css">
    .select2-container {
        width: -webkit-fill-available!important;
    }
    .select2-container .select2-selection--single{
        height: 36px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        line-height:36px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow{
      height: 36px!important;
    }
  </style>
  <script type="text/javascript">

    $(document).ready(function() {
        $('.select2').select2();
    });
  </script>
  <script>
        document.onreadystatechange = function () {
          var state = document.readyState
          if (state == 'complete') {
              setTimeout(function(){
                 document.getElementById('loader').style.visibility="hidden";
                 document.getElementsByTagName('body')[0].style.visibility="visible";
                 document.getElementsByTagName('header')[0].style.display="flex";
                 $('body').css('background-color','#f6f9ff');
                 $('body').css('color','#444444');
                 
              },1000);
          }
        }
    </script>
</body>

</html>