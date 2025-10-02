


<script src="<?php echo base_url(); ?>assets_landing_page/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/theme.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/main.js"></script>


<!--js file from user footer-->
<script src="<?php echo base_url(); ?>assets_landing_page/js/sweetalert2@11.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/toastr.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets_landing_page/js/select2.min.css">
<script src="<?php echo base_url(); ?>assets_landing_page/js/select2.min.js"></script>
<!--these all for are saved cs and js . link are given below-->


<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
<audio id="notification">
  <source src="<?php echo base_url(); ?>assets/buzzer.mp3" type="audio/mp3"></source>
</audio>
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

    function checkIfToastr()
    {
        if($('.toast-error').length > 0)
        {
            setTimeout(function()
            {
                toastr.remove();
            },2000);
        }
    }

    $(document).ready(function() {
        $('.getStarted').click(function() {
            $('html, body').animate({
                scrollTop: $('#targetSection').offset().top
            }, 1000); // Adjust the duration (in milliseconds) as needed

              // Highlight boxes one by one
            const boxes = document.querySelectorAll('.box_1');
            let delay = 0;

            boxes.forEach((box_1, index) => {
                setTimeout(() => {
                    box_1.classList.add('highlight');
                    setTimeout(() => box_1.classList.remove('highlight'), 1000);
                }, delay);
                delay += 1200; // Delay for each box
            });
        });
    });
    
    setInterval(checkIfToastr,3000);
    
    function searchPersonByFacePhoto(ele)
    {
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('type','1');
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/checkPersonFace/step1',
            data:data,
            timeout: 60000,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.isMobileAvailable)
                {
                    location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=3";   
                }else{
                    location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=2";
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
    
    $(document).ready(function() {
        lottie.loadAnimation({
            container: document.getElementById('lottie-loader'), // Animation render hone ka container
            renderer: 'svg', // SVG format me render karne ke liye
            // loop: true, // Animation loop kare
            // autoplay: true, // Animation automatically play kare
            path: '<?= base_url(); ?>assets/jsons/Animation - 1735390189921.json', // JSON file ka path
        });

        lottie.loadAnimation({
            container: document.getElementById('lottie-ajax-loader'), // Animation render hone ka container
            renderer: 'svg', // SVG format me render karne ke liye
            // loop: true, // Animation loop kare
            // autoplay: true, // Animation automatically play kare
            path: '<?= base_url(); ?>assets/jsons/Animation - 1735302019624.json', // JSON file ka path
        });
        $('.select2').select2();
        $('a:not("[data-lightbox]")').click(function(e)
        {
            e.preventDefault();
            <?php 
        if($_SESSION['user_login'] != 'yes')
        {
        ?>
            location.href=$(this).attr('href');
            <?php        
        }else{
        ?>
            let href = $(this).attr('href');
            if(href != undefined)
            {
                if(href.indexOf('create-an-account') !== -1 || href.indexOf('login') !== -1)
                {
                    location.href=href;
                }
                else if(href.indexOf('show-payment-models-landing') !== -1)
                {
                    location.href="<?= base_url(); ?>user/lapata_new_login";
                }else if(href == '<?= base_url(); ?>')
                {
                    location.href=$(this).attr('href');
                }
                else if(href.indexOf('tel:') !== -1 || href.indexOf('javascript:void(0)') !== -1 || href.indexOf('logout') !== -1)
                {
                    location.href=$(this).attr('href');
                }else{
                    if(href.indexOf('login') !== -1)
                    {
                        let split = href.split('?clickedOn=');
                        if(split[1] == 'missing')
                        {
                            <?php 
                                if($_SESSION['login_type'] == 'police')
                                {
                            ?>
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/lapata_person_filter";
                            <?php }else{ ?>
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/lapta_person_after_login";
                            <?php } ?>
                        }else if(split[1] == 'unknown')
                        {
                            <?php 
                                if($_SESSION['login_type'] == 'police')
                                {
                            ?>
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/upload_unknown_details";
                            <?php }else{ ?>
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/upload_unknown_details";
                            <?php } ?>
                        }else{
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/search_vehicle_details";
                        }
                    }else{
                        if(href.indexOf('check-vehicle-details') !== -1)
                        {
                            location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/search_vehicle_details";
                        }else{
                            if(href.indexOf('check-person-details') !== -1)
                            {
                                location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/search_person_by_identity";
                            }else
                            {
                                if(href.indexOf('check-person-face-funnel') !== -1)
                                {
                                    <?php 
                                        if($_SESSION['login_type'] == 'user')
                                        {
                                    ?>
                                    // location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/search_person_details?pn=7";   
                                    location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/newSearchPerson";   
                                    <?php }else{ ?>
                                    location.href="<?php echo base_url(); ?>non-kyc-funnel-facematch";   
                                    <?php } ?>
                                    // location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/manageGallery?type=missing";   
                                }else{
                                    let loginType = '<?php echo $_SESSION['login_type']; ?>';
                                    if(loginType == 'police')
                                    {
                                        location.href="<?php echo base_url(); ?>police";
                                    }
                                    if(loginType == 'user')
                                    {
                                        location.href="<?php echo base_url(); ?>user-dashboard";    
                                    }
                                    if(loginType == 'hotel')
                                    {
                                        location.href="<?php echo base_url(); ?>hotel";    
                                    }
                                    if(loginType == 'ngo')
                                    {
                                        location.href="<?php echo base_url(); ?>ngo";    
                                    }
                                    if(loginType == 'NonKyc')
                                    {
                                        location.href="<?php echo base_url(); ?>NonKyc";    
                                    }
                                    if(loginType == 'digiLocker')
                                    {
                                        location.href="<?php echo base_url(); ?>digilocker-dashboard";    
                                    }
                                }
                            }
                        }
                    }
                }   
            }else{
                
            }
            <?php } ?>   
        })
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
             $('body').removeAttr('style');
             $('body').css('color','#444444');
            $('.morelink').attr('href','javascript:void(0)');    
          },1000);
      }
    }
    
    setInterval(function()
    {
        $.ajax({
            url:'<?php echo base_url(); ?>landing/getIfNotification',
            async:true,
            type:'get',
            success:function(res)
            {
                if(res > 0)
                {
                    let audio = document.getElementById('notification');
                    audio.play();
                    // toastr.success('You have new notifications to read');            
                    $.ajax({
                        url:'<?php echo base_url(); ?>landing/markRingtoneOff',
                        async:true,
                    })
                }
            }
        })
    },5000);
</script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/firebase-app.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/firebase-messaging.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/custom-firebase-notification.js"></script>
<script src="<?php echo base_url(); ?>assets_landing_page/js/subscribe-to-push.js"></script>
<!--create our own script for firebase notifcation send-->
