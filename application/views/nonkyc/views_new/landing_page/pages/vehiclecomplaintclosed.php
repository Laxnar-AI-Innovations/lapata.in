<div class="container">
    <section class="section register min-vh-50 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-2 p-4">
                        <div class="card-body p-0">
                            <div class="row">
                                <?php 
                                    if(count($missingvehicle) > 0)
                                    {
                                ?>
                                <div class="col-md-12 text-center border border-danger p-3">
                                    <h4 class="text-danger text-uppercase mb-0" style="font-weight:bold;"><span class="text-success">Missing Complain is</span> Closed!</h4>
                                </div>
                                <?php }else{ ?>
                                    <div class="col-md-12 text-center border border-danger p-3">
                                        <h4 class="text-danger text-uppercase mb-0" style="font-weight:bold;">Missing Complain not found!</h4>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center p-3">
                                    <h6 class="text-uppercase mb-0" style="font-weight:bold;">To know more or use our services.</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center p-3">
                                    <a href="<?php echo base_url(); ?>" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <b>Login</b></a>
                                    <a href="<?php echo base_url(); ?>user/register" class="btn btn-primary"><i class="fas fa-user-plus"></i> <b>Sign up </b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="credits">
                        Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>