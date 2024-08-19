<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USing If and While statement</title>
</head>
<body>

<?php
    include ("mathfunctions.php");

?>

<h1>Web Programming - Lab 03</h1>

<?php
    
    if(isset($_GET["submit"]))
    {
        $numberFromForm = $_GET["textBox"];
        $roundedNumberFromForm = round($numberFromForm);
        if(isPositive($roundedNumberFromForm))
        {
            factorial($roundedNumberFromForm);
        }
        else{
            echo("please enter a positive integer");
            
        }

    }


?>

    
</body>
</html>