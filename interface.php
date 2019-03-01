<?php
interface test{
	public function abc();
	public function xyz();
}
class text implements test{
	public function abc(){
		echo "abc function <br>";
	}
	public function xyz(){
		echo "xyz function";
	}
}
$obj=new text();
$obj->abc();
$obj->xyz();
?>