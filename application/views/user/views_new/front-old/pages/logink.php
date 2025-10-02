<center>
<section class="add-listing-section">

<div class="auto-container">
    <div class="col-md-10">
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
</section>
 <section class="add-listing-section">
  <div class="auto-container">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<div class="form-widget ls-widget " >
	<br>
    <center>
	      <h3>Welcome user, login here</h3>
    </center>

    <div class="widget-content">
    <div class="default-form">
      <!--Important part of this line -->
	<form method="post" action="<?php echo base_url('home/logink/do_login'); ?>" >

    <div class="form-group " align="left">
  	  <label><b>Phone Number</b></label>
  	  <input type="text" name="txtcontact" class="form-control" placeholder="Phone Number" required>
    </div>
<!--code add by kanchan-->
    <div class="form-group " align="left">
      <label for="psw"><b>Password</b></label>
      <input type="password" name="txtpwd" class="form-control" placeholder="Enter Password"  required>
    </div>

    <div class="form-group">
  	   <button class="btn btn-warning">Login</button>
    </div>

    <div class="form-group" style="text-align:right">
  	 <a href="<?php echo base_url('create-account'); ?>" >create-account New user! create an account there</a>
    </div>
	
</form>
</div>
</div>
</section>
</center>