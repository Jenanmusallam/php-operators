<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>PHP operator exercises</h1>
    <table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Answers</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Q 1</th>
      
<?php
// 1. Write a PHP script to see if the specified year is a leap year or not
function year_check($year)
{
   if ($year % 400 == 0)
      print("<td>It is a leap year </td>");
   if ($year % 4 == 0)
      print("<td>It is a leap year</td>");
   else if ($year % 100 == 0)
      print("<td>It is not a leap year</td>");
   else
      print("<td> It is not a leap year </td>");
}
$year = 2021;
year_check($year);


?>
    </tr>
    <tr>
      <th scope="row">Q 2</th>
     
<?php
 // 2. Write a PHP script to check the season depending on set temperature if the
 // temperature is below 20 we are in winter otherwise the season is summer.

function Temperature($x){
  if($x<20){
    echo" <td>We are in winter </td>";
  }
  else{
     echo" <td>The Season is Summer </td>";
  }
}
Temperature(40);
?>
    </tr>
    <tr>
      <th scope="row">Q 3</th>
      <?php

// 3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned.
function SumCalculate($x,$y){
  $cal=1;
  if($x==$y){
    $cal=($x+$y)*3;
echo" <td>".$cal."</td>";
  }
  else{
$cal=$x+$y;
echo" <td>".$cal."</td>";
  }
} 
SumCalculate(2,2);
?>

    </tr>
      <tr>
      <th scope="row">Q 4</th>
     <?php
     
// 4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.
function differCalculate($n){
  $cal=100;
  if($n>$cal){
    
echo" <td>".(($cal-$n)*3)."</td>";
  }
  else{
echo "<td>".($cal-$n)."</td>";
  }
} 
differCalculate(110);
?>
    </tr>
  <tr>
      <th scope="row">Q 5</th>
     <?php
     
// 5. Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.
function Sum5($x,$y){
  $cal=1;
  if($x==30 || $y==30 || $y+$x==30){
    echo "<td>True</td>";
  }
  else{
    echo "<td>False</td>";
  }
}
Sum5(25,5);

?>
    </tr>
      <tr>
      <th scope="row">Q 6</th>
     <?php
     
// 6. Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.
function Sum6($x){
  // if($x<=10 || $x<=100 || $x==200 ){
  //   echo "<td> Integer </td>";
  // }
  // else{
  //   echo "<td>Not Integer</td>";
  // }
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
          { echo "<td> Integer </td>";}
    else{echo "<td>Not Integer </td>";} 
}
Sum6(190);



?>
    </tr>
      <tr>
      <th scope="row">Q 7</th>
     <?php
     
// 7. Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7
function Multiple($x){
    if($x >= 0){
        if($x % 3 == 0 && $x % 7 == 0){
            return "<td> $x Is Multiple Of 3 & 7</td>";
        }
        elseif($x % 3 == 0) //($x / 3 == 1)
        {
            return "<td> $x Is Multiple Of 3</td>";
        }elseif($x % 7 == 0) //($x / 7 == 1)
        {
            return "<td> $x Is Multiple Of 7</td>";
        }else{
            return "<td>$x Is not Multiple Of 3 or 7</td>";
        }
    } else{
        return "<td>Enter A positive Number</td>";
    }
}
echo Multiple(18);

?>
    </tr>
      <tr>
      <th scope="row">Q 8</th>
     <?php
     
// 8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.

   $str = "Jenan Is Beautiful";
    $arr = explode(" ",$str);
    if("if" === $arr[0]){
        echo "<td> String Unchanged </td>";
    } else{
        array_unshift($arr, "if");
        echo "<td>".implode(" ",$arr)."</td>" ;
    }

?>
    </tr>
      <tr>
      <th scope="row">Q 9</th>
     <?php
     
// 9. Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive

    function charactor9($s, $n) 
    {
       echo  "<td>".substr($s,0,$n).substr($s,$n+1,strlen($s)-$n)."</td>";
    }
    charactor9("WelcomeJenan",4);
   
?>
    </tr>
      <tr>
      <th scope="row">Q 10</th>
     <?php
// 10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
function integer10($x, $y) 
    {
        return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
    }
    echo "<td>";
     var_dump(integer10(70, 199));
     var_dump(integer10(250, 290));

    echo  "</td>";
?>
    </tr>
      <tr>
      <th scope="row">Q 11</th>
     <?php
// 11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.

    function integer11($x, $y) 
    {
       return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
    }
    echo "<td>";
    var_dump(integer11(21, 30));
    echo  "</td>";

?>
    </tr>
      <tr>
      <th scope="row">Q 12</th>
     <?php
     
// 12. Write PHP script to check for the largest number among three integers

 function largest($x, $y, $z) 
    {
      $cal = max($x, max($y, $z));
     echo" <td>".$cal."</td>";
    }
    largest(20,11,5);

?>
    </tr>
      <tr>
      <th scope="row">Q 13</th>
     <?php
     
// 13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal

    function NumberClosest($x, $y) 
    {
       $n = 100;
       $val = abs($x - $n);
       $val2 = abs($y - $n);
       return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
    
      }
 echo " <td>".NumberClosest(55, 88)."</td>";
?>
    </tr>
      <tr>
      <th scope="row">Q 14</th>
     <?php
     // 14. Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5.
  // echo " <if>".$cal."</if>";
function Accepts14($x, $y)
    {
       return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
     }
      echo " <td>";
      var_dump(Accepts14(5, 4));
echo "</td>";
?>
    </tr>


  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


