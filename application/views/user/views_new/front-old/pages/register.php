<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



.icon {
  padding: 10px;
  
  color: balck;
  min-width: 50px;
  text-align: center;
}


/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<section class="add-listing-section">

<div class="auto-container">
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
   
	<div class="col-md-10">
	     <div class="form-widget ls-widget " >
	         <br>
	         <center>
	         <h3>Let's Get Started</h3>
	       <h6> Create an account to get all features.</h6>
                            </center>
                        <div class="widget-content">
                            <div class="default-form">
		<form method="post" action="<?php echo base_url('home/register/do_add'); ?>" >
		<div class="form-group ">
 	<!--<label>First Name</label>-->
  	<input type="text" name="txtfname" class="form-control" placeholder="First Name">
    </div>
<div class="form-group ">
 	<!--<label>Last Name</label>-->
   	<input type="text" name="txtlname" class="form-control" placeholder="Last Name">
    </div>
  <div class="form-group ">
  	<!--<label>Email </label>-->
  	<input type="text" name="txtemailid" class="form-control" placeholder="Email" required="email">
  </div>
<div class="form-group ">
  	<!--<label>Phone Number</label>-->
  	<input type="text" name="txtcontact" class="form-control" placeholder="Phone Number">
  </div>
<div class="form-group">
  	<button class="btn btn-warning">Sign UP</button>
  	
  </div>

  <div class="form-group" style="text-align:right">
  	<a href="<?php echo base_url('home/login');?>">Already existing user! Login there</a>
  	
  </div>

	
</form>
</div>

</div></div>		

</div>
</section>
 