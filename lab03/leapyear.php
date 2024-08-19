<?php
    
    function isLeapYear($number)
    {
        if(is_numeric($number))
    {
        if(($number % 4 == 0 && $number % 100 != 0) || $number %400 == 0)
        {
            return true;

        }
        else
        {
            return false;
        }

    
    }
    }

    if(isset($_GET["submit"]))
    {
       if(isLeapYear($_GET["year"]))
       {
        echo "this is leap year";
       }
       else
       {
        echo "this is a standard year";
       }

    }

    
    
?>