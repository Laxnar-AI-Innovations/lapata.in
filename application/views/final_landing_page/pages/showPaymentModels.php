<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .white_pkg{
        color: black!important;
        background:white!important;
        min-height: 95px;
    }
    label{
        color:unset!important;
    }
    .first_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(229, 9, 20) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .second_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(176, 56, 220) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .third_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(109, 59, 227) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }

</style>
<style>
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
        width: 22px;
        height: 22px;
        padding-bottom: 28px;
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
    
    div:where(.swal2-container) div:where(.swal2-popup){
            width:auto;
        }
    #swal2-html-container{
        margin: 0 1rem!important;
    }

.card{
    height:max-content;
}

</style>
<!--end card css-->
<main id="main" class="main my-4">
    <div class="pagetitle">
      <h4 class="text-center">Select the plan that's right for you</h4>
    </div>
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <?php 
                $getPackages = $this->db->query('select * from packages where amount > 0 order by Id desc')->result_array();
                foreach($getPackages as $k=>$v)
                {
            ?>
            <div class="col-sm-12 col-lg-3 col-md-5 me-md-3 mt-0 card px-0">
                <?php 
                    if($k == 2)
                    {
                ?>
                <div class="card-header py-0" style="height:90px;" id="<?php echo 'color-'.$k; ?>">
                <?php }else if($k == 1){ ?>
                <div class="card-header py-0" id="<?php echo 'color-'.$k; ?>">
                <?php }else{ ?>
                <div class="card-header py-0" id="<?php echo 'color-'.$k; ?>">
                <?php } ?>
                    <div class="row" style="justify-content:space-between;margin-top:<?= ($v['amount'] == 0) ? '1.5rem' : '1.2rem'; ?>;">
                        <div class="col-auto">
                            <input type="radio" class="radio-custom" value="<?php echo $v['Id'].'-'.$v['amount']; ?>" name="plan" id="<?= $k; ?>" <?php echo (($k == 0) ? 'checked' : ''); ?>>
                            <label for="<?= $k; ?>" style="display:-webkit-inline-box!important;" class="card-title radio-custom-label mb-0"><?php echo $v['packageName']; ?></label>  
                        </div>
                        <div class="col-auto">
                            <?php 
                                if($v['amount'] == 0)
                                {
                            ?>
                            <p class="mb-0"><b>FREE</b></p>
                            <?php } ?>
                            <p><b><i class="fa fa-rupee"></i> <?= $v['amount']; ?></b></p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 desc desc_<?= $k; ?> align-items-center my-3 <?= $k == 0 ? 'd-flex' : 'd-none'; ?>">
                    <ul type="disc" class="mb-0">
                        <?php 
                            if($k == 2)
                            {
                        ?>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">24 Hours free Plan for search through Face match from Unknown Person data.</li>
                        <?php }else if($k == 1){ ?>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">1 Months free Plan for search through Face match from Unknown Person data.</li>
                        <?php }else{ ?>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">3 Months free Plan for search through Face match from Unknown Person data.</li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card">
                <div class="card-body p-0 py-3">
                    <button type="button" onclick="payNow(this)" class="btn mt-0 btn-style-red disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Next</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    $(document).ready(function()
    {
        $('input[name="plan"]').eq(0).click();
    })
    
    $('input[name="plan"]').click(function()
    {
        let val = $('input[name="plan"]:checked').attr('id');
        let id = [];
        let header = $('.card-header');
        for(let i=0;i<header.length;i++)
        {
            id.push(header[i].id);
        }
        for(let j=0;j<id.length;j++)
        {
            $('#'+id[j]).removeClass('first_pkg second_pkg third_pkg').addClass('white_pkg');
            if(id[j] == 'color-'+val)
            {
                $('.desc').addClass('d-none').removeClass('d-flex');
                $('.desc_'+j).addClass('d-flex').removeClass('d-none');
                if(val == '0')
                {
                    $('#'+id[j]).addClass('first_pkg');
                    $('label[for='+val+']').css('color','white!important;');
                }else{
                    if(val == '1')
                    {
                        $('#'+id[j]).addClass('second_pkg');
                        $('label[for='+val+']').css('color','white!important;');
                    }else{
                        $('#'+id[j]).addClass('third_pkg');
                        $('label[for='+val+']').css('color','white!important;');
                    }
                }
            }
        }
    })
    
    function payNow(ele)
    {
        $(ele).attr('disabled',true);
        
        location.href="<?= base_url(); ?>logintype?clickedOn=missing";
    }
</script>