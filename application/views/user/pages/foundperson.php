<?php 
    function ageCalculator($dob){
        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }
?>
<table style="width:100%;border:1px solid lightgrey;border-bottom:0;" cellspacing="15">
    <tr style="border-bottom: 1px solid black;text-align: left;">
        <td><img src="<?php echo $logo; ?>" style="width:200px;height:80px;"></td>
    </tr>
    <tr>
        <td colspan="12"><hr></td>
    </tr>
    <tr>
        <td colspan="2" style="border:1px solid black;text-align:center;">
            <h2 style="color:#bf0d0b;margin-top:0;">MISSING</h2>
            <h4 style="font-size:20px;margin:0;">Date : <?php echo date('d-m-Y',strtotime($getMissingPersonDetails[0]['dateCreated'])); ?></h4>
        </td>
        <td rowspan="4" style="padding-left: 1rem;"><img src="<?php echo $userpic; ?>" style="width:200px;height:100%;max-height:300px;"></td>
    </tr>
    <?php 
        if($getMissingPersonDetails[0]['rewardamount'] != 0)
        {
    ?>
    <tr style="text-align:center;">
        <td colspan="2" style="margin:0;border:1px solid black;padding:0;">
            <h2 style="color:#bf0d0b;margin:0;">Reward - <?php echo ($getMissingPersonDetails[0]['rewardamount'] != NULL ? $getMissingPersonDetails[0]['rewardamount'] : '0' ); ?></h2>
        </td>
    </tr>
    <?php } ?>
    <tr style="text-align:center;">
        <td colspan="2" style="border:1px solid black;">
            <h2 style="margin:0;"><span style="color:#bf0d0b;">Name : </span><?php echo $getMissingPersonDetails[0]['missingname'] ?></h2>
        </td>
    </tr>
    <tr style="text-align:center;">
        <td colspan="2" style="border:1px solid black;">
            <h2 style="margin:0;"><span style="color:#bf0d0b;">Age : </span><?php echo ageCalculator(($getMissingPersonDetails[0]['missingdob'] != NULL ? $getMissingPersonDetails[0]['missingdob']: ($getMissingFullDetail[0]['dob'] != NULL) ? $getMissingFullDetail[0]['dob'] : $getUserDetail[0]['dob'])); ?>- Years</h2>
        </td>
    </tr>
</table>
<table style="width:100%;border:1px solid lightgrey;border-top:0;" cellspacing="15">
    <tr style="text-align:center;">
        <td colspan="2"></td>
        <td style="border:1px solid black;padding: 0.5rem;width:auto;">
            <h3> For More Details <a href="<?php echo base_url(); ?>user/missingpersondetail/<?php echo $getMissingPersonDetails[0]['Id']; ?>" style="color:green;">Click Here</a></h3>  
        </td>
    </tr>
    <tr style="text-align:center;">
        <td colspan="8" style="border:1px solid black;padding: 0.5rem;">
            <h3>Missing Id -<?php echo $getMissingPersonDetails[0]['missingId']; ?></h3>  
        </td>
    </tr>
</table>