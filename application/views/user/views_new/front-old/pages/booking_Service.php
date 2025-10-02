<?php 
    $get_service_data=$this->db->query('select * from booking_Service where id='.$service_id.'')->result_array();

    foreach ($get_booking_Service_data as $key => $bsd) {
        $service_location=$bsd['service_location'];
        $service_amount=$bsd['service_amount'];
        $booking_date=$bsd['booking_date'];
        $from_time=$bsd['from_time'];
        $notes=$bsd['notes'];
        $cod=$bsd['cod'];
       
    }
?>