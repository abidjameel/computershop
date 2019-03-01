<?php
class abc {
	private $name="private visibility";
	private function Demo(){
		echo "private function";
	}

	public function xyz(){
	echo 	$this->name;
	echo "<br>";
	echo $this ->Demo();
		}
	}

$obj=new abc();
$obj->xyz();
?>