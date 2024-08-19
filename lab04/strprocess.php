<?php
    $stringInput = $_POST["stringInput"];
    function vowelRemove($stringInput){
        // $vowel = "AEIOUaeiou";
        /* 
        "/" defines where the regular expression begins and ends
        "[]" they matches any one of the character

        i is for making it in uppercase
         */
        $result = preg_replace("/[aeiou]/i" , "" , $stringInput);
        echo $result;

    }
    if(isset($_POST["submit"]))
    {
        
        $expressions = "/^[A-Za-z ]+$/";

        if(preg_match($expressions, $stringInput)) //  pregmatch = returns 1 if the pattern matches given subject
        {
            //vowel remove function
            vowelRemove($stringInput);

        }

        else {
            echo "Please enter a string containing only letters or space.";
        }
    }
?>