<html>
    <body>
        <?php
            $temp=0;
            $temp2=0;
            $file=fopen("userinfo.txt",'r');
            while (!feof($file)){
                $line=fgets($file);
                
                $array=explode(",",$line);
                if (isset($array[2])) $usr=$array[2];
                if (isset($array[3])) $pass=$array[3];
                if ($usr==$_GET["username"]){
                    $temp2=1;
                }
                if (($usr==$_GET["username"]) && ($pass==$_GET["password"])){
                    $x=fopen("currentuser.txt",'w');
                    fwrite($x,$line);
                    fclose($x);
                    $temp=1;
                    include 'homepage.html';
                    break;
                }
            }
            if ($temp2==0){
                echo "Username does not exist";
                include 'login.html';
            }
            if ($temp==0 && $temp2==1){
                echo "!Password does not match!";
                include 'login.html';
            }
        ?>
    </body>
</html>

            