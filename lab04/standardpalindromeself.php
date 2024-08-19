
<?php

$stringInput = strtolower($_POST["palindromeCheck"]);
$removePunctuationFromInput = preg_replace("/[',. ]/","",$stringInput);
function palindromeCheck($removePunctuationFromInput , $stringInput ){
    $reversedStringInput = strrev($removePunctuationFromInput);

    if(strcmp($removePunctuationFromInput , $reversedStringInput) == 0){ //strcmp returns 0 if they are same
        echo "<p style='color:green'>The text you entered '$stringInput' is a perfect palindrome</p>";
    }
    else{
        echo "<p style='color:red'>The text you entered '$stringInput' is not a palindrome</p>";
    }
}

if(isset($_POST["submit"]))
{
    
    palindromeCheck($removePunctuationFromInput , $stringInput);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="standardpalindromeself.php" method="post">

        <label>String:</label><br>
        <input type="text" name="palindromeCheck">
        <input type="submit" name="submit" value="Check for Perfect Palindrome">

    </form>
</body>
</html>

