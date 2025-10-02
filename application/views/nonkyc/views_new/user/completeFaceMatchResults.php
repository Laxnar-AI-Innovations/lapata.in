<?php 
    $getDetails = $this->db->query('select * from searchfilterhistory where Id='.$_SESSION['searchFaceId'])->result_array();
    if($getDetails[0]['matchedMissingIds'] != NULL)
    {
        $missingIds = explode(',',$getDetails[0]['matchedMissingIds']);   
    }else{
        $missingIds = array();
    }
    if(count($missingIds) > 0)
    {
        $this->db->where_in('Id',$missingIds);   
    }
    $getMissingPerson = $this->db->get('missingperson')->result_array();
    if(count($getMissingPerson) > 0)
    {
        foreach($getMissingPerson as $k=>$v)
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'fmatch.shammtech.in',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => 'image1='.base_url().''.$v['facematchphoto'].'&image2='.base_url().''.$getDetails[0]['mainPhoto'],
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            $response = json_decode(curl_exec($curl),true);
            if($response['message'] != 'Internal Server Error')
            {
                if($response['confidence'] < 82)
                {
                    unset($missingIds[$k]);
                }
                curl_close($curl);   
            }else
            {
                unset($missingIds[$k]);
            }   
        }   
    }
?>
<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="px-0 col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 py-3 px-0 w-100">

            <div class="card-body">

              <div class="pt-0 pb-0">
                    <h5 class="card-title text-center pb-0 fs-4 pt-1"><span class="text-danger fs-4" style="font-weight:500;">Search- </span>Person By <span class="text-danger fs-4" style="font-weight:500;">Filter</span></h5>
              </div>
              <div class="row">
                  <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                      <h5 class="card-title text-center pb-0 fs-5 pt-1"><span class="text-danger fs-5" style="font-weight:500;">Uploaded Person's Photo </span></span></h5>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-2 col-sm-12 col-md-4">
                      <?php 
                            $getDetails = $this->db->query('select * from searchfilterhistory where Id='.$_SESSION['searchFaceId'])->result_array();
                      ?>
                      <img src="<?php echo base_url(); ?><?php echo $getDetails[0]['mainPhoto'];  ?>" style="width:100%;height:150px;">
                  </div>
              </div>
                <hr>
                <?php 
                    if(count($missingIds) > 0)
                    {
                ?>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <h5 class="card-title text-center pb-0 fs-5 pt-1"><span class="text-center text-success fs-5" style="font-weight:800;"><?php echo count($missingIds); ?> Person<?php echo (count($missingIds) > 1 ? 's' : ''); ?> Found</span></span></h5>
                    </div>
                </div>
                <hr>
                <?php }else{ ?>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <h5 class="card-title text-center pb-0 fs-5 pt-1"><span class="text-center fs-5" style="font-weight:800;">No Persons Matched Found</span></span></h5>
                    </div>
                </div>
                <hr>
                <?php } ?>
                <form class="row g-3 p-3 align-items-center" method="post">
                    <div class="col-lg-12 col-xl-12">
                        <?php 
                            if(count($missingIds) > 0)
                            {
                        ?>
                        <div class="row justify-content-center justify-content-md-start" id="searchresultdiv">
                            <?php 
                                foreach($missingIds as $k=>$v)
                                {
                                    $getMissingPersonDetails = $this->db->query('select * from missingperson where Id='.$v)->result_array();
                            ?>
                            <div class="pb-3 col-lg-3 col-xl-2 col-sm-12 col-10 col-md-4">
                                <div class="card px-0 mb-0">
                                    <a href="<?php echo base_url().''.$getMissingPersonDetails[0]['facematchphoto']; ?>" data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$getMissingPersonDetails[0]['facematchphoto']; ?>" style="width:100%;height:125px;">
                                    </a>
                                    <h6 class="text-center mt-2 text-danger"><b>Missing</b></h6>
                                    <h6 class="text-center mt-0 text-dark"><?php echo $getMissingPersonDetails[0]['missingname']; ?></h6>
                                    <h6 class="text-center mb-2 text-dark"><span class="text-capitalize"><?php echo $getMissingPersonDetails[0]['missinggender']; ?></span></h6>
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <a style="text-decoration:auto;color:black;" class="btn btn-style-green" href="<?php echo base_url(); ?>user/missingpersondetail?Id=<?php echo $v; ?>&type=with">
                                                Get Details
                                            </a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-center col-sm-12 col-md-12">
                                <a style="text-decoration:auto;color:black;" class="btn btn-style-four" href="<?php echo base_url(); ?>user/searchFacePerson">
                                    Search Another <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
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