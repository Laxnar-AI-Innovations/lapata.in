<style>
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

    .back-to-top {
        position: fixed;
        visibility: hidden;
        opacity: 0;
        right: 15px;
        bottom: 70px;
        z-index: 99999;
        background: #4154f1;
        width: 40px;
        height: 40px;
        border-radius: 4px;
        transition: all 0.4s;
    }

    .bottom-bar {
      position: fixed;
      background: white!important;
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
      background-color: transparent!important;
      border: none;
      font-size: 14px;
      cursor: pointer;
      color: #464545;
      padding: 10px;
      font-weight: bold;
      display: block;
      letter-spacing: 0px;
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
    if(current_url() != base_url().'NonKyc/lapata_new_login' && $_SERVER['PATH_INFO'] != '/NonKyc/editFunnelMissingDetails' && $_SERVER['PATH_INFO'] != '/NonKyc/editLapataDetails' && current_url() != base_url().'NonKyc/add_family_member' && $_SERVER['PATH_INFO'] != '/NonKyc/editFamilyDetails' && $_SERVER['PATH_INFO'] != '/NonKyc/editFunnelFamilyDetails' && current_url() != base_url().'NonKyc/upload_unknown_details_new' && $_SERVER['PATH_INFO'] != '/user/editUnknownDetailsNew')
    {
?>
<div style="height: 40px;"></div>
<div class="bottom-bar d-md-none d-flex text-center">
    <?php 
        if(current_url() == base_url().'non-kyc-funnel-facematch')
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
    <button class="<?= current_url() == base_url().'NonKyc/missing_details' ? 'activeBottom' : ''; ?>" onclick="location.href='<?= base_url().''.$_SESSION['login_type']; ?>/missing_details'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
<br>Upload</button>
    <?php }else{ ?>
    <button onclick="location.href='<?= base_url(); ?>login?clickedOn=upload'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
<br>Upload</button>
    <?php } ?>
    <?php 
        if($_SESSION['user_login'] == 'yes')
        {
    ?>
    <button class="<?= current_url() == base_url().'NonKyc/profile' ? 'activeBottom' : ''; ?>" onclick="location.href='<?= base_url().''.$_SESSION['login_type']; ?>/profile'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
<br>My Profile</button>
    <?php }else{ ?>
    <button class="<?= current_url() == base_url().'login' ? 'activeBottom' : ''; ?>" onclick="location.href='<?= base_url(); ?>login'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M3 12h13l-3 -3" /><path d="M13 15l3 -3"/></svg>
<br>Login</button>
    <?php } ?>
    <button onclick="location.href='tel:+918707624604'"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-headset"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 14v-3a8 8 0 1 1 16 0v3" /><path d="M18 19c0 1.657 -2.686 3 -6 3" /><path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /><path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"/></svg>
<br>Help</button>
</div>
<?php } ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
  <style type="text/css">
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
  <audio id="notification">
      <source src="<?php echo base_url(); ?>assets/buzzer.mp3" type="audio/mp3"></source>
  </audio>
  <script type="text/javascript">

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

    $('.toggle-sidebar-btn').click(function()
    {
        if($('body').hasClass('toggle-sidebar'))
        {
            $('.toggle-sidebar-btn').addClass('bi-x-square').removeClass('bi-list');
        }else{
            $('.toggle-sidebar-btn').removeClass('bi-x-square').addClass('bi-list');
        }
    })
    
    setInterval(checkIfToastr,3000);

    $(document).ready(function() {
        $('.select2').select2();
    });
    
    <?php 
        if($_SESSION['login_type'] == 'NonKyc')
        {
    ?>
    
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
                        success:function()
                        {
                            let count = parseInt($('.badge-number').html()) + parseInt(res);
                            $('.badge-number').html((count));
                        }
                    })
                }
            }
        })
    },1500);
    <?php } ?>
    
    function checkIfFinal(ele)
    {
        location.href=$(ele).attr('href');
    }
    
    function hasFileInput(ele) {
        var form = $(ele);
        var inputs = form.find('input');
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type === 'file') {
                if(inputs[i].value != '')
                {
                    return true;   
                }
            }
        }
        return false;
    }
    
     function jumpToProfile()
     {
         location.href="<?= base_url(); ?>login";
     }
    
  </script>
  <script>
        document.onreadystatechange = function () {
          var state = document.readyState
          if (state == 'complete') {
              setTimeout(function(){
                 document.getElementById('loader').style.visibility="hidden";
                 document.getElementsByTagName('body')[0].style.visibility="visible";
                 $('body').css('background-color','#f6f9ff');
                 $('body').css('color','#444444');
              },1000);
          }
        }
    </script>