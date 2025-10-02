<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="px-0 col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 py-3 px-0 w-100">

            <div class="card-body">

              <div class="pt-0 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 pt-1"><span class="text-danger fs-4" style="font-weight:500;">Search- </span>Person By <span class="text-danger fs-4" style="font-weight:500;">Filter</span></h5>
              </div>
                
                <form class="row g-3 p-3 align-items-center" method="post">
                    <div class="col-lg-12 col-xl-12">
                        <?php 
                            if(count($missingIds) > 0 || count($userIds) > 0)
                            {
                        ?>
                        <?php 
                            if(count($missingIds) > 0)
                            {
                        ?>
                        <div class="row" id="searchresultdiv">
                            <?php 
                                foreach($missingIds as $k=>$v)
                                {
                                    $getMissingPersonDetails = $this->db->query('select * from missingperson where Id='.$v)->result_array();
                            ?>
                            <div class="pb-3 col-lg-3 col-xl-3 col-sm-12 col-md-4">
                                <div class="card px-0 mb-0">
                                    <a style="text-decoration:auto;color:black;" href="<?php echo base_url(); ?>user/missingpersondetail?Id=<?php echo $v; ?>&type=with">
                                        <img src="<?php echo base_url().''.$getMissingPersonDetails[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                    </a>
                                    <h6 class="text-center mt-3 text-dark"><b>Name:- </b><?php echo $getMissingPersonDetails[0]['missingname']; ?></h6>
                                    <h6 class="text-center mb-3 text-dark"><b>Gender:- </b><span class="text-capitalize"><?php echo $getMissingPersonDetails[0]['missinggender']; ?></span></h6>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }
                        ?>
                        <?php 
                            if(count($userIds) > 0)
                            {
                        ?>
                        <div class="row" id="searchresultdiv">
                            <?php 
                                foreach($userIds as $k=>$v)
                                {
                                    $getUserDetails = $this->db->query('select * from user where uid='.$v)->result_array();
                            ?>
                            <div class="pb-3 col-lg-3 col-xl-3 col-sm-12 col-md-4">
                                <div class="card px-0 mb-0">
                                    <a style="text-decoration:auto;color:black;" href="javascript:void(0)">
                                        <img src="<?php echo base_url().''.$getUserDetails[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                    </a>
                                    <h6 class="text-center mt-3 text-dark"><b>Name:- </b><?php echo $getUserDetails[0]['aadharname']; ?></h6>
                                    <h6 class="text-center mb-3 text-dark"><b>Gender:- </b><span class="text-capitalize"><?php echo $getUserDetails[0]['gender']; ?></span></h6>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php }else{ ?>
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <h5 class="text-danger text-center">No Face Matched</h5>
                            </div>
                        </div>
                        <?php } ?>
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