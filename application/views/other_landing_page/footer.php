
<style>
    footer li button {
      background: none;
      border: none;
      cursor: pointer;
      color: #cacaca;
      padding: 0;
      font: inherit;
    }
    @media (max-width:767px)
    {
        .mainfooter{
            position:relative;
            bottom:49px;
        }
    }
    .footer-img{
        height: 4rem;
        background: white;
        border-radius: 2px;
    }

   /* .floatingButtonWrap {
    display: block;
    position: fixed;
    bottom: 45px;
    right: 45px;
    z-index: 999999999;
}

.floatingButtonInner {
    position: relative;
}



.floatingMenu {
    position: absolute;
    bottom: 90px;
    right: 0px;
    
    display: none;
}
*/
</style>
<!-- floating icon for language -->
  
<!-- <div class="floatingButtonWrap">
    <div class="floatingButtonInner">
       <select class="form-control" style="appearance:auto!important;" onchange="showAccordingly(this.value)" class="floatingMenu">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
            
    </div>
</div> -->
<!-- end icon -->
<?php 
    if(current_url() == base_url().'new-landing-page')
    {
?>
<div class="app_bar_bottom">
    <div class="row">
        <a href="javascript:void(0)" class="btn btn-danger theme_bk_color getStarted" style="border:1px dotted white;" >Get Started&nbsp; ></a>
    </div>
</div>
<?php } ?>
<footer class="bg-dark text-inverse mainfooter" style="font-size:0.8rem!important">
    <div class="<?= current_url() == base_url().'new-landing-page' ? 'd-none' : '' ?> container pt-5  pb-10 ">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <img class="mb-4 footer-img" src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp 2x" alt="KHoji"  />
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                    <a href="mailto:dhruvdirector@khoji.in">dhruvdirector@khoji.in</a>
                    <a href="tel:+918707624604"> +91 8707624604</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Register</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="<?php echo base_url(); ?>create-an-account">General User</a></li>
                        <li><a href="<?php echo base_url(); ?>ngo-register">Social NGO</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Login</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="<?php echo base_url(); ?>login">General User</a></li>
                        <li><a href="<?php echo base_url(); ?>social-login">Social NGO</a></li>
                        <li><a href="<?php echo base_url(); ?>police-thana-login">Police Thana</a></li>
                    </ul>
                </div>
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
            </div>
        </div>
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
