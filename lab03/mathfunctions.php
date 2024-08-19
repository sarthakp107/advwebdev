<?php


function factorial($n){

    $result = 1;
    // $factor = $n;

    for($factor = $n;$factor > 1; $factor--)
    {
        $result = $result * $factor;
    }
    echo "$result";

}

function isPositive($n)
{
    if($n > 0)
    {
        return true;
    }
    return false;
}



?>