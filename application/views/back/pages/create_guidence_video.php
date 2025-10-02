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
        <h1>Faqs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Other</li>
                <li class="breadcrumb-item active">Create Guidence Video</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            
            <?php
                //print_r($guide[0]['id']);
                if(!isset($guide[0]['id']))
                {
                   ?>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mb-3">
                                        <div class="px-0 col-lg-12 col-sm-12 text-left">
                                            <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Guidence Video</b></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <form id="addDl" action="<?php echo base_url(); ?>admin/postguidencevideo" method="post">
                                        <?php 
                                            $csrf = array(
                                            'name' => $this->security->get_csrf_token_name(),
                                            'hash' => $this->security->get_csrf_hash()
                                            );
                                        ?>
                                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                        
                                        <div class="row mb-3">
                                        
                                            <div class="form-group col-md-5">
                                                <div class="form-floating mb-3 col-auto">
                                                    <input type="text" class="form-control" name="title"   id="title" required placeholder="Aadhar Number">
                                                    <label for="title">Enter Video Title name *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group col-md-5">
                                                <div class="form-floating mb-1 col-auto">
                                                    <input type="text" class="form-control" name="link"   id="link" required placeholder="Aadhar Number">
                                                    <label for="link">Enter Video Link *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-2">
                                                
                                            </div>
                                            
                                            <div class="form-group col-md-10">
                                                <div class="form-floating mb-1 col-auto">
                                                    <textarea class="form-control" cols="30" rows="10" required id="des" name="des" placeholder="Enter The Package Feture.."></textarea>
                                                    <label for="des" >Enter Video Description *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                            
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button id="btnDl" type="submit" class="btn btn-primary disabled-on-loading save">Save</button>
                                        </div>
                                        <!-- <div class="text-center">
                                            <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                   <?php
                }
                else
                {
                    ?>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body pt-3 table-responsive">
                                    <div class="row justify-content-right mb-3">
                                        <div class="col-lg-6 col-sm-6 text-left">
                                            <a href="javascript:void(0)" class="btn btn-default text-dark">Edit Faq</a>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-end">
                                            <a href="<?php echo base_url(); ?>admin/create_guidence_video" class="btn btn-dark">Create Guidence</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <form id="addDl" action="<?php echo base_url(); ?>admin/update_guidence_video" method="post">
                                        <?php 
                                            $csrf = array(
                                            'name' => $this->security->get_csrf_token_name(),
                                            'hash' => $this->security->get_csrf_hash()
                                            );
                                        ?>
                                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                        <input type="hidden" name="id" value="<?= $guide[0]['id'];?>" />
                                        
                                        <div class="row mb-3">
                                            
                                            <div class="form-group col-md-5">
                                                <div class="form-floating mb-3 col-auto">
                                                    <input type="text" class="form-control" name="title"   id="title" value="<?= $guide[0]['title']; ?>" required placeholder="Aadhar Number">
                                                    <label for="title">Enter Video Title name *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-5">
                                                <div class="form-floating mb-1 col-auto">
                                                    <input type="text" class="form-control" name="link"   id="link" value="<?= $guide[0]['link']; ?>" required placeholder="Aadhar Number">
                                                    <label for="link">Enter Video Link *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-2">
                                                
                                            </div>
                                            
                                            <div class="form-group col-md-10">
                                                <div class="form-floating mb-1 col-auto">
                                                    <textarea class="form-control" cols="30" rows="10"  required id="des" name="des" placeholder="Enter The Package Feture.."><?= $guide[0]['des']; ?></textarea>
                                                    <label for="des" >Enter Video Description *</label>
                                                    <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                                </div>
                                            
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button id="btnDl" type="submit" class="btn btn-primary disabled-on-loading save">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                
            ?>
            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Package</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Title Name</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Action</th>
                                
                            </tr>
                            <?php 
                                $getfaqs = $this->db->query('select * from guidence_video')->result_array();
                                if(count($getfaqs) > 0)
                                {
                                    $i = 0;
                                    foreach($getfaqs as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['title']; ?></td>
                                
                                <td><?= $v['des']?></td>
                                <td><?= $v['link']; ?></td>
                                <td>
                                    <a href="<?php echo current_url(); ?>?eid=<?= $v['id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo current_url(); ?>?id=<?= $v['id']; ?>" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                                </td>
                                 
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="5">No Packages Found</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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