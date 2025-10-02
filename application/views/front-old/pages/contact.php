<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);
.contact-form {
    margin-top: 30px;
}

.contact-form .input-block {
    background-color: rgba(255, 255, 255, 0.8);
    border: solid 1px #FF512F;
    width: 100%;
    height: 40px;
    padding: 25px;
    position: relative;
    margin-bottom: 20px;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.contact-form .input-block.focus {
    background-color: #fff;
    border: solid 1px #fb2900;
}

.contact-form .input-block.textarea {
    height: auto;
}

.contact-form .input-block.textarea .form-control {
    height: auto;
    resize: none;
}

.contact-form .input-block label {
    padding: 0 10px;
    background: #fff;
    position: absolute;
    left: 8px;
    top: 20px;
    display: block;
    margin: 0;
    font-weight: 300;
    z-index: 1;
    color: #999;
    font-size: 18px;
    line-height: 10px;
}

.contact-form .input-block .form-control {
    background-color: transparent;
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    color: #333;
    font-size: 18px;
    height: 40px;
    padding: 0;
    position: relative;
    top: -20px;
    z-index: 2;
}

.contact-form .input-block .form-control:focus label {
    top: 0;
}

.contact-form .square-button {
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmNTEyZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RkMjQ3NiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #ff512f), color-stop(100%, #dd2476));
    background-image: -moz-linear-gradient(left, #ff512f, #dd2476);
    background-image: -webkit-linear-gradient(left, #ff512f, #dd2476);
    background-image: linear-gradient(to right, #ff512f, #dd2476);
    color: #fff;
    font-size: 26px;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 0 60px;
    height: 60px;
    border: none;
    width: 100%;
}

.contact-form .square-button:hover,
.contact-form .square-button:focus {
    background-color: white;
}

@media (min-width: 768px) {
    .contact-wrap {
        width: 60%;
        margin: auto;
    }
}
/*----page styles---*/
.contact-wrap {
    padding: 15px;
}
.large-cta-section {
    background: #1e9fc4 linear-gradient(45deg, #3e3ed0, #1e9fc4 57%, #4fddd5) repeat scroll 0 0;
    box-shadow: 0 6px 12px -4px rgba(54, 56, 66, 0.25) inset;
    text-align: center;
    z-index: 1;
    height: 400px;
    position: relative;
    overflow: hidden;
}
.medium-large-wrapper{
    padding-top: 50px;
}
.h2.large {
    display: inline-block;
    font-size: 5em;
    font-family: "Roboto",sans-serif;
}
.white {
    color: #fff;
}
.h2 > .yellow {
    color: #f5ee33;
    font-weight: 600;
}
.h3 {
    font-family: "Roboto",sans-serif;
    font-size: 1.4em;
    font-weight: 300;
    line-height: 1.8rem;
    margin-top: 10px;
    margin-bottom: 40px;
}

.footer-cta-link::after {
    background-image: url("https://neverbounce.com/images/background-images/yellow-airplane-left.png");
    background-repeat: no-repeat;
    background-size: contain;
    bottom: -10em;
    content: "";
    display: block;
    height: 10em;
    left: -8.5em;
    pointer-events: none;
    position: absolute;
    width: 7em;
}
.footer-cta-link {
    position: relative;
}
.cta-link {
    background: #fff none repeat scroll 0 0;
    border-radius: 4px;
    color: #1e9fc4;
    letter-spacing: 2px;
    line-height: 1rem;
    margin-left: 1em;
    margin-right: 1em;
    margin-top: 4em;
    padding: 0.88rem 1.5em;
    text-decoration: none;
    text-transform: uppercase;
    transition: background 0.2s ease-in-out 0s;
    vertical-align: middle;
}
a.cta-link:hover{
    background: #f5ee33;
    text-decoration: none;
}
.cta-purple-email {
    left: 0;
    position: absolute;
    top: 5em;
    z-index: 0;
    transform: translate3d(0px, 0%, 0px);
}
.cta-blue-email {
    bottom: -45px;
    position: absolute;
    right: 15%;
    width: 15em;
    z-index: 0;
    transform: translate3d(86.875px, -8.6875%, 0px);
}

.cta-left-line {
    left: 0;
    opacity: 0.7;
    pointer-events: none;
    position: absolute;
    top: -38em;
    z-index: 0;
}
.cta-teal-airplane {
    opacity: 0.8;
    pointer-events: none;
    position: absolute;
    right: 10px;
    top: 3em;
    width: 15em;
    z-index: 4;
}
.made-with-love {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 12px;
    font-family: arial;
    color: #666;
}

.made-with-love i {
    font-style: normal;
    color: #F50057;
    font-size: 14px;
    position: relative;
    top: 2px;
}

.made-with-love a {
    color: #666;
    text-decoration: none;
}

.made-with-love a:hover {
    text-decoration: underline;
}
</style>

<section class="large-cta-section skrollable skrollable-between" style="margin-top: 30px;">
  <div class="medium-large-wrapper skrollable skrollable-after">
    <div class="medium-text-wrapper">
      <h2 class="h2 large white">Contact <span class="yellow">Us</span>.</h2>
      <h3 class="h3 white">We're have to help answer any question you might have . We look forward to hearing from you</h3>
      <!-- <a class="cta-link footer-cta-link" href="https://app.neverbounce.com/register" alt="Try NeverBounce for free">Try It Free</a> -->
    </div>
  </div>
  <img class="cta-purple-email skrollable skrollable-after" src="https://neverbounce.com/images/background-images/cta-purple-email.png" alt="email illustration">
  <img src="https://neverbounce.com/images/background-images/cta-left-line.svg" class="cta-left-line" alt="graphic line element">
  <img src="https://neverbounce.com/images/background-images/teal-airplane.png" class="cta-teal-airplane" alt="paper airplane">
  <img class="cta-blue-email skrollable skrollable-between" src="https://neverbounce.com/images/background-images/cta-blue-email.png" alt="email illustration">
</section>
<section style="margin-top: 20px;">

         <div class="container">
             <div class="row">

                <div class="col-md-6">
            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>FCP Index & Connections Pvt Ltd, 302, Pride Purple Square, Near Kalewadi Phata, Wakad, Pune - Maharashtra 411057</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:info@lapstro.in">info@lapstro.in</a><br><a href="mailto: support@lapstro.in">  support@lapstro.in</a></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><a href="tel:++91 96000 90455">+91 96000 90455</a></p>
                </div>
              </div>
                </div>
                </div>
      <div class="col-md-6" style="height: 450px; border:2px solid grey;border-radius: 10px 10px; width: 350px; box-shadow: 5px 5px ; padding: 10px;">

                         <form method="post" action="<?php echo base_url('home_2/contact/do_add') ?>" enctype="multipart/form-data">
                          <div class="form-row">

                           <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="txtname" class="form-control">
                          </div>

                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="txtemail" class="form-control">
                          </div>


                          <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="txtcontact" class="form-control">
                          </div>

                           <div class="form-group">
                            <label>Your Message</label>
                            <textarea cols="50" name="txtmessage" class="form-control"></textarea>
                           </div>
                          </div>
                      
                       <br>     
                           <div class="form-group ">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
  

    </div>
    </form>         
      </div>
</section>


<!-- follow me template -->
<!-- <div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/leo-bian">Leo Bian</a>
</div> -->
<script type="text/javascript">
    //material contact form animation
$(".contact-form")
    .find(".form-control")
    .each(function () {
        var targetItem = $(this).parent();
        if ($(this).val()) {
            $(targetItem)
                .find("label")
                .css({
                    top: "-6px"
                    , fontSize: "16px"
                    , color: "#ff512f"
                });
        }
    });
$(".contact-form")
    .find(".form-control")
    .focus(function () {
        $(this)
            .parent(".input-block")
            .addClass("focus");
        $(this)
            .parent()
            .find("label")
            .animate({
                    top: "-6px"
                    , fontSize: "16px"
                    , color: "#ff512f"
                }
                , 300
            );
    });
$(".contact-form")
    .find(".form-control")
    .blur(function () {
        if ($(this).val().length == 0) {
            $(this)
                .parent(".input-block")
                .removeClass("focus");
            $(this)
                .parent()
                .find("label")
                .animate({
                        top: "20px"
                        , fontSize: "18px"
                    }
                    , 300
                );
        }
    });

</script>