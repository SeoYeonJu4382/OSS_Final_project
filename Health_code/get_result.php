<!DOCTYPE html>
<html>
<center>
  <head></head>
  <body>
    
  </body>

<?php

 //header('Content-type: text/plain');

 echo "<html>";

 echo "<head>";

 echo "<meta name='viewport' content='width=device-width, user-scalable=false, initial-scale=1;'>";

 echo "</head>";
echo "<span
style=
font-style: normal ; 
font-weight: bold; 
font-size: 1.5em;
line-height: 1.0em; 
color: navy;
font-family: arial;
>";
 echo "<body>" .	"<h1>Health calulator</h1>"; 


echo "</span>";

  if( isset($_GET['Weight']) && isset($_GET['Height'])&& isset($_GET['Name'])  )

 {
   $n=$_GET['Name'];
   $t=$_GET['Weight'];

   $h=$_GET['Height'];

 }
echo "<body>" .      "<h2>$n 's result</h2>";
   echo " Name : ";

   echo $n;
   echo "<br>";
   echo " Weight : ";

   echo $t;

   echo " Height : ";

   echo $h;

 
   echo "<br>";

   echo " Your BMI level is  : ";
   echo  $t/($h*$h) ;
   echo "<br>";

   echo "Your obesity state is : ";
   echo round  (($t*100)/(21*(($h*0.01)*($h*0.01))));
   echo"%";
   echo "<br>";

   echo "Your properWeight is : ";
   echo round  (21*(($h*0.01)*($h*0.01))); 
   echo "kg";
   echo "<br>";  
    echo "**************************************************************";
echo "<br>"; 
 

  if((($t*100)/(21*(($h*0.01)*($h*0.01))))<=90.00){
   echo "<img src='under.png'/>";
   echo "<br>"; 

       echo "You are underweight!";
       echo "<br>";
       echo"You should gain ";
       echo 21*(($h*0.01)*($h*0.01)) -$t ;
       echo "kg";
       echo"<br>";
    } 
else if(((($t*100)/(21*(($h*0.01)*($h*0.01))))>=90)&&((($t*100)/(21*(($h*0.01)*($h*0.01))))<=100.00)){ 
     echo "<img src='normal.png'/>";
     echo "<br>"; 
      echo "You are Normal!";
      echo"<br>";
      echo "You don't need to gain or lose weight ";
    } 
  else if(((($t*100)/(21*(($h*0.01)*($h*0.01))))>100.00)&&((($t*100)/(21*(($h*0.01)*($h*0.01))))<=120.00)){ 
        echo "<img src='over.png'/>";
         echo "<br>"; 
        echo"You are overweight!";
        echo"<br>";
        echo"You should lose ";
        echo  $t-(21*(($h*0.01)*($h*0.01)))  ;
        echo "kg";
       echo"<br>";
    } 
    else if((($t*100)/(21*(($h*0.01)*($h*0.01))))>120.00){
       echo "<img src='obe.png'/>";
        echo "<br>"; 
       echo "You are obesity!";
        echo"<br>";
        echo "You have to lose ";
        echo  $t-(21*(($h*0.01)*($h*0.01)))  ;
        echo "kg";
       echo"<br>";
    } 

echo"<br>";
 ?>

<input type="button" value="BACK" onClick="history.go(-1)">
</center>
</html>


