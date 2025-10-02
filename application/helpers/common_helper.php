<?php

if (!function_exists('matchingCount')) {
    function matchingCount($string1, $string2) {
        $oldString1 = str_split(($string1));
        $oldString2 = str_split(($string2));
        $explode1 = str_split((strtolower(($string1))));
        $explode2 = str_split((strtolower(($string2))));
        $matchCount = 0;
        if(count($explode1) > count($explode2))
        {
            for($i=0;$i<count($explode1);$i++)
            {
                if(in_array($explode1[$i],$explode2))
                {
                    if($oldString1[$i] != ' ')
                    {
                        $matchCount++;
                    }
                }
            }
        }else{
            for($i=0;$i<count($explode2);$i++)
            {
                if(in_array($explode1[$i],$explode2))
                {
                    if($oldString1[$i] != ' ')
                    {
                        $matchCount++;
                    }
                }
            }
        }
        return $matchCount;
    }
}

if (!function_exists('markMatchingCharacters')) {
    function markMatchingCharacters($string1, $string2) {
        $oldString1 = str_split(($string1));
        $oldString2 = str_split(($string2));
        $explode1 = str_split((strtolower(($string1))));
        $explode2 = str_split((strtolower(($string2))));
        $matchString = '';
        if(count($explode1) > count($explode2))
        {
            for($i=0;$i<count($explode1);$i++)
            {
                if(in_array($explode1[$i],$explode2))
                {
                    if($oldString1[$i] != ' ')
                    {
                        $matchString .= '<mark style="background:yellow;padding:0;">'.$oldString1[$i].'</mark>';   
                    }else{
                        $matchString .= $oldString1[$i];
                    }
                }else{
                    $matchString .= $oldString1[$i];
                }
            }
        }else{
            for($i=0;$i<count($explode2);$i++)
            {
                if(in_array($explode1[$i],$explode2))
                {
                    if($oldString1[$i] != ' ')
                    {
                        $matchString .= '<mark style="background:yellow;padding:0;">'.$oldString1[$i].'</mark>';   
                    }else{
                        $matchString .= $oldString1[$i];
                    }
                }else{
                    $matchString .= $oldString1[$i];
                }
            }
        }
        return $matchString;
    }
}

if(!function_exists('is_added_to_cart')){
	function is_added_to_cart($product_id)
    {
    	$CI =& get_instance();
        $carted = $CI->cart->contents();
        print_r($carted);
        if (count($carted) > 0) {
            foreach ($carted as $items) {
                if ($items['id'] == $product_id) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}
?>