<html>
    <head>
        <style>
        #block{
            height: 550px;
            width: 500px;
            margin: auto;
            background-color: orange;
            margin-top: 150px;
            border-radius: 3px;
            text-align: center;
            padding-top: 50px;
            box-sizing: border-box;
            font-size: 20px;
        }
        #submit{
            background-color: black;
            height: 35px;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            width: 150px;
            border: 2px solid black;
            border-radius: 11px;
            padding: 5px;
            margin-top:40px;
            font-weight: bold;
            font-size: 18px;
            color: antiquewhite;
            text-decoration:none;
        }
        #submit:hover{
            color: black;
            background-color: rgb(228, 16, 16);
        }
        #block2{
            border: 2px solid black;
            height:250px;
            width:400px;
            background-color:white;
            margin:auto;
            margin-bottom:40px;
        }
        #t1{
            float:left;
            display: inline-block;
            margin:auto;
        }
        
        #t2{
            float:right;
            display: inline-block;
            margin:auto;
        }
        #source{
            float:left;
            display: inline-block;
            margin:auto;
            
        }
        #destination{
            float:right;
            display: inline-block;
            margin:auto;
        }
        #train{
            float:left;
        }
        #date{
            float:right;
            margin:auto;
        }
        #name{
            float:left;
            text-align:left;
        }
        </style>
    <body>
        <div id=block>
        <h1>Your ticket has been booked successfully</h1>
        <?php
            $file=fopen("mybookings.txt",'r');
            $line=fgets($file);
            $array=explode(",",$line);
            if (isset($array[0])) $source=$array[0];
            if (isset($array[1])) $destination=$array[1];
            if (isset($array[2])) $date=$array[2];
            if (isset($array[3])) $train=$array[3];
            if (isset($array[4])) $price=$array[4];
            if (isset($array[5])) $t1=$array[5];
            if (isset($array[6])) $t2=$array[6];
            if (isset($array[7])) $seat=$array[7];
            if (isset($array[8])) $name=$array[8];
            if (isset($array[9])) $age=$array[9];
        ?>
        <div id=block2>
        <strong id=train><?php echo $train; ?></strong>
        <h4 id=date><?php echo $date; ?></h4><br>
        <hr>
        PNR:67543256<br>
        <p id="t1"><?php echo $t1; ?></p>
        <p id="t2"><?php echo $t2; ?></p><br>
        
        <p id="source"><em><?php echo $source; ?></em></p>
        <p id="destination"><em><?php echo $destination; ?></em></p><br>
        <p id=name>
        Passenger's Name:<?php echo $name; ?><br>
        Passenger's Age:<?php echo $age; ?><br>
        Seat No.:<?php echo $seat; ?><br>
        Ticket Price:<?php echo $price; ?><br>
    </p>
        </div>
        <a id="submit" href="homepage.html">Go To Homepage</a>
    </div>
</body>
</html>