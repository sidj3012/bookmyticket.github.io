<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        
        *{
            
            font-family: 'Ubuntu', sans-serif;
        }
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
            color:black;
            background-color: orange;
        }
        #logo{
            position: absolute;
            left: 10px;
            top: 5px;
            display: inline-block;
        }
        .navbar2{
            display:flex;
            background-color: orange;
            justify-content: space-around;
            font-size:20px;
            height:50px;
            align-items: center;
            border-radius:15px;
        }
        #train{
            text-decoration:none;
            background-color: rgb(79, 39, 79);
            color:white;
            width:33%;
            text-align:center;
            padding-top:12.5px;
            height:37.5px;
            border-radius:15px;
        }
        #bus{
            
            text-decoration:none;
            width:33%;
            text-align:center;
        }
        #flight{
            text-decoration:none;
            width:33%;
            text-align:center;
        }
        .block{
            height:195px;
            width:700px;
            background-color:grey;
            margin:10px;
            
            padding:10px;
            box-sizing:border-box;
            font-size:20px;
            border-radius:5px;
            float:left;
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
        .seat{
            width:24%;
            height:60px;
            border: 2px solid black;
            display:inline-block;
            box-sizing:border-box;
            border-radius:5px;
            text-align:center;
            padding-top:10px;
            text-decoration:none;
            margin-top:15px;
        }
        .seat:hover{
            background-color:rgb(79, 39, 79);
            color:orange;
        }
        #submit{
            background-color: black;
            height: 35px;
            width: 150px;
            border: 2px solid black;
            border-radius: 11px;
            padding: 5px;
            margin: 1px auto;
            font-weight: bold;
            font-size: 18px;
            color: antiquewhite;
        }
        #submit:hover{
            color: black;
            background-color: rgb(228, 16, 16);
        }
        .inputs{
            
            height: 35px;
            width: 120px;
            border: 2px solid black;
            border-radius: 11px;
            padding: 5px;
            
            text-align: center;
        }
        #dropbox{
            margin-left:100px;
            box-sizing:border-box;
        }
        #logo{
            position: absolute;
            left: 10px;
            top: 1px;
            display: inline-block;
            color:white;
        }
    </style>
    </head>
    <body>
    <?php
        $x=fopen("lastsearch.txt",'w');
        $data=$_GET["source"].','.$_GET["destination"].','.$_GET["date"].',';
        fwrite($x,$data);
        fclose($x);
    ?>
    <nav class="navbar">
    <ul>
            <li><a  href="login.html">Log Out</a></li>
            <li><a  href="myaccount.php">My Account</a></li>
            <li><a href="booking.php">My Bookings</a></li>
            <li><a href="flight.php">Flight</a></li>
            <li><a href="">Train</a></li>
            <li><a href="bus.php">Bus</a></li>
            <li><a href="homepage.html">Home</a></li>
            <li id="logo">Bookmyticket</li>
       
        </ul>
    </nav>
    <nav class="navbar2">
        <a id="train" href="">TRAIN</a>
        <a id="bus" href="bus.php">BUS</a>
        <a id="flight" href="flight.php">FLIGHT</a> 
    </nav>
    
    <div class=block>
        <?php
            $file=fopen('trains/12853.txt','r');
            $as1=fgets($file);
            $as2=fgets($file);
            $as3=fgets($file);
            $as4=fgets($file);
            fclose($file);
        ?>
        <strong>AMARKANTAK(12853)</strong>
        <hr>
        <p id="t1">19:05</p>
        <p id="t2">03:00</p><br>
        
        <p id="source"><em><?php echo $_GET["source"]; ?></em></p>
        <p id="destination"><em><?php echo $_GET["destination"]; ?></em></p><br>
        <?php echo $_GET["date"]; ?><br>
        <form action="train.php">
        <p id="dropbox">Select Coach:<select class="inputs" name="coach" class="input2">
            <option value="12853_SL">SL-<?php echo $as1; ?> Rs.295</option>
            <option value="12853_3A">3A-<?php echo $as2; ?> Rs.784</option>
            <option value="12853_2A">2A-<?php echo $as3; ?> Rs.987</option>
            <option value="12853_1A">1A-<?php echo $as4; ?> Rs.1295</option>
          </select>
        
        <input id="submit" type="submit"></p><br>
    </form>
    </div>
    <div class=block>
        <?php
            $file=fopen('trains/12823.txt','r');
            $as1=fgets($file);
            $as2=fgets($file);
            $as3=fgets($file);
            $as4=fgets($file);
            fclose($file);
        ?>
        <strong>CG SMPRK KRANTI(12823)</strong>
        <hr>
        <p id="t1">12:55</p>
        <p id="t2">20:30</p><br>
        <p id="source"><em><?php echo $_GET["source"]; ?></em></p>
        <p id="destination"><em><?php echo $_GET["destination"]; ?></em></p><br>
        <?php echo $_GET["date"]; ?><br>
        <form action="train.php">
        <p id="dropbox">Select Coach:<select class="inputs" name="coach2" class="input2">
            <option value="12823_SL">SL-<?php echo $as1; ?> Rs.320</option>
            <option value="12823_3A">3A-<?php echo $as2; ?> Rs.765</option>
            <option value="12823_2A">2A-<?php echo $as3; ?> Rs.1005</option>
            <option value="12823_1A">1A-<?php echo $as4; ?> Rs.1300</option>
          </select>
        <input id="submit" type="submit"></p><br>
    </form>
    </div>
    <div class=block>
        <?php
            $file=fopen('trains/15160.txt','r');
            $as1=fgets($file);
            $as2=fgets($file);
            $as3=fgets($file);
            $as4=fgets($file);
            fclose($file);
        ?>
        <strong>SARNATH EXP(15160)</strong>
        <hr>
        <p id="t1">21:10</p>
        <p id="t2">06:05</p><br>
        <p id="source"><em><?php echo $_GET["source"]; ?></em></p>
        <p id="destination"><em><?php echo $_GET["destination"]; ?></em></p><br>
        <?php echo $_GET["date"]; ?><br>
        <form action="train.php">
        <p id="dropbox">Select Coach:<select class="inputs" name="coach3" class="input2">
            <option value="15160_SL">SL-<?php echo $as1; ?> Rs.420</option>
            <option value="15160_3A">3A-<?php echo $as2; ?> Rs.895</option>
            <option value="15160_2A">2A-<?php echo $as3; ?> Rs.1200</option>
            <option value="15160_1A">1A-<?php echo $as4; ?> Rs.1500</option>
          </select>
        <input id="submit" type="submit"></p><br>
    </form>
    </div><div class=block>
        <?php
            $file=fopen('trains/15232.txt','r');
            $as1=fgets($file);
            $as2=fgets($file);
            $as3=fgets($file);
            $as4=fgets($file);
            fclose($file);
        ?>
        <strong>GONDIA BJU EXP(15232)</strong>
        <hr>
        <p id="t1">00:10</p>
        <p id="t2">09:40</p><br>
        <p id="source"><em><?php echo $_GET["source"]; ?></em></p>
        <p id="destination"><em><?php echo $_GET["destination"]; ?></em></p><br>
        <?php echo $_GET["date"]; ?><br>
        <form action="train.php">
        <p id="dropbox">Select Coach:<select class="inputs" name="coach4" class="input2">
            <option value="15232_SL">SL-<?php echo $as1; ?> Rs.260</option>
            <option value="15232_3A">3A-<?php echo $as2; ?> Rs.750</option>
            <option value="15232_2A">2A-<?php echo $as3; ?> Rs.980</option>
            <option value="15232_1A">1A-<?php echo $as4; ?> Rs.1150</option>
          </select>
        <input id="submit" type="submit"></p><br>
    </form>
    
</body>
</html>