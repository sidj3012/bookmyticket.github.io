<?php

    $file=fopen("mybookings.txt",'a+');
    $data=$_GET["name"].','.$_GET["age"].','.$_GET["nseats"]."\n";
    fwrite($file,$data);
    fclose($file);
    include 'card.html';
    $file=fopen("train.txt",'a+');
    
?>