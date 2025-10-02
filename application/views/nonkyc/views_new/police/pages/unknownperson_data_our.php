<style>
::-webkit-scrollbar {
	width: 10px;
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
	height: 100vh;
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
        height:400px;
        max-height:450px;
    }
}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}
	    .shiva_height{
        height:400px;
        max-height:420px;
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
       height:400px;
        max-height:420px;
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
      <h1>Search Unknown Person Using Filter</h1>
    </div>
    <div class="container-fluid px-0 <?php if($pn != 1){ echo "d-none"; } ?>">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-6 card">
                <div class="card-body">
                    <form action="">
                        <input type="hidden" name="pn" value="2">
                        <div class="row align-items-center">
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <input type="date" id="startFormDate" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="startFormDate" required>
                                <label for="startFormDate" class="ms-2">From Date <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <input type="date" id="endFormDate" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="endFormDate" required>
                                <label for="endFormDate" class="ms-2">To Date <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <select class="form-control" name="genderForm" id="genderForm" required>
                                    <option value="">Select Gender</option>
                                    <option value="boy">Male</option>
                                    <option value="girl">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="genderForm" class="ms-2">Gender <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <select class="form-control pb-0" name="AgeForm" id="AgeForm" >
                                    <option value="">Select Age </option>
                                    <?php 
                                        $gender = $this->db->query('SELECT * FROM categories as c1, subcategories as s1 WHERE categoryId=4 AND c1.Id=4')->result_array();
                                        if(count($gender)>0)
                                        {
                                            foreach($gender as $row)
                                            {
                                            ?>
            
                                                <option value="<?php echo $row['hindiSubCategoryName'] ?>"><?php echo $row['hindiSubCategoryName']?></option>
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
                                <label for="AgeForm" class="ms-2">Age (optional)</label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3 form-floating">
                                <input type="text" id="personFormName" class="form-control" name="personFormName">
                                <label for="personFormName" class="ms-2">Person Name (optional)</label>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3">
                                <select class="form-control select2" name="stateForm" id="stateForm" onchange="getdistrict(this.value,'Form');" >
                                    <option value="">All State (optional)</option>
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
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3">
                                <select class="form-control select2" name="districtForm" id="districtForm" onchange="getcity(this.value,'Form');" >
                                    <option value="">Select District (optional)</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-6 mt-3">
                                <select class="form-control select2" name="cityForm" id="cityForm" >
                                    <option value="">Select City (optional)</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4 col-lg-12 mt-3 text-center">
                                <button class="btn btn-style-green">Apply Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="<?php if($pn != 2){ echo "d-none"; } ?>">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <h2 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo (count($data) != 0 ? ((count($data) > 1) ? (count($data).' Persons') : (count($data).' Person')) : 'NO Person'); ?></span> Found...</b></h2>
            </div>
        </div>
        <div class="container-fluid px-0">
        	<div id="side-menu" class="fas fa-filter" ></div>
        	<div class="side-bar" >
        	    <h4>Search Unknown Person</h4>
        	    <div class="row">
            	    <div class="form-group col-12 col-md-12 col-lg-12 mt-3">
                        <label for="facematchForm" class="mb-2">Search By Face Image (Optional)</label>
                        <input type="file" accept="image/*" class="form-control" placeholder="Search" name="facematch" id="facematchfilter">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6 mt-2 form-floating">
                        <button type="button" class="mx-0 btn btn-style-green disabled-on-loading w-100" style="padding:12px 0px!important;" onclick="search(this)"> Search</button>
                    </div>
                    <div class="form-group col-6 mt-2 form-floating">
                        <button type="button" class="mx-0 btn btn-style-red disabled-on-loading w-100" onclick="clearFace(this)"> Clear</button>
                    </div>
                </div>
                <hr>
        	    <div class="row">
        	        <div class="form-group col-12 col-md-12 col-lg-12 mt-3 form-floating">
                        <input type="date" id="startFilterDate" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $_GET['startFormDate']; ?>" class="form-control" name="startFilterDate" required>
                        <label for="startFilterDate" class="ms-2">Start Date</label>
                    </div>
                    <div class="form-group col-12 col-md-12 col-lg-12 mt-3 form-floating">
                        <input type="date" id="endFilterDate" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $_GET['endFormDate']; ?>" class="form-control" name="endFilterDate" required>
                        <label for="endFilterDate" class="ms-2">End Date</label>
                    </div>
                    <div class=" my-3 col-12">
        		        <label for="pkgdurtype" class="mb-2">State </label>
                        <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" >
                            <option value="" <?php echo (isset($_GET['stateForm']) ? ($_GET['stateForm'] == '' ? 'selected' : '') : ''); ?>>All State (optional)</option>
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
                    <div class=" my-3 col-12">
                        <label for="district" class="mb-2">District (optional)</label>
                        <select class="form-control select2" name="district" id="district" onchange="getcity(this.value);" >
                            <?php 
                                if($_GET['stateForm'] != '')
                                {
                                    $snm=$_GET['stateForm'];
                                    $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
                                    $str='<option value="">Select District (optional)</option>';
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
                    <div class=" my-3 col-12">
                        <label for="city" class="mb-2">City (optional)</label>
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
                                    $str='<option value="">Select City (optional)</option>';
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
                    <div class="form-floating my-3 col-12">
                        <select class="form-control" name="gender" id="gender">
                            <option value="" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == '' ? 'selected' : '') : ''); ?>>Select Gender</option>
                            <option value="boy" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'boy' ? 'selected' : '') : ''); ?>>Male</option>
                            <option value="girl" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'girl' ? 'selected' : '') : ''); ?>>Female</option>
                            <option value="other" <?php echo (isset($_GET['genderForm']) ? ($_GET['genderForm'] == 'other' ? 'selected' : '') : ''); ?>>Other</option>
                        </select>
                        <label for="gender" class="ms-2">Gender </label>
                        <div class="invalid-feedback">Please Select Gender.</div>
                    </div>
                    <div class="form-floating my-3 col-12">
                        <select class="form-control pb-0" name="Age" id="Age" >
                            <option value="" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == '' ? 'selected' : '') : ''); ?>>Select Age </option>
                            <?php 
                                $gender = $this->db->query('SELECT * FROM categories as c1, subcategories as s1 WHERE categoryId=4 AND c1.Id=4')->result_array();
                                if(count($gender)>0)
                                {
                                    foreach($gender as $row)
                                    {
                                    ?>
                                        <option value="<?php echo $row['hindiSubCategoryName'] ?>" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == $row['hindiSubCategoryName'] ? 'selected' : '') : ''); ?>><?php echo $row['hindiSubCategoryName']?></option>
                                    <?php
                                    }
                                    
                                }
                                else
                                {
                                    ?>
    
                                    <option value="no" <?php echo (isset($_GET['AgeForm']) ? ($_GET['AgeForm'] == 'no' ? 'selected' : '') : ''); ?>>No Gender Found</option>
                                <?php
                                }
                            ?>
                        </select>
                        <label for="Age" class="ms-2">Age</label>
                        <div class="invalid-feedback">Please Select Age.</div>
                    </div>
                    <div class="form-floating my-3 col-12">
        		        <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                            <option value="">Select Id Type</option>
                            <option value="aadhar">Aadhaar</option>
                            <option value="dl">Driving License</option>
                            <option value="pan">PAN Card</option>
                            <option value="voter">Voter Id</option>
                            <option value="vehicle">Vehicle No</option>
                            <option value="gold">Gold HUID No</option>
                        </select>
                        <label for="idType" class="ms-2">ID Type</label>
        		    </div>
        		    <div id="aadharIdentity" class="mt-2 px-0 d-none">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhaar Number" aria-describedby="step2CheckAadhar">
                            <label for="aadharNumber" id="aadharLabel" class="pl-2">Search via Aadhaar No</label>
                            <div class="invalid-feedback">Please enter Aadhaar number.</div>
                        </div>
                    </div>
                    <div id="vehicleIdentity" class="mt-2 px-0 d-none">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control" id="vehicleNumber" required placeholder="Vehicle Number" aria-describedby="step2CheckVehicle">
                            <label for="vehicleNumber" id="vehicleLabel" class="pl-2">Search via Vehicle No</label>
                            <div class="invalid-feedback">Please enter Vehicle Number.</div>
                        </div>
                    </div>
                    <div id="goldIdentity" class="mt-2 px-0 d-none">
                        <?php 
                            $getGoldType = $this->db->query('select * from goldType')->result_array();
                        ?>
                        <div class="form-floating mt-2 pr-2 row mx-0">
                            <select class="form-control" id="goldType">
                                <option value="">Choose Option</option>
                                <?php 
                                    foreach($getGoldType as $k=>$v)
                                    {
                                ?>
                                <option value="<?= $v['Id']; ?>"><?= $v['Name']; ?></option>
                                <?php } ?>
                            </select>
                            <label for="goldType" id="goldTypeLabel" class="pl-2">Select Gold Type</label>
                        </div>
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control" id="goldId" maxlength="6" required placeholder="Gold HUID Number" aria-describedby="step2CheckGold">
                            <label for="goldId" id="goldLabel" class="pl-2">Search via Gold HUID No</label>
                        </div>
                    </div>
                    <div id="panIdentity" class="mt-2 px-0 d-none">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                            <label for="panNumber" id="panLabel" class="pl-2">Search via PAN No</label>
                            <div class="invalid-feedback">Please enter PAN Number.</div>
                        </div>
                    </div>
                    <div id="voterIdentity" class="mt-2 px-0 d-none">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                            <label for="voterId" id="voterLabel" class="pl-2">Search via Voter No</label>
                            <div class="invalid-feedback">Please enter Voter Number.</div>
                        </div>
                    </div>
                    <div id="dlIdentity" class="mt-2 px-0 d-none">
                        <div class="form-floating mt-3 pr-2 row mx-0">
                            <input type="text" class="form-control" max="12" min="12" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                            <label for="dlNumber" id="dlLabel" class="pl-2">Search via Driving License No</label>
                            <div class="invalid-feedback">Please enter Driving License number.</div>
                        </div>
                    </div>
                    <div class="col-12 my-3 form-floating">
    	                <input type="text" class="form-control" name="personName" id="personName" placeholder="Enter Person Name" value="<?php echo (isset($_GET['personFormName']) ? $_GET['personFormName'] : ''); ?>">
    	                <label for="personName" class="ms-2">Enter Person Name</label>
    	            </div>
                    <div class="form-group col-12 col-md-12 col-lg-12 mt-3 form-floating">
                        <button type="button" class="btn btn-style-green disabled-on-loading w-100" onclick="apply(this)"> Apply</button>
                    </div>
                    <div class="reset-btn">
        			    <div class="btn">reset all</div>
        		    </div>
                </div>
        	</div>
            <div class="gallery">
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
                          ?>
                        <div class="col-lg-4 col-md-6 col-12 col-search pb-2" data-id="<?php echo $row['id']; ?>" data-imageId="<?php echo $row['imageId']??"-" ?>" data-cat="<?php echo $row['DL_no']??"-" ?>" data-goldtype="<?= implode(',',$goldType); ?>" data-goldhuid="<?= implode(',',$goldHUID); ?>" data-gender="<?php echo $row['Gender']??"" ?>" data-vehicle="<?php echo $row['vehicle_no']??"" ?>" data-aadhar="<?php echo $row['aadharNumber']??"" ?>" data-pan="<?php echo $row['PAN']??"" ?>" data-voter="<?php echo $row['voter_id']??"" ?>" data-dl="<?php echo $row['DL_no']??"" ?>" data-age="<?php echo $row['Age']??"" ?>" data-state="<?php echo $row['state']??"" ?>" data-district="<?php echo $row['district']??"" ?>" data-city="<?php echo $row['city']??"" ?>" data-personname="<?php echo $row['person_name']??"" ?>"  data-search="<?php echo $row['DL_no']; ?><?php echo $row['aadharNumber']; ?><?php echo $row['PAN']; ?><?php echo $row['person_name']; ?><?php echo $row['Message']; ?>" >
                            <div class="card mb-3 shiva_height" >
                                <div class="card-body px-0">
                                    <div class="row pt-3 align-items-center px-3 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-10">
                                            <p ><b style="color:#8D6E63;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['dateCreated']; ?></b></p>
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
                                        <div class="col-7">
                                            <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['person_name']??"--" ?></span></p>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:grey;"><?php echo $row['Age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                      <!--<div class="row col-6 px-4">-->
                                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:grey;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                      <!--    </div>-->
                                            <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="max-height:100px">
                                       <p class="card-title text-start py-0 fs-6"><b style="color:black;font-weight:600;">Other Details :- </b><br><span style="color:grey;"><?php echo $row['Message']??"--"?></span></p> 
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
                                             <p class="my-2"><b style="color:#8D6E63;font-size:.8rem!important">Uploaded By :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                          
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:#8D6E63;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                            
                                        </div>
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
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                          <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
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
            <!--end of galeery-->
            <?php 
                if($paginationCtrls != '')
                {
            ?>
            <div class="row col-12 mx-0">
                <div id="pagination_controls" class="py-0 py-md-3" style="text-align:center;display:flex;align-items:center;justify-content:center;background:white;overflow:auto;"><?php echo $paginationCtrls; ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<script>
    let sideMenu = document.querySelector('#side-menu');
let sideBar = document.querySelector('.side-bar');

function clearFace(ele)
{
    $('#facematchfilter').val('');
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
        let Ids = [];
        galleryImages.forEach(img => {
            Ids.push(img.getAttribute('data-id').toLowerCase());
        })
        let data = new FormData();
        data.append('Id[]',Ids);
        data.append('file',$('#facematchfilter').get(0).files[0]);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>police/searchByImageOur',
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
                        var filter = img.getAttribute('data-id').toLowerCase();
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

sideMenu.onclick = () => {
	sideMenu.classList.toggle('fa-times');
	sideBar.classList.toggle('active');
};

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
    var url = new URL(location.href);
    var search_params = url.searchParams;
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

document.querySelector('.reset-btn .btn').onclick = () => {
	window.location.href="<?php echo base_url(); ?>police/unknown_person_filter_our";
};

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
        
        $('#city'+type).html('<option value="">Select City (optional)</option>');
      }
      
    }
</script>