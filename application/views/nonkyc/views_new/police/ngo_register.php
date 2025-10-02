<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Missing Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <style type="text/css">
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
        .form-group{
          margin-bottom: 1rem;
        }
        nav .nav-link{
          color:white;
        }
    
        nav .nav-link.active{
          color:black!important;
          font-weight: 600;
        }
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
      </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"/>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center w-auto">
                  <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Creat a New Account of NGO</h5>
                    <!-- <p class="text-center small mb-0">Social Ngo's Account</p> -->
                  </div>

                  <div>
                      <!--Success message-->
                      <?php $add_succ=$this->session->flashdata('success');
                          if($add_succ){
                          ?>
                      <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong><?php echo $add_succ;?></strong> 
                      </div>
                      <?php } ?>
                      <!--Delete message-->
                      <?php $del_succ=$this->session->flashdata('error');
                          if($del_succ){
                          ?>
                      <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                      <?php } ?>
                  </div>

                  <form id="loginForm" action="<?php echo base_url(); ?>admin/login/do_login" method="post" class="row g-3 needs-validation" novalidate>
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <input type="text" class="form-control" name="pkgdur"   id="pkgdur" autofocus required placeholder="Aadhar Number">
                          <label for="pkgdur" >Registration No. *</label>
                          <div class="invalid-feedback">Please  Enter Registration No. *.</div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <input type="text" class="form-control" name="pkgdur"   id="pkgdur" required placeholder="Aadhar Number">
                          <label for="pkgdur" >NGO Name *</label>
                          <div class="invalid-feedback">Please  Enter NGO Name *.</div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <select class="form-control" name="state" id="state" onchange="getdistrict(this.value);" required>
                            <option value="">Select State </option>
                            <?php 
                                $state = $this->db->query('select * from states')->result_array();
                                if(count($state)>0)
                                {
                                  foreach($state as $row)
                                  {
                                    ?>

                                      <option value="<?php echo $row['name'] ?>"><?php echo $row['name']?></option>
                                    <?php
                                  }
                                  
                                }
                                else
                                {
                                  ?>

                                  <option value="no">No Found State</option>
                                <?php
                                }
                            ?>
                              
                              
                              
                          </select>
                          <label for="pkgdurtype" >State *</label>
                          <div class="invalid-feedback">Please Select State *.</div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <select class="form-control" name="district" id="district" onchange="getcity(this.value);" required>
                              <option value="">Select District </option>
                              
                              
                          </select>
                          <label for="pkgdurtype" >District *</label>
                          <div class="invalid-feedback">Please Enter District *.</div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <select class="form-control" name="city" id="city" required>
                              <option value="">Select City </option>
                              
                          </select>
                          <label for="pkgdurtype" >City *</label>
                          <div class="invalid-feedback">Please Select City *.</div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <input type="text" class="form-control" name="pkgdur"   id="pkgdur" required placeholder="Aadhar Number">
                          <label for="pkgdur" >Branch *</label>
                          <div class="invalid-feedback">Please Enter Branch *.</div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <input type="text" class="form-control" name="pkgdur"   id="pkgdur" required placeholder="Aadhar Number">
                          <label for="pkgdur" >Address *</label>
                          <div class="invalid-feedback">Please Enter Address *.</div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                          <input type="text" class="form-control" name="pkgdur"   id="pkgdur" required placeholder="Aadhar Number">
                          <label for="pkgdur" >Email Id *</label>
                          <div class="invalid-feedback">Please enter Email Id *.</div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-12">
                      <div class="form-floating mb-1 col-auto">
                      <input type="number" class="form-control" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber" required placeholder="Aadhar Number">
                          <label for="pkgdur" >Founder Aadhar No. *</label>
                          <div class="invalid-feedback">Please enter Aadhar no. *.</div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-8">
                      <div class="form-floating mb-1 col-auto">
                          <input type="number" class="form-control" name="pkgdur"  onkeydown="limit(this,'mobile');" onkeyup="limit(this,'mobile');" id="pkgdur" required placeholder="Aadhar Number">
                          <label for="pkgdur" >Aadhar linked Moblie No*</label>
                          <div class="invalid-feedback">Please enter Mobile no. *.</div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-3">
                      <button class="btn btn-success w-100 disabled-on-loading" id="btnOtp" type="button" > OTP</button>
                    </div>
                    <div class="col-lg-4 col-1">
                      
                    </div>
                    
                    <div class="col-lg-4 col-3">
                      
                    </div>
                    <div class="col-lg-4 col-6">
                      <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit" > Register</button>
                    </div>
                    <div class="col-lg-4 col-3">
                      
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
                  $('#btnOtp').addClass('disabled');
        $('#loginForm').on('submit',function(e)
        {
            e.preventDefault();
            $('#btnSubmit').attr('disabled','disabled');
            let data = new FormData(this);
            $.ajax({
                url:$(this).attr('action'),
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                          location.href="<?php echo base_url(); ?>admin";
                        },2000);
                    }else{
                       toastr.error(parse.message);
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }
                }
            });
        })
        function limit(val,type)
        {
            if(type == 'aadhar')
            {
                var max_chars = 11;
                if(val.value.length > max_chars) {
                    $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnaadharNext').removeClass('disabled');
                    val.value = val.value.substr(0, (max_chars + 1));
                }else{
                    $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnaadharNext').addClass('disabled');
                }   
            }else{
                var min_chars = 9;
                if(val.value.length > min_chars) {
                    $('#btnOtp').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnOtp').removeClass('disabled');
                    val.value = val.value.substr(0, (min_chars + 1));
                }else{
                    $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnOtp').addClass('disabled');
                }
            }
        }
        function getdistrict(id)
        {
          $('#district').prop('selectedIndex',0);
          $('#city').prop('selectedIndex',0);
          $('#city').html('<option value="">Select City</option>');
          if(id!="")
          {
            $.ajax({
              url:"<?php echo base_url(); ?>/ngo/getdistrict?id="+id,
                data:id,
                
                type:'get',
                success:function(res)
                {
                  $('#district').html(res);
                }
            })
          }
          else
          {
            $('#district').html('<option value="">Select District</option>');
            $('#city').html('<option value="">Select City</option>');
          }
          
        }
        function getcity(id)
        {
          var sid=$('#state').val();
          $('#city').prop('selectedIndex',0);
          if(id!="")
          {
            $.ajax({
              url:"<?php echo base_url(); ?>/ngo/getdistrict?cid="+id+"&sid="+sid,
                
                type:'get',
                success:function(res)
                {
                  $('#city').html(res);
                }
            })
          }
          else
          {
            
            $('#city').html('<option value="">Select City</option>');
          }
          
        }
    </script>
</body>

</html>