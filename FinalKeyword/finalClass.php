<?php
class Car{
	// properties
	public $name;
	protected $model;
	private $colour;

	public function __construct($name, $model, $colour)
	{
		$this->name = $name;
		$this->model = $model;
		$this->colour = $colour;
	}

	final function noOfWheels()
	{
		echo 4;
	}
	public function enginePoweredBy(){
		echo "Diesel";
	}

	public function details()
	{
		echo $this->name. "<br/>";
		echo $this->model. "<br/>";
		echo $this->colour. "<br/>";
		echo $this->ownerName. "<br/>";
	}
}

final class BMW{

}

class Tesla extends BMW{
	// overrides
	public function enginePoweredBy(){
		echo "Electric";
	}
}

$tesla = new Tesla("BMW", "BMW-X", "Yellow", "owner- ABC");
echo $tesla->enginePoweredBy();

