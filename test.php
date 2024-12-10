<?php
 echo ("Hello WOrld!"."\n");
 
 $age = 20;
//  $word = "age";
//  echo $$word;
 $name = "Bangladesh";
 $qustion = "How are you";
 echo $name ." " .$qustion ."\n";
 echo("Hello $name \n");
 echo("Hello {$name},{$qustion}");
 echo("\n");

 echo ($age >= 18)?"Adult":"child";
 function myFunction($a , $b){
    $result = $a + $b;
    echo "The result is : ".$result;
 }
 myFunction(5,13);

 $array = ["apple","banana","orange"];
var_dump($array);