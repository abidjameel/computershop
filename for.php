<?php
 for ($x=1; $x<=10; $x+=2)
{
echo "$x.<br>";
}
for($n=1; $n<=5; $n++){
	echo "<br>";
	for ($m=1; $m<=$n; $m++){
		echo "$m";
	}

}
echo "<br>";
echo "<br>";
for ($h=1; $h<=5; $h++)
{
	echo $h."*".$h."=".$h*$h ."<br>";
	
}
echo "<br>";
for ($t=1; $t<=5; $t++){
	echo "<br>";
	for ($v=1; $v<=$t; $v++){
		if($v % 2==1){
			echo "1";
		}
		else{
			echo "0";
		}
	}
}

echo "<br>";
for ($n=1;$n<=10;$n+=3){
	echo "$n <br>";
}
for ($r=1;$r<=5;$r++){
	echo "<br>";
	for ($c=1;$c<=$r;$c++){
		echo "$c";
	}

}
echo "<br>";

for ($h=1;$h<=10;$h++){
	echo "2"."*"."$h"."=".(2*$h)."<br>";
}
for ($r=1;$r<=5;$r++){
	echo "<br>";
	for ($c=1;$c<=$r;$c++){
		if ($c%2==1){
			echo "1";
		}
		else{
			echo "0";
		}
	}
}


?>