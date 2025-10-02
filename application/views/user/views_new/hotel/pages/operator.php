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
    <div class="card shadow mb-1">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Operator</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/operator/do_add'); ?>" enctype="multipart/form-data">
                            <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>Name</label>
                                <input type="text" name="txtname" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                             <label> Father Name</label>
                                <input type="text" name="txtfathername" class="form-control">
                            </div>


                             <div class="form-group col-md-4">
                             <label>Email Id</label>
                                <input type="text" name="txtemail" class="form-control">
                            </div>



                            <div class="form-group col-md-4">
                             <label>Contact no1</label>
                                <input type="text" name="txtcontact1" class="form-control">
                            </div>



                            <div class="form-group col-md-4">
                             <label>Contact no2</label>
                                <input type="text" name="txtcontactno2" class="form-control">
                            </div>


                            <div class="form-group col-md-4">
                                 <label>Country</label>
                                 <select name="ddlcountry" class="form-control">
                                 <option>Select</option>
                                 <option value="subcat1">Sub cat1</option> 
                                 <option value="subcat2">Sub cat2</option>
                             </select>
                             </div>


                              <div class="form-group col-md-4">
                                 <label>State</label>
                                 <select name="ddlstste" class="form-control">
                                 <option>Select</option>
                                 <option value="subcat1">Sub cat1</option> 
                                 <option value="subcat2">Sub cat2</option>
                             </select>
                             </div>


                                 <div class="form-group col-md-4">
                                 <label>City</label>
                                 <select name="ddlcity" class="form-control">
                                 <option>Select</option>
                                 <option value="subcat1">Sub cat1</option> 
                                 <option value="subcat2">Sub cat2</option>
                             </select>
                             </div>


                                <div class="form-group col-md-4">
                                <label>Address</label>
                                <input type="text" name="txtaddress" class="form-control">
                            </div>


                             <div class="form-group col-md-4">
                                <label>User Name</label>
                                <input type="text" name="txtusername" class="form-control">
                            </div>


                             <div class="form-group col-md-4">
                                <label>Create Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>


                            <div class="form-group col-md-4">
                                <label>Operator Type</label>
                                <input type="text" name="txtoperatortype" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Role Name</label>
                                <select name="ddlrole" class="form-control">
                                 <option>Select</option>
                                  <?php foreach ($role as $key => $value) {  ?>
                                    <option value="<?php echo $value['rolename']; ?>"><?php echo $value['rolename']; ?></option>
                          <?php     } ?> 
                                </select>
                                 </div>
                                  </div>

      <div class="form-group">
    <button name="btnsubmit" class="btn btn-primary">Save the details</button>
    </div>
    </form>
    </div>
</div>
                             <div class="col-md-12">

                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>name</th>
                                    <th>fathername</th>
                                      <th>email</th>
                                      <th>contact1</th>
                                      <th>contact2</th>
                                      <th>country</th>
                                      <th>state</th>
                                      <th>city</th>
                                      <th>address</th>
                                      <th>username</th>
                                      <th>password</th>
                                      <th>operatortype</th>
                                      <th>action</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($operator as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['name'] ?></td>
                                   <td><?php echo $bd['fathername'] ?></td>
                                   <td><?php echo $bd['email'] ?></td>
                                   <td><?php echo $bd['contact1'] ?></td>
                                   <td><?php echo $bd['contact2'] ?></td>
                                   <td><?php echo $bd['country'] ?></td>
                                   <td><?php echo $bd['state'] ?></td>
                                   <td><?php echo $bd['city'] ?></td>
                                   <td><?php echo $bd['address'] ?></td>
                                   <td><?php echo $bd['username'] ?></td>
                                   <td><?php echo $bd['password'] ?></td>
                                   <td><?php echo $bd['operatortype'] ?></td>
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/operator/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                                                   
                                    </td> 
                                </tr>
                                <?php }?>                   
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<SCRIPT language=Javascript>
    <!--
    function isNumberKey(evt)
    {
       var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
    
       return true;
    }
    //-->
</SCRIPT>