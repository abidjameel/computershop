<?php
function writemsg(){
	echo "i love pakistan <br>";
}
writemsg();
writemsg();
writemsg();
//global variable
$n=4;
function test(){
	echo "isdie function $n<br>";
}
test();
test();
echo "ouside the functin $n";
//local variable
echo "<br>";
function check(){
	$x=37;
	echo "isdie function $x<br>";
}
check();
check();
echo "ouside the functin $x";
//function paremetter
echo "<br>";
function display($name1,$name2){
	echo "$name1 <br> $name2";
}
display("Pakistan","saudiarbia");
//psl team single paremetter
echo "<br>";
function pslpakistan($psl){
	echo "$psl";
}
pslpakistan("psl team of pakistan<br>");
pslpakistan("1=peshawar zalmi<br>");
pslpakistan("2=karachi king<br>");
pslpakistan("3=multan sultan<br>");
pslpakistan("4=islamabad united<br>");
pslpakistan("5=Lahore Qalndar<br>");
pslpakistan("6=Queeta grejeater<br>");

//double parametter
function digree($digree,$year){
	echo "$digree --- $year <br>";

}
digree("Digree","Year");
digree("Matric","2012" );
digree("D.com","2014");
digree("Bsc","2016");
digree("Msc","2018");
echo "<br>";
//default argument value
function sethight($hight=53){
	echo "set hight: $hight<br>";
}
sethight(393);
sethight();
sethight(45);
sethight(234);
sethight(788);
sethight(564);
//php function in for loop
echo "<br>";
function setvalue($x,$n){
	
	for ($z=$x;$z<=$n;$z++){
		$s=$z+2;

	echo "$s";
}
}
setvalue(1,10);echo "<br>";
setvalue(10,20);
//return value in function
echo "<br>";
function add($x,$v){
	$n=$x+$v;
	return "$n";
} 
echo add (3,4)+49;
function divide($k,$j){
	$result=$k / $j;
	return "$result";
}
$sum=divide(add(3,7),add(8,8));
echo "$sum";
echo "<br";
function sum($x,$m){
	
	$s=$x+$m;
	return "$s";
}
echo sum(3,3);
function parametter(){
	echo "Hanan";
}
parametter();
function summ($x=2,$y=3,$s=0){
	$s=$x+$y;
	echo "$s";


}
summ(2,3);
?> 





