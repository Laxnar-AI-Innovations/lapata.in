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
                            <h6 class="m-0 font-weight-bold text-primary">Pages Data</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/product/do_add'); ?>" enctype="multipart/form-data">
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Category Name</label>
                                <select name="ddlcategoryname"class="form-control">
                                     <option>Select category  </option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                                 <label>Subcategory List</label>
                                 <select name="ddlsubcategoryname" class="form-control">
                                 <option>Select</option>
                                 <option value="subcat1">Sub cat1</option> 
                                 <option value="subcat2">Sub cat2</option>
                             </select>
                             </div>

                             <div class="form-group col-md-4">
                                <label>Product Name</label>
                                <input type="text" name="txtproductname" class="form-control">
                            </div>
                        </div>
                            <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Quantity</label>
                                <input type="text" name="txtquantity" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Width</label>
                                <input type="text" name="txtwidth" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Height</label>
                                <input type="text" name="txtheight" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Weight</label>
                                <input type="text" name="txtweight" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Dimension</label>
                                <input type="text" name="txtdimension" class="form-control">
                            </div>
                          
                            <div class="form-group col-md-3">
                                <label>MRP</label>
                                <input type="text" name="txtmrp" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Saleprice</label>
                                <input type="text" name="txtsaleprice" class="form-control">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Enter Product Details</label>
       <textarea rows="4" cols="50" name="txtdetails" class="form-control" >
         </textarea>                         
                            </div>
                             <div class="form-group">
                                <label>Video Link</label>
                                <input type="text" name="txtvideolink" class="form-control">
                            </div>
       
         
         <div class="form-group">
     <label>Product Image</label>
     <input type="file" name="img1" class="form-control">
     </div>
     <div></div>

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
                                    <th>catname</th>
                                    <th>subcatname</th>
                                      <th>productname</th>
                                      <th>qty</th>
                                      <th>mrp</th>
                                      <th>saleprice</th>
                                      <th>details</th>
                                      <th>width</th>
                                      <th>height</th>
                                      <th>weight</th>
                                      <th>dimension</th>
                                      <th>videolink</th>
                                      <th>action</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($prop_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['catname'] ?></td>
                                   <td><?php echo $bd['subcatname'] ?></td>
                                   <td><?php echo $bd['productname'] ?></td>
                                   <td><?php echo $bd['qty'] ?></td>
                                   <td><?php echo $bd['mrp'] ?></td>
                                   <td><?php echo $bd['saleprice'] ?></td>
                                   <td><?php echo $bd['details'] ?></td>
                                   <td><?php echo $bd['width'] ?></td>
                                   <td><?php echo $bd['height'] ?></td>
                                   <td><?php echo $bd['weight'] ?></td>
                                   <td><?php echo $bd['dimension'] ?></td>
                                   <td><?php echo $bd['videolink'] ?></td>
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/product/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                                                   
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