<?php
class abc{
	public $name="public visibility";
	public function Demo(){
		echo "public function";
	}
}
$obj=new abc();
$obj->Demo();
echo "<br>";
echo $obj->name;
?>