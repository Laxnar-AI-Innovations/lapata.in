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
  <script type="text/javascript">

    $(document).ready(function() {
        $('.select2').select2();
    });
    
    function checkIfFinal(ele)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>user/checkIfFinal',
            type:'get',
            success:function(res)
            {
                let parse= JSON.parse(res);
                if(parse.status == "success")
                {
                    location.href=$(ele).attr('href');
                }else{
                    toastr.error('Please Complete your profile first');
                    return false;
                }
            }
        })
    }
    
  </script>