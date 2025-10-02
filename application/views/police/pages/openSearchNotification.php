<style>
    .social a.btn-circle .btn-google {
    color: #fff;
    background-color: #e44134;
    border-color: transparent;
    }
    .btn-police1{
    color: #fff!important;
    background-color: green!important;
    border-color: transparent;
    }
    .btn-police2{
    color: #fff!important;
    background-color: #e44134!important;
    border-color: transparent;
    }
    .btn-police3{
    color: #fff!important;
    background-color: #5daed5!important;
    border-color: transparent;
    }
    .btn-police4{
    color: #fff!important;
    background-color: orange!important;
    border-color: transparent;
    }
    .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
    width: 2.8rem;
    height: 2.8rem;
    font-size: .8rem;
    }
    .btn.btn-circle {
    padding: 0;
    border-radius: 100%!important;
    width: 2.2rem;
    height: 2.2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    line-height: 1;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    margin-right:2px;
    }
    .btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
    }
/* Defining a custom border on all
        sides except the top side */
    .custom-field {
        border: 4px solid black;
        border-top: none;
        margin: 0;
        padding: 8px;
    }

    /* Defining the style of the 
    heading/legend for custom fieldset */
    .custom-field h1 {
        font: 16px normal;
        margin: -16px -8px 0;
    }

    /* Using float:left allows us to mimic
       the legend like fieldset. The 
       float:right property can also be 
       used to show the legend on right side */

    .custom-field h1 span {
        float: left;
    }

    /* Creating the custom top border to make
        it look like fieldset defining small 
        border before the legend. The width 
        can be modified to change position 
        of the legend */
    .custom-field h1:before {
        border-top: 4px solid black;
        content: ' ';
        float: left;
        margin: 8px 2px 0 -1px;
        width: calc(90% - 63%);
    }

    /* Defining a long border after the 
    legend, using overflow hidden to 
    actually hide the line behind the 
    legend text. It can be removed
    for a different effect */
    .custom-field h1:after {
        border-top: 4px solid black;
        content: ' ';
        display: block;
        height: 24px;
        left: 2px;
        margin: 0 1px 0 0;
        overflow: hidden;
        position: relative;
        top: 8px;
    }
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
      <p class="mb-0">Welcome,<b><?= $_SESSION['thanaName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-header py-0">
                        <h5 class="text-danger  my-0 card-title text-center">Latest Searched Photo</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row justify-content-center mb-4">
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <a href="<?= base_url().''.$notification[0]['searchPhoto']; ?>" data-lightbox="roadtrip">
                                    <img src="<?= base_url().''.$notification[0]['searchPhoto']; ?>" style="width:100%;height:200px;">
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-sm-12 col-md-6 col-lg-4 px-0">
                                <div class="custom-field pb-3">
                                    <h1>
                                        <span style="font-weight:bold;color:red;font-size:large;">
                                            Matched Result
                                        </span>
                                    </h1>
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <?php 
                                                $getDetails = $this->db->query('select * from unknown_person where Application_no="'.$notification[0]['searchedAppNumber'].'"')->result_array();
                                                if(count($getDetails) > 0)
                                                {
                                            ?>
                                            <p class="mb-1 text-center"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $getDetails[0]['Application_no']; ?></b></p>
                                            <p class=" text-center"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y H:i A',strtotime($getDetails[0]['dateCreated'])); ?></b></p>
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-5">
                                                    <a href="<?= base_url().''.$getDetails[0]['Photo']; ?>" data-lightbox="roadtrip">
                                                        <img src="<?= base_url().''.$getDetails[0]['Photo']; ?>" style="width:100%;height:100px;">
                                                    </a>
                                                </div>
                                                <div class="col-7">
                                                    <?php if($getDetails[0]['person_name'] != '' || $getDetails[0]['person_name'] != NULL){ ?>
                                                        <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="font-size:.8rem!important;color:black;"><?php echo $getDetails[0]['person_name']??"--" ?></b></p>
                                                        <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($getDetails[0]['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                                                    <?php }else{ ?>
                                                        <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($getDetails[0]['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                                                    <?php } ?>
                                                   
                                                    <?php if($getDetails[0]['Age'] != '' || $getDetails[0]['Age'] != NULL){ ?>
                                                        <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age Band - </b><b style="font-size:.8rem!important;color:black;"><?php echo $getDetails[0]['Age']??"--"?></b></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <?php }else{ ?>
                                            <h6 class="text-center text-danger">No Details Found</h6>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if($notification[0]['isLogin'] == 1)
                            {
                        ?>
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <h6 class="text-danger text-center"><b>Note:- If you find this information <br> useful otherwise ignore this <br>notification.</b></h6>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-sm-12 col-md-6 col-lg-3 px-0">
                                <div class="custom-field pb-3">
                                    <h1>
                                        <span style="font-weight:bold;color:black;font-size:large;">
                                            Contact to Searcher
                                        </span>
                                    </h1>
                                    <div class="row justify-content-center mt-2">
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($notification[0]['loggedInUserId'] != NULL)
                                                {
                                                    $getUserDetail = $this->db->query('select * from user where uid='.$notification[0]['loggedInUserId'])->result_array();
                                            ?>
                                            <h5 class="text-warning"><b>SAMAJ SEVI</b></h5>
                                            <h6 class="text-dark"><b><?= $getUserDetail[0]['aadharname']; ?></b></h6>
                                            <h6 class="text-dark"><b><?= $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state']; ?></b></h6>
                                            <a href="tel:<?= $notification[0]['mobileNumber']; ?>" class="btn btn-circle btn-sm text-light bg-warning" ><i class="fa fa-phone fa-rotate-90"></i> </a>
                                            <?php }else if($notification[0]['policeId'] != NULL){ 
                                                $getPoliceDetail = $this->db->query('select * from police where police_id='.$notification[0]['policeId'])->result_array();
                                            ?>
                                            <h5 class="text-danger"><b>POLICE THANA</b></h5>
                                            <h6 class="text-dark"><b><?= $getPoliceDetail[0]['thanaName']; ?></b></h6>
                                            <h6 class="text-dark"><b><?= $getPoliceDetail[0]['district'].','.$getPoliceDetail[0]['state']; ?></b></h6>
                                            <a href="tel:<?= $notification[0]['mobileNumber']; ?>" class="btn btn-circle btn-sm text-light bg-danger" ><i class="fa fa-phone fa-rotate-90"></i> </a>
                                            <?php }else if($notification[0]['ngoId'] != NULL){ 
                                                $getNgoDetail = $this->db->query('select * from ngo where Id='.$notification[0]['ngoId'])->result_array();
                                            ?>
                                            <h5 class="text-success"><b>NGO</b></h5>
                                            <h6 class="text-dark"><b><?= $getNgoDetail[0]['ngoName']; ?></b></h6>
                                            <h6 class="text-dark"><b><?= $getNgoDetail[0]['ngoBranch'].','.$getNgoDetail[0]['ngoState']; ?></b></h6>
                                            <a href="tel:<?= $notification[0]['mobileNumber']; ?>" class="btn btn-circle btn-sm text-light bg-success" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="row justify-content-center mb-3">
                            <div class="col-12">
                                <h6 class="text-danger text-center"><b>Note:- If you find the information <br>useful otherwise ignore.</b></h6>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-sm-12 col-md-6 col-lg-3 px-0">
                                <div class="custom-field pb-3">
                                    <h1>
                                        <span style="font-weight:bold;color:black;font-size:large;">
                                            Contact to Searcher
                                        </span>
                                    </h1>
                                    <h5 class="text-primary text-center mt-2"><b>GENERAL USER</b></h5>
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <a href="tel:<?= $notification[0]['mobileNumber']; ?>" class="btn btn-circle btn-sm bg-primary text-light" ><i class="fa fa-phone fa-rotate-90"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>