<?php
    if ($_GET["pass"] != $_GET["cpass"]){
        echo "!Password does not match!";
        include 'passwordreset.html';
    }
    else{
        $file=fopen("userinfo.txt",'a+');
        $c=0;
        while (!feof($file)){
            $c++;
            $temp=0;
            $line=fgets($file);
            $array=explode(",",$line);
            if (isset($array[0])) $name=$array[0];
            if (isset($array[1])) $email=$array[1];
            if (isset($array[2])) $username=$array[2];
            if (isset($array[3])) $password=$array[3];
            if (isset($array[4])) $number=$array[4];
            if ($username==$_GET["username"]){
                $temp=1;
                break;
            }
        }
        fclose($file);
        if ($temp==0){
            echo "Username does not exist";
            include 'passwordreset.html';
        }
        else{
            $file=fopen("userinfo.txt",'a+');
            while ($c>1){
                $line=fgets($file);
                $c--;
            }
            $data=$name.",".$email.",".$username.",".$_GET["pass"].",".$number."\n";
            fwrite($file,$data);
            fclose($file);
            echo "Password changed successfully";
            include 'login.html';
        }
    }