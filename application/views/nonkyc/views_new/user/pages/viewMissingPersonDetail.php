<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
      font-weight: bold!important;
      color: black!important;
    }
    @media screen and (min-width:525px)
    {
        p{
            margin-bottom: 0;
        }
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Missing Detail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user/manage_person_details">Missing Person List</a></li>
          <li class="breadcrumb-item active">Missing Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body px-2 pt-2 text-center">
                  <?php if($missing[0]['rewardamount'] != NULL && $missing[0]['rewardamount'] != '' && $missing[0]['rewardamount'] > 0){ ?>
                  <p class="text-center btn btn-outline-primary text-dark" style="text-align:left;font-weight: bold;">Reward Amount : <b class="text-dark"><i class="bi bi-currency-rupee"></i><?= $missing[0]['rewardamount']; ?></b></p>
                  <?php } ?>
                  <hr>
                  <h5 class="text-center">Missing Person Details</h5>
                  <hr>
                  <?php 
                    $getMissingFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$missing[0]['Id'])->result_array();
                  ?>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Aadhar Number</label>
                          <p><?= (($missing[0]['missingaadhar'] != NULL || $missing[0]['missingaadhar'] != '') ? $missing[0]['missingaadhar'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Person Name</label>
                          <p><?= (($missing[0]['missingname'] != NULL || $missing[0]['missingname'] != '') ? $missing[0]['missingname'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Date of Birth</label>
                          <p><?= (($missing[0]['missingdob'] != NULL || $missing[0]['missingdob'] != '') ? date('d-m-Y',strtotime($missing[0]['missingdob'])) : date('d-m-Y',strtotime($getMissingFullDetail[0]['dob']))); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Gender</label>
                          <p><?= (($missing[0]['missinggender'] != NULL || $missing[0]['missinggender'] != '') ? $missing[0]['missinggender'] : $getMissingFullDetail[0]['gender']); ?></p>
                      </div>
                  </div>
                  <hr>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Religion</label>
                          <p><?= (($missing[0]['missingreligion'] != NULL || $missing[0]['missingreligion'] != '') ? $missing[0]['missingreligion'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>State</label>
                          <p><?= (($missing[0]['fatherstate'] != NULL || $missing[0]['fatherstate'] != '') ? $missing[0]['fatherstate'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>District</label>
                          <p><?= (($missing[0]['fatherdistrict'] != NULL || $missing[0]['fatherdistrict'] != '') ? $missing[0]['fatherdistrict'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>City</label>
                          <p><?= (($missing[0]['fathercity'] != NULL || $missing[0]['fathercity'] != '') ? $missing[0]['fathercity'] : '-'); ?></p>
                      </div>
                  </div>
                  <hr>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Village</label>
                          <p><?= (($missing[0]['fathervillage'] != NULL || $missing[0]['fathervillage'] != '') ? $missing[0]['fathervillage'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Pincode</label>
                          <p><?= (($missing[0]['fatherpincode'] != NULL || $missing[0]['fatherpincode'] != '') ? $missing[0]['fatherpincode'] : '-'); ?></p>
                          <p><?= $missing[0]['fatherpincode']; ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Current Address</label>
                          <p><?= (($missing[0]['fathercurrentaddress'] != NULL || $missing[0]['fathercurrentaddress'] != '') ? $missing[0]['fathercurrentaddress'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Pan Number</label>
                          <p><?= (($missing[0]['missingpan'] != NULL || $missing[0]['missingpan'] != '') ? $missing[0]['missingpan'] : '-'); ?></p>
                      </div>
                  </div>
                  <hr>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-6 col-sm-12 col-md-6">
                          <label>Voter Id</label>
                          <p><?= (($missing[0]['missingvoter'] != NULL || $missing[0]['missingvoter'] != '') ? $missing[0]['missingvoter'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-6 col-sm-12 col-md-6">
                          <label>Driving License Number</label>
                          <p><?= (($missing[0]['missingdl'] != NULL || $missing[0]['missingdl'] != '') ? $missing[0]['missingdl'] : '-'); ?></p>
                      </div>
                  </div>
                  <hr>
                  <h5 class="text-center">Missing Fir Details</h5>
                  <hr>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>State</label>
                          <p><?= (($missing[0]['firstate'] != NULL || $missing[0]['firstate'] != '') ? $missing[0]['firstate'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>District</label>
                          <p><?= (($missing[0]['firdistrict'] != NULL || $missing[0]['firdistrict'] != '') ? $missing[0]['firdistrict'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>City</label>
                          <p><?= (($missing[0]['fircity'] != NULL || $missing[0]['fircity'] != '') ? $missing[0]['fircity'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Village</label>
                          <p><?= (($missing[0]['firvillage'] != NULL || $missing[0]['firvillage'] != '') ? $missing[0]['firvillage'] : '-'); ?></p>
                      </div>
                  </div>
                  <hr>
                  <div class="row mb-3 justify-content-center text-center">
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Police Thana Name</label>
                          <p><?= (($missing[0]['firpolicethananame'] != NULL || $missing[0]['firpolicethananame'] != '') ? $missing[0]['firpolicethananame'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Date</label>
                          <p><?= (($missing[0]['firdate'] != NULL || $missing[0]['firdate'] != '') ? $missing[0]['firdate'] : '-'); ?></p>
                      </div>
                      <div class="col-lg-3 col-sm-12 col-md-3">
                          <label>Fir Number</label>
                          <p><?= (($missing[0]['firno'] != NULL || $missing[0]['firno'] != '') ? $missing[0]['firno'] : '-'); ?></p>
                      </div>
                  </div>
                  <hr>
                  <h5 class="text-center">Missing Person Photos</h5>
                  <hr>
                  <?php if($missing[0]['photos'] != NULL || $missing[0]['photos'] != ''){ 
                      $decode = json_decode($missing[0]['photos'],true);
                      if(count($decode) > 0)
                      {
                  ?>
                  <div class="row mb-3 justify-content-center">
                      <?php 
                          foreach($decode as $k=>$v)
                          {
                      ?>
                      <div class="col-lg-2 col-sm-12 col-md-2 my-4">
                          <img src="<?php echo base_url(); ?><?= $v; ?>" style="width: 100%;height: 200px;">
                      </div>
                      <?php } ?>
                  </div>
                  <?php }else{ ?>
                      <h5 class="text-center text-danger">No Photos Uploaded</h5>
                  <?php } ?>
                <?php }else{ ?>
                    <h5 class="text-center text-danger">No Photos Uploaded</h5>
                <?php } ?>
                <hr>
                  <h5 class="text-center">Missing Contact Details</h5>
                <hr>
                <div class="row mb-3 justify-content-center text-center">
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <label>Mobile 1</label>
                        <p><?= (($missing[0]['mobile1'] != NULL || $missing[0]['mobile1'] != '') ? $missing[0]['mobile1'] : '-'); ?></p>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <label>Mobile 2</label>
                        <p><?= (($missing[0]['mobile2'] != NULL || $missing[0]['mobile2'] != '') ? $missing[0]['mobile2'] : '-'); ?></p>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <label>Mobile 3</label>
                        <p><?= (($missing[0]['mobile3'] != NULL || $missing[0]['mobile3'] != '') ? $missing[0]['mobile3'] : '-'); ?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  </main>