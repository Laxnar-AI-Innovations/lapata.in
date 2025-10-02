<center>
<section class="add-listing-section">
<div class="auto-container" >
    <div class="col-md-">
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
   
	<div class="col-md-4">
	     <div class="form-widget ls-widget " >
	     <div class="widget-content">
           <div class="default-form">
	         <br>
	         <center>
	       <h2> Create an account to get all features..!</h2>
	       </center>
<br>
 <div>                    
<form method="post" action="<?php echo base_url('home/registrationk/do_add'); ?>" >
  <div class="form-row">

	<div class="col-md-6 form-group " align="left">
 	<label>First Name</label>
 	<input type="text" name="txtfname" placeholder="Enter First Name" class="form-control">
    </div>
<div class="col-md-6 form-group " align="left">
 	<label>Last Name</label>
   	<input type="text" name="txtlname" class="form-control" placeholder="Last Name">
    </div>
  </div>
  <div class="form-row">
  <div class=" col-md-6 form-group "  align="left">
  <label>Email </label>
  	<input type="email" name="txtemail" class="form-control" placeholder="Enter-Email" autocomplete="off" required>
  </div>
<div class="col-md-6 form-group " align="left">
    <label>Phone Number</label>
    <input type="text" name="txtcontact" class="form-control" placeholder="Phone Number">
  </div>
</div>
  <div class="form-group " align="left">
    <label for="psw">Password</label>
    <input type="password" name="txtpwd" placeholder="Enter Password" class="form-control" required>
  </div>

</div>

<div class="checkbox" align="left">
  <label><input type="checkbox" value="">I Agree with Terms &amp; Condition.</label>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary" value="Simple Validation">Sign UP</button>
</div>
  <br>
</div>

  <div class="form-group" style="text-align:right">
  	<a href="<?php echo base_url('login');?>">Already existing user! Login there</a><br><br>
  	
  </div>

</div>   	
</form>
</div>	
</div>
</section>
</center> 
