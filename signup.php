<html>
    <body>
        <?php
            
            $temp=1;
            $file=fopen("userinfo.txt",'r');
            while (!feof($file)){
                $line=fgets($file);
                $usr='';
                $array=explode(",",$line);
                if (isset($array[2])) $usr=$array[2];
                if ($usr==$_GET["username"]){
                    $temp=0;
                    
                    include 'signup2.html';
                    break;
                }
            }
            fclose($file);
            if ($temp==1){
                $file=fopen("userinfo.txt","a+");
                $data=$_GET["name"].",".$_GET["email"].",".$_GET["username"].",".$_GET["password"].",".$_GET["number"]."\n";
                fwrite($file,$data);
                fclose($file);
                echo "Registration Successful. Please login with your username and passwrd";
                include 'login.html';
            }
        ?>
    </body>
</html>