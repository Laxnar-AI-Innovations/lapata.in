<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 0rem!important;
    }
    .btn{
        border:0!important;
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
    
    .activeLabel{
            background-color: #ffc107;
            padding: 16px;
            border-radius: 30px;
            font-weight:bold;
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
        width: 25px;
        height: 30px;
        /*padding-bottom: 22px;*/
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
    
    .radio-custom:checked + .radio-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        color: green;
    }
</style>
<style>
    @media only screen and (max-width: 600px) {
 .imgae_display{
      display: none;
 }
}
</style>
<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-xl-4 col-6 imgae_display">
            
            <img class="img-fluid" src="assets_landing_page/img/illustrations/13246824_5191079.jpg" srcset="assets_landing_page/img/illustrations/13246824_5191079.jpg 2x" alt="">
          </div>
        <div class="col-lg-6 col-xl-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="form-group row g-3">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h3 class="mb-5" style="color:red;">Select Login Type</h3>
                </div>
            </div>
            <div class="form-group row g-3 border border-3 border-dark p-5">
                <div class="col-sm-12 col-md-12 col-lg-auto my-0">
                    <input class="radio-custom" type="radio" name="userType" id="generalUser" checked value="generalUser">
                    <label class="radio-custom-label" for="generalUser">
                      <b style="color:black;">General User</b>
                    </label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-auto text-right my-0">
                    <input class="radio-custom" type="radio" name="userType" id="ngo" value="ngo">
                    <label class="radio-custom-label" for="ngo">
                      <b style="color:green;">NGO</b>
                    </label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-auto text-right my-0">
                    <input class="radio-custom" type="radio" name="userType" id="police" value="police">
                    <label class="radio-custom-label" for="police">
                      <b style="color:red;">Police</b>
                    </label>
                </div>
            </div>
            <div class="form-group col-12 col-lg-8 mt-5">
                <button type="button" onclick="getAccordingly(this)" class="btn btn-default btn-style-four w-100 disabled-on-loading">Next <i class="fa ms-1 fa-arrow-circle-right"></i></button>
            </div>
        </div>
      </div>
    </div>

  </section>

</div>
<script type="text/javascript">
    function getAccordingly(ele)
    {
        $(ele).attr('disabled',true);
        let checked = $('input[name="userType"]:checked').val();
        if(checked == 'generalUser')
        {
            location.href="<?= base_url(); ?>login?clickedOn=missing";
        }else if(checked == 'ngo')
        {
            location.href="<?= base_url(); ?>social-login";
        }else{
            location.href="<?= base_url(); ?>police-thana-login";
        }
    }
</script>