<?php
abstract class Father{
	public function dip(){
		echo "normal method";
	}
	abstract function abstctmethod();
}
class son extends Father{
	public function abstctmethod(){
		echo "abstractrs method <br> ";
	}

}
function getdis(){
	$this->dip();
}
$obj =new son();
$obj->abstctmethod();
$obj->dip();
?>