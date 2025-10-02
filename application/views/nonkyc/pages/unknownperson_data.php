<style>

div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
#swal2-html-container{
    margin: 0 1rem!important;
}

.hidden {
  display: none!important;
}

.pagination-container {
  /*width: calc(100% - 2rem);*/
  display: flex;
  align-items: center;
  bottom: 0;
  padding: 1rem 0;
  justify-content: center;
}

.pagination-number,
.pagination-button{
  font-size: 1.1rem;
  background-color: transparent!important;
  border: none;
  margin: 0.25rem 0.25rem;
  cursor: pointer;
  height: 2.5rem;
  width: 2.5rem;
  border-radius: .2rem;
}

.pagination-number:hover,
.pagination-button:not(.disabled):hover {
  background: #fff!important;
}

.pagination-number.active {
  color: #fff;
  background: #0085b6!important;
}
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
	z-index: 997;
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
	--box-shadow: 0 5px 10px rgba(0, 0, 0, .9);
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
		top: 60px;
		left: 300px;
	}

	.side-bar {
		left: -350px;
	}

	.side-bar.active {
		box-shadow: 0 0 0 100vw var(--dark-bg);
		left: 0;
		top:60px;
		z-index: 996;
	}
    .shiva_height{
        height:680px;
        max-height:680px;
    }
}

@media (max-width:1024px) {
    .shiva_height{
        height:720px;
        max-height:720px;
    }
}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}
	    .shiva_height{
        height:650px;
        max-height:650px;
    }

}

@media (max-width:450px) {
    
    .pagetitle h1{
        font-size:0.87rem;
    }

	#side-menu.fa-times {
		top: 59px;
		right: 0px;
		left:unset;
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
    <div id="coveredDiv" class="d-none" style="background:transparent;position:absolute;height:100vh;z-index:995;width:-webkit-fill-available;"></div>
    <?php 
        if($pn == 1)
        {
    ?>
    <div class="pagetitle">
      <h1 class="text-center"><span><img src="<?php echo base_url(); ?>assets/icons/unknown.webp" style="width:50px;height:50px;"></span><b class="ms-3 text-danger">Enter </b>- <?php echo 'Unknown'; ?> Person Details</h1>
    </div>
    <?php }else{ ?>
    <div class="pagetitle">
      <h1 class="text-start">Search <?php echo 'Unknown'; ?> Person By Filter</h1>
    </div>
    <?php } ?>
    <div class="container-fluid px-0 <?php if($pn != 1){ echo "d-none"; } ?>">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-6 card">
                <div class="card-header d-flex justify-content-center">
                    <div class="col-xl-auto col-lg-auto col-sm-12 col col-md-auto mt-3 mt-md-0">
                        <button type="button" onclick="openFaceModal()" class="btn w-100 btn-primary btn-style-four disabled-on-loading" style="padding:10px 30px!important;white-space:normal;"> 
                            <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:30px;height:30px;">
                            <span style="font-size:0.7rem!important">Select Photo </span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <input type="hidden" name="pn" value="2">
                        <input type="hidden" name="perPage" value="10">
                        <input type="hidden" name="faceMatch" value="">
                        <input type="hidden" name="page" value="<?= $page; ?>">
                        <div class="row align-items-center">
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <input type="date" id="startFormDate" min="<?php echo date('Y-m-d',strtotime('-3 months')); ?>" value="<?php echo date('Y-m-d',strtotime('-3 months')); ?>" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="startFormDate" required>
                                <label for="startFormDate" class="ms-2">From Date <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <input type="date" id="endFormDate" min="<?php echo date('Y-m-d',strtotime('-3 months')); ?>" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="endFormDate" required>
                                <label for="endFormDate" class="ms-2">To Date <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <select class="form-control" name="genderForm" id="genderForm" required>
                                    <option value=""></option>
                                    <option value="boy">Male</option>
                                    <option value="girl">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="genderForm" class="ms-2">Select Gender <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <select class="form-control pb-0" name="AgeForm" id="AgeForm" >
                                    <option value=""></option>
                                    <?php 
                                        $state = $this->db->query('SELECT * FROM ageBands')->result_array();
                                        if(count($state)>0)
                                        {
                                            foreach($state as $row)
                                            {
                                            ?>
            
                                                <option value="<?php echo $row['ageBand'] ?>"><?php echo $row['ageBand']?></option>
                                            <?php
                                            }
                                            
                                        }
                                        else
                                        {
                                            ?>
            
                                            <option value="no">No Age Found</option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <label for="AgeForm" class="ms-2">Select Age Band</label>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="row">
                                    <div class="form-group col-12 mt-3 form-floating">
                                        <input type="text" id="personFormName" class="form-control" name="personFormName">
                                        <label for="personFormName" class="ms-2">Enter Unknown Person Name</label>
                                    </div>        
                                </div>    
                                <div class="row">
                                    <div class="form-floating mt-3 col-12">
                        		        <select name="idType" class="form-control" style="appearance:auto;" id="idTypeForm" aria-label="Select Id Type" onchange="showFormInputAccordingly(this.value)">
                                            <option value=""></option>
                                            <option value="aadhar">Aadhaar</option>
                                            <option value="dl">Driving License</option>
                                            <option value="pan">PAN Card</option>
                                            <option value="voter">Voter Id</option>
                                            <option value="vehicle">Vehicle No</option>
                                            <option value="gold">Gold HUID No</option>
                                        </select>
                                        <label for="idTypeForm" class="ms-2">Select Id Type</label>
                        		    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="row">
                        		    <div class="form-group col-12 mt-3">
                                        <select class="form-control select2" name="stateForm" id="stateForm" onchange="getdistrict(this.value,'Form');" >
                                            <option value="">Select State</option>
                                            <option value="">All State</option>
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 mt-3">
                                        <select class="form-control select2" name="districtForm" id="districtForm" onchange="getcity(this.value,'Form');" >
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 mt-3">
                                        <select class="form-control select2" name="cityForm" id="cityForm" >
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                		    <div id="aadharIdentityForm" class="mt-3 col-md-4 col-lg-6 px-3 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="number" class="form-control text-uppercase" onKeyPress="return checkLength(this.value,12)" id="aadharNumberForm" placeholder="Aadhaar Number">
                                    <label for="aadharNumberForm" id="aadharLabelForm" class="pl-2">Enter Aadhaar No</label>
                                    <div class="invalid-feedback">Please enter Aadhaar number.</div>
                                </div>
                            </div>
                            <div id="vehicleIdentityForm" class="px-3 col-md-4 mt-3 col-lg-6 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="text" class="form-control text-uppercase" id="vehicleNumberForm" placeholder="Vehicle Number">
                                    <label for="vehicleNumberForm" id="vehicleLabelForm" class="pl-2">Enter Vehicle No</label>
                                    <div class="invalid-feedback">Please enter Vehicle Number.</div>
                                </div>
                            </div>
                            <div id="goldIdentityForm" class="px-3 col-md-4 mt-3 col-lg-6 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="text" class="form-control text-uppercase" id="goldIdForm" maxlength="6" placeholder="Gold HUID Number">
                                    <label for="goldIdForm" id="goldLabelForm" class="pl-2">Enter Gold HUID No</label>
                                </div>
                            </div>
                            <div id="panIdentityForm" class="mt-3 px-3 col-md-4 col-lg-6 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="text" maxlength="10" class="form-control text-uppercase" id="panNumberForm" placeholder="PAN Number">
                                    <label for="panNumberForm" id="panLabel" class="ps-2">Enter PAN No</label>
                                    <div class="invalid-feedback">Please enter PAN Number.</div>
                                </div>
                            </div>
                            <div id="voterIdentityForm" class="px-3 col-md-4 mt-3 col-lg-6 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="text" class="form-control text-uppercase" id="voterIdForm" placeholder="Voter Number">
                                    <label for="voterIdForm" id="voterLabelForm" class="pl-2">Enter Voter No</label>
                                    <div class="invalid-feedback">Please enter Voter Number.</div>
                                </div>
                            </div>
                            <div id="dlIdentityForm" class="px-3 col-md-4 mt-3 col-lg-6 d-none">
                                <div class="form-floating pr-2 row mx-0">
                                    <input type="text" class="form-control text-uppercase" maxlength="15" id="dlNumberForm" placeholder="Driving License Number">
                                    <label for="dlNumberForm" id="dlLabelForm" class="pl-2">Enter Driving License No</label>
                                    <div class="invalid-feedback">Please enter Driving License number.</div>
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-12 mt-3 text-center">
                                <button class="btn btn-style-green">Search Result</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="<?php if($pn != 2){ echo "d-none"; } ?>">
        <div class="row align-items-center">
            <div class="col-xl-auto col-lg-auto col-sm-12 col-8 col-md">
                <h6 class="text-center my-0"><b style="color:black;">Page:</b> <span style="color:black;"><?php echo $_GET['page']; ?> out of <?= $last; ?></span></h6>
            </div>
            <div class="col-xl-auto col-lg-auto col-sm-12 col-4 col-md-auto">
                <select class="form-control" id="perPage" onchange="showPageAccordingly(this.value)">
                    <option value="20" <?php if($perPage == 20){ echo "selected"; } ?>>20</option>
                    <option value="50" <?php if($perPage == 50){ echo "selected"; } ?>>50</option>
                    <option value="100" <?php if($perPage == 100){ echo "selected"; } ?>>100</option>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-auto mt-3 mt-md-0">
                <h4 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo ($rows != 0 ? (($rows > 1) ? ($rows.' Persons') : ($rows.' Person')) : 'NO Person'); ?></span> Found...</b></h4>
            </div>
            <div class="col-xl-auto col-lg-auto col-sm-12 col-md-auto mt-3 mt-md-0">
                <button type="button" onclick="openFaceModal()" class="btn w-100 btn-primary btn-style-four disabled-on-loading" style="padding:0.7rem!important;"> 
                    <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:30px;height:30px;">
                    <span style="font-size:0.7rem!important">Search Person By Face Photo </span>
                </button>
            </div>
        </div>
        <div class="container-fluid px-0">
        	<div id="side-menu" class="fas fa-filter" ></div>
        	<div class="side-bar pt-1" >
        	    <!--<div class="row">-->
            	<!--    <div class="form-group col-12 col-md-12 col-lg-12 mt-3">-->
             <!--           <label for="facematchForm" class="mb-2">Search By Face Image (Optional)</label>-->
             <!--           <input type="file" accept="image/*" class="form-control" onchange="showPreview(this)" placeholder="Search" name="facematch" id="facematchfilter">-->
             <!--       </div>-->
             <!--   </div>-->
             <!--   <div class="row d-none mt-3 justify-content-center" id="facePreviewDiv">-->
             <!--       <div class="col-10 col-md-12">-->
             <!--           <img id="facePreview" style="width:100%;height:130px;object-fit:fill;">-->
             <!--       </div>-->
             <!--   </div>-->
             <!--   <div class="row">-->
             <!--       <div class="form-group col-6 mt-3 form-floating">-->
             <!--           <button type="button" class="mx-0 btn btn-style-green disabled-on-loading w-100" style="padding:12px 0px!important;" onclick="search(this)"> Search</button>-->
             <!--       </div>-->
             <!--       <div class="form-group col-6 mt-3 form-floating">-->
             <!--           <button type="button" class="mx-0 btn btn-style-red disabled-on-loading w-100" onclick="clearFace(this)"> Clear</button>-->
             <!--       </div>-->
             <!--   </div>-->
                <input type="hidden" name="page" id="page" value="<?= $page; ?>">
                <input type="hidden" name="faceMatch" id="faceMatch" value="<?php echo $facematch; ?>">
                <!--<hr>-->
        	    <div class="row">
        	        <h6><b class="text-danger">Enter - </b><b style="font-size:0.98rem;">Unknown Person Details</b></h6>
        	        <div class="form-group col-12 col-md-12 col-lg-12 mt-0 form-floating">
                        <input type="date" id="startFilterDate" max="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d',strtotime('-3 months')); ?>" value="<?php echo $_GET['startFormDate']; ?>" class="form-control" name="startFilterDate" required>
                        <label for="startFilterDate" class="ms-2">Start Date</label>
                    </div>
                    <div class="form-group col-12 col-md-12 col-lg-12 mt-3 form-floating">
                        <input type="date" id="endFilterDate" max="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d',strtotime('-3 months')); ?>" value="<?php echo $_GET['endFormDate']; ?>" class="form-control" name="endFilterDate" required>
                        <label for="endFilterDate" class="ms-2">End Date</label>
                    </div>
                    <div class="form-floating mt-3 col-12">
                        <select class="form-control" name="gender" id="gender">
                            <option value="" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == '' ? 'selected' : '') : ''); ?>>Select Gender</option>
                            <option value="boy" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'boy' ? 'selected' : '') : ''); ?>>Male</option>
                            <option value="girl" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'girl' ? 'selected' : '') : ''); ?>>Female</option>
                            <option value="other" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'other' ? 'selected' : '') : ''); ?>>Other</option>
                        </select>
                        <label for="gender" class="ms-2">Gender <b class="text-danger">*</b></label>
                        <div class="invalid-feedback">Please Select Gender.</div>
                    </div>
                    <div class="form-floating mt-3 col-12">
                        <select class="form-control pb-0" name="Age" id="Age" >
                            <option value="" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == '' ? 'selected' : '') : ''); ?>>Select Age Band</option>
                            <?php 
                                $state = $this->db->query('SELECT * FROM ageBands')->result_array();
                                if(count($state)>0)
                                {
                                    foreach($state as $row)
                                    {
                                    ?>
                                        <option value="<?php echo $row['ageBand'] ?>" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == $row['ageBand'] ? 'selected' : '') : ''); ?>><?php echo $row['ageBand']?></option>
                                    <?php
                                    }
                                    
                                }
                                else
                                {
                                    ?>
    
                                    <option value="no" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == 'no' ? 'selected' : '') : ''); ?>>No Age Band Found</option>
                                <?php
                                }
                            ?>
                        </select>
                        <label for="Age" class="ms-2">Age</label>
                        <div class="invalid-feedback">Please Select Age.</div>
                    </div>
                    <div class="form-floating mt-3 col-12">
        		        <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                            <option value="" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == '' ? 'selected' : '') : ''); ?>>Select Id Type</option>
                            <option value="aadhar" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'aadhar' ? 'selected' : '') : ''); ?>>Aadhaar</option>
                            <option value="dl" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'dl' ? 'selected' : '') : ''); ?>>Driving License</option>
                            <option value="pan" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'pan' ? 'selected' : '') : ''); ?>>PAN Card</option>
                            <option value="voter" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'voter' ? 'selected' : '') : ''); ?>>Voter Id</option>
                            <option value="vehicle" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'vehicle' ? 'selected' : '') : ''); ?>>Vehicle No</option>
                            <option value="gold" <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'gold' ? 'selected' : '') : ''); ?>>Gold HUID No</option>
                        </select>
                        <label for="idType" class="ms-2">ID Type</label>
        		    </div>
        		    <div id="aadharIdentity" class="mt-3 px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'aadhar' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating pr-2 row mx-0">
                            <input type="number" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'aadhar' ? $_GET['idNumber'] : '') : ''); ?>" class="form-control text-uppercase" name="aadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhaar Number" aria-describedby="step2CheckAadhar">
                            <label for="aadharNumber" id="aadharLabel" class="pl-2">Enter Aadhaar No</label>
                            <div class="invalid-feedback">Please enter Aadhaar number.</div>
                        </div>
                    </div>
                    <div id="vehicleIdentity" class="mt-3 px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'vehicle' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating pr-2 row mx-0">
                            <input type="text" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'vehicle' ? $_GET['idNumber'] : '') : ''); ?>" class="form-control text-uppercase" id="vehicleNumber" required placeholder="Vehicle Number" aria-describedby="step2CheckVehicle">
                            <label for="vehicleNumber" id="vehicleLabel" class="pl-2">Enter Vehicle No</label>
                            <div class="invalid-feedback">Please enter Vehicle Number.</div>
                        </div>
                    </div>
                    <div id="goldIdentity" class="px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'gold' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control text-uppercase" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'gold' ? $_GET['idNumber'] : '') : ''); ?>" id="goldId" maxlength="6" required placeholder="Gold HUID Number" aria-describedby="step2CheckGold">
                            <label for="goldId" id="goldLabel" class="pl-2">Enter Gold HUID No</label>
                        </div>
                    </div>
                    <div id="panIdentity" class="mt-3 px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'pan' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating pr-2 row mx-0">
                            <input type="text" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'pan' ? $_GET['idNumber'] : '') : ''); ?>" maxlength="10" class="form-control text-uppercase" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                            <label for="panNumber" id="panLabel" class="pl-2">Enter PAN No</label>
                            <div class="invalid-feedback">Please enter PAN Number.</div>
                        </div>
                    </div>
                    <div id="voterIdentity" class="px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'voter' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'voter' ? $_GET['idNumber'] : '') : ''); ?>" class="form-control text-uppercase" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                            <label for="voterId" id="voterLabel" class="pl-2">Enter Voter No</label>
                            <div class="invalid-feedback">Please enter Voter Number.</div>
                        </div>
                    </div>
                    <div id="dlIdentity" class="px-3 <?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'dl' ? '' : 'd-none') : 'd-none'); ?>">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" value="<?php echo (isset($_GET['idType']) ? ($_GET['idType'] == 'dl' ? $_GET['idNumber'] : '') : ''); ?>" class="form-control text-uppercase" maxlength="15" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                            <label for="dlNumber" id="dlLabel" class="pl-2">Enter Driving License No</label>
                            <div class="invalid-feedback">Please enter Driving License number.</div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 form-floating">
    	                <input type="text" class="form-control" name="personName" id="personName" placeholder="Enter Person Name" value="<?php echo (isset($_GET['personFormName']) ? $_GET['personFormName'] : ''); ?>">
    	                <label for="personName" class="ms-2">Enter Unknown Person Name</label>
    	            </div>
    	            <div class="mt-1 col-12">
        		        <label for="pkgdurtype">State </label>
                        <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" >
                            <option value="" <?php echo (isset($_GET['stateForm']) ? ($_GET['stateForm'] == '' ? 'selected' : '') : ''); ?>>All State </option>
                            <?php 
                                $state = $this->db->query('select * from states')->result_array();
                                if(count($state)>0)
                                {
                                    foreach($state as $row)
                                    {
                                    ?>
        
                                        <option value="<?php echo $row['name'] ?>" <?php echo (isset($_GET['stateForm']) ? (($row['name'] == $_GET['stateForm']) ? 'selected' : '') : ''); ?>><?php echo $row['name']?></option>
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
                        
                        <div class="invalid-feedback">Please Select State *.</div>
                    </div>
                    <div class="mt-3 col-12">
                        <label for="district">District </label>
                        <select class="form-control select2" name="district" id="district" onchange="getcity(this.value);" >
                            <?php 
                                if($_GET['stateForm'] != '')
                                {
                                    $snm=$_GET['stateForm'];
                                    $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
                                    $str='<option value="">Select District </option>';
                                    if(count($district)<=0)
                                    {
                                        $str='<option value="nod">No District found</option>';
                                    }
                                    foreach($district as $d)
                                    {
                                        $isSelected = '';
                                        if(strtoupper($d['d_name']) == $_GET['districtForm'])
                                        {
                                            $isSelected = 'selected';
                                        }
                                        $str.='<option value="'.$d['d_name'].'" '.$isSelected.'>'. $d['d_name'].'</option>';
                                    }
                                    echo $str;
                            ?>
                            <?php }else{ ?>
                            <option value="" <?php echo (isset($_GET['districtForm']) ? ($_GET['districtForm'] == '' ? 'selected' : '') : ''); ?>>Select District </option>
                            <?php } ?>
                        </select>
                        
                        <div class="invalid-feedback">Please Select District *.</div>
                    </div>
                    <div class="mt-3 col-12">
                        <label for="city">City </label>
                        <select class="form-control select2" name="city" id="city" >
                            <?php 
                                if($_GET['districtForm'] != '')
                                {
                                    $sid=$_GET['stateForm'];
                                    $state=$this->db->query("select * from states where name='$sid'")->result_array();
                                    $st_id=0;
                                    if(count($state)>0)
                                    {
                                        $st_id=$state[0]['id'];
                                    }
                                   
                                    $district=$this->db->query("select * from cities where state_id='$st_id'")->result_array();
                                    $str='<option value="">Select City </option>';
                                    if(count($district)<=0)
                                    {
                                        $str='<option value="nod">No City found</option>';
                                    }
                                    foreach($district as $d)
                                    {
                                        $isSelected = '';
                                        if(strtoupper($d['city']) == $_GET['cityForm'])
                                        {
                                            $isSelected = 'selected';
                                        }
                                        $str.='<option value="'.$d['city'].'"'.$isSelected.'>'. $d['city'].'</option>';
                                    }
                                    echo $str;
                            ?>
                            <?php }else{ ?>
                                <option value="" <?php echo (isset($_GET['cityForm']) ? ($_GET['cityForm'] == '' ? 'selected' : '') : ''); ?>>Select City </option>
                            <?php } ?>
                        </select>
                        
                        <div class="invalid-feedback">Please Select City *.</div>
                    </div>
    	            <input type="hidden" name="type" id="type" value="<?= $_GET['type']; ?>">
                    <div class="form-group col-12 col-md-12 col-lg-12 mt-3 form-floating">
                        <button type="button" class="btn btn-style-green disabled-on-loading w-100" onclick="apply('<?= $_GET['page']; ?>')"> Search Result</button>
                    </div>
                    <div class="reset-btn">
        			    <div class="btn">reset all</div>
        		    </div>
                </div>
        	</div>
            <div class="gallery px-0">
                <div class="image-container row" id="paginated-list">
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
                          ?>
                        <div class="col-lg-4 col-md-6 px-0 px-md-2 col-12 col-search pb-2 pagination-items" data-matchingwords="<?= matchingCount($row['person_name'], $_GET['personFormName']); ?>" data-imageId="<?php echo $row['imageId']??"-" ?>" data-imageId1="<?php echo $row['imageId1']??"-" ?>" data-imageId2="<?php echo $row['imageId2']??"-" ?>" data-cat="<?php echo $row['DL_no']??"-" ?>" data-goldtype="<?= implode(',',$goldType); ?>" data-goldhuid="<?= implode(',',$goldHUID); ?>" data-gender="<?php echo $row['Gender']??"" ?>" data-vehicle="<?php echo $row['vehicle_no']??"" ?>" data-aadhar="<?php echo $row['aadharNumber']??"" ?>" data-pan="<?php echo $row['PAN']??"" ?>" data-voter="<?php echo $row['voter_id']??"" ?>" data-dl="<?php echo $row['DL_no']??"" ?>" data-age="<?php echo $row['Age']??"" ?>" data-state="<?php echo $row['state']??"" ?>" data-district="<?php echo $row['district']??"" ?>" data-city="<?php echo $row['city']??"" ?>" data-personname="<?php echo $row['person_name']??"" ?>"  data-search="<?php echo $row['DL_no']; ?><?php echo $row['aadharNumber']; ?><?php echo $row['PAN']; ?><?php echo $row['person_name']; ?><?php echo $row['Message']; ?>" >
                            <div class="card mb-3" >
                                <div class="card-body px-0 h-100">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6 text-center mb-2">
                                            <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-dark" onclick="share('<?php echo ($row['userId'] != NULL ? 'user' : 'police'); ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('<?php echo ($row['userId'] != NULL ? 'user' : 'police'); ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <?php 
                                            if($row['rescueDate'] != NULL && $row['rescueDate'] != '0000-00-00')
                                            {
                                        ?>
                                        <div class="col-12 px-2">
                                            <p ><b style="color:black;font-size:.8rem!important;font-weight:500;">Rescue Date :- </b><b style="color:red;font-size:.8rem!important;"><?php echo date('d-m-Y',strtotime($row['rescueDate'])); ?></b></p>
                                        </div>
                                        <?php } ?>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
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
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="font-size:.8rem!important;color:black;"><?= markMatchingCharacters($row['person_name'], $_GET['personFormName']); ?></b></p>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                                            <?php } ?>
                                           
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age Band - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['Age']??"--"?></b></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                      <!--<div class="row col-6 px-4">-->
                                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:grey;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                      <!--    </div>-->
                                            <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="min-height:100px;">
                                       <p class="card-title text-start py-0 fs-6"><b style="color:red;font-weight:500;">Message:- </b><b style="color:black;font-size:.8rem!important;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                    </div>
                                    <?php }else{ ?>
                                    <div class="row col-12 px-4 pt-2 d-none" style="min-height:100px">
                                        <!--<p class="text-start py-0 fs-6"><b style="color:red;font-weight:500;">Message:- </b><b style="color:black;font-size:.8rem!important;" class="message">sdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaaaaaaaaaaaaaaaaaaaaadddddddddsdsadsdasdsdasasdaaaa</b></p>-->
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                          
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b>
                                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['isKyc'] == 0)
                                        {
                                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                                        }else{
                                            $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        }
                                    ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                        <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'green;' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
                                         <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                         <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                    </div>
                                </div>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b>
                                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                                <?php echo preg_replace('/(' . preg_quote($_GET['districtForm'], '/') . ')/i','<mark style="background:yellow;padding:0;">$1</mark>',$getUserDetail[0]['district']); ?> -
                                                <?php echo preg_replace('/(' . preg_quote($_GET['stateForm'], '/') . ')/i','<mark style="background:yellow;padding:0;">$1</mark>',$getUserDetail[0]['state']); ?>
                                            </b>
                                        </div>
                                    </div>
                                    <?php } ?>
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
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important;color:black;font-weight:500;">Contact To: - </b><b style="color:black;font-size:.8rem!important;">NGO</b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                          <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important;color:black;font-weight:500;">Contact To: - </b><b style="color:black;font-size:.8rem!important;">POLICE THANA</b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['isKyc'] == 0)
                                        {
                                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                                        }else{
                                            $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        }
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important;color:black;font-weight:500;">Contact : - </b>
                                        </div>
                                        <div class="col-12 ">
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <br>
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
                if($paginationMobileCtrls != '' || $paginationBigCtrls != '')
                {
            ?>
            <div class="card d-none d-md-block">
                <div class="card-body py-0">
                    <div class="row col-12 mx-0">
                        <div class="py-0 py-md-3 justify-content-md-center" style="text-align:center;display:flex;align-items:center;background:white;overflow:auto;"><?php echo $paginationBigCtrls; ?></div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div class="py-0">
                    <div class="row col-12 mx-0">
                        <div class="py-0 px-0 d-block d-md-none py-md-3 justify-content-md-center" style="text-align:center;display:flex;align-items:center;overflow:auto;"><?php echo $paginationMobileCtrls; ?></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header py-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn btn-default mt-0 p-0 faceClose" style="background: transparent!important;color: black!important;border: 0px;text-align: center;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa-2x">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6 col-lg-10">
                        <img src="<?php echo base_url(); ?>assets/icons/payImg.avif" style="width:100%;height:300px;object-fit:fill;">
                    </div>
                </div>
                <?php 
                    $getSettings = $this->db->query('select * from settings where name="lapataFaceAmount"')->result_array();
                ?>
                <div class="row jusitfy-content-center">
                    <div class="col-12">
                        <h6 style="font-weight: bold;text-align: center;">Total Amount:- <?php echo 'Rs.'.$getSettings[0]['value']; ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 text-center">
                        <input type="checkbox" id="terms" value="1">
                        <label for="terms" style="font-weight:500;">I accept the terms and conditions.</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-6 mt-1 text-center">
                        <button type="button" class="mx-0 btn btn-style-green disabled-on-loading w-100" style="padding:12px 0px!important;" onclick="payNow(this)"> Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="modal fade" id="faceMatchModal" style="z-index:1054;" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search By Face Image</h5>
                <button type="button" class="btn btn-default mt-0 p-0 faceClose" style="background: transparent!important;color: black!important;border: 0px;text-align: center;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mt-3 justify-content-center">
                    <div class="col-lg-6 col-md-6" id="sampleDiv">
                        <input type="file" hidden id="uploadFile" accept="image/*">
                        <h5 class="text-center">Sample Photo</h5>
                        <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:100%;height:200px;">
                        <input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected">
                    </div>
                </div>
                <div class="row justify-content-center" style="display:none" id="element">
                    <div class="col-lg-6 col-md-6">
                        <h5 class="text-center">Preview Photo</h5>
                        <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                    </div>
                </div>
                <div class="row my-3 justify-content-center" id="uploadBtnDiv">
                    <div class="col-lg-6 col-md-6 text-center">
                        <button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center d-none mt-3" id="searchDiv">
                    <div class="col-6 px-1 d-none" id="retakebtndiv">
                        <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button>
                    </div>
                    <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                        <button type="button" class="mx-0 btn btn-style-green disabled-on-loading w-100" id="searchBtn" style="padding:12px 0px!important;" onclick="search(this)"> Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    
    @media screen and (max-width:525px)
    {
        .word {
            text-align:center;
            width:100%!important;
            overflow-wrap: break-word;  
            word-wrap: break-word; 
            word-break: break-word;
        }    
    }
    
    .word {
        text-align:center;
        width:500px;
        overflow-wrap: break-word;  
        word-wrap: break-word; 
        word-break: break-word;
    }
    
    .swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
        background: rgba(0,0,0,0.9)!important;
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

<input type="hidden" id="data" value="<?php echo count($data); ?>">
<script src="<?php echo base_url(); ?>assets/js/exif.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Close Message",
        });
	});
	
    function openFaceModal()
	{
	    $.ajax({
	        url:'<?php echo base_url(); ?>NonKyc/checkFacePayment?type=unknown',
	        type:'get',
	        success:function(res)
	        {
	            let parse = JSON.parse(res);
	            if(parse.status == 'success')
	            {
	               //location.href="<?php echo base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
	               location.href="<?php echo base_url(); ?>NonKyc/manageGallery?type=unknown";
	            }else{
	                $('#payModal').modal('show');
	            }
	        }
	    })    
	}
	
	function payNow(ele)
	{
	    if($('#terms').is(':checked'))
	    {
	        $(ele).attr('disabled','disabled');
    	    $.ajax({
    	        url:'<?php echo base_url(); ?>NonKyc/checkFacePayment?type=unknown',
    	        type:'get',
    	        success:function(res)
    	        {
    	            let parse = JSON.parse(res);
    	            if(parse.status == 'success')
    	            {
    	                location.href="<?php echo base_url(); ?>NonKyc/manageGallery?type=unknown";
    	                swal.close();
    	            }else{
    	                if(parse.paymentType == 'razorpay')
    	                {
    	                    let rzpData = new FormData();
		                    rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
		                    rzpData.append('amount', (parse.paymentAmount * 100));
		                    $.ajax({
		                        url:'<?= base_url(); ?>user/createOrder',
		                        type:'post',
		                        data:rzpData,
		                        contentType: false,
		                        cache: false,
		                        processData:false,
		                        success:function(rzpRes)
		                        {
		                            let rzpParse = JSON.parse(rzpRes);
		                            var options = {
		                                "order_id" : rzpParse.orderId,
		                            	"key": "rzp_live_IS6pmFuBDVlq9p",
		                            	"amount": (parse.paymentAmount * 100),
		                            	"name": "Khoji",
		                            	"description": "Unknown Face Match",
		                            	"image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
		                            	"handler": function (response) {
		                            		$.ajax({
		                            		    url:'<?php echo base_url(); ?>NonKyc/saveFaceMatchPayment',
		                            		    data:{amount: parse.paymentAmount,type:'unknown','_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
		                            		    type:'post',
		                            		    success:function(res)
		                            		    {
		                            		        let paymentResponse = JSON.parse(res);
		                            		        Swal.fire({
		                            		            title:'<strong style="font-size:1rem;color:black;">Payment Completed Successfully</strong>',
		                            		            icon:'success',
		                            		            customClass:{
		                            		                actions:'mt-0'
		                            		            },
		                            		          //  html:'<div class="form-group mt-1"><h6 class="text-center" style="color:red;font-weight:bold;">Expiry Date:- '+paymentResponse.expiryDate+'</h6></div>',
		                                                allowOutsideClick:false,
		                                                showCloseButton: false,
		                                                showCancelButton: false,
		                                                focusConfirm: false,
		                                                showConfirmButton:true,
		                                                confirmButtonText:'Continue'
		                                            }).then((result) => {
		                                                    if($('#data').val() <= 50)
		                                                    {
		                                                        
		                                                    }else{
		                                                        $('#coveredDiv').removeClass('d-none');
		                                                    }
		                                                $('#payModal').modal('hide');
		                                                location.href="<?php echo base_url(); ?>NonKyc/manageGallery?type=unknown";
		                                                // $('#faceMatchModal').modal('show');
		                                                swal.close();
		                                            })
		                            		    }
		                            		})
		                            	},
		                            	modal:{
		                            	    onDismiss:function()
		                            	    {
		                                        toastr.error('Payment Cancelled');
		                                        $(ele).removeAttr('disabled');        
		                            	    }
		                            	},
		                            	"prefill": {
		                            		"name": "<?php echo $_SESSION['aadharName']; ?>", // pass customer name
		                            		"contact": '<?php echo $_SESSION['loginmob']; ?>' //customer phone no.
		                            	},
		                            	"theme": {
		                            		"color": "#ff271d" // screen color
		                            	}
		                            };
		                            var propay = new Razorpay(options);
		                            propay.open();
		                            propay.on('payment.failed', function (response){
		                                toastr.error(response.error.description);
		                                $(ele).removeAttr('disabled');
		                            });
		                        }
		                    })
    	                }
    	            }
    	        }
    	    })   
	    }else{
	        toastr.error('Please accept our terms and conditions to continue');
	    }
	}
	
	function showStartPopup()
	{
	    Swal.fire({
    	    customClass:{
    	        popup:'w-auto'
    	    },
    	    html:'<div class="row mx-0 justify-content-end"><div class="col-auto mt-2"><button type="button" onclick="back(this)" class="btn btn-dark btn-style-grey disabled-on-loading" style="padding:0.7rem!important;background:black!important;"> <i class="fa fa-arrow-circle-left"></i> Back to Dashboard</button></div></div><hr style="border: 1px solid black!important;opacity:0.5;"><div class="row mx-0"><div class="col-12"><h6 class="word mb-0"><b class="text-danger">Note:-</b> <b class="text-dark">More than 50+ Results are Fetched Please Filter more Result to make Count Less than 50 in Number, other wise you can Search by Facephoto.</b></h6></div></div><div class="row mx-0"><div class="col mt-2"><button type="button" onclick="checkFacePayment(this)" class="btn btn-primary btn-style-five disabled-on-loading" style="padding:0.7rem!important;"> <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:30px;height:30px;"> Search By Face Photo</button></div><div class="col-sm-12 col-md mt-2"><button type="button" onclick="continueFilter(this)"  class="btn btn-primary w-100 btn-style-four" style="padding:0.7rem!important;"><i class="fa fa-filter"></i> Continue Filter</button></div></div>',
            allowOutsideClick:false,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false
        })
	}
	
	function back(ele)
	{
	    $(ele).attr('disabled','disabled');
	    location.href="<?php echo base_url(); ?>non-kyc-dashboard-profile";
	}
	
	$('.faceClose').click(function()
	{
	    location.reload();
	})
	
	function checkFacePayment(ele)
	{
	    $(ele).attr('disabled','disabled');
	    $.ajax({
	        url:'<?php echo base_url(); ?>NonKyc/checkFacePayment?type=unknown',
	        type:'get',
	        success:function(res)
	        {
	            let parse = JSON.parse(res);
	            if(parse.status == 'success')
	            {
	                location.href="<?php echo base_url(); ?>NonKyc/manageGallery?type=unknown";
	                swal.close();
	            }else{
	                $('#payModal').modal('show');
	                swal.close();
	            }
	        }
	    })
	}
	
	if($('#data').val() <= 50)
    {
        
    }else{
        showStartPopup();
    }
	
    let sideMenu = document.querySelector('#side-menu.fa-filter');
    let sideBar = document.querySelector('.side-bar');
    
    function continueFilter(ele)
    {
        sideMenu.click();
        swal.close();
    }

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
        window.open('<?php echo base_url(); ?>find-missing-person?id='+id,'_blank');   
    }
    
    function share(type,ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
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

    sideMenu.onclick = () => {
        $('#coveredDiv').removeClass('d-none');
        if($('#side-menu').hasClass('fa-times'))
        {
            $('#side-menu').removeClass('fa-times');
            $('#coveredDiv').addClass('d-none');
            sideBar.classList.remove('active');
            if($('#data').val() <= 50)
            {
            }else{
                showStartPopup();
            }
        }else{
            sideMenu.classList.add('fa-times');
    	    sideBar.classList.add('active');   
        }
    };

    let galleryImages = document.querySelectorAll('.image-container .col-search');
    let imagePop = document.querySelector('.image-popup');
    let galleryImages1 = document.querySelectorAll('.image-container .col-search img');
    
    let galleryImagesNew = $('.image-container .col-search');
    galleryImagesNew.sort(function(a, b) {
        return $(b).attr('data-matchingwords') - $(a).attr('data-matchingwords');
    });  
    $('.image-container').append(galleryImagesNew);
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
    
    function goToPage(pn)
    {
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
        let goldHUID = $('#goldId').val();
        var url = new URL(location.href);
        var search_params = url.searchParams;
        search_params.set('idType',idType);
        search_params.set('page',pn);
        search_params.set('idNumber',idNumber);
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
    }
    
    imagePop.onclick = () => {
    	imagePop.style.display = 'none';
    };
    
    document.querySelector('.reset-btn .btn').onclick = () => {
    	window.location.href="<?php echo base_url(); ?>NonKyc/unknown_person_filter_after_login";
    };
    
    function getdistrict(id,type='')
    {
        $('#district'+type).prop('selectedIndex',0);
        $('#city'+type).prop('selectedIndex',0);
        $('#city'+type).html('<option value="">Select City</option>');
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
            $('#district'+type).html('<option value="">Select District</option>');
            $('#city'+type).html('<option value="">Select City</option>');
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
        
        $('#city'+type).html('<option value="">Select City </option>');
      }
      
    }
</script>
<?php 
    $getSettings = $this->db->query('select * from settings where name="unknownpagelimit"')->result_array();
?>
<script>
    function search(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#mainPhotoSelected').val() != '')
        {
            let data = new FormData();
            data.append('photo',$('#mainPhotoSelected').val());
            data.append('type','police');
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
                    $('#coveredDiv').addClass('d-none');
                    if(parse.status == 'success')
                    {
                        let count = 0;
                        galleryImages.forEach(img => {
                            var filter = img.getAttribute('data-imageId');
                    		if (parse.finalId.includes(filter)) {
                    		    count++;
                    			img.style.display = 'block';
                    		} else {
                    			img.style.display = 'none';
                    		};
                        })
                        if(count != 0)
                        {
                            let finalId = parse.finalId.join(',');
                            $('#faceMatch').val(finalId);
                            showPageAccordingly(100);
                        }else{
                            $('#personcount').html('NO Person');
                            Swal.fire({
                                iconHtml: '<img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height:150px;">',
                                allowOutsideClick:false,
                                customClass: {
                                    actions: 'mt-0',
                                    cancelButton: 'save',
                                    popup: 'pb-2',
                                    confirmButton: 'btn-style-primary-no-border',
                                    icon: 'no-border'
                                },
                                html: "<h5 style='color:red;font-weight:bold;' class='mt-5'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='location.reload();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                                showCloseButton:true,
                                showConfirmButton:false,
                                confirmButtonText:'View Guidlines',
                                showCancelButton:false,
                                'cancelButtonText':'Please Try Again'
                            }).then((result) => {
                                location.reload();
                            })
                        }
                        $('#data').val(count);
                    }else{
                        galleryImages.forEach(img => {
                			img.style.display = 'none';
                		});
                		$('#personcount').html('NO Person');
                		$('#data').val(0);
                		Swal.fire({
                            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="height:150px;">',
                            customClass: {
                                actions: 'mt-0',
                                cancelButton: 'save',
                                popup: 'pb-2',
                                confirmButton: 'btn-style-primary-no-border',
                                icon: 'no-border'
                            },
                            html: "<h5 style='color:red;font-weight:bold;' class='mt-5'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='swal.close();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                            showCloseButton:true,
                            showConfirmButton:false,
                            confirmButtonText:'View Guidlines',
                            showCancelButton:false,
                            'cancelButtonText':'Please Try Again'
                        }).then((result) => {
                            location.reload();
                        })
                    }
                    currentPage = 1;
                    listItems = document.querySelectorAll(".pagination-items:not([style*='display: none'])");
                    pageCount = Math.ceil(listItems.length / paginationLimit);
                    getPaginationNumbers();
                    setCurrentPage(1);
                    document.querySelectorAll(".pagination-number").forEach((button) => {
                        const pageIndex = Number(button.getAttribute("page-index"));
                    
                        if (pageIndex) {
                          button.addEventListener("click", () => {
                            setCurrentPage(pageIndex);
                          });
                        }
                    });
                    $(ele).removeAttr('disabled');
                }
            })      
        }else{
            toastr.error('Please select the file to continue');
            $(ele).removeAttr('disabled');
        }
    }
    
    function showFileUpload(){
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
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelected').val(response);
            $('#sampleDiv').hide();
            $('#searchDiv').removeClass('d-none');
            $('#element').show();
            $('#uploadimageModal').modal('hide');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
                $('#searchBtn').removeAttr('disabled');
                $('#mainPhotoUploaded').attr('src',event.target.result);
                $('#mainPhotoSelected').val(event.target.result);
                $('#sampleDiv').hide();
                $('#searchDiv').removeClass('d-none');
                $('#element').show();
                $('#uploadBtnDiv').addClass('d-none');
                $('#retakebtndiv').removeClass('d-none');
            }
            reader.readAsDataURL($(this)[0].files[0]);
            // $('#uploadimageModal').modal('show');   
        }
    })
    
    function apply(page)
    {
        let perPage = $('#perPage').val();
        let facematch = $('#faceMatch').val();
        let startFilterDate = $('#startFilterDate').val();
        let endFilterDate = $('#endFilterDate').val();
        let gender= $('#gender').val();
        let age = $('#Age').val();
        let personName = $('#personName').val();
        let state = $('#state').val();
        let district = $('#district').val();
        let city = $('#city').val();
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
        let goldHUID = $('#goldId').val();
        if(startFilterDate == '')
        {
            toastr.error('Select Start Date');
        }else if(endFilterDate == '')
        {
            toastr.error('Select End Date');
        }else if(gender == '')
        {
            toastr.error('Select Gender');
        }else{
            var url = new URL(location.href);
            var search_params = url.searchParams;
            
            search_params.set('idType',idType);
            search_params.set('faceMatch',facematch);
            search_params.set('pn',2);
            search_params.set('page',page);
            search_params.set('idNumber',idNumber);
            search_params.set('perPage',perPage);
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
        }
    }
    
    function showPageAccordingly(val)
    {
        let page = <?php echo $_GET['page']; ?>;
        let facematch = $('#faceMatch').val();
        let startFilterDate = $('#startFilterDate').val();
        let endFilterDate = $('#endFilterDate').val();
        let gender= $('#gender').val();
        let age = $('#Age').val();
        let personName = $('#personName').val();
        let state = $('#state').val();
        let district = $('#district').val();
        let city = $('#city').val();
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
        let goldHUID = $('#goldId').val();
        var url = new URL(location.href);
        var search_params = url.searchParams;
        
        search_params.set('idType',idType);
        search_params.set('faceMatch',facematch);
        search_params.set('pn',2);
        search_params.set('page',page);
        search_params.set('idNumber',idNumber);
        search_params.set('perPage',val);
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
    }
    
</script>