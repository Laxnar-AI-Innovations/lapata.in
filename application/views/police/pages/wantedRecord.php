<style>
.table-bordered,td,th,tr{
    border:2px solid black!important;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
	background-color: #F5F5F5;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #F5F5F5;
  border-radius: 10px;
  background-image: -webkit-gradient(linear,
				   left bottom,
				   left top,
				   color-stop(0.44, rgb(122,153,217)),
				   color-stop(0.72, rgb(73,125,189)),
				   color-stop(0.86, rgb(28,58,148)));
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<style>
    .w-lg-max-content{
        width:100%!important;
    }
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#333333;
      margin:0;
    }
    .phone svg {
      width:18px;
      height:18px;
      margin-top:2px;
      margin-right:4px;
    }
    .phone svg path {
      fill:#f03454;
    }
    .phone svg path:nth-child(2) {
      -webkit-animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    .phone svg path:nth-child(3) {
      -webkit-animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    
    
    
    
    /* Animate phone */
    
    @-webkit-keyframes header-phone {
      0%,30% {opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80% {opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone {
      0%,30%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @-webkit-keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
      .btn-style-green{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: green!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-green:hover {
        color: #fff!important;
        background-color:#0daf96!important;
    }
    .btn-style-red{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #ff2201!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-red:hover {
        color: #fff!important;
        background-color:#0daf96!important;
    }
    .form-floating>.form-control-plaintext~label, .form-floating>.form-control:focus~label, .form-floating>.form-control:not(:placeholder-shown)~label, .form-floating>.form-select~label {
        transform: scale(.85) translateY(-0.5rem) translateX(1rem);
    }
</style>

<main id="main" class="main">

    <div class="pagetitle mb-0">
      <p class="mb-0">Welcome,<b><?= $_SESSION['aadharName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-body p-3">
                        <div class="pb-0">
                            <h5 class="card-title mb-0 text-center pb-0 pt-0 text-danger">Wanted Records (<?php echo substr_replace($wantedDetail[0]['aadharNumber'],'xxxx xxxx ',0,8); ?>)</h5>
                        </div>
                    </div>
                </div>
                <?php 
                    if(count($wantedDetail) > 0)
                    {
                        foreach($wantedDetail as $k=>$v)
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['aadharNumber'].'"')->result_array();
                            $getFirDetail = $this->db->query('select * from crimeFir where crimeId="'.$v['Id'].'"')->result_array();
                ?>
                <div class="col-lg-4 col-md-6 px-0 px-md-2 col-12 col-search pb-2">
                    <div class="card my-3 shiva_height p-2">
                        <div class="card-body px-0 py-2">
                            <div class="row align-items-center ps-3 mx-0 justify-content-center">
                                <?php
                                    if($v['photo'] != '' || $v['photo'] != NULL)
                                    {
                                ?>
                                <div class="col-8 text-center mb-2 border border-danger p-2">
                                    <b style="color:black;">Reward:- </b><b style="color:#757575;font-size:.8rem!important">Rs. <?= $v['rewardAmount']; ?></b>
                                </div>
                                <div class="col-4 text-end mb-2">
                                    <button type="button" class="btn btn-dark" onclick="share(this,'<?php echo $v['Id']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                </div>
                                <div class="col-12">
                                    <p style="line-height:normal;" class="mb-2"><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($v['dateCreated'])); ?></b></p>
                                </div>
                                <div class="col-5 ">
                                    <a href="<?php echo base_url().$v['photo']?>" data-lightbox="roadtrip">
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().$v['photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                    </a>
                                </div>
                                <?php }else{ ?>
                                <div class="col-5 ">
                                    <?php if($v['gender'] == 'Male'){ ?>
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                    <?php }else{ ?>
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <div class="col-7 px-0">
                                    <?php if($v['personName'] != '' || $v['personName'] != NULL){ ?>
                                        <p class="card-title text-start py-0" style="line-height:normal;"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $v['personName']??"--" ?></span></p>
                                        <p class="card-title text-start py-0" style="line-height:normal;"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($v['gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                    <?php }else{ ?>
                                        <p class="card-title text-start py-0 mb-0" style="line-height:normal;"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($v['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                    <?php } ?>
                                   
                                    <?php if($v['age'] != '' || $v['age'] != NULL){ ?>
                                        <p class="card-title text-start py-0" style="line-height:normal;"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $v['age']??"--"?></span></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if($v['message'] != '' || $v['message'] != NULL){ ?>
                            <div class="row col-12 px-4 pt-0 mt-2" style="max-height:100px">
                               <p class="card-title text-start py-0" style="line-height:normal;"><b style="color:black;font-weight:600;">Message from Police Thana :- </b><br><span class="message text-danger"><?php echo $v['message']??"--"?></span></p> 
                            </div>
                            <?php } ?>
                            <hr class="my-2">
                            <?php 
                                if($v['panNumber'] != '' || $v['voterId'] != '' || $v['dlNumber'] != '')
                                {
                            ?>
                            <div class="row w-100 mx-0 align-items-center">
                                <div class="col-12">
                                    <?php 
                                        if($v['panNumber'] != '')
                                        {
                                    ?>
                                    <p class="mb-0 card-title" style="color:black;font-size:.8rem!important;"><b>PAN NO:- </b><?php echo strtoupper($v['panNumber']); ?></p>
                                    <?php } ?>
                                    <?php 
                                        if($v['voterId'] != '')
                                        {
                                    ?>
                                    <p class="mb-0 card-title" style="color:black;font-size:.8rem!important;"><b>VOTER NO:- </b><?php echo $v['voterId']; ?></p>
                                    <?php } ?>
                                    <?php 
                                        if($v['dlNumber'] != '')
                                        {
                                    ?>
                                    <p class="mb-0 card-title" style="color:black;font-size:.8rem!important;"><b>DL NO:- </b><?php echo $v['dlNumber']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr class="my-2">
                            <?php } ?>
                            <?php
                                if($v['policeThanaId'] != NULL)
                                {
                                    $getPoliceDetails = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            ?>
                            <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                <div class="col-12 text-start">
                                     <p class="my-2" style="line-height:normal;"><b style="color:black;font-size:.8rem!important;">Uploaded By :- </b>
                                     <span style="text-transform:uppercase;font-size:.8rem!important;color:black;"><?php echo $getPoliceDetails[0]['thanaName'].' Police Thana,'; ?> 
                                     <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></span></p>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="row w-100 mx-0 align-items-center justify-content-center">
                                <div class="col-12 mb-2">
                                    <b style="font-size:.8rem!important;color:black;">Contact To: - </b><span style="text-transform:capitalize;font-size:.8rem!important;color:black;">POLICE THANA</span>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="tel:<?= $v['well1']; ?>" class="btn btn-sm px-2 btn-success mb-2 mx-1" style="color:white;"><i class="fa fa-phone"></i> &nbsp;<?= $v['well1']; ?></a>
                                    <?php if($v['well2']!='' || $v['well2']!=null) { ?>
                                    <a href="tel:<?= $v['well2']; ?>" class="btn btn-sm px-2 btn-primary mb-2 mx-1" style="color:white;"><i class="fa fa-phone"></i> &nbsp;<?= $v['well2']; ?></a>
                                    <?php } if($v['well3']!='' || $v['well3']!=null) { ?>
                                      <a href="tel:<?= $v['well2']; ?>" class="btn btn-sm px-2 btn-secondary mb-2 mx-1" style="color:white;"><i class="fa fa-phone"></i> &nbsp;<?= $v['well3']; ?></a>
                                    <?php }
                                      if($v['well4']!='' || $v['well4']!=null) { ?>
                                      <a href="tel:<?= $v['well4']; ?>" class="btn btn-sm px-2 btn-dark mb-2 mx-1" style="color:white;"><i class="fa fa-phone"></i> &nbsp;<?= $v['well4']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="row w-100 mx-0 align-items-center justify-content-center">
                                <div class="accordion" id="accordionExample<?php echo $k; ?>">
                                    <div class="accordion-item" style="border:0;">
                                        <h2 class="accordion-header text-center mb-0" id="headingOne<?php echo $k; ?>">
                                            <button class="accordion-button btn btn-style-grey collapsed" style="background:transparent!important;color:black!important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $k; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $k; ?>">
                                                View Fir Details
                                            </button>
                                        </h2>
                                        <div id="collapseOne<?php echo $k; ?>" class="accordion-collapse collapse mt-3" aria-labelledby="headingOne<?php echo $k; ?>" data-bs-parent="#accordionExample<?php echo $k; ?>">
                                            <div class="accordion-body">
                                                <div class="row mb-3 mx-0">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 px-0">
                                                        <?php 
                                                            if(count($getFirDetail) > 0)
                                                            {
                                                        ?>
                                                        <div class="table-responsive" style="max-height:300px;overflow-x:auto;">
                                                            <table class="table table-bordered text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th>FIR Date</th>
                                                                        <th>FIR No</th>
                                                                        <th>IPC Dhara</th>
                                                                        <th>Message</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php 
                                                                    foreach($getFirDetail as $k1=>$v1)
                                                                    {
                                                                        $dharaNumber = array();
                                                                        if($v1['ipcDhara'] != NULL)
                                                                        {
                                                                            $getDharaDetails = $this->db->query('select * from ipcDhara where Id in('.$v1['ipcDhara'].')')->result_array();
                                                                            foreach($getDharaDetails as $k2=>$v2)
                                                                            {
                                                                                array_push($dharaNumber,$v2['ipcNumber']);   
                                                                            }
                                                                        }
                                                                ?>
                                                                <tr>
                                                                    <td style="padding:0.6rem;"><?php echo ($v1['firDate'] != NULL ? date('d-m-Y',strtotime($v1['firDate'])) : '-') ?></td>
                                                                    <td style="padding:0.6rem;"><?php echo ($v1['firNumber'] != NULL ? $v1['firNumber'] : '-') ?></td>
                                                                    <td style="padding:0.6rem;"><?php echo ($v1['ipcDhara'] != NULL ? implode(',',$dharaNumber) : '-') ?></td>
                                                                    <td style="padding:0.6rem;"><?= ($v['message'] != '' ? $v['message'] : '-'); ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <div class="w-100">
                    <h5 class="card-title py-2 my-3 text-center text-primary">No Wanted Records</h5>
                </div>    
                <?php } ?>
            </div>
        </div>

  </section>
</main>
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
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 80,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
	
    function view(ele,id)
    {
        window.open('<?php echo base_url(); ?>find-wanted-person?Id='+id,'_blank');   
    }
    
    function share(ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
            navigator.share({
              title: 'Khoji',
              url: url,
            }).then(() => {
              toastr.success('Thanks for sharing!');
            })
            .catch(console.error);
          } else {
                const shareButton = document.querySelector('.share-button');
                const shareDialog = document.querySelector('.share-dialog');
                const closeButton = document.querySelector('.close-button');
                
                shareButton.addEventListener('click', event => {
                  shareDialog.classList.add('is-open');
                });
                
                closeButton.addEventListener('click', event => {
                  shareDialog.classList.remove('is-open');
                });
          }
    }
</script>