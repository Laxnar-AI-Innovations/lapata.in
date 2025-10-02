<style>
::-webkit-scrollbar {
	width: 15px;
}

::-webkit-scrollbar-track {
	background-color: transparent;
}

::-webkit-scrollbar-thumb {
	background-color: var(--black);
}

.heading {
	margin-bottom: 20px;
	font-size: 30px;
	color: var(--black);
	text-transform: uppercase;
	text-align: center;
}

.btn {
	margin-top: 10px;
	display: inline-block;
	padding: 10px 30px;
	cursor: pointer;
	font-size: 17px;
	background-color: var(--light-bg);
	color: var(--black);
	text-transform: capitalize;
	text-align: center;
}

.btn:hover {
	background-color: var(--crimson);
	color: var(--white);
}

a:hover{
    background:transparent!important;
}

.gallery {
	padding: 20px;
	text-align: center;
	padding-left: 320px;
}

.gallery .image-container {
	/*gap: 15px;*/
	/*columns: 3 350px;*/
}

.gallery .image-container img {
	break-inside: avoid;
	width: 100%;
	background-color: var(--white);
	object-fit: cover;
	cursor: pointer;
	margin-bottom: 10px;
	box-shadow: var(--box-shadow);
}

.gallery .image-container img:hover {
	transform: scale(.95);
}

.side-bar {
	height: -webkit-fill-available;
	width: 300px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
	background-color: var(--white);
	padding: 20px;
	border-right: var(--border);
	overflow-y: scroll;
}

.side-bar::-webkit-scrollbar {
	width: 5px;
}

.side-bar .box {
	border-bottom: var(--border);
	padding: 20px 0;
}

.side-bar .box .title {
	margin-bottom: 10px;
	color: var(--black);
	font-size: 20px;
	text-transform: uppercase;
}

.side-bar .btn {
	margin-left: 5px;
}

.side-bar .btn.active {
	background-color: var(--crimson);
	color: var(--white);
}

.side-bar .box #search-box {
	border: var(--border);
	padding: 12px;
	text-transform: none;
	color: var(--light-black);
	width: 100%;
	font-size: 17px;
}

.side-bar .reset-btn .btn {
	margin-top: 20px;
	width: 100%;
}

#side-menu {
	position: fixed;
	top: 135px;
	right: 50px;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background-color: var(--white);
	color: var(--black);
	cursor: pointer;
	font-size: 25px;
	z-index: 1100;
	box-shadow: var(--box-shadow);
	border: var(--border);
	display: none;
}

.image-popup {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1200;
	background-color: var(--dark-bg);
	height: 100vh;
	width: 100%;
	display: none;
	align-items: center;
	justify-content: center;
	padding: 100px 20px;
	overflow-y: scroll;
}

.image-popup img {
	width: 600px;
	cursor: pointer;
	border: 10px solid var(--white);
	background-color: var(--white);
}



:root {
	--crimson: crimson;
	--black: #333;
	--white: #fff;
	--light-black: #666;
	--light-bg: #eee;
	--dark-bg: rgba(0, 0, 0, .7);
	--border: 1px solid #999;
	--box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

* {
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	transition: all .2s linear;
}

select{
    appearance:auto!important;
}

@media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	#side-menu {
		display: block;
	}

	#side-menu.fa-times {
		top: 0;
		left: 300px;
	}

	.side-bar {
		left: -350px;
	}

	.side-bar.active {
		box-shadow: 0 0 0 100vw var(--dark-bg);
		left: 0;
		z-index: 1000;
	}
    .shiva_height{
        height:530px;
        max-height:550px;
    }
}

@media (max-width:1024px) {
    .shiva_height{
        height:580px;
        max-height:580px;
    }
}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}
	    .shiva_height{
        height:530px;
        max-height:530px;
    }

}

@media (max-width:450px) {

	#side-menu.fa-times {
		top: 10px;
		left: 10px;
	}

	.side-bar.active {
		padding-top: 70px;
	}
	    .shiva_height{
       height:auto;
        max-height:100%;
    }

}
.margin_tp{
 margin-top: 120px;
    /*background-color: floralwhite;*/
    /*border-radius: 6px 9px;*/
    /*border: 1px solid lightpink;   */
}
</style>

<!--card ke liye css-->
<style>
  /*********************** Demo - 3 *******************/
.email-signature3{font-family:'Roboto Condensed',sans-serif;background:linear-gradient(-45deg,#ced6e0,#dfe4ea);padding:0 0 60px 180px;box-shadow:10px 10px 10px rgba(0,0,0,.2);position:relative}
.email-signature3 .signature-img{background:linear-gradient(-45deg,#e82c56,#fc718e);width:145px;height:145px;padding:10px 10px;overflow:hidden;position:absolute;top:25px;left:17px}
.email-signature3 .signature-img img{width:100%;height:auto}
.email-signature3 .signature-details{color:#fff;background:linear-gradient(to right,#e82c56,#fc718e);padding:15px 15px;margin-bottom:15px;box-shadow:0 3px 10px rgba(0,0,0,.3)}
.email-signature3 .title{font-size:24px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin:0 0 5px;display:inline-block}
.email-signature3 .title:after{content:'/';display:inline-block;margin:0 0 0 5px}
.email-signature3 .post{font-size:15px;font-weight:500;letter-spacing:1px;text-transform:capitalize;display:inline-block}
.email-signature3 .signature-content{color:#5a5a5a;font-size:16px;line-height:35px;padding:0 0 0 10px;margin:0;list-style:none}
.email-signature3 .signature-content li span{margin:0 6px 0 0}
.email-signature3 .icon{padding:0;margin:0;list-style:none;box-shadow:0 -1px 10px rgba(0,0,0,.3);position:absolute;bottom:0;left:0}
.email-signature3 .icon li{margin-right:-35px;display:inline-block;-webkit-clip-path:polygon(29% 0,100% 0,69% 100%,0 100%);clip-path:polygon(29% 0,100% 0,69% 100%,0 100%)}
.email-signature3 .icon li:first-child{-webkit-clip-path:polygon(0 0,100% 0,69% 100%,0 100%);clip-path:polygon(0 0,100% 0,69% 100%,0 100%)}
.email-signature3 .icon li a{color:#fff;background:linear-gradient(to right,#e82c56 50%,#fc718e);font-size:18px;line-height:45px;height:45px;padding:0 40px;display:block;transition:all .3s ease 0s}
.email-signature3 .icon li a:hover{background:linear-gradient(to right,#373c44 50%,#57606f);text-decoration:none;}
.email-signature3 .signature-website{font-size:16px;position:absolute;bottom:10px;right:20px}
@media screen and (max-width:576px){.email-signature3{padding:180px 0 75px 0}
.email-signature3 .signature-img{top:17px;left:0;right:0;margin:0 auto}
.email-signature3 .signature-details{text-align:center}
.email-signature3 .title{display:block}
.email-signature3 .title:after{display:none}
.email-signature3 .post{display:block;margin:0}
.email-signature3 .signature-content{padding:0;margin-bottom:7px;text-align:center}
.email-signature3 .icon{box-shadow:none;transform:translateX(-50%);bottom:42px;left:50%}
.email-signature3 .icon li{margin:0 3px;-webkit-clip-path:none;clip-path:none}
.email-signature3 .icon li:first-child{-webkit-clip-path:none;clip-path:none}
.email-signature3 .icon li a{text-align:center;line-height:30px;width:30px;height:30px;padding:0}
.email-signature3 .signature-website{transform:translateX(50%);right:50%;bottom:10px}
}

</style>
<!--end card css-->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Manage Unknown Person</h1>
    </div>
    <div>
        <div class="container-fluid px-0">
            <?php 
                if(count($data) > 0)
                {
            ?>
            <div class="row">
                <div class="col-lg-8 col-xl col-sm-12 col-md-7">
                    <h2 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo (($rows) != 0 ? ((($rows) > 1) ? (($rows).' Persons') : (($rows).' Person')) : 'NO Complaints'); ?></span> Found...</b></h2>
                </div>
                <div class="col-lg-4 col-xl-3 col-sm-12 mt-3 mt-md-0 col-md-5">
                    <input type="text" class="form-control col-xl-auto col-12" value="<?= isset($_GET['appNo']) ? strtoupper($_GET['appNo']) : ''; ?>" placeholder="Search by application number..." id="search-box">
                </div>
            </div>
        	<div class="gallery px-0">
                <div class="image-container row">
                    <?php
                        foreach($data as $row)
                        {
                            $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$row['id'])->result_array();
                            $goldHUID = array();
                            $goldType = array();
                            if(count($getGoldDetails) > 0)
                            {
                                foreach($getGoldDetails as $k=>$v)
                                {
                                    array_push($goldType,$v['goldType']);
                                    array_push($goldHUID,$v['goldHUID']);
                                }
                            }
                            $isActive = '';
                            if($row['isFound'] == 0)
                            {
                                $isActive = 'checked';
                            }
                          ?>
                        <div class="col-lg-4 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-appNo="<?= $row['Application_no']; ?>" data-imageId="<?php echo $row['imageId']??"-" ?>" data-cat="<?php echo $row['DL_no']??"-" ?>" data-goldtype="<?= implode(',',$goldType); ?>" data-goldhuid="<?= implode(',',$goldHUID); ?>" data-gender="<?php echo $row['Gender']??"" ?>" data-vehicle="<?php echo $row['vehicle_no']??"" ?>" data-aadhar="<?php echo $row['aadharNumber']??"" ?>" data-pan="<?php echo $row['PAN']??"" ?>" data-voter="<?php echo $row['voter_id']??"" ?>" data-dl="<?php echo $row['DL_no']??"" ?>" data-age="<?php echo $row['Age']??"" ?>" data-state="<?php echo $row['state']??"" ?>" data-district="<?php echo $row['district']??"" ?>" data-city="<?php echo $row['city']??"" ?>" data-personname="<?php echo $row['person_name']??"" ?>"  data-search="<?php echo $row['DL_no']; ?><?php echo $row['aadharNumber']; ?><?php echo $row['PAN']; ?><?php echo $row['person_name']; ?><?php echo $row['Message']; ?>" >
                            <div class="card mb-3 shiva_height" >
                                <div class="card-body px-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col mb-2">
                                            <div class="row">
                                                <div class="col col-md-6 col-lg col-xl-6 mt-3">
                                                    <div class="form-check form-switch">
                                                      <input class="form-check-input" type="checkbox" onclick="showColorAccordingly(this,<?= $row['id']; ?>,'<?= $row['Application_no']; ?>')" id="<?= $row['id']; ?>" <?= $isActive; ?>>
                                                      <label class="form-check-label" for="<?= $row['id']; ?>"><b id="statusColor<?= $row['id']; ?>" class="<?php echo ($isActive == '' ? 'text-danger' : 'text-success'); ?>">Complaint Status- <?php echo ($isActive == '' ? 'Deactive' : 'Active'); ?></b></label>
                                                    </div>  
                                                </div>
                                                <div class="col col-md-6 col-lg col-xl-6 ms-auto mt-1">
                                                    <button type="button" class="btn btn-dark" onclick="share(this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-share-alt"></i></button>
                                                    <button type="button" class="btn btn-dark" onclick="edit(this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-outline-danger btn-dark disabled-on-loading" onclick="deleteComplaint(this,'<?php echo $row['Application_no']; ?>')" style="background:white!important;color:red!important;padding:0.5rem 0.6rem;"> <i class="fa fa-trash"></i></button>
                                                    <button type="button" class="btn btn-primary" onclick="view('<?php echo ($row['userId'] != NULL ? 'user' : 'police'); ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-10">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'boy'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                      <!--<div class="row col-6 px-4">-->
                                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                      <!--    </div>-->
                                            <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="max-height:auto;">
                                       <p class="card-title text-start py-0 fs-6"><b style="color:red;font-weight:600;">Message :- </b><br><span style="color:black;" class="message"><?php echo $row['Message']??"--"?></span></p> 
                                    </div>
                                    <?php } ?>
                                    <style>
                                        .social a.btn-circle .btn-google {
                                                    color: #fff;
                                                    background-color: #e44134;
                                                    border-color: transparent;
                                                }
                                                .btn-police1{
                                                     color: #fff;
                                                    background-color: green!important;
                                                    border-color: transparent;
                                                }
                                                 .btn-police2{
                                                     color: #fff;
                                                    background-color: #e44134!important;
                                                    border-color: transparent;
                                                }
                                                 .btn-police3{
                                                     color: #fff;
                                                    background-color: #5daed5!important;
                                                    border-color: transparent;
                                                }
                                                 .btn-police4{
                                                     color: #fff;
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
                                    </style>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            	<div class="image-popup">
            		<img src="" alt="">
            	</div>
            </div>
            <?php 
                if($paginationCtrls != '')
                {
            ?>
            <div class="row col-12 mx-0">
                <div id="pagination_controls" class="py-0 py-md-3" style="text-align:center;display:flex;align-items:center;justify-content:center;background:white;overflow:auto;"><?php echo $paginationCtrls; ?></div>
            </div>
            <?php } ?>
            <?php }else{ ?>
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?php echo base_url(); ?>assets/icons/nodata.png" style="height:400px;">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<style>
    .hidden {
  display: none;
}

svg {
  width: 20px;
  height: 20px;
  margin-right: 7px;
}

button, .button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 30px;
  padding-right: 30px;
}

.share-button, .share-dialog {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.share-dialog {
  display: none;
  width: 95%;
  max-width: 500px;
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  z-index: -1;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}

.share-dialog.is-open {
  display: block;
  z-index: 2;
}

header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.targets {
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-bottom: 20px;
}

.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.close-button svg {
  margin-right: 0;
}

.link {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 4px;
  background-color: #eee;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
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
<div class="share-dialog">
  <header>
    <button class="close-button"><svg><use href="#close"></use></svg></button>
  </header>
  <div class="targets">
    <a class="button">
      <svg>
        <use href="#facebook"></use>
      </svg>
      <span>Facebook</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#twitter"></use>
      </svg>
      <span>Twitter</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#linkedin"></use>
      </svg>
      <span>LinkedIn</span>
    </a>
    
    <a class="button">
      <svg>
        <use href="#email"></use>
      </svg>
      <span>Email</span>
    </a>
  </div>
  <div class="link">
    <div class="pen-url">https://codepen.io/ayoisaiah/pen/YbNazJ</div>
    <button class="copy-link">Copy Link</button>
  </div>
</div>

<svg class="hidden">
  <defs>
    <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></symbol>
    
    <symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></symbol>
    
    <symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></symbol>
    
    <symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></symbol>
    
    <symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></symbol>
    
    <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></symbol>
  </defs>
</svg>

<script>
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
    let sideMenu = document.querySelector('#side-menu');
let sideBar = document.querySelector('.side-bar');

function showPreview(ele)
{
    if($('#facematchfilter').get(0).files.length > 0)
    {
        $('#facePreview').attr('src',URL.createObjectURL($('#facematchfilter').get(0).files[0]));
        $('#facePreviewDiv').removeClass('d-none');
    }else{
        $('#facePreviewDiv').addClass('d-none');
        $('#facematchfilter').val('');
        $('#facePreview').removeAttr('src');
    }
}

function view(type,ele,id)
{
    if(type == 'police')
    {
        window.open('<?php echo base_url(); ?>find-missing-person?id='+id,'_blank');   
    }else{
        window.open('<?php echo base_url(); ?>find-lapata-person?id='+id,'_blank');
    }
}

function edit(ele,appNo)
{
    $(ele).attr('disabled','disabled');
    location.href="<?php echo base_url(); ?>police/editUnknownDetails?id="+appNo;
}

function share(ele,appNo)
{
    if (navigator.share) {
        let url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
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

function clearFace(ele)
{
    $('#facePreviewDiv').addClass('d-none');
    $('#facematchfilter').val('');
    $('#facePreview').removeAttr('src');
    $(ele).attr('disabled','disabled');
    let count = 0;
    galleryImages.forEach(img => {
        count++;
		img.style.display = 'block';
    })
    if(count != 0)
    {
        if(count > 1)
        {
            $('#personcount').html(count + ' Persons');
        }else{
            $('#personcount').html(count + ' Person');
        }
    }else{
        $('#personcount').html('NO Person');
    }
    $('#side-menu').click();
    $(ele).removeAttr('disabled');
}

function search(ele)
{
    $(ele).attr('disabled','disabled');
    if($('#facematchfilter').get(0).files.length > 0)
    {
        let data = new FormData();
        data.append('file',$('#facematchfilter').get(0).files[0]);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>police/searchByImage',
            type:'post',
            processData:false,
            contentType:false,
            cache:false,
            data:data,
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    $('#side-menu').click();
                    let count = 0;
                    galleryImages.forEach(img => {
                        var filter = img.getAttribute('data-imageId').toLowerCase();
                		if (parse.finalId.includes(filter)) {
                		    count++;
                			img.style.display = 'block';
                		} else {
                			img.style.display = 'none';
                		};
                    })
                    if(count != 0)
                    {
                        if(count > 1)
                        {
                            $('#personcount').html(count + ' Persons');
                        }else{
                            $('#personcount').html(count + ' Person');
                        }
                    }else{
                        $('#personcount').html('NO Person');
                    }
                }else{
                    galleryImages.forEach(img => {
            			img.style.display = 'none';
            		});
            		$('#personcount').html('NO Person');
                }
                $(ele).removeAttr('disabled');
            }
        })      
    }else{
        toastr.error('Please select the file to continue');
        $(ele).removeAttr('disabled');
    }
}

function filterDate(ele)
{
    $(ele).attr('disabled','disabled');
    let startFilterDate = $('#startFilterDate').val();
    let endFilterDate = $('#endFilterDate').val();
    var url = new URL(location.href);
    var search_params = url.searchParams;
    search_params.set('startFormDate', startFilterDate);
    search_params.set('endFormDate', endFilterDate);
    url.search = search_params.toString();
    var new_url = url.toString();
    location.href=new_url;
    $(ele).removeAttr('disabled');
}

let galleryImages = document.querySelectorAll('.image-container .col-search');
let imagePop = document.querySelector('.image-popup');
let galleryImages1 = document.querySelectorAll('.image-container .col-search img');

function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }

function apply(ele)
{
    
    $(ele).attr('disabled','disabled');
    let startFilterDate = $('#startFilterDate').val();
    let endFilterDate = $('#endFilterDate').val();
    let gender= $('#gender').val().toLowerCase();
    let age = $('#Age').val().toLowerCase();
    let personName = $('#personName').val().toLowerCase();
    let state = $('#state').val().toUpperCase();
    let district = $('#district').val().toUpperCase();
    let city = $('#city').val().toUpperCase();
    let idType = $('#idType').val().toLowerCase();
    let idNumber = '';
    if(idType == 'aadhar')
    {
        if($('#aadharNumber').val() != '')
        {
            idNumber = $('#aadharNumber').val().toLowerCase();
        }
    }
    else if(idType == 'dl')
    {
        if($('#dlNumber').val() != '')
        {
            idNumber = $('#dlNumber').val().toLowerCase();
        }
    }
    else if(idType == 'pan')
    {
        if($('#panNumber').val() != '')
        {
            idNumber = $('#panNumber').val().toLowerCase();
        }
    }
    else if(idType == 'voter')
    {
        if($('#voterId').val() != '')
        {
            idNumber = $('#voterId').val().toLowerCase();
        }
    }
    else if(idType == 'gold')
    {
        if($('#goldId').val() != '')
        {
            idNumber = $('#goldId').val().toLowerCase();
        }
    }
    else if(idType == 'vehicle')
    {
        if($('#vehicleNumber').val() != '')
        {
            idNumber = $('#vehicleNumber').val().toLowerCase();
        }
    }
    let vehicle = $('#vehicleNumber').val();
    let goldType = $('#goldType').val();
    let goldHUID = $('#goldId').val();
    var url = new URL(location.href);
    var search_params = url.searchParams;
    search_params.set('idType',idType);
    search_params.set('type',$('#type').val());
    search_params.set('idNumber',idNumber);
    search_params.set('goldType',goldType);
    search_params.set('startFormDate', startFilterDate);
    search_params.set('endFormDate', endFilterDate);
    search_params.set('genderForm', gender);
    search_params.set('AgeForm', age);
    search_params.set('personFormName', personName);
    search_params.set('stateForm', state);
    search_params.set('districtForm', district);
    search_params.set('cityForm', city);
    url.search = search_params.toString();
    var new_url = url.toString();
    location.href=new_url;
	$(ele).removeAttr('disabled');
}

galleryImages1.forEach(img => {
	img.onclick = () => {
		let imageSrc = img.getAttribute('src');
		imagePop.style.display = 'flex';
		imagePop.querySelector('img').src = imageSrc;
	};
});

imagePop.onclick = () => {
	imagePop.style.display = 'none';
};

// document.querySelector('#search-box').oninput = () => {
// 	var value = document.querySelector('#search-box').value.toLowerCase();
// 	galleryImages.forEach(img => {
// 		var filter = img.getAttribute('data-search').toLowerCase();
// 		if (filter.indexOf(value) > -1) {
// 			img.style.display = 'block';
// 		} else {
// 			img.style.display = 'none';
// 		};
// 	});
// };

let categoryBtn = document.querySelectorAll('.category .btn');

categoryBtn.forEach(btn => {
	btn.onclick = () => {
		categoryBtn.forEach(remove => remove.classList.remove('active'));
		let dataCategory = btn.getAttribute('data-category');
		galleryImages.forEach(img => {
			var imgCat = img.getAttribute('data-cat');
			if (dataCategory == 'all') {
				img.style.display = 'block';
			} else if (dataCategory == imgCat) {
				img.style.display = 'block';
			} else {
				img.style.display = 'none';
			}
		});
		btn.classList.add('active');
	};
});

let typeBtn = document.querySelectorAll('.type .btn');

typeBtn.forEach(btn => {
	btn.onclick = () => {
		typeBtn.forEach(remove => remove.classList.remove('active'));
		let datatype = btn.getAttribute('data-type');
		galleryImages.forEach(img => {
			var imgtype = img.getAttribute('src').split('.').pop();
			if (datatype == 'all') {
				img.style.display = 'block';
			} else if (datatype == imgtype) {
				img.style.display = 'block';
			} else {
				img.style.display = 'none';
			}
		});
		btn.classList.add('active');
	};
});

function getdistrict(id,type='')
{
    $('#district'+type).prop('selectedIndex',0);
    $('#city'+type).prop('selectedIndex',0);
    $('#city'+type).html('<option value="">Select City (optional)</option>');
    if(id!="")
    {
        $.ajax({
            url:"<?php echo base_url(); ?>/police/getdistrict?id="+id,
            data:id,
            type:'get',
            success:function(res)
            {
                $('#district'+type).html(res);
            }
        })
    }
    else
    {
        $('#district'+type).html('<option value="">Select District (optional)</option>');
        $('#city'+type).html('<option value="">Select City (optional)</option>');
    }
  
}

    function showFormInputAccordingly(val)
    {
        if(val == '')
        {
            $('#aadharNumberForm').attr('name','idNumber');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').removeAttr('name');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
        }
        if(val == 'vehicle')
        {
            $('#aadharNumberForm').removeAttr('name');
            $('#vehicleNumberForm').attr('name','idNumber');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').removeAttr('name');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').removeClass('d-none');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
        }
        if(val == 'gold')
        {
            $('#aadharNumberForm').removeAttr('name');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').attr('name','idNumber');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').removeAttr('name');
            $('#goldIdentityForm').removeClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
        }
        if(val == 'aadhar')
        {
            $('#aadharNumberForm').attr('name','idNumber');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').removeAttr('name');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
            $('#aadharIdentityForm').removeClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
        }
        if(val == 'voter')
        {
            $('#aadharNumberForm').removeAttr('name');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').attr('name','idNumber');
            $('#dlNumberForm').removeAttr('name');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').removeClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
        }
        if(val == 'pan')
        {
            $('#aadharNumberForm').removeAttr('name');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').attr('name','idNumber');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').removeAttr('name');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').removeClass('d-none');
            $('#dlIdentityForm').addClass('d-none');
        }
        if(val == 'dl')
        {
            $('#aadharNumberForm').removeAttr('name');
            $('#vehicleNumberForm').removeAttr('name');
            $('#goldIdForm').removeAttr('name');
            $('#panNumberForm').removeAttr('name');
            $('#voterIdForm').removeAttr('name');
            $('#dlNumberForm').attr('name','idNumber');
            $('#goldIdentityForm').addClass('d-none');
            $('#vehicleIdentityForm').addClass('d-none');
            $('#aadharIdentityForm').addClass('d-none');
            $('#voterIdentityForm').addClass('d-none');
            $('#panIdentityForm').addClass('d-none');
            $('#dlIdentityForm').removeClass('d-none');
        }
    }
    
    function showInputAccordingly(val)
    {
        if(val == '')
        {
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').addClass('d-none');
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
        }
        if(val == 'vehicle')
        {
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').removeClass('d-none');
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').addClass('d-none');
        }
        if(val == 'gold')
        {
            $('#goldIdentity').removeClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').addClass('d-none');
        }
        if(val == 'aadhar')
        {
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
            $('#aadharIdentity').removeClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').addClass('d-none');
        }
        if(val == 'voter')
        {
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').removeClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').addClass('d-none');
        }
        if(val == 'pan')
        {
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').removeClass('d-none');
            $('#dlIdentity').addClass('d-none');
        }
        if(val == 'dl')
        {
            $('#goldIdentity').addClass('d-none');
            $('#vehicleIdentity').addClass('d-none');
            $('#aadharIdentity').addClass('d-none');
            $('#voterIdentity').addClass('d-none');
            $('#panIdentity').addClass('d-none');
            $('#dlIdentity').removeClass('d-none');
        }
    }
    
    function showColorAccordingly(ele,id)
    {
        if(ele.checked)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Reactivate</strong>',
                icon: 'info',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to activate complaint again?</label></div>',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let data = new FormData();
                    data.append('id',id);
                    data.append('status',1);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/reactivateComplaint',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('complaint activated successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    });
                }else{
                    $(ele).prop('checked',false);
                }
            })   
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Deactivate</strong>',
                icon: 'info',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to deactivate complaint?</label></div>',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let data = new FormData();
                    data.append('id',id);
                    data.append('status',0);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/reactivateComplaint',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('complaint deactivated successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    });
                }else{
                    $(ele).prop('checked',true);
                }
            })
        }
    }
    
    function getcity(id,type='')
    {
      var sid=$('#state'+type).val();
      $('#city'+type).prop('selectedIndex',0);
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/ngo/getdistrict?cid="+id+"&sid="+sid,
            
            type:'get',
            success:function(res)
            {
              $('#city'+type).html(res);
            }
        })
      }
      else
      {
        
        $('#city'+type).html('<option value="">Select City (optional)</option>');
      }
      
    }
    
    function deleteComplaint(ele,appNo)
    {
        $(ele).attr('disabled','disabled');
         Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Complaint Delete- '+appNo+'</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete this complaint?</label></div>',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                let data = new FormData();
                data.append('id',appNo);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteComplaint',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('complaint deleted successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                });
            }else{
                $(ele).prop('disabled',false);
            }
        })
    }
    // document.querySelector('#search-box').oninput = () => {
    // 	var value = document.querySelector('#search-box').value.toLowerCase();
    // 	let count = 0;
    //     galleryImages.forEach(img => {
    // 		var filter = img.getAttribute('data-appNo').toLowerCase();
    // 		if (filter.indexOf(value) > -1) {
    // 		    count++;
    // 			img.style.display = 'block';
    // 		} else {
    // 			img.style.display = 'none';
    // 		};
    // 	});
    // 	if(count != 0)
    //     {
    //         if(count > 1)
    //         {
    //             $('#personcount').html(count + ' Persons');
    //         }else{
    //             $('#personcount').html(count + ' Person');
    //         }
    //     }else{
    //         $('#personcount').html('NO Person');
    //     }
    // };
    
    document.querySelector('#search-box').onchange = () => {
    	var value = document.querySelector('#search-box').value.toLowerCase();
    	if(value != '')
    	{
    	    location.href="<?= base_url(); ?>police/manage_unknown_person?appNo="+value;   
    	}else{
    	    location.href="<?= base_url(); ?>police/manage_unknown_person";
    	}
    };
</script>