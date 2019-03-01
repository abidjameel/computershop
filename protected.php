<?php
class abc{
	protected $name="Hannan";
	protected function Demo()
	{
		echo "protected visibility";
	}
}
	class test extends abc{
		public function xyz()
		{
		echo  $this->name;
		echo "<br>";
		echo $this->Demo();

		

		
		}
	}
	




	$obj=new test;
	$obj->xyz();
	//echo $obj->$name;

?>