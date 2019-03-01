<?php
//typehinting
interface test{
	public function dosomething();

	
}
class ABC implements test{
	
	public function dosomething(){
		echo "Do some thing ABC CLASS ";
	}
}
class xyz implements test{
	public function dosomething(){
		echo "dosomething xyz class";
	}
	public function dosomethingelse(){
		echo "dosomethingelse";

	}
}
function test( test $abd){
	$abd->dosomething();
}
$abd=new xyz();
test($abd);
?>