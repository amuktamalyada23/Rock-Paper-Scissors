<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
     *{
        font-weight:bold;
        text-transform:capitalize;
        font-variant:small-caps;
        color:#1E8449 ;
        font-family:serif;
        margin:0.5%;
    }
    h3,h5{
        font-weight:bold;
        color:#1E8449 ;
    }
</style>
<center><h5>Rock Paper Sissors Game </h5>
<img src="game.png" alt="" width="50%" height="30%">
   <br><br></center>
<?php
function game()
{  
    
      static $c=0;
      static $k=0;
    $u=$_POST['user'];
  $n=rand(1,3);
  if($n==1)
  echo "<h5 style='float:left'>System Choosed Rock</h5>";
  else if($n==2)
    echo "<h5 style='float:left'>System Choosed Paper</h5>";
 else
 echo "<h5 style='float:left'>System choosed Scissors</h5>";
 
  if($u=="rock")
  {
  $un=1;
  echo "<h5 style='float:right'>You Choosed Rock </h5>";
  }
  else if($u=="paper")
  {
  $un=2;
  echo "<h5 style='float:right'>You Choosed Paper</h5>";
  }
  else
  {
  $un=3;
  echo "<h5 style='float:right'>You Choosed Scissors</h5>";
  }
 echo "<center><br><br><br><br><br><br></center>";
  if($n==$un)
  echo "<center>Its a Tie<center>";
  else if($n==1)
  {
      if($un==2)
      {
        $c++;
        echo "<center><h3><br>you win <br></h3><center>";
      }
      if($un==3)
      {
      echo "<center><h3><br>you loose<br> </h3></center>";
      $k++;
      }
  }
  else if($n==2)
  {
      if($un==1)
      {
        echo "<center> <h3><br>you loose<br></h3></center>";
        $k++;
      }
        if($un==3)
        {
        echo "<center><h3><br>you win <br></h3></center>";
        $c++;
        }
  }
  else if($n==3)
  {
      if($un==1)
      {
      echo "<center><h3><br>you win<br></h3> </center>";
      $c++;
      }
      if($un==2)
      {
      echo "<center><h3>you loose <br></h3></center>";
      $k++;
      }
  }
  echo "<br><center>your score: $c</center>";
  echo "<center>system score: $k</center><br><br><br>";
  echo "<center><a href='index.php' style='text-decoration:none;box-shadow:3px 3px #1E8449;padding:3px;color:#1E8449'>Play Again </a></center>";
}
game();
?>