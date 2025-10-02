<style>
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    hr{
        margin:0!important;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Other Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Other Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <?php 
            if(count($otherdetail) == 0)
            {
        ?>
        <div class="row">
            <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row mt-3">
                                <div class="col-md-12 text-center">
                                    <label><b>What u want to add please select from below option?</b></label>
                                </div>
                            </div>
                            <div class="row mb-3 mt-1">
                                <div class="col-md-12 text-center">
                                    <input type="checkbox" name="voter" id="voter" value="1" onclick="updateAmount()">
                                    <label for="voter" class="mx-sm-4 mx-md-2">Voter Card</label>
                                    <input type="checkbox" name="dl" id="dl" value="1" onclick="updateAmount()">
                                    <label for="dl" class="mx-sm-4 mx-md-2" style="margin:0.2rem;">Driving License</label>
                                    <input type="checkbox" name="pan" id="pan" value="1" onclick="updateAmount()">
                                    <label for="pan" class="mx-sm-4 mx-md-2">PAN Card</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" id="payDiv">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <label><b>Total Amount</b></label>
                                    <input type="number" id="totalAmount" readonly class="form-control" value="0">
                                </div>
                                <div class="col-md-auto col-sm-12 col-lg-auto mt-4 text-center">
                                    <button type="button" class="btn btn-success d-block disabled-on-loading save w-100" id="btnPay"> Procced to Pay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
        <?php }else{ ?>
            <div class="row">
                <?php 
                    if($otherdetail[0]['voterPaymentStatus'] == 'Success')
                    {
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-2" style="display:flex;flex-direction:row;">
                    <div class="card" style="width:100%;">
                        <div class="card-body pt-3">
                            <div class="row align-items-center mb-3">
                                <div class="col-7 text-start">
                                    <h5><b>Voter Details</b></h5>
                                </div>
                                <div class="col-2 text-center">
                                </div>
                                <div class="col-3 text-center">
                                    <img src="<?php echo base_url(); ?>assets/images/icons8-voter-64.png" style="width:100%;height:70px;">
                                </div>
                            </div>
                            <?php 
                                  if($otherdetail[0]['voterDetails'] == NULL)
                                  {
                              ?>
                              <form id="addVoter" action="<?php echo base_url(); ?>user/addVoter" method="post">
                                  <?php 
                                    $csrf = array(
                                      'name' => $this->security->get_csrf_token_name(),
                                      'hash' => $this->security->get_csrf_hash()
                                      );
                                  ?>
                                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                  <div class="row mb-3">
                                      <label for="voterNumber" class="col-md-4 col-lg-3 col-form-label">Voter Id</label>
                                      <div class="col-md-8 col-lg-6">
                                          <input type="text" class="form-control text-uppercase" id="voterNumber" name="voterNumber" placeholder="Enter Voter Number" required>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                            <input type="checkbox" name="consent" value="Y" required id="consent">
                                            <label for="consent" class="d-inline">I provide consent to process the shared information.</label>
                                      </div>
                                  </div>
                                  <div class="text-center mt-3">
                                    <button id="btnVoter" type="submit" class="btn btn-primary disabled-on-loading save"> Get Voter Details</button>
                                  </div>
                              </form>
                              <?php }else{ 
                                    $getVoterDetails = $this->db->query('select * from voterslist where Id='.$otherdetail[0]['voterDetails'])->result_array();
                                ?>
                                    <div class="row mt-0 align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Voter Id</label>
                                        <div class="col-md-6 col-lg-6 pb-2">
                                            <?php echo $getVoterDetails[0]['voterNumber']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Full Name</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['personname']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Father Name</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['fathername']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Gender</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['gender']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Age</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['age']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">District</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['district']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">State</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['state']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Assembly Constituency Name</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['assembly_constituency_name']; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Polling Station</label>
                                        <div class="col-md-6 col-lg-6 py-2">
                                            <?php echo $getVoterDetails[0]['polling_station']; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom:1rem!important;">
                                    <div class="row align-items-center text-center">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <button type="button" class="btn btn-primary reset disabled-on-loading" onclick="deleteDetail('voter',this)"> Delete <i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                              <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php 
                    if($otherdetail[0]['dlPaymentStatus'] == 'Success')
                    {
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-2" style="display:flex;flex-direction:row;">
                    <div class="card w-100" style="">
                        <div class="card-body pt-3" style="display:block;">
                            <div class="row align-items-center mb-3">
                                <div class="col-7 text-start">
                                    <h5><b>Driving License Details</b></h5>
                                </div>
                                <div class="col-2">
                                </div>
                                <div class="col-3 text-center">
                                    <img src="<?php echo base_url(); ?>assets/images/4213483.avif" style="width:100%;height:70px;">
                                </div>
                            </div>
                            <?php 
                                  if($otherdetail[0]['dlDetails'] == NULL)
                                  {
                              ?>
                              <form id="addDl" action="<?php echo base_url(); ?>user/addDl" method="post">
                              <?php 
                                $csrf = array(
                                  'name' => $this->security->get_csrf_token_name(),
                                  'hash' => $this->security->get_csrf_hash()
                                  );
                              ?>
                              <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                              <div class="row mb-3">
                                  <label for="dlNumber" class="col-md-4 col-lg-3 col-form-label">D.L Number</label>
                                  <div class="col-md-8 col-lg-7">
                                      <input type="text" class="form-control text-uppercase" id="dlNumber" name="dlNumber" placeholder="Enter D.L Number" required>
                                  </div>
                              </div>
                                <div class="row mb-1">
                                    <label for="dob" class="col-lg-3 form-label">Date of Birth</label>
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                                    <select class="form-select" name="date" required>
                                        <option value="" selected="selected">Date</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
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
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                                        <select class="form-select" name="month" required>
                                        <option value="" selected="selected">Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                        <div class="invalid-feedback">Please, select Month</div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
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
                              <div class="row mb-2">
                                  <div class="col-md-12">
                                        <input type="checkbox" name="consent" value="Y" required id="consent">
                                        <label for="consent" class="d-inline">I provide consent to process the shared information.</label>
                                  </div>
                              </div>
                              <div class="text-center">
                                <button id="btnDl" type="submit" class="btn btn-primary disabled-on-loading save"> Get Driving License Details</button>
                              </div>
                          </form>
                          <?php }else{ 
                                $getDlDetails = $this->db->query('select * from dllist where Id='.$otherdetail[0]['dlDetails'])->result_array();
                            ?>
                                <div class="row mt-3">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Dl Number</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getDlDetails[0]['dlNumber']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Full Name</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getDlDetails[0]['personname']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Date of Birth</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo date('d-m-Y',strtotime($getDlDetails[0]['dob'])); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Dependent/Father Name</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getDlDetails[0]['dependent_name']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Address</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getDlDetails[0]['address']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Pincode</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo (($getDlDetails[0]['pincode'] != '') ? $getDlDetails[0]['pincode'] : '-'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Rto State</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo (($getDlDetails[0]['rto_state'] != '') ? $getDlDetails[0]['rto_state'] : '-'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Rto Authority</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo (($getDlDetails[0]['rto_authority'] != '') ? $getDlDetails[0]['rto_authority'] : '-'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Blood Group</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo (($getDlDetails[0]['blood_group'] != '') ? $getDlDetails[0]['blood_group'] : '-'); ?>
                                    </div>
                                </div>
                                <hr>
                                <?php 
                                    if($getDlDetails[0]['photo_base64'] != '')
                                    {
                                ?>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Photo</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <img src="<?php echo base_url(); ?><?php echo $getDlDetails[0]['photo_base64']; ?>" style="width: 200px;height: 200px;">
                                    </div>
                                </div>
                                <?php } ?>
                                <hr style="margin-bottom:1rem!important;">
                                <div class="row align-items-center text-center">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <button type="button" class="btn btn-primary reset disabled-on-loading" onclick="deleteDetail('driving license',this)"> Delete <i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php 
                    if($otherdetail[0]['panPaymentStatus'] == 'Success')
                    {
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-2" style="display:flex;flex-direction:row;">
                    <div class="card w-100" style="">
                        <div class="card-body pt-0">
                            <div class="row align-items-center mb-3" style="justify-content:space-around;">
                                <div class="col-7 text-start">
                                    <h5><b>PAN Details</b></h5>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-3 text-center">
                                    <img src="<?php echo base_url(); ?>assets/images/pan.png" style="width:100%;height:70px;">
                                </div>
                            </div>
                            <?php 
                              if($otherdetail[0]['panDetails'] == NULL)
                              {
                          ?>
                          <form id="addPan" action="<?php echo base_url(); ?>user/addNewPan" method="post">
                              <?php 
                                $csrf = array(
                                  'name' => $this->security->get_csrf_token_name(),
                                  'hash' => $this->security->get_csrf_hash()
                                  );
                              ?>
                              <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                              <div class="row mb-3">
                                  <label for="panNumber" class="col-md-4 col-lg-3 col-form-label">PAN Number</label>
                                  <div class="col-md-8 col-lg-6">
                                      <input type="text" class="form-control text-uppercase" id="panNumber" name="panNumber" placeholder="Enter PAN Number" required>
                                  </div>
                              </div>
                              <div class="text-center">
                                <button id="btnPan" type="submit" class="btn btn-primary disabled-on-loading save"> Get PAN Details</button>
                              </div>
                          </form>
                          <?php }else{ 
                                $getPanDetails = $this->db->query('select * from panlist where Id='.$otherdetail[0]['panDetails'])->result_array();
                            ?>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">PAN Number</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getPanDetails[0]['panNumber']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Full Name</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo $getPanDetails[0]['fullname']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Holder Type</label>
                                    <div class="col-md-6 col-lg-6 py-2">
                                        <?php echo ($getPanDetails[0]['is_individual'] ? 'Individual' : 'Person'); ?>
                                    </div>
                                </div>
                                <!--<hr>-->
                                <!--<div class="row">-->
                                <!--    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">PAN Status</label>-->
                                <!--    <div class="col-md-6 col-lg-6 py-2">-->
                                <!--        <?php echo $getPanDetails[0]['pan_status']; ?>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<hr>-->
                                <!--<div class="row">-->
                                <!--    <label for="voterNumber" class="text-start text-md-center col-md-6 col-lg-6 col-form-label">Aadhar Seeding Status</label>-->
                                <!--    <div class="col-md-6 col-lg-6 py-2">-->
                                <!--        <?php echo $getPanDetails[0]['aadhaar_seeding_status']; ?>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <hr style="margin-bottom:1rem!important;">
                                <div class="row align-items-center text-center">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <button type="button" class="btn btn-primary reset disabled-on-loading" onclick="deleteDetail('PAN',this)"> Delete <i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php 
                    if($otherdetail[0]['voterPaymentStatus'] != 'Success' || $otherdetail[0]['panPaymentStatus'] != 'Success' || $otherdetail[0]['dlPaymentStatus'] != 'Success')
                    {
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-2" style="display:flex;flex-direction:row;">
                    <div class="card w-100" style="">
                        <div class="card-body pt-3">
                            <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <label><b>What u want to add please select from below option?</b></label>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-1">
                                    <div class="col-md-12 text-center">
                                        <?php 
                                                if($otherdetail[0]['voterPaymentStatus'] != 'Success')
                                                {
                                            ?>
                                            <input type="checkbox" name="voterother" id="voterother" value="1" onclick="updateOtherAmount()">
                                            <label for="voterother" style="margin-right: 1rem;">Voter Card</label>
                                            <?php } ?>
                                            <?php 
                                                if($otherdetail[0]['dlPaymentStatus'] != 'Success')
                                                {
                                            ?>
                                            <input type="checkbox" class="ml-5" name="dlother" id="dlother" value="1" onclick="updateOtherAmount()">
                                            <label for="dlother" style="margin-right: 1rem;">Driving License</label>
                                            <?php } ?>
                                            <?php 
                                                if($otherdetail[0]['panPaymentStatus'] != 'Success')
                                                {
                                            ?>
                                            <input type="checkbox" name="panother" id="panother" value="1" onclick="updateOtherAmount()">
                                            <label for="panother">PAN Card</label>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <hr>
                            <div class="row" id="payOtherDiv">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label><b>Total Amount</b></label>
                                        <input type="number" id="totalOtherAmount" readonly class="form-control" value="0">
                                    </div>
                                    <div class="col-md-auto col-lg-auto col-sm-12 text-center mt-4">
                                        <button type="button" class="btn btn-success d-block disabled-on-loading save w-100" id="btnOtherPay"> Procced to Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </section>

  </main><!-- End #main -->

  <script type="text/javascript">
    $('#nochoiceLink').click(function()
    {
        $('#droplabel').html('Select Your Choice');
        $('#voterTab').removeClass('show active').addClass('d-none');
        $('#dltab').removeClass('show active').addClass('d-none');
        $('#pantab').removeClass('show active').addClass('d-none');
        $('#othertab').removeClass('show active').addClass('d-none');
    })
    $('#voterlink').click(function()
    {
        $('#droplabel').html('Voter');
        $('#voterTab').addClass('show active').removeClass('d-none');
        $('#dltab').removeClass('show active').addClass('d-none');
        $('#pantab').removeClass('show active').addClass('d-none');
        $('#othertab').removeClass('show active').addClass('d-none');
    })
    $('#dllink').click(function()
    {
        $('#droplabel').html('Driving License');
        $('#voterTab').removeClass('show active').addClass('d-none');
        $('#dltab').addClass('show active').removeClass('d-none');
        $('#pantab').removeClass('show active').addClass('d-none');
        $('#othertab').removeClass('show active').addClass('d-none');
    })
    $('#panlink').click(function()
    {
        $('#droplabel').html('Pan Card');
        $('#voterTab').removeClass('show active').addClass('d-none');
        $('#dltab').removeClass('show active').addClass('d-none');
        $('#pantab').addClass('show active').removeClass('d-none');
        $('#othertab').removeClass('show active').addClass('d-none');
    })
    $('#otherlink').click(function()
    {
        $('#droplabel').html('Other Options');
        $('#voterTab').removeClass('show active').addClass('d-none');
        $('#dltab').removeClass('show active').addClass('d-none');
        $('#pantab').removeClass('show active').addClass('d-none');
        $('#othertab').addClass('show active').removeClass('d-none');
    })
    
    function deleteDetail(type,ele)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Delete '+type+'</strong>',
            icon: 'info',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete '+type+' details?</label></div>',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('type',type);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteDoc',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('data deleted successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                });
            }
        })   
    }
    
    $('#btnPay').on('click',function()
    {
        $('#btnPay').attr('disabled','disabled');
        if($('#voter').is(':checked') || $('#dl').is(':checked') || $('#pan').is(':checked'))
        {
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('totalAmount',$('#totalAmount').val());
            if($('#voter').is(':checked'))
            {
                data.append('voter',1);
            }else{
                data.append('voter',0);
            }
            if($('#dl').is(':checked'))
            {
                data.append('dl',1);
            }else{
                data.append('dl',0);
            }
            if($('#pan').is(':checked'))
            {
                data.append('pan',1);
            }else{
                data.append('pan',0);
            }
            $.ajax({
                url:'<?php echo base_url(); ?>user/otherPayment',
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
                          toastr.success('Amount Paid Successfully');
                          setTimeout(function()
                          {
                            location.reload();
                          },6000);
                     }else{
                        toastr.error('Something Went Wrong');
                        $('#btnPay').removeAttr('disabled');
                    }  
                }
            });
        }else{
            toastr.error('No options selected. Please Select at least one option.');
            $('#btnPay').removeAttr('disabled');
        }
    })

    $('#btnOtherPay').on('click',function()
    {
        $('#btnOtherPay').attr('disabled','disabled');
        if($('#voterother').is(':checked') || $('#dlother').is(':checked') || $('#panother').is(':checked'))
        {
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('totalAmount',$('#totalOtherAmount').val());
            if($('#voterother').is(':checked'))
            {
                data.append('voter',1);
            }else{
                data.append('voter',0);
            }
            if($('#dlother').is(':checked'))
            {
                data.append('dl',1);
            }else{
                data.append('dl',0);
            }
            if($('#panother').is(':checked'))
            {
                data.append('pan',1);
            }else{
                data.append('pan',0);
            }
            $.ajax({
                url:'<?php echo base_url(); ?>user/updateotherPayment',
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
                          toastr.success('Amount Paid Successfully');
                          setTimeout(function()
                          {
                            location.reload();
                          },2000);
                     }else{
                        toastr.error('Something Went Wrong');
                        $('#btnOtherPay').removeAttr('disabled');
                    }  
                }
            });
        }else{
            toastr.error('No options selected. Please Select at least one option.');
            $('#btnOtherPay').removeAttr('disabled');
        }
    })

    $('#addPan').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPan').attr('disabled','disabled');
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
                    Swal.fire({
                        title: '<strong class="text-success" style="font-size:20px;">Your PAN Details Add Successfully</strong>',
                        icon: 'success',
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:true,
                        'confirmButtonText':'OK'
                    }).then((result) => {
                        location.reload();
                    })   
                 }else{
                    let textMessage = 'PAN Number';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#panNumber').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border'
                        },
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        confirmButtonText:'Please Try Again',
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        $('#btnPan').removeAttr('disabled');
                    })
                }  
            }
        });
    })    

    $('#addDl').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnDl').attr('disabled','disabled');
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
                    Swal.fire({
                        title: '<strong class="text-success" style="font-size:20px;">Your Driving License Details Add Successfully</strong>',
                        icon: 'success',
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:true,
                        'confirmButtonText':'OK'
                    }).then((result) => {
                        location.reload();
                    })   
                 }else{
                    let textMessage = 'Driving License Number';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#dlNumber').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border'
                        },
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        confirmButtonText:'Please Try Again',
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        $('#btnDl').removeAttr('disabled');
                    })
                }
            }
        });
    })

    $('#addVoter').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnVoter').attr('disabled','disabled');
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
                    Swal.fire({
                        title: '<strong class="text-danger" style="font-size:20px;">Your Voter Id Details Add Successfully</strong>',
                        icon: 'success',
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:true,
                        'confirmButtonText':'OK'
                    }).then((result) => {
                        location.reload();
                    })   
                 }else{
                    let textMessage = 'Voter Id';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#voterNumber').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border'
                        },
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        confirmButtonText:'Please Try Again',
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        $('#btnVoter').removeAttr('disabled');
                    })
                }
            }
        });
    })

    function updateAmount()
    {
        let totalAmount = 0;
        if($('#voter').is(':checked'))
        {
            totalAmount += 50;
        }
        if($('#dl').is(':checked'))
        {
            totalAmount += 50;
        }
        if($('#pan').is(':checked'))
        {
            totalAmount += 50;
        }
        $('#totalAmount').val(totalAmount);   
    }

    function updateOtherAmount()
    {
        let totalAmount = 0;
        if($('#voterother').is(':checked'))
        {
            totalAmount += 50;
        }
        if($('#dlother').is(':checked'))
        {
            totalAmount += 50;
        }
        if($('#panother').is(':checked'))
        {
            totalAmount += 50;
        }
        $('#totalOtherAmount').val(totalAmount);   
    }

  </script>