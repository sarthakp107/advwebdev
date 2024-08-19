<?php

    if(isset($_POST["submit"])){
        $item = $_POST["item"];
        $quantity = $_POST["quantity"];

        $filename = "/shop.txt";
        $handle = fopen($filename , "a"); //append mode - open for write only

       
        $data = $item . "," . $quantity . "\n";
        fwrite($handle , $data );
        fclose($handle);

        echo "<p>Shopping List</p> ";
        $handle = fopen($filename,"r");
        while (!feof($handle)){
            $data = fgets($handle);
            echo "<p>" , $data , "</p>";
        }
        fclose($handle);
    }


    
    
    
    




    
?>