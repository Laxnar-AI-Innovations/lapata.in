<style>
    .background {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 0.375rem;
      height: 100%;
      width: 100%;
      background: url('<?= base_url(); ?>assets_landing_page/img/Mahakumbh-main.jpg') no-repeat center center/cover;
      z-index: 1; /* Behind content */
      filter: blur(1px);
    }
    .heading_coral{
        background-color:coral!important;
    }

    .heading_gold{
        background-color:#52b296!important;
    }

    .heading_light_blue{
        background-color: lightblue!important;
    }

    .heading_black{
        color:black!important;
    }
    .icon_black{
        color:black;
    }
    .content {
      position: relative;
      z-index: 2; /* Above background */
      color: #ffffff; /* White text */
      margin: auto;
      text-align: center;
      border-radius: 10px; /* Optional rounded corners */      
      transform: translateY(0%);
    }
</style>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?= base_url(); ?>NonKyc/missing_details">
                    <div class="card info-card pb-0 revenue-card heading_coral" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title heading_black" >Upload Details of- </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="bi bi-upload"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;">1. Missing</p><p style="font-size: 14px;font-weight: bold;">2. Unknown</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?php echo base_url(); ?>NonKyc/search_person_details">
                    <div class="card info-card pb-0 revenue-card heading_gold" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title heading_black" >Search Details By- </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="bi bi-search"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;"><p style="font-size: 14px;font-weight: bold;">1. Face Photo</p><p style="font-size: 14px;font-weight: bold;">2. Identity</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="<?= base_url(); ?>NonKyc/upload_details">
                    <div class="card info-card sales-card heading_light_blue" style="height:200px;">
                        <div class="card-body ">
                            <h5 class="card-title heading_black" >Upload Details (Self)of - </h5>
                            <div class="d-flex">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_black"><i class="fa fa-users"></i></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;">1. Add Family Member</p><p style="font-size: 14px;font-weight: bold;">2. My Profile</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            <?php 
                $getCurrentUser = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                if($getCurrentUser[0]['specialType'] != NULL)
                {
                    $getTransactionDetail = $this->db->query('select distinct paymentType from funneltransactions where paymentType is not null and userId='.$_SESSION['user_id'])->result_array();
                    if(count($getTransactionDetail) > 0)
                    {
                        if(in_array($getTransactionDetail[0]['paymentType'],['missing']))
                        {
                            $getIfFinalSubmitted = $this->db->query('select * from funneltransactions where paymentType="missing" and userId='.$_SESSION['user_id'].' and isFinalSubmitted = 0')->result_array();
                            if(count($getIfFinalSubmitted) > 0)
                            {
            ?>
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="javascript:void(0)" onclick="showAlertAccordingly('missing')">
                    <div class="card info-card sales-card" style="height:160px;background: darkorange;">
                        <div class="card-body py-0">
                            <h5 class="card-title heading_black" >Funnel Missing Details -  </h5>
                            <div class="d-flex align-items-baseline">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_red"><img src="<?= base_url(); ?>assets_landing_page/people_13805124.png" class="img-fluid ms-1" style="height: 50px;"></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;color: black;">Add Missing Person</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            <?php 
                }  }
                if(in_array($getTransactionDetail[0]['paymentType'],['family']))
                {
                    $getIfFinalSubmitted = $this->db->query('select * from funneltransactions where paymentType="family" and userId='.$_SESSION['user_id'].' and isFinalSubmitted = 0')->result_array();
                    if(count($getIfFinalSubmitted) > 0)
                    {
            ?>
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <a href="javascript:void(0)" onclick="showAlertAccordingly('missing')">
                    <div class="card info-card sales-card" style="height:160px;background: darkorange;">
                        <div class="card-body py-0">
                            <h5 class="card-title heading_black" >Funnel Family Details -  </h5>
                            <div class="d-flex align-items-baseline">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <span class="icon_green"><img src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" style="height: 50px;" class="img-fluid ms-1"></span>
                                </div>
                                <div class="ps-3">
                                    <span class="heading_black"><p style="font-size: 14px;font-weight: bold;color: black;">Add Family Person</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- End Sales Card -->
            <?php } } } } ?>

            <div class="col-xxl-4 col-lg-4 col-md-6 d-none">
                <a href="<?= base_url(); ?>NonKyc/khoya_paya_box" class="position-relative">
                    <div class="background"></div>
                    <div class="content">
                        <div class="card info-card pb-0 revenue-card" style="height:200px;background:inherit;text-shadow: 2px 2px 4px rgba(255, 153, 51,0.6);font-family: Cinzel !important;">
                            <div class="card-body ">
                                <h5 class="card-title bg-white fs-15 p-3 mt-3" style="font-size:1rem;border-radius: 10px 10px;"><b class="text-gradient1">Upload Details Of - </b></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <span class="icon_red"><img src="<?= base_url(); ?>assets/Prayagraj_Mahakumbh_2025_Logo-removebg-preview.png" class="img-fluid"></span>
                                    </div>
                                    <div class="ps-3" style="text-align:justify;">
                                        <span class="heading_black"><p style="font-size: 17px;font-weight: bold;">1. General / Khoya Paya</p><p style="font-size: 17px;font-weight: bold;">2. Edit / History</p><p style="font-size: 17px;font-weight: bold;">3. Search</p></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<script type="text/javascript">
    <?php 
        $getFunnelTransactions = $this->db->query('select * from funneltransactions where userId='.$_SESSION['user_id'].' and isFinalSubmitted=0 and dontShowAgain=0 order by Id desc')->result_array();
        if(count($getFunnelTransactions) > 0)
        {        
            if(!isset($_SESSION['isAlreadyShown']))
            {
    ?>
    Swal.fire({
        iconHtml: "<div id='lottie-animation' style='width:200px;height:200px;'></div>",
        didOpen: () => {
            lottie.loadAnimation({
                container: document.getElementById('lottie-animation'), // Animation render hone ka container
                renderer: 'svg',
                path: 'assets_landing_page/Animation - 1743862388472.json',
              });  
        },
        customClass:{
            title:'pt-1',
            icon:'mb-0 border-0',
            htmlContainer:'pt-2 px-3',
            actions : 'mt-0'
        },
        allowOutsideClick:false,
        html:
            '<h6 class="mb-2 text-center"><b style="color:red;">Alert: </b><b style="color:black;">Payment received for a <?= $getFunnelTransactions[0]['paymentType']; ?> person for <?= $getFunnelTransactions[0]['duration']; ?>, but no form submission found.</b></h6><h6 class="mb-2 text-center"><b style="color:black;">Please complete the required information.</b></h6><div class="row justify-content-center"><div class="col-6 px-0"><button style="padding:0.6rem!important;" type="button" class="btn btn-style-red w-100" onclick="dontShowAgain()">Don&#39;t Show Again</button></div><div class="col-6 px-1"><button type="button" style="padding:0.6rem!important;" class="btn btn-style-five w-100" onclick="clickHere()">Click here</button></div></div>',
        showCloseButton: true,
        showCancelButton: false,
        confirmButtonText:'OK',
        cancelButtonText:'No',
        focusConfirm: false,
        showConfirmButton:false
    })       

    function clickHere()
    {
        <?php 
            if($getFunnelTransactions[0]['paymentType'] == 'missing')
            {
        ?>
        location.href="<?= base_url(); ?>upload-missing-funnel";
        <?php }else{ ?>
        location.href="<?= base_url(); ?>upload-family-member-funnel";
        <?php } ?>
    }

    function dontShowAgain()
    {
        let data = new FormData();
        data.append('Id',<?= $getFunnelTransactions[0]['Id']; ?>);   
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>NonKyc/dontShowAgain',
            type:'post',
            processData:false,
            contentType:false,
            data:data,
            cache:false,
            success:function(res)
            {
                swal.close();
            }
        })
    }
    <?php } } ?>
    function showAlertAccordingly(type)
    {
        if(type == 'missing')
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Upload Missing</strong>',
                iconHtml: "<img src='<?= base_url(); ?>assets_landing_page/people_13805124.png' style='width:100%;height:55px;'>",
                customClass:{
                    title:'pt-1',
                    icon:'mb-0',
                    htmlContainer:'pt-2',
                    actions : 'mt-0'
                },
                allowOutsideClick:false,
                html:
                    '<h6><b style="color:black;">You have completed the payment successfully.</b></h6><div class="row"><div class="col-12"><button type="button" class="btn btn-success btn-style-green" onclick="jumpAccordingly(`missing`)">Click here to proceed</button></div></div>',
                showCloseButton: true,
                showCancelButton: false,
                confirmButtonText:'OK',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:false
            })       
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Upload Family</strong>',
                iconHtml: "<img src='<?= base_url(); ?>assets_landing_page/familiy_15540129.png' style='width:100%;height:55px;'>",
                customClass:{
                    title:'pt-1',
                    icon:'mb-0',
                    htmlContainer:'pt-2',
                    actions : 'mt-0'
                },
                allowOutsideClick:false,
                html:
                    '<h6><b style="color:black;">You have completed the payment successfully.</b></h6><div class="row"><div class="col-12"><button type="button" class="btn btn-success btn-style-green" onclick="jumpAccordingly(`family`)">Click here to proceed</button></div></div>',
                showCloseButton: true,
                showCancelButton: false,
                confirmButtonText:'OK',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:false
            })       
        }
    }

    function jumpAccordingly(type)
    {
        if(type == 'missing')
        {
            location.href="<?= base_url(); ?>upload-missing-funnel";
        }else{
            location.href="<?= base_url(); ?>upload-family-member-funnel";
        }
    }
</script>