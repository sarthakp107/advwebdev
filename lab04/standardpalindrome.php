<?php

$stringInput = strtolower($_POST["palindromeCheck"]);
$removePunctuationFromInput = preg_replace("/[',. ]/","",$stringInput);
function palindromeCheck($removePunctuationFromInput , $stringInput ){
    $reversedStringInput = strrev($removePunctuationFromInput);

    if(strcmp($removePunctuationFromInput , $reversedStringInput) == 0){ //strcmp returns 0 if they are same
        echo "The text you entered '$stringInput' is a perfect palindrome";
    }
    else{
        echo "Its not";
    }
}

if(isset($_POST["submit"]))
{
    
    palindromeCheck($removePunctuationFromInput , $stringInput);
}

?>