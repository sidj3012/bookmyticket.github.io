<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file=fopen("save.txt",'r');
    
        $line=fgets($file);
        $no='';
        $no1='';
        $no2='';
        $no3='';
        $no4='';
        $no5='';
        $no6='';
        $array=explode(",",$line);
        if(isset($array[0])) $no=$array[0];
        if(isset($array[1])) $no1=$array[1];
        if(isset($array[2])) $no2=$array[2];
        if(isset($array[3])) $no3=$array[3];
        if(isset($array[4])) $no4=$array[4];
        if(isset($array[5])) $no5=$array[5];
        if(isset($array[6])) $no6=$array[6];
        if($no==0){
            include 'bus.php';
        
        
           echo "<html>
           <body>
           <div class='style'><h4><b><i>No seats available in bus no. - 2548<i><b></h4></div>
           <style>
             .style{
               color: red;
           </style>
           </body>
       </html>";
            
        }
        fclose($file);
        if($no!=0){
            $file=fopen("save.txt",'w');
            $no=$no-1;
            $data=$no.",".$no1.",".$no2.",".$no3.",".$no4.",".$no5.",".$no6.",";
            fwrite($file,$data);
            
            fclose($file);
            include 'payment.php';
            
        }
        ?>
        
</body>
</html>

