
<section>
    <div class="container">
    <div>
        <!--Success message-->
        <?php $add_succ=$this->session->flashdata('success');
            if($add_succ){
            ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $add_succ;?></strong> 
        </div>
        <?php } ?>
        <!--Delete message-->
        <?php $del_succ=$this->session->flashdata('error');
            if($del_succ){
            ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $del_succ;?></strong> 
        </div>
        <?php } ?>
    </div>
</div>
<div class="container">
      <div class="row">
<div class="col-md-4"></div>
                    <div class="col-md-4">
                       <h2>Vendor login form</h2>
                         <form method="post" action="<?php echo base_url('home/login_form/do_add'); ?>" enctype="multipart/form-data">
                    <div>
                                   <div class="form-group ">
                              <label> Phone Number</label>
                              <input type="text" name="phone_no" class="form-control">
                            </div>



                              <div class="form-group ">
                             <label>Create Password</label>
                             <input type="Password" name="txtcreate_ps" class="form-control" id="txtcreate_ps">
                             <input type="checkbox" onclick="myFunction()">Show Password
                             </div>
                           </div>

                                <script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("txtcreate_ps");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
  </div>
</div>
</section>


  
