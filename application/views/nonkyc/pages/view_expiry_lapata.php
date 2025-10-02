<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	.shiva_height{
        height:530px;
        max-height:530px;
    }
}

@media (max-width:768px) {

	.shiva_height{
        height:450px;
        max-height:450px;
    }

}

@media (max-width:450px) {

	.shiva_height{
       height:auto;
        max-height:fit-content;
    }
}
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

</style>
<!--end card css-->
<main id="main" class="main">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-xl-12 px-0">
                <div class="row mx-0">
                    <?php
                        $getDetails = $this->db->query('select * from searchfacehistoryafterlogin where Id='.$_SESSION['searchFaceIdAfterLogin'])->result_array();
                        $unknownIds = array();
                        if($getDetails[0]['matchedUnknownIds'] != '')
                        {
                            $unknownIds = array_unique(explode(',',$getDetails[0]['matchedUnknownIds']));   
                        }
                        $unknownperson = array();
                        if(count($unknownIds) > 0)
                        {
                            foreach($unknownIds as $k=>$v)
                            {
                                $this->db->where('id',$v);
                                array_push($unknownperson,$this->db->get('unknown_person')->result_array());
                            }
                        }
                        if(count($unknownperson) > 0)
                        {
                            $photos = array();
                            foreach($unknownIds as $k=>$v)
                            {
                                $getDetail = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                                array_push($photos,base_url().''.$getDetail[0]['Photo']);
                            }
                    ?>
                    <div class="card col-12">
                        <div class="card-header py-0">
                            <div class="row align-items-center my-3 d-md-flex d-none justify-content-center">
                                <div class="col-12 col-md-2 border border-5 border-dark px-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php 
                                                foreach($photos as $k=>$v)
                                                {
                                            ?>
                                            <div class="carousel-item <?= $k == 0 ? 'active' : ''; ?>">
                                                <a href="<?php echo $v; ?>" data-lightbox="roadtrip">
                                                    <img src="<?php echo $v; ?>" style="width:100%;height:200px;object-fit:fill;">
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <a href="javascript:void(0)" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a href="javascript:void(0)" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center my-3 d-md-flex d-none">
                                <div class="col-md-6 col-12">
                                    <h6 class="text-center card-title pb-2 mb-0 text-success" style="font-size:1.3rem;">Some Similar Matches Found !!</h6>  
                                    <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;">
                                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                                            <a  target="_blank" href="<?= base_url(); ?>NonKyc/searchMissingFace" class="text-danger" style="text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson) : count($unknownperson)); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 text-md-end text-center mb-3 mb-md-0">
                                    <a href="<?= base_url(); ?>NonKyc/searchMissingFace" target="_blank" class="btn btn-primary btn-style-five">View Results</a>
                                </div>
                            </div>
                            <div class="row align-items-center d-block d-md-none">
                                <div class="col-md-6 col-12 px-0">
                                    <h6 class="text-center card-title pb-2 mb-0 text-success" style="font-size:1.1rem;">Some Similar Matches Found !!</h6>  
                                </div>
                                <div class="col-10 mx-auto col-md-2 border border-5 border-dark px-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <?php 
                                                foreach($photos as $k=>$v)
                                                {
                                            ?>
                                            <div class="carousel-item <?= $k == 0 ? 'active' : ''; ?>">
                                                <a href="<?php echo $v; ?>" data-lightbox="roadtrip">
                                                    <img src="<?php echo $v; ?>" style="width:100%;height:200px;object-fit:fill;">
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <a href="javascript:void(0)" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a href="javascript:void(0)" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;">
                                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                                        <a  target="_blank" href="<?= base_url(); ?>NonKyc/searchMissingFace" class="text-danger" style="text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson) : count($unknownperson)); ?></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 text-md-end text-center mb-3 mt-2 my-md-0">
                                    <a href="<?= base_url(); ?>NonKyc/searchMissingFace" target="_blank" class="btn btn-primary btn-style-five">View Results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        } 
                    ?>
                </div>
            </div>
            <?php
                if(!isset($_GET['id']))
                {
                    $getUnknownDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
                }else{
                    $getTransactionDetail = $this->db->query('select * from uploadtransactions where Id='.$_GET['id'])->result_array();
                    $getUnknownDetail = $this->db->query('select * from unknown_person where Application_no="'.$getTransactionDetail[0]['idNumber'].'"')->result_array();
                }
                if(!empty($getUnknownDetail[0]['aadharNumber']) && !isset($getUnknownDetail[0]['aadharNumber']))
                {
                    $getLastTransaction = $this->db->query('select * from uploadtransactions where isKyc=0 and type="lapata" and userId='.$_SESSION['user_id'].' and idNumber="'.$getUnknownDetail[0]['aadharNumber'].'" order by Id desc')->result_array();
                }else{
                    $getLastTransaction = $this->db->query('select * from uploadWithoutTransactions where isKyc=0 and type="lapata" and userId='.$_SESSION['user_id'].' and idNumber="'.$getUnknownDetail[0]['Application_no'].'" order by Id desc')->result_array();
                }
                $getPackageDetails = $this->db->query('select * from packages where Id='.$getLastTransaction[0]['packageId'])->result_array();
                $date1 = date('Y-m-d',strtotime($getLastTransaction[0]['expiryDate']));
                $date2 = date('Y-m-d',strtotime($getLastTransaction[0]['dateCreated']));
                $diff = abs(strtotime($date2) - strtotime($date1));
                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                $label = '';
                if($days == 0)
                {
                    if($months > 1)
                    {
                        if($years == 0)
                        {
                            $label = $months.' Months' ;       
                        }else{
                            if($years > 1)
                            {
                                $label = $years.' Years' ;       
                            }else{
                                $label = 'Yearly' ;       
                            }
                        }
                    }else{
                        $label = 'Monthly' ; 
                    }
                }else{
                    $label = $days.' Day';
                }
            ?>
            <div class="col-sm-12 col-lg-4 col-md-5 me-md-3 mt-0 card px-0">
                <div class="card-header py-2">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 text-center" style="color:green;">
                            <i class="fa fa-check-circle" style="font-size:1.5em;"></i>
                            <br>
                            <h6>UPLOADED <br> SUCCESSFULLY</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 align-items-center my-3">
                    <div class="row px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> STATUS</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:green;"><b>Active</b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> PLAN</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo $label; ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID FROM</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getLastTransaction[0]['dateCreated'])); ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID TILL</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getLastTransaction[0]['expiryDate'])); ?></b></h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-2 mb-1 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="button" onclick="proceed(this)" class="btn mt-0 btn-style-green disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Proceed <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function proceed(ele)
    {
        $(ele).attr('disabled',true);
        location.href="<?php echo base_url().'NonKyc/lapata_login?pn=4'; ?>";
    }
</script>