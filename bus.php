<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          color: black;
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
          
          width:33%;
          text-align:center;
          
      }
      #bus{
          
          text-decoration:none;
          width:33%;
          text-align:center;
          background-color: rgb(79, 39, 79);
          color:white;
          padding-top:12.5px;
          height:37.5px;
          border-radius:15px;
      }
      #flight{
          text-decoration:none;
          width:33%;
          text-align:center;
          
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
    <nav class="navbar">
        <ul>
        <li><a  href="login.html">Log Out</a></li>
            <li><a  href="myaccount.php">My Account</a></li>
            <li><a href="booking.php">My Bookings</a></li>
            <li><a href="flight.php">Flight</a></li>
            <li><a href="">Train</a></li>
            <li><a href="">Bus</a></li>
            <li><a href="homepage.html">Home</a></li>
            <li id="logo">Bookmyticket</li>
       
        </ul>
    </nav>
    <nav class="navbar2">
        <a id="train" href="btfdetails.php">TRAIN</a>
        <a id="bus" href="bus.php">BUS</a>
        <a id="flight" href="flight.php">FLIGHT</a> 
    </nav><br>
    <table class="tab">
        <tr>
            <th>Organization</th>
            <th>Bus no.</th>
            <th>Timings</th>
            <th>Cost</th>
            <th>Number of seats available</th>
            <th>Model</th>
            <th>Confirm Your Booking</th>
        </tr>
        <tr>
            <th>SRS Travels</th>
            <th>2548</th>
            <th>08:00 - 17:00</th>
            <th>1273/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[0])) $seat=$array[0];
                echo $seat;
                ?></th>
            <th>Volvo A/C seater</th>
            <th><form action="save.php">
                <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
        <tr>
            <th>Neetabus</th>
            <th>3599</th>
            <th>14:00 - 12:35</th>
            <th>1369/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[1])) $seat=$array[1];
                echo $seat;
                ?></th>
            <th>Volvo A/C seater</th>
            <th>
            <form action="save1.php">
            <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                 </th>
        </tr>
        <tr>
            <th>Hans</th>
            <th>7521</th>
            <th>10:00 - 18:45</th>
            <th>1665/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[2])) $seat=$array[2];
                echo $seat;
                ?></th>
            <th>Mercedes A/C seater</th>
            <th><form action="save2.php">
                <button id="submit" type="submit" class="button"  > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
        <tr>
            <th>SRS Travels</th>
            <th>2537</th>
            <th>20:00 - 05:15</th>
            <th>2034/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[3])) $seat=$array[3];
                echo $seat;
                ?></th>
            <th>Mercedes A/C sleeper</th>
            <th><form action="save3.php">
                <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
        <tr>
            <th>Hans</th>
            <th>7500</th>
            <th>09:00 - 17:10</th>
            <th>984/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[4])) $seat=$array[4];
                echo $seat;
                ?></th>
            <th>Ashok Leyland A/C seater</th>
            <th><form action="save4.php">
                <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
        <tr>
            <th>Hans</th>
            <th>7586</th>
            <th>08:00 - 17:00</th>
            <th>649/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[5])) $seat=$array[5];
                echo $seat;
                ?></th>
            <th>Ashok Leyland Non-A/C seater</th>
            <th><form action="save5.php">
                <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
        <tr>
            <th>Neetabus</th>
            <th>3562</th>
            <th>12:00 - 08:00</th>
            <th>1788/-</th>
            <th><?php 
                $file=fopen("save.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[6])) $seat=$array[6];
                echo $seat;
                ?></th>
            <th>Volvo A/C sleeper</th>
            <th><form action="save6.php">
                <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
                    Confirm</button>
                
                
            </form>  </th>
        </tr>
          
           
        
    </table>
    <style>
        .tab{
            border-collapse: collapse;
            width: 100%;

        }
        th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: orange;
        }
        .button {
  background-color: rgb(16, 108, 87);
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;

        }
    </style>
</body>
</html>