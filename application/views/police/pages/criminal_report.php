<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
        font-size: 13px !important;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php  echo ucwords(str_replace("_"," ",$page_name)); ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Report</li>
                <li class="breadcrumb-item active"><?php  echo ucwords(str_replace("_"," ",$page_name)); ?></li>
                
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage <?php  echo ucwords(str_replace("_"," ",$page_name)); ?></b></a>
                            </div>
                        </div>
                        <hr>
                        <?php 
                            if(count($getfaqs) > 0)
                            {
                        ?>
                        <table class="table table-bordered datatable">
                            <thead >
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Aadhar No.</th>
                                    <th>Gender</th>
                                    <th>Age (in year)</th>
                                    <th>State</th>
                                    <th>View</th>
                                    
                                </tr>
                            </thead>
                           <tbody>

                           
                            <?php 
                            $thana_id=$this->session->userdata('police_id');
                                $getfaqs = $this->db->query('select * from criminals where type="criminal" and policeThanaId='.$thana_id)->result_array();
                                if(count($getfaqs) > 0)
                                {
                                    $i = 0;
                                    foreach($getfaqs as $k=>$v)
                                    {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td >
                                                <a href="<?php echo base_url();?>police/thana_report_detail/criminal_detail/<?= $v['Id']; ?>" class="submitButton">
                                                <?= $v['personName']; ?>
                                                </a>
                                            </td>
                                            
                                            <td><?= $v['aadharNumber']?></td>
                                            <td><?= $v['gender']; ?></td>
                                            <td><?= $v['age']?></td>
                                            <td><?= $v['state']?></td>
                                            <td >
                                                <a class="badge bg-success" href="<?php echo base_url();?>police/thana_report_detail/criminal_detail/<?= $v['Id']; ?>" class="submitButton">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        <?php 
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="<?php echo base_url(); ?>assets/icons/nodata.png" style="height:400px;">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Modal header</h3>
        </div>
        <div class="modal-body">
            <p>One fine body…</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
        </div>
    </div>
</main><!-- End #main -->

  <script type="text/javascript">
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
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },100);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
    $(document).ready( function () {
        $('#myTable').DataTable();
        $(".submitButton").click(function(){
        $("#myModal").modal('toggle');
    });
    } );
  </script>
  <?php

        if($this->session->flashdata('message_name')) {
        $message = $this->session->flashdata('message_name');
        ?>

        <script>
            toastr.success('<?php echo $message; ?>');
            setTimeout(function() { location.reload(); },1000);
        </script>
    <?php
}

?>