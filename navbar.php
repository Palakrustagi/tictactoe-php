<?php
class book{
	public $name;
	
	
	function books($name)
	{
		$this->ame =$name;
	}
	function getname()
	{
		return $this->name;
	}
}
$first = new book();

$first -> books("love"); 
echo $first -> getname();
?>    