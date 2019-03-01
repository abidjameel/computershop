<?php
class Tv{
	public $volume=1;
	public $modle="abc";
	function volumeup(){
		$this->volume++;
	}
	function volumedown(){
		$this->volume--;
	}
}
$tvone=new tv();
$tvtwo=new tv();
$tvone->volumeup();
$tvtwo->volumedown();
$tvtwo->volumeup();
echo $tvone->volume;
echo $tvtwo->volume;
echo $tvtwo->volume;
echo $tvone->modle;
echo $tvtwo->modle="xyz";
class bank{
	public $habib="3939";
	public $mcb="9393";
	function acc(){
		 echo $this->habib;
		 echo "<br>";
		 echo $this->mcb;
	}

}
$obj=new bank();
$obj->acc();



?>