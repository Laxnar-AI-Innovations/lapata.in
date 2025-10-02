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