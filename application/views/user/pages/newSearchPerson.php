<style type="text/css">
    #swal-lottie {
      width: 150px;
      height: 150px;
      margin: 0 auto;
    }
    label {
        font-weight: 600 !important;
        color: black !important;
        font-size: 1rem!important;
    }

    .no-border-radius {
              border-radius: 0 !important;
            }
    .no-border {
              border: 0 !important;
            }

    #ajaxloader {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
        position: fixed;
        z-index: 9999;
        visibility: visible;
        width: 100%;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Search Person By Face Photo</h1>
    </div>
    <div>
        <div class="container-fluid px-0">
            <form class="row g-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>user/searchPersonNewUnknownFace" novalidate id="step7Form">
                <?php 
                    $csrf = array(
                      'name' => $this->security->get_csrf_token_name(),
                      'hash' => $this->security->get_csrf_hash()
                      );
                    ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <input type="hidden" name="type" value="<?php echo isset($_GET['type']) ? $_GET['type'] : ''; ?>">
                <?php 
                    if(!isset($_SESSION['searchFaceIdAfterLogin']))
                    {
                        $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
                        if($getFinalId[0]['Id'] != NULL)
                        {
                            $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
                        }else{
                            $_SESSION['searchFaceIdAfterLogin'] = 1;
                        }
                        $insertdata = array(
                            'Id' => $_SESSION['searchFaceIdAfterLogin'],
                            'userId' => $_SESSION['user_id'],
                            'isKyc' => 1
                        );
                        $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
                    }
                    if(isset($_SESSION['searchFaceIdAfterLogin']))
                    {
                    ?>
                <div class="card col-lg-4 col-md-8">
                    <div class="card-body mt-3">
                        <div class="row justify-content-center">
                            <div class="col-auto form-group text-center">
                                <label class="text-danger">Select Gender <b>*</b></label>
                                <br>
                                <div class="border border-2 border-dark p-2">
                                    <input type="radio" name="gender" value="male" id="male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" value="female" id="female">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" value="other" id="other">
                                    <label for="other">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-lg-10 col-md-6" id="sampleDiv">
                                <input type="file" hidden id="uploadFile" accept="image/*;capture=camera">
                                <h5 class="text-center">Sample Photo</h5>
                                <div style="width:100%;height:200px;" id="lottie-animation-face" onclick="showFileUpload()"></div>
                                <input type="hidden" name="mainPhotoSelectedFacematch" id="mainPhotoSelectedFacematch">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center" style="display:none" id="element">
                            <div class="col-lg-10 col-md-6">
                                <h5 class="text-center">Preview Photo</h5>
                                <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center" id="uploadBtnDiv">
                            <div class="col-lg-10 col-md-6 text-center">
                                <a href="javascript:void(0)" class="btn btn-light" style="border-radius:50%;border:1px solid grey;" id="uploadPhotoBtn" onclick="showFileUpload()"><i class="fa fa-camera fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3 justify-content-center d-none" id="searchDiv">
                            <div class="col-6 px-1 d-none" id="retakebtndiv">
                                <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button>
                            </div>
                            <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                                <button type="submit" id="btn3" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Search <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>  
                </div>
            </form>
        </div>
    </div>
</main>
<div id="uploadimageModal" class="modal" data-bs-backdrop="static" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content" style="width:min-content;max-width:100%;">
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:21px"></div>
            </div>
            <div class="col-6 text-end">
                <button type="button" class="btn btn-dark close1 save" style="background:black!important;color:white;" data-dismiss="modal">Back</button>
            </div>
            <div class="col-6 text-start">
                <button class="btn btn-success crop_image save">OK</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $('.close1').click(function()
    {
        location.reload();
    })

    lottie.loadAnimation({
        container: document.getElementById('lottie-animation-face'), // Animation render hone ka container
        renderer: 'svg', // SVG format me render karne ke liye
        // loop: true, // Animation loop kare
        // autoplay: true, // Animation automatically play kare
        path: '<?= base_url(); ?>assets_landing_page/4e5a244c-01f7-4d22-a6fc-f6d1b8c58bde.json', // JSON file ka path
    });

    function showFileUpload(){
        $('#uploadFile').val('');
        $('#image_demo').croppie('destroy');
        if(window.innerWidth <= 525)
        {
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'100%',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'100%',
                  height:500
                }
              });    
        }else{
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'300',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'400',
                  height:500
                }
              });
        }
        $('#uploadFile').click();
    }
    
    if(window.innerWidth <= 525)
    {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'100%',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'100%',
              height:500
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'300',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:500
            }
          });
    }
      
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
                            $('#mainPhotoUploaded').attr('src',response);
                            $('#mainPhotoSelectedFacematch').val(response);
                            $('#sampleDiv').hide();
                            $('#searchDiv').removeClass('d-none');
                            $('#element').show();
                            $('.headingFace').addClass('d-none');
                            $('#uploadimageModal').modal('hide');
                            $('#uploadBtnDiv').addClass('d-none');
                            $('#retakebtndiv').removeClass('d-none');
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
        });
    });
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            toastr.remove();
            var isImage = $(this)[0].files[0].type.startsWith("image/");
            if(isImage)
            {
                var reader = new FileReader();
                reader.onload = function (event) {
                  $image_crop.croppie('bind', {
                    url: event.target.result
                  }).then(function(){
                    console.log('jQuery bind complete');
                  });
                }
                reader.readAsDataURL($('#uploadFile')[0].files[0]);
                $('#uploadimageModal').modal('show');      
            }else{
                toastr.error("Only image is allowed");
            }
        }
    })
    
    $('#step7Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        if(($('#mainPhotoSelectedFacematch').val()) != '')
        {
            if($('input[name="gender"]').is(':checked'))
            {
                let data = new FormData(this);
                data.append('gender',$('input[name="gender"]:checked').val())
                $.ajax({
                    url:$(this).attr('action'),
                    data:data,
                    contentType: false,
                    cache: false,
                    beforeSend: function () {
                        $("#ajaxloader").removeClass('d-none');
                        $('body').css('background-color','hsl(18,90%,90%)');
                        $('body').css('visibility','hidden');
                    },
                    error: function (error) {
                        $('body').css('background-color','#fff');
                        $('body').css('visibility','visible');
                        $("#ajaxloader").addClass('d-none');
                    },
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.finalCount > 0)
                        {
                            $.ajax({
                                url:'<?= base_url(); ?>user/createOverallFaceHistory',
                                beforeSend: function () {
                                    $("#ajaxloader").removeClass('d-none');
                                    $('body').css('background-color','hsl(18,90%,90%)');
                                    $('body').css('visibility','hidden');
                                },
                                error: function (error) {
                                    $('body').css('background-color','#fff');
                                    $('body').css('visibility','visible');
                                    $("#ajaxloader").addClass('d-none');
                                },
                                success:function(res)
                                {
                                    location.href="<?php echo base_url(); ?>user/newUnknownFaceMatchResults";
                                }
                            })
                        }else{
                            $("#ajaxloader").addClass('d-none');
                            $('body').css('background-color','#fff');
                            $('body').css('visibility','visible');
                            Swal.fire({
                                iconHtml: '<img src="'+$('#mainPhotoSelectedFacematch').val()+'" style="height: 100%;border-radius: 0;width: 80px;">',
                                customClass: {
                                    actions: 'mt-0',
                                    cancelButton: 'save',
                                    popup: 'pb-2',
                                    confirmButton: 'btn-style-primary-no-border',
                                    icon: 'no-border-radius mb-0 mt-3'
                                },
                                html: "<h5 style='color:red;font-weight:bold;' class='mt-1'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='location.reload();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                                showCloseButton:true,
                                showConfirmButton:false,
                                confirmButtonText:'View Guidlines',
                                showCancelButton:false,
                                'cancelButtonText':'Please Try Again'
                            })
                            $('#btn3').removeAttr('disabled');            
                        }
                    }
                });
            }else{
                Swal.fire({
                    icon:'error',
                    html: "<h4 style='color:black;'><b>Please Select Gender</b></h4>",
                    showCloseButton:true,
                    showConfirmButton:false,
                    showCancelButton:true,
                    'cancelButtonText':'Ok'
                })
                $('#btn3').removeAttr('disabled');
            }
        }else{
            Swal.fire({
                icon:'error',
                html: "<h4 style='color:black;'><b>Please Upload Person's Photo</b></h4>",
                showCloseButton:true,
                showConfirmButton:false,
                showCancelButton:true,
                'cancelButtonText':'Ok'
            })
            $('#btn3').removeAttr('disabled');
        }
    })
    
    function back(ele)
    {
        window.close();
    }
</script>