<?php

function isPrime($number){

    if($number <=1 )
    {
        return false;
    }

    for($i = 2; $i <=sqrt($number); $i++)
    {
        if($number % 2 == 0)
        {
            return false;
        }
    }
    return true;


}


if(isset($_GET["prime"]))
{
    if(isPrime($_GET["prime"]))
    {
        echo "this is a prime number";
    }
    else
    {
        echo "not a prime number";
    }
}
?>