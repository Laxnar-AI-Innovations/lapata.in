
<footer class="footer">
	

	<input type="hidden" id="stripe_key" value="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
	<input type="hidden" id="logo_front" value="assets1/img/logo.png">

	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget footer-menu">
						<h2 class="footer-title">Useful Links</h2>
						<div class="footer-line">
							<span></span>
						</div>
						<div class="about">
							<div class="contactdet">
								<ul>
																									<li><a href="<?php echo base_url(); ?>">Home</a></li>
																	<li><a href="<?php echo base_url(); ?>home/blog">My Blogs</a></li>
																	<li><a href="<?php echo base_url(); ?>home/faq">FAQ's </a></li>
																	<!--<li><a href="#">Installation</a></li>-->
																</ul>
							</div>
						</div>
					</div>
				</div>
                                                    <div class="col-lg-3 col-md-6">
							<div class="footer-widget footer-menu">
							<h2 class="footer-title">Quick Link</h2>
                                    <div class="footer-line">
                                        <span></span>
                                    </div>
                                    <div class="about">
                                        <div class="contactdet">
                                            <ul>
                                                                                                            <li class="color-grey"></li>
                                                                                                            <li><a href="#">About us</a></li>
                                                                                                                    <li><a href="<?php echo base_url() ?>contact-info">Contact Us</a></li>
                                                                                                                    <!--<li><a href="#">Help</a></li>-->
                                                                                                                    <li><a href="<?php echo base_url(); ?>vendor-login">Service Center Login</a></li>
                                                                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-3 col-md-6">
							<div class="footer-widget footer-menu">
							<h2 class="footer-title">Contact Us</h2>
                                    <div class="footer-line">
                                        <span></span>
                                    </div>
                                    <div class="about">
                                        <div class="contactdet">
                                            <ul>
                                                                                                            <li class="color-grey"><div class="footer-contact-info">
<div class="footer-address">
<span><i class="far fa-building"></i></span>
<p>Address : 21,Devi karumari Amman nagar,8th Street, Velachery, Chennai,Tamilnadu Pin 600042</p>
</div>
<p><i class="fas fa-phone"></i> <a href="tel:++91 96000 90455">+91 96000 90455</a></p>
<p class="mb-0"><i class="fas fa-envelope"></i> <a href="mailto:info@lapstro.in">info@lapstro.in</a></p>
</div></li>
                                                                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-3 col-md-6">
							<div class="footer-widget footer-menu">
							<h2 class="footer-title">Follow Us</h2>
                                    <div class="footer-line">
                                        <span></span>
                                    </div>
                                    <div class="about">
                                        <div class="contactdet">
                                            <ul>
                                                                                                            <li class="color-grey"><div class="social-icon">
<ul>
<li>
<a href="#" target=" blank"><i class="fab fa-facebook-f"></i> </a>
</li>
<li>
<a href="#" target=" blank"><i class="fab fa-twitter"></i> </a>
</li>
<li>
<a href="#" target=" blank"><i class="fab fa-youtube"></i></a>
</li>
<li>
<a href="#" target=" blank"><i class="fab fa-google"></i></a>
</li>
</ul>
</div></li>
                                                                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="container">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2021 LaptopStore</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">

									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="#">Terms and Conditions</a></li>
											<li><a href="#">Privacy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->

								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->


<style>
    body {
  margin: 0;
  font-family: sans-serif;
}


#main-div {
  position: fixed;
  right: 20px;
  bottom: 100px;
  z-index: 0;
}

#main-button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 0;
  bottom: 0;
  height: 50px;
  width: 50px;
  font-size: 20px;
  color: #0064f3;
  cursor: pointer;
  background-color: #fff;
  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
}

#main-button ~ button {
  visibility: hidden;
  font-weight: 600;
  height: 50px;
  padding: 0 20px;
  color: #fff;
  background: linear-gradient(90deg, #00a1f5, #0064f3);
  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);
  border: 0;
  position: absolute;
  z-index: -1;
  right: 0;
  bottom: 0;
  opacity: 0;
  white-space: nowrap;
  cursor: pointer;
  transition: .2s all linear;
  -webkit-transition: .2s all linear;
  -moz-transition: .2s all linear;
  -ms-transition: .2s all linear;
  -o-transition: .2s all linear;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

#main-button.open ~ button {
  visibility: visible;
  right: 70px;
  opacity: 1;
  transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -webkit-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -moz-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -ms-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -o-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
}

#main-button ~ a {
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: -1;
  height: 50px;
  width: 50px;
  font-size: 20px;
  opacity: 0;
  text-decoration: none;
  color: #fff;
  background-color: #fff;
  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  transition: .2s all linear;
  -webkit-transition: .2s all linear;
  -moz-transition: .2s all linear;
  -ms-transition: .2s all linear;
  -o-transition: .2s all linear;
}

#main-button ~ .telegram-color {
  background: linear-gradient(0deg, #017AB1, #01ABE6);
}

#main-button ~ .whatsapp-color {
  background: linear-gradient(0deg, #00B100, #09db09);
}

#main-button ~ .messenger-color {
  background: linear-gradient(0deg, #0078FF, #00C6FF);
}

#main-button.open ~ a {
  opacity: 1;
  transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -webkit-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -moz-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -ms-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
  -o-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);
}
#main-button.open ~ a:nth-of-type(1) {
  bottom: 60px;
}
#main-button.open ~ a:nth-of-type(2) {
  bottom: 120px;
}
#main-button.open ~ a:nth-of-type(3) {
  bottom: 180px;
}

.wave {
  animation-name: wave;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

@keyframes wave {
  0% {box-shadow: 0 0 0px 0px rgba(255, 255, 255, 0.5);}
  100% {box-shadow: 0 0 0px 10px rgba(255, 255, 255, 0);}
}

.open {
  animation-iteration-count: 1;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrapper">
    <div id="main-div">
      <div id="main-button" class="wave open">
        <i class="fa fa-comments fa-times"></i>
      </div>
      <button><i class="fa fa-phone"></i> Book Service</button>
      <a href="#" class="telegram-color"><i class="fa fa-telegram"></i></a>
      <a href="#" class="whatsapp-color"><i class="fa fa-whatsapp"></i></a>
      <a href="#" class="messenger-color"><i class="fa fa-phone"></i></a>
    </div>
  </div>
<script>
    var mainDiv = document.getElementById('main-button');
mainDiv.addEventListener('click', function(){
  this.children.item(0).classList.toggle('fa-times');
  this.classList.toggle('open');
});

// using jQuery
// var mainDiv =  $('#main-button');
// mainDiv.on('click', function(){
//   $(this).find('i').toggleClass('fa-times');
//   $(this).toggleClass('open');
// });
</script>
