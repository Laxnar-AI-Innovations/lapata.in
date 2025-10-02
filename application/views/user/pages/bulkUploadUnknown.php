<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    .checkbox-custom, .radio-custom {
    opacity: 0;
    position: absolute;   
}

.checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
    display: inline-block;
    vertical-align: middle;
    margin: 5px;
    cursor: pointer;
}

.checkbox-custom-label, .radio-custom-label {
    position: relative;
}

.checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
    content: '';
    background: #fff;
    border: 2px solid #ddd;
    display: inline-block;
    vertical-align: middle;
    width: 22px;
    height: 22px;
    padding-bottom: 22px;
    margin-right: 10px;
    text-align: center;
}

.checkbox-custom:checked + .checkbox-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    background: rebeccapurple;
    color: #fff;
}

.radio-custom + .radio-custom-label:before {
    border-radius: 50%;
}

select{
    appearance:auto!important;
}

.radio-custom:checked + .radio-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    color: green;
}
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Upload Bulk Unknown</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Upload Bulk Unknown</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-3 col-lg-12">
                    <form id="uploadForm">
                        <div class="form-group row align-items-center mt-3">
                            <div class="form-floating col-lg-auto col-sm-12 col-md-auto mb-3">
                                <input type="file" required accept="image/*" class="form-control py-4 px-4 mt-2" id="photos" style="height: 57px;" onchange="cropPhoto()">
                                <label for="photos" class="ms-3 mb-5">Upload Photos *</label>
                            </div>
                            <input type="hidden" name="facematch" id="facematch">
                            <div class="form-floating col-lg-auto col-sm-12 col-md-auto mb-3">
                                <input type="text" class="form-control" name="person_name" id="name">
                                <label for="name" class="ms-3">Enter Name</label>
                            </div>
                            <div class="form-floating mb-3 col-12 col-md-auto">
                                <select class="form-control" name="Age" id="Age" required>
                                    <option value="">Select Age Band *</option>
                                    <?php 
                                        $state = $this->db->query('SELECT * FROM categories as c1, subcategories as s1 WHERE categoryId=4 AND c1.Id=4')->result_array();
                                        if(count($state)>0)
                                        {
                                            foreach($state as $row)
                                            {
                                            ?>
    
                                                <option value="<?php echo $row['hindiSubCategoryName'] ?>"><?php echo $row['hindiSubCategoryName']?></option>
                                            <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
    
                                            <option value="no">No Found Religion</option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <label for="Age"class="ms-3">Age Band *</label>          
                            </div>
                            <div class="form-floating col-lg-auto col-sm-12 col-md-auto mb-3">
                                <select class="form-control" required name="Gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="boy">Male</option>
                                    <option value="girl">Female</option>
                                </select>
                                <label for="gender" class="ms-3">Select Gender *</label>
                            </div>
                            <div class="col-lg-auto col-sm-12 col-md-auto text-center mb-3">
                                <button type="submit" id="uploadBtn" class="btn save disabled-on-loading" style="background:green!important;color:white!important;"> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
                    <h4 class="modal-title">Crop Image</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                            <div id="image_demo" style="width:100%; margin-top:30px"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                            <button type="button" class="btn btn-success crop_image disabled-on-loading btn-style-green"> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    .save {
        position: relative;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #008000!important;
    }
    .swal2-confirm{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color:#008000!important;
}

.swal2-close{
    position: relative!important;
    color: #fff!important;
    font-size: 20px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color:black!important;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:200,
          height:200
        }
      });
      
    $('.crop_image').click(function(event){
        $.ajax({
            url: "https://shammtech.in/api/quality-management",
            type: "POST",
            data: { 
                api_key: "<?php echo $this->config->item('face_key'); ?>",
                _token: "<?php echo $this->security->get_csrf_hash(); ?>"
            },
            success: function(response) {
                try {
                    let res = (typeof response === "string") ? JSON.parse(response) : response;

                    if (res.status === "success") {
                        // Decode quality from base64
                        let qualityVal = atob(res.quality);
                        $image_crop.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            console.log(response);
                            $('#facematch').val(response);
                            $('#uploadimageModal').modal('hide');
                        })
                    } else {
                        toastr.error(res.message);
                    }
                } catch (e) {
                    console.error("❌ Parse Error:", e, response);
                }
            },
            error: function(xhr, status, error) {
                console.error("❌ AJAX Error:", error);
                console.error("Response:", xhr.responseText);
            }
        })
    });
    
    $('.close1').click(function()
    {
        $('#facematch').val('');
        $('#crossIcon').click();
        $('#uploadimageModal').modal('hide');
    })
    
    $('#crossIcon').click(function()
    {
        $('#photos').val('');
        $('#facematch').val('');
        $('#crossIcon').addClass('d-none');
    })
    
    function cropPhoto()
    {
        if($('#photos')[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($('#photos')[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            toastr.error('Please upload photo to continue');
        }
    }
    
    $('#uploadForm').on('submit',function(e)
    {
        $('#uploadBtn').attr('disabled',true);
        e.preventDefault();
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/uploadBulkUnknownData',
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
                    toastr.success('Data Uploaded Successfully');
                    setTimeout(function()
                    {
                      location.reload();
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
  </script>