<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <style>
            *{ font-family: 'Ubuntu', sans-serif;}
            .navbar{
                background-color: rgb(79, 39, 79);
                border-radius: 30px;
            }
            .navbar li{
                float: right;
                list-style: none;
                padding: 40px 20px;
            }
            .navbar ul{
                overflow: auto;
            }
            .navbar li a{
                text-decoration: none;
                color: aliceblue;
                font-size: 18px;
                padding: 25px 20px;
            }
            .navbar li a:hover{
                color: rgb(79, 39, 79);
                background-color: orange;
            }
            #logo{
                position: absolute;
                left: 10px;
                top: 1px;
                display: inline-block;
                color:white;
            }
            #block{
                height: 550px;
                width: 500px;
                margin: auto;
                background-color: aquamarine;
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
    </head>
<body>
    <nav class="navbar">
        <ul>
            <li><a  href="login.html">Log Out</a></li>
            <li><a  href="myaccount.php">My Account</a></li>
            <li><a href="booking.php">My Bookings</a></li>
            <li><a href="homepage.html">Flight</a></li>
            <li><a href="homepage.html">Train</a></li>
            <li><a href="homepage.html">Bus</a></li>
            <li><a href="homepage.html">Home</a></li>
            <li id="logo">Bookmyticket</li>
        </ul>
    </nav>
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
                <strong>PNR:67543256</strong><br>
                <p id="t1"><?php echo $t1; ?></p>
                <p id="t2"><?php echo $t2; ?></p><br>
                
                <p id="source"><em><?php echo $source; ?></em></p>
                <p id="destination"><em><?php echo $destination; ?></em></p><br>
                <p id=name>
                Passenger Name:<strong><em><?php echo $name; ?></em></strong><br>
                Passenger Age:<em><?php echo $age; ?></em><br>
                Seat No.:<?php echo $seat; ?><br>
                Ticket Price:<?php echo $price; ?><br>
                </p>
        </div> 
    </body>
</html>