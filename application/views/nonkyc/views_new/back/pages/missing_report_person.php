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
                    <div class="card-body pt-3 table-responsive" >
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage <?php  echo ucwords(str_replace("_"," ",$page_name)); ?></b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" class="needs-validation pt-3" action="<?php echo base_url(); ?>admin/datatable" method="POST">                              
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row">
                                <label for="faqQues" class="col-md-2 col-lg-2 col-form-label"> </label>
                                <label for="faqQues" class="col-md-2 col-lg-2 col-form-label" style="font-size: 14px !important;">Select  Missing  Date </label>
                                <label for="faqQues" class="col-md-4 col-lg-4 col-12 col-form-label text-end"> 
                                    <div id="reportrange" class="input-group col-6" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp; <span name="date1" style="word-spacing: 3px;font-size: 14px;"></span>&nbsp;&nbsp;&nbsp; <i class="fas fa-caret-down"></i>
                                    </div>
                                </label>
                                <input type="hidden" name="startDate" class="form-control" value ="<?php echo $sDate; ?>" placeholder="<?php echo $sDate; ?>" id="date1">
                                    
                                <input type="hidden" name="endDate" class="form-control" value="<?php echo $eDate; ?>" placeholder="<?php echo $eDate; ?>" id="date2">
                                    
                                <div style="float:centre;margin-left: 39%;f;/* float: right; */">
                                    <button type="submit" class="btn btn-primary"  id="btnDl" name="search"> <i class="fas fa-search">Search</i> </button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered display" id="example">
                            <thead >
                                <tr>
                                    <th>#</th>
                                    <th>Missing Person Name</th>
                                    <th>Aadhar No.</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>View</th>
                                    
                                </tr>
                            </thead>
                           <tbody>                           
                                <?php 
                                    $getfaqs = $this->db->query('select * from missingperson')->result_array();
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
                                                    <a href="<?php echo base_url();?>admin/missing_report_detail/missing_report_detail/<?= $v['Id']; ?>" class="submitButton">
                                                    <?= $v['missingname']; ?>
                                                    </a>
                                                </td>
                                                
                                                <td><?= $v['missingaadhar']?></td>
                                                <td><?= $v['mobile1']; ?></td>
                                                <td><?= $v['missinggender']?></td>
                                                <td><?php echo date("d-m-Y", strtotime($v['missingdob'])); ?></td>
                                                <td >
                                                    <a class="badge bg-success" href="<?php echo base_url();?>admin/missing_report_detail/missing_report_detail/<?= $v['Id']; ?>" class="submitButton">
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
                 let data = JSON.parse(res);
                 if(data.status == 'success')
                 {
                    $('#example').DataTable({
                    destroy: true,
                    data: data.data,
                    columns: [
                        { data: 'Id' },
                        { data: 'missingname' },
                        { data: 'missingaadhar' },
                        { data: 'mobile1' },
                        { data: 'missinggender' },
                        { data: 'missingdob' },                       
                        { data: 'Id' },
                        
                    ],
                    });
                 }
                 else
                 {
                    $('#example').DataTable({
                    destroy: true,
                    
                    });
                 }
                 console.log(data);
                 
                $('#btnDl').removeAttr('disabled');
            }
        });
    })    
    $(document).ready( function () {
       // $('#myTable').DataTable();
        $(".submitButton").click(function(){
        $("#myModal").modal('toggle');
    });
    } );
  </script>
   <script type="text/javascript">
        var start = moment().subtract(0, 'days');
            var end = moment();
        function cb(start, end) {
            $('#reportrange span').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
            $('#date1').val(start.format('YYYY-MM-DD'));
            $('#date2').val( end.format('YYYY-MM-DD'));
        }

        $('#reportrange ').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    </script>
    <script>
    $(document).ready(function () {
        $('#example').DataTable({
            destroy: true,
            
        });
    });
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