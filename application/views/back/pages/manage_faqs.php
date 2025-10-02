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
        <h1>Manage FAQS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">FAQS</li>
                <li class="breadcrumb-item active">Manage FAQ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <table class="table text-center table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Type Name</th>
                                <th>English Question</th>
                                <th>English Answer</th>
                                <th>Hindi Question</th>
                                <th>Hindi Answer</th>
                                <th>Status</th>
                                <th>Action &nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            <?php 
                                $getfaqs = $this->db->query('select * from faq')->result_array();
                                if(count($getfaqs) > 0)
                                {
                                    $i = 0;
                                    foreach($getfaqs as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <?php 
                                if($v['status'] == 1)
                                {
                            ?>
                            <tr style="vertical-align:middle;">
                                <td><?= $i; ?></td>
                                <td>
                                    <?php 
                                        $getTypeDetail = $this->db->query('select * from faqTypes where Id='.$v['typeId'])->result_array();
                                        echo $getTypeDetail[0]['EnglishName'].' / '.$getTypeDetail[0]['hindiName'];
                                    ?>
                                </td>
                                <td><?= stripslashes(trim($v['englishQuestion'],"'")); ?></td>
                                <td><?= stripslashes(trim(substr($v['englishAnswer'],0,50),"'")); ?></td>
                                <td><?= stripslashes(trim($v['hindiQuestion'],"'")); ?></td>
                                <td><?= stripslashes(trim($v['hindiAnswer'],"'")); ?></td>
                                <td>
                                    <select style="appearance:auto!important;background-color:green;color:white;font-weight:bold;" class="form-control" onchange="updateStatus(this.value,<?= $v['Id']; ?>)">
                                        <option value="1" <?= ($v['status'] == 1 ? 'selected' : ''); ?>>Active</option>
                                        <option value="0" <?= ($v['status'] == 0 ? 'selected' : ''); ?>>In-Active</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editfaq/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <button type="button" onclick="deleteFaqType(this,<?= $v['Id']; ?>)" class="btn btn-danger disabled-on-loading"> <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php }else{ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>
                                    <?php 
                                        $getTypeDetail = $this->db->query('select * from faqTypes where Id='.$v['typeId'])->result_array();
                                        echo $getTypeDetail[0]['Name'];
                                    ?>
                                </td>
                                <td><?= $v['question']; ?></td>
                                <td><?= substr($v['answer'],0,50); ?>...</td>
                                <td>
                                    <select style="appearance:auto!important;background-color:red;color:white;font-weight:bold;" class="form-control" onchange="updateStatus(this.value,<?= $v['Id']; ?>)">
                                        <option value="1" <?= ($v['status'] == 1 ? 'selected' : ''); ?>>Active</option>
                                        <option value="0" <?= ($v['status'] == 0 ? 'selected' : ''); ?>>In-Active</option>
                                    </select>
                                    
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editFaq/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <button type="button" onclick="deleteFaqType(this,<?= $v['Id']; ?>)" class="btn btn-danger disabled-on-loading"> <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="6">No faqs Found</td>
                            </tr>
                            <?php } ?>
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

  <script type="text/javascript">
  
    function deleteFaqType(ele,Id)
    {
        if(confirm('Are you sure you want to delete this faq?'))
        {
            $(ele).attr('disabled',true);
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteFaqType',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('FAQ Deleted Successfully');
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            })       
        }
    }
  
    function updateStatus(val,Id)
    {
        let data = new FormData();
        data.append('status',val);
        data.append('Id',Id);
        data.append('<?= $csrf['name'] ?>','<?= $csrf['hash']; ?>');
        $.ajax({
            url:'<?= base_url(); ?>admin/updateFaqStatus',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('Status Updated Successfully');
                setTimeout(function()
                {
                  location.reload();
                },2000);
            }
        });
    }
  
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
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
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