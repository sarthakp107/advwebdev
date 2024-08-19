<?php


//extra challenge

if(isset($_GET["submit"]))
{
     $numberFromForm = $_GET["number"];

     if(is_numeric($numberFromForm))
     {
        $isEven = (round($numberFromForm) % 2 == 0) ? True : False;
        echo $isEven? "{$numberFromForm} is even" : "{$numberFromForm} is odd";
     }
}

?>