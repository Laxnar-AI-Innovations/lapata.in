<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Reports</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Vector Response</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-center">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Vector Response</b></a>
                            </div>
                        </div>
                        <table class="table table-bordered datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date Created</th> 
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    $getRecords = $this->db->query('select * from vectorResponse order by Id desc')->result_array();
                                    foreach($getRecords as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td> 
                                    <td><?php echo date('d-m-Y h:i A',strtotime($bd['dateCreated'])); ?></td>
                                    <td><?php echo $bd['response'] ?></td>
                                </tr>
                                <?php }?>                     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</main><!-- End #main -->