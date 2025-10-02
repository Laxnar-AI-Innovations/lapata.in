<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    
    th{
        text-align:center!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>All Complaints</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">All Complaints</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header deleteBtnDiv d-none">
                        <div class="form-group col-auto">
                            <button type="button" class="btn btn-danger reset disabled-on-loading" onclick="deleteSelected(this)"> Delete Selected</button>
                        </div>
                    </div>
                    <div class="card-body pt-3 table-responsive">
                        <table class="table text-center table-bordered datatable">
                            <thead>
                                <tr>
                                    <th data-sortable="false"><input type="checkbox" id="select_all" class="form-check-input"></th>
                                    <th>#</th>
                                    <th>Application Number</th>
                                    <th>Creator Name</th>
                                    <th>Complaint Type</th>
                                    <th>Date Created</th>
                                    <th>Action &nbsp;&nbsp;&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $getUnknownPerson = $this->db->query('select * from unknown_person where isKyc=0 order by id desc')->result_array();
                                if(count($getUnknownPerson) > 0)
                                {
                                    $i = 0;
                                    foreach($getUnknownPerson as $k=>$v)
                                    {
                                        $i++;
                                        $userDetail = $this->db->query('select * from nonKycUser where uid='.$v['userId'])->result_array();
                            ?>
                            <tr style="vertical-align:middle;">
                                <td><input type="checkbox" class="form-check-input" onclick="showDeleteBtn()" value="<?= $v['id']; ?>"></td>
                                <td><?= $i; ?></td>
                                <td><?= $v['Application_no']; ?></td>
                                <td><?= $userDetail[0]['aadharname'] ?? '-'; ?></td>
                                <td><?= $v['awsEventName'] == 'All' ? 'MISSING' : 'UNKNOWN'; ?></td>
                                <td><?= date('d-m-Y',strtotime($v['dateCreated'])); ?></td>
                                <td>
                                    <button type="button" onclick="deleteComplaint(<?= $v['id']; ?>,this)" class="btn btn-danger disabled-on-loading"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="6">No Complaints Found</td>
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
<?php 
    $csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
    );
?>
<script>
    $(document).ready(function()
    {
        $('#select_all').click(function()
        {
            if($(this).is(':checked'))
            {
                $('tbody input:checkbox').attr('checked',true);   
                $('.deleteBtnDiv').removeClass('d-none');
            }else{
                $('tbody input:checkbox').removeAttr('checked');   
                $('.deleteBtnDiv').addClass('d-none');
            }
        })  
    })
    
    function deleteSelected(ele)
    {
        $(ele).attr('disabled',true);
        let selected = $('tbody input:checkbox:checked');
        if(selected.length > 0)
        {
            if(confirm('Are you sure you want to delete selected records?'))
            {
                let Ids = [];
                for(let i=0;i<selected.length;i++)
                {
                    Ids.push($(selected[i]).val());
                }
                $.ajax({
                    url:'<?php echo base_url(); ?>admin/deleteCheckedComplaint',
                    data:{'Ids[]':Ids,_token:'<?=$csrf['hash'];?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Complaint Deleted Successfully');
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }
                })
            }else{
                $(ele).attr('disabled',false);
            }
        }else{
            toastr.error('Please Select Checkbox to continue');
            $(ele).attr('disabled',false);
        }
    }
    
    function deleteComplaint(Id,ele)
    {
        if(confirm('Are you sure you want to delete this record?'))
        {
            $(ele).attr('disabled',true);
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteComplaint',
                data:{'Id':Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('Complaint Deleted Successfully');
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            })
        }
    }
    
    function showDeleteBtn()
    {
        let selected = $('tbody input:checkbox:checked');
        if(selected.length > 0)
        {
            $('.deleteBtnDiv').removeClass('d-none');
        }else{
            $('.deleteBtnDiv').addClass('d-none');
        }
    }
</script>