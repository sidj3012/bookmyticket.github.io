<!DOCTYPE html>
<html lang="en">
<head>
    <title>Available Flights</title>
    
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
  }
  #flight{
      text-decoration:none;
      width:33%;
      text-align:center;
      background-color: rgb(79, 39, 79);
      color:white;
      padding-top:12.5px;
      height:37.5px;
      border-radius:15px;
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
            <li><a href="homepage.html">Train</a></li>
            <li><a href="bus.php">Bus</a></li>
            <li><a href="homepage.html">Home</a></li>
            <li id="logo">Bookmyticket</li>
   
    </ul>
</nav>
<nav class="navbar2">
    <a id="train" href="btfdetails.php">TRAIN</a>
    <a id="bus" href="bus.php">BUS</a>
    <a id="flight" href="flight.php">FLIGHT</a> 
</nav>
    <div class="columns">
  <ul class="price">
    <li class="header"><img src="\images\indigo5316.jpg" alt="indigo"></li>
    <li>6E756</li>
    <li class="dark grey"><b>13:20 - 15:50</b></li>
    <li class="blue">4,795/-</li>
    <li>2hr 30mins</li>
    <li>Direct flight</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[0])) $seat=$array[0];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="headerp"><img src="\images\B3B6A-7CUAAjarl.jpg" alt="vistara"></li>
    <li>VTI435</li>
    <li class="dark grey"><b>11:35 - 14:00</b></li>
    <li class="purple">5,655/-</li>
    <li>2hr 25mins</li>
    <li>Direct flight</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[1])) $seat=$array[1];
                echo $seat;
                ?></li>
    <li class="grey"><form action="fly1.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="headerr"><img src="\images\SPICEJET.NS_BIG-2cabca10.png"alt="spicejet"></li>
    <li>SEJ526</li>
    <li class="dark grey"><b>17:55 - 20:10</b></li>
    <li class="red">5,595/-</li>
    <li>2hr 15mins</li>
    <li>Direct</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[2])) $seat=$array[2];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly2.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header"><img src="\images\indigo5316.jpg" alt="indigo"></li>
    <li>6E891</li>
    <li class="dark grey"><b>13:20 - 15:50</b></li>
    <li class="blue">10,110/-</li>
    <li>2hr 30mins</li>
    <li>Direct</li>
    <li>Business</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[3])) $seat=$array[3];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly3.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header"><img src="\images\indigo5316.jpg" alt="indigo"></li>
    <li>6E247</li>
    <li class="dark grey"><b>10:00 - 12:45</b></li>
    <li class="blue">4,830/-</li>
    <li>2hr 45mins</li>
    <li>Direct</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[4])) $seat=$array[4];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly4.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="headerw"><img src="\images\Air-India-logo.png" alt="airindia"></li>
    <li>A453</li>
    <li class="dark grey"><b>15:40 - 19:55</b></li>
    <li class="red">4,400/-</li>
    <li>2hr 35mins</li>
    <li>1hr 40mins layover</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[5])) $seat=$array[5];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly5.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="headerp"><img src="\images\B3B6A-7CUAAjarl.jpg" alt="vistara"></li>
    <li>VTI333</li>
    <li class="dark grey"><b>8:20 - 14:10</b></li>
    <li class="purple">4,825/-</li>
    <li>2 hr 50 mins</li>
    <li>3 hr layover</li>
    <li>Economy</li>
    <li>Vacancies : <?php 
                $file=fopen("fly.txt",'r');
                $line=fgets($file);
                $array=explode(",",$line);
                if (isset($array[6])) $seat=$array[6];
                echo $seat;
                ?></li>
    
    <li class="grey"><form action="fly6.php">
      <button id="submit" type="submit" class="button" > <a href="payment.php"></a>
          Book</button>
       </form> </li>
  </ul>
</div>
<style>
    * {
  box-sizing: border-box;
}


.columns {
  float: left;
  width: 25%;
  padding: 8px;
}


.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}


.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #039;
  color: white;
  font-size: 25px;
}
.price .headerp {
  background-color: #606;
  color: white;
  font-size: 25px;
}
.price .headerr {
  background-color: #c00;
  color: white;
  font-size: 25px;
}
.price .headerw {
  background-color: white;
  color: white;
  font-size: 25px;
}


.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}


.price .grey {
  background-color: #eee;
  font-size: 20px;
}
.price .blue {
  background-color: #039;
  color: white;
  font-size: 20px;
}
.price .purple {
  background-color: #939;
  color: white;
  font-size: 20px;
}
.price .red {
  background-color: #c00;
  color: white;
  font-size: 20px;
}


.button {
  background-color: rgb(12, 90, 72);
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}
 img {
    width: 150px;
    height: 100px;

 }
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</body>
</html>