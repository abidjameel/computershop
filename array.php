<?php
$example=array ('Hannan','aliraza','Hassan','nadir');
foreach ($example as $key => $name) {
	 //print_r($name);
	 var_dump($name);
}
echo "<br>";
$value=array("39","39","49","30");
// echo "[0]=$value";
// echo "[1]=$value";
// echo "[2]=$value";
// echo "[3]=$value";


echo $value[0].'<br>';
echo $value[1].'<br>';
echo $value[2].'<br>';
echo $value[3].'<br>'; 
//loop
$value=array(4,3,9,);
$s=array_sum($value);
              
print_r($s);
echo "<br>";
for ($x=1;$x<=10;$x+=2){
	$s=0;
	$s=$s+$x;
	echo "$s";
}
echo "<br>";
$pslteam=array('karachi king','queeta grajiater','multansultan','islamabadunited');
foreach ($pslteam as  $pakistan) {
	//echo "$pakistan<br>";
	//print_r($pakistan);
	var_dump($pakistan);
}
echo "<br>";
$biodata=array("Name"=>"abdul Hannn","cnic"=>"3640151146065","class"=>"msc",

	                "location"=>array("country"=>"pakistan","city"=> "Bahawalnagar",),);




                  echo "<br>";
                  echo '<pre>';
               print_r($biodata);
               echo '</pre>';
           
               echo "<br>";
               $fees=array(
               	"Hannan"=>array("istsmester"=>"55000","2ndsmester"=>"54000","3rdsmster"=>"54500","4thsmster"=>"55000",
                 "Hassan"=>array("php"=>"4000","java"=>"7000","networking"=>"3000",".net"=>"6000"
                 ),),);
               echo '<pre>';
                print_r($fees);
                echo '</pre>';
                echo "<br>";
                function sum($x,$y,$s=0){
                	$s=$x+$y;
                	return "$s";
                }
                echo sum(2,6);
                echo "<br>";
               

                $data=array(
                	"computer"=>array("hp"=>"49999","Dell"=>"8888","samsung"=>"99333","lenevo"=>"39999",
                	"tv"=>array("Lg"=>"10000","Noble"=>"40000","chinatv"=>"50000","Hair"=>"50000"), ),);
                echo '<pre>';
                print_r($data);


?>