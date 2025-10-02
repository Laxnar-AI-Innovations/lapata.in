
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/plugins.js"></script>
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/theme.js"></script>
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/main.js"></script>


<!--js file from user footer-->
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/sweetalert2@11.js"></script>
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/toastr.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets_landing_page/js/select2.min.css">
<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/select2.min.js"></script>
<!--these all for are saved cs and js . link are given below-->

<script  defer src="<?php echo base_url(); ?>assets_landing_page/js/other_landing_page.js"></script>
<!-- Template Main JS File -->
<script  defer src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
<script  defer src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
<audio id="notification">
  <source defer src="<?php echo base_url(); ?>assets/buzzer.mp3" type="audio/mp3"></source>
</audio>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inc_footer.css">
<script>
    function showAccordingly(val)
    {
        if(val == 'en')
        {
            $('.englishDiv').removeClass('d-none');
            $('.hindiDiv').addClass('d-none');
            $('.english_divi').removeClass('d-none');
            $('.hindi_divi').addClass('d-none');
        }else{
            $('.englishDiv').addClass('d-none');
            $('.hindiDiv').removeClass('d-none');
            $('.english_divi').addClass('d-none');
            $('.hindi_divi').removeClass('d-none');
        }
    }
    
     // Toggle active class on service cards
        function toggleActive(card) {
            var allCards = document.querySelectorAll('.service-card');
            allCards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        }

</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('.floatingButton').on('click',
            function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                if($(this).children('.fa').hasClass('fa-plus'))
                {
                    $(this).children('.fa').removeClass('fa-plus');
                    $(this).children('.fa').addClass('fa-close');
                } 
                else if ($(this).children('.fa').hasClass('fa-close')) 
                {
                    $(this).children('.fa').removeClass('fa-close');
                    $(this).children('.fa').addClass('fa-plus');
                }
                $('.floatingMenu').stop().slideToggle();
                $('.floatingMenu').css({'display':'table'});
            }
        );
        $(this).on('click', function(e) {
          
            var container = $(".floatingButton");
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) 
            {
                if(container.hasClass('open'))
                {
                    container.removeClass('open');
                }
                if (container.children('.fa').hasClass('fa-close')) 
                {
                    container.children('.fa').removeClass('fa-close');
                    container.children('.fa').addClass('fa-plus');
                }
                $('.floatingMenu').hide();
            }
          
            // if the target of the click isn't the container and a descendant of the menu
            if(!container.is(e.target) && ($('.floatingMenu').has(e.target).length > 0)) 
            {
                $('.floatingButton').removeClass('open');
                $('.floatingMenu').stop().slideToggle();
            } 
        });
    });

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
                if(href.indexOf('create-an-account') !== -1 || href.indexOf('login') !== -1 || href.indexOf('logout') !== -1)
                {
                    location.href=href;
                }
                else if(href.indexOf('show-payment-models-landing') !== -1)
                {
                    location.href="<?= base_url(); ?>user/lapata_login";
                }else if(href == '<?= base_url(); ?>')
                {
                    location.href=$(this).attr('href');
                }
                else if(href.indexOf('tel:') !== -1 || href.indexOf('javascript:void(0)') !== -1)
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
                                if(href.indexOf('check-person-face') !== -1)
                                {
                                    location.href="<?php echo base_url(); ?><?= $_SESSION['login_type']; ?>/search_person_details?pn=7";   
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
    
    <?php 
        if($page_name == 'fourth')
        {
    ?>
    
    const videos = document.querySelectorAll('video');
    
    // Add an event listener to each video for the 'play' event
    videos.forEach(video => {
      video.addEventListener('play', () => {
        // Pause all other videos except the one that started playing
        videos.forEach(otherVideo => {
          if (otherVideo !== video) {
            otherVideo.pause();
          }
        });
      });
    });
    <?php }else{ ?>
    $(document).ready(function()
    {
        const videos = document.querySelectorAll('.videoDiv video');
    
        videos.forEach(video => {
            video.play();
        });  
    })
    <?php } ?>

    $('video').on('play',function()
    {
        setTimeout(function()
        {
            $('video').trigger('pause');
        },60000);
    })
    
    $('.accordion-item').click(function()
    {
        $('.accordion-item div[data-bs-target]').removeClass('show');
    })

    
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

   // when click on getstrated button and box highlighted automatcially
   
</script>
<script defer src="<?php echo base_url(); ?>assets_landing_page/js/firebase-app.js"></script>
<script defer src="<?php echo base_url(); ?>assets_landing_page/js/firebase-messaging.js"></script>
<script defer src="<?php echo base_url(); ?>assets_landing_page/js/custom-firebase-notification.js"></script>
<script defer src="<?php echo base_url(); ?>assets_landing_page/js/subscribe-to-push.js"></script>
