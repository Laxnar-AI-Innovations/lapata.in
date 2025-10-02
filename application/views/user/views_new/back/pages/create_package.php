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
    select
    {
        -webkit-appearance: auto !important;
    }
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Faqs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Package</li>
                <li class="breadcrumb-item active">Create Package</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Package</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postpackage" method="post">
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
                                        <input type="text" class="form-control" name="pkgname"   id="pkgname" required placeholder="Aadhar Number">
                                        <label for="pkgname">Enter Package name *</label>
                                        <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                    </div>
                                    
                                </div>

                                <div class="form-group col-md-5">
                                    <div class="form-floating mb-1 col-auto">
                                        <input type="number" class="form-control" name="pkgamt"   id="pkgamt" required placeholder="Aadhar Number">
                                        <label for="pkgamt">Enter Amount *</label>
                                        <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                    </div>
                                    
                                </div>
                                <div class="form-group col-md-2">
                                    
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="form-floating mb-1 col-auto">
                                        <input type="number" class="form-control" name="pkgdur"   id="pkgdur" required placeholder="Aadhar Number">
                                        <label for="pkgdur" >Enter Duration *</label>
                                        <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                    </div>
                                   
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-floating mb-1 col-auto">
                                        <select class="form-control" name="pkgdurtype" required>
                                            <option value="">Select Duration </option>
                                            <option value="Day">Day</option>
                                            <option value="Month">Month</option>
                                            <option value="Year">Year</option>
                                            
                                        </select>
                                        <label for="pkgdurtype" >Select Duration Type *</label>
                                        <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                    </div>
                                    
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-floating mb-1 col-auto">
                                        <select class="form-control" name="pkgfortype" required>
                                            <option value="">Choose Package for</option>
                                            <option value="Missing Person">Missing Person</option>
                                            <option value="Missing Person">Missing Vehicle</option>
                                            <option value="Missing Person">Missing Device</option>
                                            <option value="Missing Person">Missing Jewellary</option>
                                        </select>
                                        <label for="pkgfortype" >Select Package for *</label>
                                        <div class="invalid-feedback">Please enter Enter Package name *.</div>
                                    </div>
                                    
                                </div>
                                <div class="form-group col-md-10">
                                    <div class="form-floating mb-1 col-auto">
                                        <textarea class="form-control" cols="30" rows="10" required id="pkgfeture" name="pkgfeture" placeholder="Enter The Package Feture.."></textarea>
                                        <label for="pkgfeture" >Feture - Package ( Seperated by Comma , ) *</label>
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
                                <th>Package Name</th>
                                <th>Amount</th>
                                <th>Durtion</th>
                                <th>Package For</th>
                                <th>Package Feture</th>
                                <th>Packge Status</th>
                            </tr>
                            <?php 
                                $getfaqs = $this->db->query('select * from package')->result_array();
                                if(count($getfaqs) > 0)
                                {
                                    $i = 0;
                                    foreach($getfaqs as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['package_name']; ?></td>
                                <td>&#8377; <?= $v['amount']; ?></td>
                                <td><?= $v['duration']."  ".$v['duration_type']; ?></td>
                                <td><?= $v['packagefor']; ?></td>
                                <td>
                                    <ol type="1">
                                    <?php 
                                        $string =$v['fetures'];
                                        $arr = explode(",",$string);
                                        foreach($arr as $key=>$r)
                                        {
                                            echo "<li>".trim($r)."</li>";
                                        }
                                        //print_r($arr);
                                    ?>
                                    </ol> 
                                    
                                </td>
                                <td>
                                <?php 
                                         $s1 =$v['status'];
                                        
                                        if($s1==1)
                                        {
                                           ?>
                                                <a href="<?php echo current_url(); ?>?id=<?= $v['id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Active</a>
                                           <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <a href="<?php echo current_url(); ?>?id=<?= $v['id']; ?>" class="btn btn-danger"><i class="fa fa-edit"></i> InActive</a>
                                           <?php
                                        }
                                        //print_r($arr);
                                    ?>
                                    
                                </td>
                                 
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="7">No Packages Found</td>
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