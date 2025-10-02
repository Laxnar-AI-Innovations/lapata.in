<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    .dataTable-table > thead > tr > td, .dataTable-table > thead > tr > th {
        vertical-align: middle;
        text-align:center;
         padding: 1rem; 
    }
    .dataTable-table > tbody > tr > td, .dataTable-table > tbody > tr > th {
        vertical-align: middle;
         text-align:center; 
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Search History</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user">Home</a></li>
                <li class="breadcrumb-item active">Search History</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <table class="table text-center table-bordered border border-danger table-striped datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Search Type</th>
                                    <th>Search Query</th>
                                    <th>Application Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $getOverallHistory = $this->db->query('select * from overallHistory where userId='.$_SESSION['user_id'].' order by Id desc')->result_array();
                                if(count($getOverallHistory) > 0)
                                {
                                    $i = 0;
                                    foreach($getOverallHistory as $k=>$v)
                                    {
                                        $i++;
                                        $firstAppNumber = '-';
                                        $extraCount = 0;
                                        if($v['unknownIds'] != '')
                                        {
                                            $explode = array_unique(explode(',',$v['unknownIds']));
                                            $extraCount += count($explode) - 1;
                                            $getUnknownAppNumber = $this->db->query('select * from unknown_person where id='.$explode[0])->result_array();
                                            $firstAppNumber = $getUnknownAppNumber[0]['Application_no'];
                                        }
                                        if($v['missingIds'] != '')
                                        {
                                            $explode = array_unique(explode(',',$v['missingIds']));
                                            if($v['unknownIds'] == '')
                                            {
                                                $extraCount += count($explode) - 1;   
                                            }else{
                                                $extraCount += count($explode);
                                            }
                                            $getUnknownAppNumber = $this->db->query('select * from unknown_person where id='.$explode[0])->result_array();
                                            $firstAppNumber = $getUnknownAppNumber[0]['Application_no'];
                                        }
                            ?>
                            <tr style="vertical-align:middle;">
                                <td><?= $i; ?></td>
                                <td><?= date('d-m-Y',strtotime($v['dateCreated'])); ?></td>
                                <td><?= date('h:i A',strtotime($v['dateCreated'])); ?></td>
                                <td>
                                    <?php 
                                        if($v['searchType'] == 'aadhar')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets_landing_page/img/aadhar.webp'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php 
                                        }
                                        else if($v['searchType'] == 'pan')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/pan.png'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php 
                                        }
                                        else if($v['searchType'] == 'voter')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/icons8-voter-64.png'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php 
                                        }
                                        else if($v['searchType'] == 'gold')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/gold.png'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php 
                                        }
                                        else if($v['searchType'] == 'vehicle')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/icons/car.avif'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php 
                                        }
                                        else if($v['searchType'] == 'facematch')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/faceicon.png'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php }else if($v['searchType'] == 'dl')
                                    {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/4213483.png'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php
                                    }
                                    else{ ?>
                                    <img src="<?= base_url(); ?><?= 'assets_landing_page/img/aadhar.webp'; ?>" style="width:75px;height:75px;" alt="user">
                                    <?php } ?>
                                </td>
                                <?php 
                                    if($v['searchType'] == 'facematch')
                                    {
                                ?>
                                <td><a href="<?= base_url().''. $v['searchQuery'];?>" data-lightbox="roadtrip"><img src="<?= base_url().''. $v['searchQuery'];?>" style="height:50px;width:50px;"></a></td>
                                <?php }else{ ?>
                                <td><?= $v['searchQuery']; ?></td>
                                <?php } ?>
                                <th><?= $firstAppNumber .(($extraCount > 0) ? (' + <b style="background:black;color:white;border-radius:50%;padding:0.6rem;">'. $extraCount).'</b>' : ''); ?></th>
                                <td>
                                    <a href="<?php echo base_url(); ?>user/viewSearchDetail/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="7">No History Available</td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->