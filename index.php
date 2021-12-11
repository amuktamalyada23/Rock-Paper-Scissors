
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors </title>
    <style>
        *{
        font-weight:bold;
        text-transform:capitalize;
        font-variant:small-caps;
        color:#1E8449 ;
        font-family:serif;
    }
        input
        {
            color:#1E8449 ;
            background-color:white;
            box-shadow:2px 2px #1E8449 ; 
            font-weight:12px;
            border:none;
        }
    </style>
</head>
<body>
    
    <center><h3>Rock Paper Sissors Game </h3>
    <img src="game.png" alt="" width="50%" height="30%">
   <br><br>
   <p>Choose Your move!</p>
    <form action="connect.php" method="post">
         <input type="submit"  value="rock" name="user">
         <input type="submit" value="paper" name="user">
         <input type="submit" value="scissors" name="user">
    </form>
    </center>
    <br><br><br>
</body>
</html>