<style>
    label{
        font-weight:bold;
        font-size:1rem!important;
    }
</style>

<style>
    /* Defining a custom border on all
        sides except the top side */
    .custom-field {
        border: 3px solid;
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
        border-top: 3px solid;
        content: ' ';
        float: left;
        margin: 8px 2px 0 -1px;
        width: 12px;
    }

    /* Defining a long border after the 
    legend, using overflow hidden to 
    actually hide the line behind the 
    legend text. It can be removed
    for a different effect */
    .custom-field h1:after {
        border-top: 3px solid;
        content: ' ';
        display: block;
        height: 24px;
        left: 2px;
        margin: 0 1px 0 0;
        overflow: hidden;
        position: relative;
        top: 8px;
    }
    
    .form-check-input.is-valid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label {
        color: black!important;
    }
    
    .form-check-input.is-valid:checked, .was-validated .form-check-input:valid:checked {
        background-color: #0d6efd!important;
    }
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 px-0 col-md-12 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3 py-3 w-100 p-4">
                    <div class="card-body">
                        <div class="pt-0 pb-2 <?php if($pn == 2){ echo "d-none"; } ?>">
                            <h5 class="card-title text-center pb-0 fs-4 pt-1">Search Person Details</h5>
                        </div>
                        <form class="row g-3 p-2 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" style="border:3px solid black;" method="post" action="<?php echo base_url(); ?>user/checkPerson/step1" novalidate id="step1Form">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-floating mb-1 col-12">
                                <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value)">
                                <label for="mobileNumber" class="px-4">Enter Your Mobile Number</label>
                                <div class="invalid-feedback">Please enter your mobile number.</div>
                            </div>
                            <div class="mb-2 col-lg-12 col-sm-12 col-md-12 px-lg-1" id="sendOtpDiv">
                                <button type="button" onclick="sendOtp(this)" class="btn btn-primary btn-style-grey w-100 disabled-on-loading disabled"> Send OTP <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                                  <label for="otp">Enter OTP</label>
                                </div>
                                <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn1" type="submit"> Next <i class="fa fa-arrow-circle-right"></i></button>
                                <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                    <div class="col-md-auto col-sm-6 col-auto px-0" style="text-align:right;">
                                        <a href="javascript:void(0)" style="text-decoration:underline;" id="mobileClear">Want to change mobile number</a>
                                    </div>
                                </div>
                                <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                    <div class="col-md-auto col-sm-6 col-auto px-0" style="text-align:right;">
                                        <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>user/checkPerson/step2" novalidate id="step2Form">
                            <?php 
                              $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="custom-field pb-4">
                                <h1>
                                    <span style="font-weight:bold;color:red;font-size:large;">
                                        Enter-
                                    </span>
                                </h1>
                                <div class="pt-0 pb-0 mt-0">
                                    <h5 class="card-title text-decoration-underline text-center pb-0 fs-4 pt-0">Search Person Details</h5>
                                </div>
                                <div class="form-group mb-0 mt-3 col-12 px-0" id="idTypeDiv">
                                    <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                                        <option value="">Select Id Type</option>
                                        <option value="aadhar">Aadhaar</option>
                                        <option value="dl">Driving License</option>
                                        <option value="pan">Pan Card</option>
                                        <option value="voter">Voter Id</option>
                                    </select>
                                    <!--<label for="idType" style="padding: 1rem 1.75rem;">Select Id Type <span class="text-danger">*</span></label>-->
                                </div>
                                <div class="input-group mt-2 px-0 d-none" id="aadharIdentity">
                                    <div class="form-floating mt-2 pr-2">
                                        <input type="number" class="form-control" name="aadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckAadhar">
                                        <label for="aadharNumber" id="aadharLabel" class="pl-2">Enter Aadhaar No</label>
                                        <div class="invalid-feedback">Please enter aadhar number.</div>
                                    </div>
                                    <div class="input-group-append mt-2 py-0" id="step2CheckAadharDiv">
                                        <button class="btn btn-primary disabled-on-loading btn-style-green px-3" style="border-radius:0!important;" id="step2CheckAadhar" type="button"> <i style="font-size:1.5em;" class="fa fa-check-circle"></i></button>  
                                    </div>
                                </div>
                                <div class="input-group mt-2 px-0 d-none" id="panIdentity">
                                    <div class="form-floating mt-2 pr-2">
                                        <input type="text" class="form-control" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                                        <label for="panNumber" id="panLabel" class="pl-2">Enter PAN No</label>
                                        <div class="invalid-feedback">Please enter PAN Number.</div>
                                    </div>
                                    <div class="input-group-append mt-2 py-0" id="step2CheckPanDiv">
                                        <button class="btn btn-primary disabled-on-loading btn-style-green px-3" style="border-radius:0!important;" id="step2CheckPan" type="button"> <i style="font-size:1.5em;" class="fa fa-check-circle"></i></button>  
                                    </div>
                                </div>
                                <div class="input-group mt-2 px-0 d-none" id="voterIdentity">
                                    <div class="form-floating mt-2 pr-2">
                                        <input type="text" class="form-control" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                                        <label for="voterId" id="voterLabel" class="pl-2">Enter Voter No</label>
                                        <div class="invalid-feedback">Please enter Voter Number.</div>
                                    </div>
                                    <div class="input-group-append mt-2 py-0" id="step2CheckVoterDiv">
                                        <button class="btn btn-primary disabled-on-loading btn-style-green px-3" style="border-radius:0!important;" id="step2CheckVoter" type="button"> <i style="font-size:1.5em;" class="fa fa-check-circle"></i></button>  
                                    </div>
                                </div>
                                <div class="input-group mt-2 px-0 d-none" id="dlIdentity">
                                    <div class="form-floating mt-2 pr-2">
                                        <input type="text" class="form-control" max="12" min="12" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                        <label for="dlNumber" id="dlLabel" class="pl-2">Enter Driving License No</label>
                                        <div class="invalid-feedback">Please enter Driving License number.</div>
                                    </div>
                                    <div class="input-group-append mt-2 py-0" id="step2CheckDlDiv">
                                        <button class="btn btn-primary disabled-on-loading btn-style-green px-3" style="border-radius:0!important;" id="step2CheckDl" type="button"> <i style="font-size:1.5em;" class="fa fa-check-circle"></i></button>  
                                    </div>
                                </div>
                                
                                <div id="genderdiv" class="d-none">
                                    <div class="form-floating col-12 mt-3 px-0">
                                        <input type="text" disabled id="name" class="form-control text-success">
                                        <label class="form-label">Name</label>
                                    </div>
                                    <div class="col-12 mt-2 px-0">
                                        <label for="gender" class="form-label">Select Gender</label>
                                        <div class="w-100 form-check form-check-inline">
                                            <input type="radio" name="gender" id="male" class="form-check-input" checked value="Male" required>
                                            <label for="male" class="form-check-label mr-2">Male</label>
                                            <input type="radio" name="gender" id="female" class="form-check-input" value="Female" required>
                                            <label for="female" class="form-check-label mr-2">Female</label>
                                            <input type="radio" name="gender" id="other" value="Other" class="form-check-input" required>
                                            <label for="other" class="form-check-label">Other</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 px-0">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                                <select class="form-select" name="date" required>
                                                    <option value="" selected="selected">Date</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>  
                                                <div class="invalid-feedback">Please, select Date</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                                <select class="form-select" name="month" required>
                                                    <option value="" selected="selected">Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                                <div class="invalid-feedback">Please, select Month</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                                <select class="form-select" name="year" required>
                                                    <option value="" selected="selected">Year</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                    <option value="1918">1918</option>
                                                    <option value="1917">1917</option>
                                                    <option value="1916">1916</option>
                                                    <option value="1915">1915</option>
                                                    <option value="1914">1914</option>
                                                    <option value="1913">1913</option>
                                                    <option value="1912">1912</option>
                                                    <option value="1911">1911</option>
                                                    <option value="1910">1910</option>
                                                    <option value="1909">1909</option>
                                                    <option value="1908">1908</option>
                                                    <option value="1907">1907</option>
                                                    <option value="1906">1906</option>
                                                    <option value="1905">1905</option>
                                                    <option value="1904">1904</option>
                                                    <option value="1903">1903</option>
                                                    <option value="1902">1902</option>
                                                    <option value="1901">1901</option>
                                                </select>
                                                <div class="invalid-feedback">Please, select Year</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="justify-content:space-evenly;">
                                        <div class="col-5 px-0">
                                            <button class="btn btn-primary w-100 disabled-on-loading next" id="btnStep2" type="submit"> Search</button>  
                                        </div>
                                        <div class="col-5 px-0">
                                            <button class="btn btn-primary w-100 pl-3 disabled-on-loading reset" id="btnStep2Clear" type="button"> Change Id</button>  
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="mainPhotoSelected" >
                            </div>
                        </form>
                    </div>
                </div>
                <div class="credits">
                    Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<div id="cameraModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Camera</h5>
                <a class="close btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row my-3 justify-content-center" id="videodiv">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12 mb-3 col-md-auto text-center" id="clickdiv">
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo</button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-auto text-center d-none mb-3" id="retake">
                        <button id="retake-photo" class="w-100 btn btn-primary btn-style-four">Retake</button>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-auto text-center d-none mb-3" id="retakeMobile">
                        <button id="retake-mobile" class="w-100 btn btn-primary btn-style-four" onclick="openCamera()">Retake</button>
                    </div>
                </div>
                <input type="file" hidden id="fileMobInput" capture="camera">
                <div class="row justify-content-center d-none" id="canvasdiv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                </div>
                <div class="row justify-content-center d-none" id="mobileimagediv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <img id="mobileimage" width="320" height="240">
                    </div>
                </div>
                <div class='row justify-content-center text-center mx-0' id="bothcameradiv">
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-3 mx-0">
                    <div class="col-lg-8 col-sm-12 col-md-auto text-center">
                        <button id="btnInactiveSave" class="w-100 btn btn-primary btn-style-four disabled-on-loading"> Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    .swal2-confirm{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color:#008000!important;
    }
    
    #swal2-html-container{
        margin:0!important;
    }
    .
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<style type="text/css">
    .no-border {
        border: 0 !important;
    }
    .swal2-close{
        position: relative!important;
        color: #000!important;
        font-size: 38px!important;
        line-height: 20px!important;
        font-weight: 600!important;
        padding: 25px 25px!important;
        background-color: white!important;
    }
        
    </style>
<script type="text/javascript">
    
    $('#btnStep2Clear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2CheckAadharDiv').removeClass('d-none');
        $('#step2CheckDlDiv').removeClass('d-none');
        $('#step2CheckVoterDiv').removeClass('d-none');
        $('#step2CheckPanDiv').removeClass('d-none');
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    function redirectToStep2()
    {
        window.open('<?php echo base_url(); ?>user/checkStep2','_blank');
    }
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/png');
       	$('#videodiv').addClass('d-none');
       	$('#canvasdiv').removeClass('d-none');
        $('#mainPhotoSelected').val(image_data_url);
        $('#clickdiv').addClass('d-none');
        $('#retake').removeClass('d-none');
    });
    
    $('.close').click(function()
    {
        location.reload();
    })
    
    $('#retake button').click(function(){
        $('#videodiv').removeClass('d-none');
        $('#canvasdiv').addClass('d-none');
        $('#mainPhotoSelected').val();
        $('#clickdiv').removeClass('d-none');
        $('#retake').addClass('d-none');
    })
    
    $('#btnInactiveSave').click(function()
    {
        if($('#mainPhotoSelected').val() != '')
        {
            $(this).attr('disabled','disabled');      
            let data = new FormData($('#step2Form')[0]);
            data.append('photo',$('#mainPhotoSelected').val());
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkInactiveInfo',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {
                        location.href="<?php echo base_url(); ?>user/checkStep2";
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#btnInactiveSave').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }  
                }
            })
        }else{
            toastr.error('Please capture the photo to continue');
        }
    })
    
    async function openFrontCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').removeClass('d-none');
        $('#frontcameradiv').addClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false,facingMode:'user' });
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    async function openBackCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').addClass('d-none');
        $('#frontcameradiv').removeClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: {facingMode:'environment'}, audio: false});
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    function openCamera()
    {
        $('#fileMobInput').click();
    }
    
    $('#fileMobInput').on('change',function(e)
    {
        $('#cameraModal').modal('show');
        swal.close();
        const selectedfile = e.target.files;
        if (selectedfile.length > 0) {
          const [imageFile] = selectedfile;
          const fileReader = new FileReader();
          fileReader.onload = () => {
            $('#mainPhotoSelected').val(fileReader.result);
            $('#mobileimage').attr('src',fileReader.result);
          };
          fileReader.readAsDataURL(imageFile);
        }
        $('#clickdiv').addClass('d-none');
        $('#bothcameradiv').addClass('d-none');
       	$('#videodiv').addClass('d-none');
       	$('#mobileimagediv').removeClass('d-none');
        $('#retakeMobile').removeClass('d-none');
    })
    
    function openCameraPopup()
    {
        Swal.fire({
            allowOutsideClick:false,
            icon : 'info',
            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        })   
    }
    
    $('#step2Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            $('#btnStep2').attr('disabled','disabled');
            let data = new FormData(this);
            $.ajax({
                url:$(this).attr('action'),
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {
                        if(parse.isVisible == '1')
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 16px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 16px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 21px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>user/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })   
                             }   
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 16px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 16px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                }).then((result) => {
                                    if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#btnStep2').removeAttr('disabled');
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 21px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#btnStep2').removeAttr('disabled');
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })   
                             }   
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#btnSubmit').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                            $('#btnSubmit').removeClass('d-none');   
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnStep2').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }  
                }
            });
        }else{
            return false;
        }
    })
    
    $('#step2CheckAadhar').click(function()
    {
        $('#step2CheckAadhar').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckAadhar').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkPersonId',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#genderdiv').removeClass('d-none');
                        $('#name').val(parse.name);
                        $('#aadharLabel').html('Aadhaar No');
                        $('#aadharNumber').addClass('text-success');
                        $('#step2CheckAadharDiv').addClass('d-none');
                        $('#aadharNumber').attr('readonly','readonly');
                        $('#idTypeDiv').addClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'danger',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }else if(result.isDismissed)
                            {
                                location.reload();
                            }
                        })
                    }
                }
            })
        }
    })
    
    $('#step2CheckDl').click(function()
    {
        $('#step2CheckDl').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckDl').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckDl').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkPersonId',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#genderdiv').removeClass('d-none');
                        $('#name').val(parse.name);
                        $('#step2CheckDlDiv').addClass('d-none');
                        $('#dlNumber').attr('readonly','readonly');
                        $('#dlLabel').html('Driving License No');
                        $('#dlNumber').addClass('text-success');
                        $('#idTypeDiv').addClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'danger',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }else if(result.isDismissed)
                            {
                                location.reload();
                            }
                        })
                    }
                }
            })
        }
    })
    
    $('#step2CheckVoter').click(function()
    {
        $('#step2CheckVoter').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVoter').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkPersonId',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#genderdiv').removeClass('d-none');
                        $('#name').val(parse.name);
                        $('#step2CheckVoterDiv').addClass('d-none');
                        $('#voterNumber').attr('readonly','readonly');
                        $('#voterLabel').html('Voter No');
                        $('#voterNumber').addClass('text-success');
                        $('#idTypeDiv').addClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'danger',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }else if(result.isDismissed)
                            {
                                location.reload();
                            }
                        })
                    }
                }
            })
        }
    })
    
    $('#step2CheckPan').click(function()
    {
        $('#step2CheckPan').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckPan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckPan').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkPersonId',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#genderdiv').removeClass('d-none');
                        $('#name').val(parse.name);
                        $('#step2CheckPanDiv').addClass('d-none');
                        $('#panNumber').attr('readonly','readonly');
                        $('#panLabel').html('PAN No');
                        $('#panNumber').addClass('text-success');
                        $('#idTypeDiv').addClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'danger',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }else if(result.isDismissed)
                            {
                                location.reload();
                            }
                        })
                    }
                }
            })
        }
    })
    
    function showInputAccordingly(val)
    {
        if(val == '')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#aadharIdentity').removeClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').attr('name','aadhar_id');
            
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').attr('name','voterId');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').removeClass('d-none');
            $('#voterId').attr('required',true);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#panNumber').attr('name','panNumber');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').removeClass('d-none');
            $('#panNumber').attr('required',true);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').removeClass('d-none');
            $('#dlNumber').attr('required',true);
        }
    }
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendOtpDiv button').removeClass('disabled');
        }else{
            $('#sendOtpDiv button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendOtpDiv button').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/resendCheckOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $('#otp').val('');
                    toastr.success('OTP Sent Successfully');
                    $(ele).removeAttr('disabled');
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function sendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendCheckOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $(ele).removeAttr('disabled');
                        $('#otp').attr('required',true);
                        toastr.success('OTP Sent Successfully');
                        $('#mobileNumber').attr('readonly',true);   
                        $('#sendOtpDiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    $('#step1Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            $('#btn1').attr('disabled','disabled');
            let data = new FormData(this);
            $.ajax({
                url:$(this).attr('action'),
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        location.href="<?php echo base_url(); ?>user/checkPerson?pn=2";   
                    }else{
                        toastr.error(parse.message);
                        $('#otp').val('');
                        $('#btn1').removeAttr('disabled');
                    }
                }
            });   
        }else{
            return false;
        }
    })
    
    $('#mobileClear').click(function()
    {
        $('#mobileNumber').val('');
        $('#mobileNumber').attr('readonly',false);
        $('#sendOtpDiv').removeClass('d-none');
        $('#sendOtpDiv button').removeClass('btn-style-five').addClass('btn-style-grey');
        $('#sendOtpDiv button').addClass('disabled');
        $('#otpdiv').addClass('d-none');
    })
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
    
    $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
</script>