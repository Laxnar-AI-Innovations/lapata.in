<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo (isset($title) ? $title : 'Khoji'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/khoji.webp">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script type="text/javascript" src="<?= base_url(); ?>assets_landing_page/js/toastr.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.1/lottie.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/newstyle.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    label[for="terms"] {
      display: inline;
      margin-left: .25rem!important;
    }
    .loading:after {
      overflow: hidden;
      display: inline-block;
      vertical-align: bottom;
      -webkit-animation: ellipsis steps(4, end) 900ms infinite;
      animation: ellipsis steps(4, end) 900ms infinite;
      content: "\2026";
      /* ascii code for the ellipsis character */
      width: 0px;
      font-weight:bolder;
    }
    
    @keyframes ellipsis {
      to {
        width: 40px;
      }
    }
    
    @-webkit-keyframes ellipsis {
      to {
        width: 40px;
      }
    }
    
    label{
        font-size:0.9rem!important;
    }
    
    .form-floating label{
        font-weight:bold!important;
        color:black!important;
    }
    
      .readonly{
          background: #d3d3d34d!important;
      }
      
      input[readonly]{
          background: #d3d3d34d!important;
      }
      #toast-container > div{
          opacity: 1;
      }
      button:disabled{
        opacity: 0.65
      }

      .disabled-on-loading:disabled:before {
          opacity: 0.65;
          content: "\f110";
          font-weight: 900;
          display: inline-block;
          font: normal normal normal 14px/1;
          font-family: "Font Awesome 5 Free";
          -webkit-font-smoothing: antialiased;
          display: inline-block;
          text-rendering: auto;
          line-height: 1;
          animation: fa-spin 1s infinite steps(9);
      }
      .min-vh-70 {
    min-height: 70vh!important;
}
  </style>
  <script>
        toastr.options.timeOut = 0;
        toastr.options.extendedTimeOut = 0;
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
    </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"/>
</head>