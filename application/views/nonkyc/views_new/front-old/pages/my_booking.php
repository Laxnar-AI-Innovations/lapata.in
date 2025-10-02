
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

<!-- for single details we can keep code there -->
 <?php
                                 // get id from Url
                                 $booking_id=$this->uri->segment(4);
                                $i = 0;
                                 $book_data=$this->db->query('select * from booking_service where customer_id='.$this->session->userdata('user_id').' 
                                     ')->result_array();
                                    foreach($book_data as $bd){
                                        $i=$i+1;
                                        $customer_name=$bd['customer_name'];

                                   if($bd['cod']==2){
                                        $bd['cod']="WALLET";
                                   }
                                   else{
                                      $bd['cod']=  "CASH";
                                   }

                                    $payment_type=$bd['cod'];
                                    $booking_date=$bd['booking_date'];
                                    $booking_time=$bd['from_time'];
                                    $service_name=$bd['service_name'];
                                    $booking_location=$bd['service_location']; 
                                    $booking_notes=$bd['notes'];
                                    $booking_id=$bd['id'];  
                                    $service_amount=$bd['service_amount'];  
                                    $email=$bd['email'];  
                                    $phone_no=$bd['phone_no'];  
                                    $booking_status=$bd['booking_status'];  
                                  
                                                     
                                     ?>
<div class="card shadow mb-1">
                        <div class="card-header py-3">
                        </div>
            <div class="card">
                <div class="card-body">
             <div class="row">
                <div class="col-md-12">
<div class="invoice-container" ref="document" id="html">
     <table style="width:100%; height:auto;  text-align:center; " BORDER=0 CELLSPACING=0>
       <thead style="background:#fafafa; padding:8px;">
         <tr style="font-size: 20px;">
           <td colspan="4" style="padding:20px 20px;text-align: left;">Booking Info</td>
         </tr>
       </thead>
       <tbody style="background:#ffff;padding:20px;">
         <tr>
           <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px; font-weight: bold;color:#000;">Hello, <?php echo $customer_name; ?></td>
         </tr>
         <tr>
           <td colspan="4" style="text-align:left;padding:10px 10px 10px 20px;font-size:14px;">Your Booking details</td>
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff;text-align:center; padding:10px; background:#fafafa">
       <tbody>
         <tr style="color:#6c757d; font-size: 20px;">
           <td style="border-right:1.5px dashed  #DCDCDC; width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Booking Date</td>
           <td style="border-right:1.5px dashed  #DCDCDC; width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">notes</td>
           <td style="border-right: 1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Order No.</td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Services Location</td>
           <td style="width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Payment</td>

         </tr>
         <tr style="background-color:#fff; font-size:12px; color:#262626;">
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;"><?php echo $booking_date; ?></td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;"><?php echo $booking_notes; ?></td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25% ; font-weight:bold;background: #fafafa;">000000<?php echo $booking_id; ?></td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;"><?php echo $booking_location; ?></td>
           <td style="width:25%; font-weight:bold;background: #fafafa;"><?php echo $payment_type; ?></td>
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff; margin-top:0px;  padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0px;">
       <thead>
         <tr style=" color: #6c757d;font-weight: bold; padding: 5px;">
           <td colspan="2" style="text-align: left;">BOOKING INFORMATION</td>
           <td style="text-align: center;">Service Name</td>
           <td style="padding: 10px;text-align:center;">Price</td>
           <td style="text-align: center;padding: 10px;">Booking Status</td>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td style="width:10%; ">
             <!-- <a href=""><img src="https://images.asos-media.com/products/asos-design-puff-sleeve-linen-mini-dress-with-pearl-buttons/13307266-1-black?$XXL$&wid=513&fit=constrain" style="width:100px;" /></a> -->
           </td>
           <td style="width:20%;margin-left:10px;text-align: center;"></td>
           <td style="width:20%;margin-left:10px;text-align: center;"><?php echo $service_name; ?></td>
           <td style="width:20%;padding: 10px; text-align:center;"> INR <?php echo $service_amount; ?></td>
           <td style="width:20%;padding: 10px;text-align: center;"><?php echo $booking_status; ?></td>
           
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff;padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0">
       <tbody>
        <!--  <tr style="padding:20px;color:#000;font-size:15px">
           <td style="font-weight: bold;padding:5px 0px"></td>
           <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;"> &euro;</td>
         </tr> -->

         <tr>
           <td colspan="2" style="font-weight:bold;"><span style="color:#c61932;font-weight: bold;"></span> </td>
         </tr>
         <tr>
           <td colspan="2" style="font-weight:bold;text-align:left;padding:5px 0px 0px 00px;font-size:14px;"><span></span> </td>
         </tr>
       </tbody>
       <tfoot style="padding-top:20px;font-weight: bold;">
         <tr>
           <td style="padding-top:20px;">Need help? Contact us <span style="color:#c61932"> </span></td>
         </tr>
       </tfoot>
     </table>
</div>
                            
                    </div>
                   </div>
                  </div>
                  </div>  </div>
                <?php } ?> 
                </div>