<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    <style>
        #block{
            height: 500px;
            width: 400px;
            margin: auto;
            background-color: orange;
            margin-top: 100px;
            border-radius: 3px;
            text-align: center;
            padding-top: 20px;
            box-sizing: border-box;
            font-size: 20px;
        }
        #inputs{
            background-color: rgb(226, 233, 233);
            height: 25px;
            width: 200px;
            border: 2px solid black;
            border-radius: 11px;
            padding: 5px;
            margin: 2px;
            text-align: center;
        }
        #submit{
            background-color: black;
            height: 35px;
            width: 150px;
            border: 2px solid black;
            border-radius: 11px;
            padding: 5px;
            margin-top:50px;
            font-weight: bold;
            font-size: 18px;
            color: antiquewhite;
        }
        #submit:hover{
            color: black;
            background-color: rgb(228, 16, 16);
        }
    </style>
</head>
<body>
    <div id="block">
        <h1>Enter passenger details</h1>
        <form action="mybookings.php">
            <input id="inputs" type="text" name="name" placeholder="Passenger's name"><br>
            <input id="inputs" type="number" name="age" placeholder="Passenger's age"><br>
            Gender:   <input type="radio" id="male" value="Male" name="gender"><label for="male">Male</label>
                    <input type="radio" id="female" value="Female" name="gender"><label for="female">Female</label>
                    <input type="radio" id="other" value="Others" name="gender"><label for="other">Others</label><br><br><br>
            No. Of Seats:<input type="number" name="nseats"><br>
            <button type="submit" id="submit" onclick="window.location.href='card.html'">Make Payment</button>
              
        </form>
    </div>
    
</body>
</html>