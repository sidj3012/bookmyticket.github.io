<?php
    $file=fopen("lastsearch.txt",'r');
    $line=fgets($file);
    fclose($file);
    $file=fopen("mybookings.txt",'a+');
    fwrite($file,$line);
    fclose($file);
    if (isset($_GET["coach"])){
    if ($_GET["coach"]=="12853_SL"){
        $file=fopen("trains/12853.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s1--;
        fclose($file);
        $file=fopen("trains/12853.txt",'w');
        $data=$s1."\n".$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);

        $file=fopen("mybookings.txt",'a+');
        $data='AMARKANTAK(12853),Rs.295,19:05,03:00,S'.$s1.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    if ($_GET["coach"]=="12853_3A"){
        $file=fopen("trains/12853.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s2--;
        fclose($file);
        $file=fopen("trains/12853.txt",'w');
        $data=$s1.$s2."\n".$s3.$s4;
        fwrite($file,$data);
        fclose($file);

        $file=fopen("mybookings.txt",'a+');
        $data='AMARKANTAK(12853),Rs.685,19:05,03:00,H'.$s2.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach"]=="12853_2A"){
        $file=fopen("trains/12853.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s3--;
        fclose($file);
        $file=fopen("trains/12853.txt",'w');
        $data=$s1.$s2.$s3."\n".$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='AMARKANTAK(12853),Rs.985,19:05,03:00,B'.$s3.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach"]=="12853_1A"){
        $file=fopen("trains/12853.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s4--;
        fclose($file);
        $file=fopen("trains/12853.txt",'w');
        $data=$s1.$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='AMARKANTAK(12853),Rs.1295,19:05,03:00,A'.$s4.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
}
    if (isset($_GET["coach2"])){
    if ($_GET["coach2"]=="12823_SL"){
        $file=fopen("trains/12823.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s1--;
        fclose($file);
        $file=fopen("trains/12823.txt",'w');
        $data=$s1."\n".$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='CG SMPRK KRANTI(12823),Rs.320,12:55,20:30,S'.$s1.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    if ($_GET["coach2"]=="12823_3A"){
        $file=fopen("trains/12823.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s2--;
        fclose($file);
        $file=fopen("trains/12823.txt",'w');
        $data=$s1.$s2."\n".$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='CG SMPRK KRANTI(12823),Rs.695,12:55,20:30,H'.$s2.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach2"]=="12823_2A"){
        $file=fopen("trains/12823.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s3--;
        fclose($file);
        $file=fopen("trains/12823.txt",'w');
        $data=$s1.$s2.$s3."\n".$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='CG SMPRK KRANTI(12823),Rs.995,12:55,20:30,B'.$s3.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach2"]=="12823_1A"){
        $file=fopen("trains/12823.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s4--;
        fclose($file);
        $file=fopen("trains/12823.txt",'w');
        $data=$s1.$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='CG SMPRK KRANTI(12823),Rs.1487,12:55,20:30,A'.$s4.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    }
    if (isset($_GET["coach3"])){
    if ($_GET["coach3"]=="15160_SL"){
        $file=fopen("trains/15160.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s1--;
        fclose($file);
        $file=fopen("trains/15160.txt",'w');
        $data=$s1."\n".$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='SARNATH EXP(15160),Rs.315,21:10,06:05,S'.$s1.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    if ($_GET["coach3"]=="15160_3A"){
        $file=fopen("trains/15160.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s2--;
        fclose($file);
        $file=fopen("trains/15160.txt",'w');
        $data=$s1.$s2."\n".$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='SARNATH EXP(15160),Rs.715,21:10,06:05,H'.$s2.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach3"]=="15160_2A"){
        $file=fopen("trains/15160.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s3--;
        fclose($file);
        $file=fopen("trains/15160.txt",'w');
        $data=$s1.$s2.$s3."\n".$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='SARNATH EXP(15160),Rs.1015,21:10,06:05,B'.$s3.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach3"]=="15160_1A"){
        $file=fopen("trains/15160.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s4--;
        fclose($file);
        $file=fopen("trains/15160.txt",'w');
        $data=$s1.$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='SARNATH EXP(15160),Rs.1715,21:10,06:05,A'.$s4.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    }
    if (isset($_GET["coach4"])){
    if ($_GET["coach4"]=="15232_SL"){
        $file=fopen("trains/15232.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s1--;
        fclose($file);
        $file=fopen("trains/15232.txt",'w');
        $data=$s1."\n".$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='GONDIA BJU EXP(15232),Rs.260,00:10,09:40,S'.$s1.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    if ($_GET["coach4"]=="15232_3A"){
        $file=fopen("trains/15232.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s2--;
        fclose($file);
        $file=fopen("trains/15232.txt",'w');
        $data=$s1.$s2."\n".$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='GONDIA BJU EXP(15232),Rs.760,00:10,09:40,H'.$s2.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }if ($_GET["coach4"]=="15232_2A"){
        $file=fopen("trains/15232.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s3--;
        fclose($file);
        $file=fopen("trains/15232.txt",'w');
        $data=$s1.$s2.$s3."\n".$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='GONDIA BJU EXP(15232),Rs.1260,00:10,09:40,B'.$s3.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
    
    if ($_GET["coach4"]=="15232_1A"){
        $file=fopen("trains/15232.txt",'r');
        $s1=fgets($file);
        $s2=fgets($file);
        $s3=fgets($file);
        $s4=fgets($file);
        $s4--;
        fclose($file);
        $file=fopen("trains/15232.txt",'w');
        $data=$s1.$s2.$s3.$s4;
        fwrite($file,$data);
        fclose($file);
        
        $file=fopen("mybookings.txt",'a+');
        $data='GONDIA BJU EXP(15232),Rs.1560,00:10,09:40,A'.$s4.",";
        fwrite($file,$data);
        fclose($file);
        include 'payment.php';
    }
}
?>