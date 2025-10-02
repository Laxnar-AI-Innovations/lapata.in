<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.tagsinput.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
  
  <style type="text/css">
    .border-radius-50{
        border-radius:50%!important;
    }
    .w-7-em{
        width:7rem;
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
  <audio id="notification">
      <source src="<?php echo base_url(); ?>assets/buzzer.mp3" type="audio/mp3"></source>
  </audio>
    <script type="text/javascript">
        const table1 = $('.datatable1').dataTable({
            stateSave: true,
        })
        $(document).ready(() => {
            $('.selectAll').click(function (e) {
                $('.datatable1 tbody :checkbox').prop('checked', $(this).is(':checked'));
                e.stopImmediatePropagation();
            });
        })    
        
        $(document).ready(function() {
            $('.select2').select2();
            $('#tags,.tags').tagsInput({
                'width':'100%',
                'defaultText':'',
                'delimiter': [','],
                'height' : 'auto'
            });
        });
    </script>