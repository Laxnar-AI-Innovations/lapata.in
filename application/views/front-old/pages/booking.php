<?php $details=$this->db->query('select * from business where id='.$idd.'')->result_array(); 
foreach($details as $de) {
    $commu=$de['community'];
    $title=$de['businesstitle'];
    $b_image=$de['image'];
    $des=$de['description'];
}
?>
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

    </section>    
     <section class="add-listing-section">
        <div class="auto-container">
                    <div class="row">
                    <div class="col-md-12">
                      
        <div class="form-widget ls-widget" >
                        <div class="widget-title">
            <h4><span class="icon flaticon-house"></span> <?php echo $title ?></h4>
            </div>
                        <div class="widget-content">
                            <div class="default-form">
                    <form method="post" action="<?php echo base_url('home/booking/do_add'); ?>" enctype="multipart/form-data">

            
                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label>Date</label>
                              <input type="date" name="txtdate" class="form-control">
                            </div>

                             <div class="form-group col-md-3">
                             <label>Time</label>
                             <input type="time" name="txttime" class="form-control">
                             </div>
                    </div>
                    <div class="form-row">
                              <div class="form-group col-md-6">
                              <label>Add address</label>
                              <input type="text" id="address" name="txtaddress" class="form-control">
                              <input type="hidden" id="lat" name="lat" class="form-control">
                              <input type="hidden" id="business_id" name="business_id" class="form-control" value="<?php echo $idd; ?>">
                              <input type="hidden" id="lng" name="lng" class="form-control">
                            </div>

                               <div class="form-group col-md-6">
                             <label>Add message</label>
                             <input type="text" name="txtmsg" class="form-control" > 
                             </div>
    </div>
            <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
  

    </div>
    </form>                     
                                
                     
                    </div>
                </div>
      </div>
                            
                        
                </div>
            </div>
        
</div>
</div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyD0GlrABYcwOw4GdKe7giVui5Eztm1Ox_g"></script>
    <script>
        var inputs = document.getElementById('address');

        var options = {
            types: ['geocode'],
             // componentRestrictions: {country: 'uk'}
        };

        var autocompletes = [];
        var autocomplete = new google.maps.places.Autocomplete(inputs, options);
        autocomplete.inputId = inputs;
        autocomplete.addListener('place_changed', fillIn);
        autocomplete.setFields(["address_component"]);
        autocompletes.push(autocomplete);

        function fillIn() {
//            console.log(this.inputId);
            var place = this.getPlace();
            var geocoder = new google.maps.Geocoder(); 
            geocoder.geocode({ 'address':  (place.address_components[0].long_name + ',' + place.address_components[1].long_name + ',' + place.address_components[2].long_name + ',' + place.address_components[3].long_name)}, function (results, status) {  
                if (status == google.maps.GeocoderStatus.OK) {  
                    $('#lat').val(results[0].geometry.location.lat());  
                    $('#lng').val(results[0].geometry.location.lng());  
                } else {  
                    alert(status);
                }  
            });  
            $("#address").val(place.address_components[0].long_name + ',' + place.address_components[1].long_name + ',' + place.address_components[2].long_name + ',' + place.address_components[3].long_name);   
        }
</script>