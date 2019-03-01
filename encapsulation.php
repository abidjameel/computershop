<?php
class abc
{
	protected $modle="LG";
	protected $volum="1";
	function volumup()
	{
		$this->volum++;
	}
	function volumdown()
	{
		$this->volum--;
	}
	function getmodl(){
		return $this->modle;
		echo $this->modle;
	}
	function __construct($m,$v)
	{
		echo $this->modle=$m;
		echo $this->volum=$v;
	}
}
class test extends abc
{
	function acces(){
		
	 return $this->modle;
	 
	 

	}
}
class plazma extends abc{
	function pl(){
		echo $this->modle;
		echo $this->volum;
	}
}
class timer extends abc{
	public $timer = ture;
}
$obj=new test('nbl',5);
$obj2=new test('Lg',4);
echo $obj->getmodl();
$obj->getmodl();
echo $obj->acces();
$obj=new plazma('sng',9);
$timer=new timer ('viber',49);
echo $tim->modle;
//$obj->volumup();
//$obj->volumdown();
//$obj->volumdown();
//echo $obj->volum;
//echo $obj->volum;
//echo $obj->volum;
class education{
	protected $eng="49";
	protected $techer="iltaf";
	function abc(){
		$this->eng;
	}
	function dcb(){
		$this->teacher;
	}
	function __construct($math,$asif){
		echo $this->eng=$math;
		echo $this->teacher=$asif;

	}
}
class acdmic extends education{
	public function getacces(){
		return $this->eng;

	}

}
$obj=new acdmic('939','nadia');
echo $obj->getacces();
 $obj->dcb();
 echo $obj->teacher;

?>