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
<style type="text/css">
    tr{
        text-align: center;
    }
</style>
<table style="width:100%;" cellspacing="15">
    <tr style="border-bottom: 1px solid black;text-align: left;">
        <td><img src="<?php echo $logo; ?>" style="width:150px;height:100px;"></td>
    </tr>
    <tr>
        <td colspan="4" style="border:1px solid black;padding: 0.5rem;">
            <h3 class="text-danger">MISSING</h3>
            <h6>Date : <?php echo date('d-m-Y',strtotime($getMissingPersonDetails[0]['dateCreated'])); ?></h6>
        </td>
        <td rowspan="4" style="padding-left: 2rem;"><img src="<?php echo $userpic; ?>" style="width:200px;height:400px;"></td>
    </tr>
    <?php if($getMissingPersonDetails[0]['rewardamount'] != 0)
    { ?>
    <tr>
        <td colspan="4" style="border:1px solid black;padding: 0.5rem;">
            <h6 class="text-danger">Reward - <?php echo ($getMissingPersonDetails[0]['rewardamount'] != NULL ? $getMissingPersonDetails[0]['rewardamount'] : '0' ); ?></h6>
        </td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="4" style="border:1px solid black;padding: 0.5rem;">
            <h6><span class="text-danger">Name : </span><?php echo $getMissingPersonDetails[0]['missingname'] ?></h6>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="border:1px solid black;padding: 0.5rem;">
            <h6><span class="text-danger">Age : </span><?php echo ageCalculator($getMissingPersonDetails[0]['missingdob']); ?>- Years</h6>
        </td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid black;padding: 0.5rem;">
            <h3> For More Details <a href="<?php echo base_url(); ?>user/usercomplaintclosed/<?php echo $getMissingPersonDetails[0]['Id']; ?>" style="color:green;">Click Here</a></h3>  
        </td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid black;padding: 0.5rem;">
            <h3>Missing Id -<?php echo $getMissingPersonDetails[0]['Id']; ?></h3>  
        </td>
    </tr>
</table>