<html>
<body>
<?php
$biodata=array(
"Name"=>"Abdul Hannan",
"Cnic"=>"36401-51146065",
"Adress"=>"Bahawalnagar",
"Qualification"=>"Msc",
"Location"=>array(
"country"=>"Pakistan",
"city"=>"Bahawalnagar",
"Likearea"=>"murre",),);
echo '<pre>';
print_R($biodata);
echo '</pre>';
$html="<table border=1>";
$thRow="<tr>";
$tdRow="<tr>";
$Location="";
foreach($biodata as $heading =>$value){
	if (is_array($value)){
		foreach($value as $LocHeading  =>$name){
			$Location.="<span>$LocHeading</span><span>$name</span>";
		}
	}else{
		$thRow.="<th>$heading</th>";
		$tdRow.="<td>$value</td>";
	}
}
$thRow.="</tr>";
$tdRow.="</td>";
$html.=$thRow;
$html.=$tdRow;
$html.="</table>";

?>
</body>
</html>
<?php echo $html;?>