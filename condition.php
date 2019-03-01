<?php
$a=14;
$b=5;

if($a>$b){
	echo "a is greater";
}
else
{
	echo "b is greater";
}
//global variable
$x=5;
function test(){
	echo "<P>inside the function  $x</p>";
}
   test();
   echo " outside the function $x";
   //local variable
   echo "<br>";
   function Hannan(){
   	$n=6;
   	echo "inside the function $n";
   }
   Hannan();
   echo "outside the function $n";
   //global keyword
   echo "<br>";
   $n=4;
   $m=6;
   $s=0;
   function check(){
   	global $n,$m,$s;
   	$s=$n+$m;
}
   check ();
   echo "$s";
   //if statement
   echo "<br>";
   $p="day";
   if ($p<"20")
   	echo "have a good day";
   else 
   	echo "have a good night";
   //if else if statement
   echo "<br>";
   $n="Hour";
   if ($n<"10"){
   	echo "have a good morning";
   }
   elseif ($n<"20"){
   	echo "have a good day";
   }
   else {
   	echo "have good night";
   }

?>