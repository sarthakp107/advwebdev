
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Advanced Web Development - Lab 2</h1>
<?php
    $mark = array(85,85,95);
    $mark[1] = 90;

   function average($mark)
   {
    $sum = 0;
    $arrayLength = count($mark);

    for($i = 0; $i<$arrayLength;$i++)
    {
        $sum += $mark[$i];
    }

    $ave = $sum / $arrayLength;
    
    ($ave>=50) ? $status = "PASSED" : $status = "FAILED" ;
    echo "Your average is {$ave}. You {$status}!";



   }
   average($mark);



?>
</body>
</html>

