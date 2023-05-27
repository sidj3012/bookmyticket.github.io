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
            height:400px;
            width: 400px;
            margin:100px auto;
            box-sizing: border-box;
            background-color: orange;
            border: 3px solid rgb(79, 39, 79);
            
            border-radius: 5px;
            padding-top: 100px;
            font-family: 'Ubuntu', sans-serif;
            font-size:20px;
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
        $file=fopen("currentuser.txt",'r');
        $line=fgets($file);
        $array=explode(",",$line);
        if (isset($array[0])) $name=$array[0];
        if (isset($array[1])) $email=$array[1];
        if (isset($array[2])) $username=$array[2];
        if (isset($array[4])) $number=$array[4];
    ?>
    <nav id=block>
        
        <b>Name</b>:<em><?php echo $name; ?></em><br>
        <b>Email Id</b>:<em><?php echo $email; ?></em><br>
        <b>Username</b>:<em><?php echo $username; ?></em><br>
        <b>Mobile Number</b>:<em><?php echo $number; ?></em><br><br><br>
        <a href="passwordreset.html">Change Password</a><br>
        <a href="login.html">Log Out</a><br>
    </nav>
    </body>
    </html>
