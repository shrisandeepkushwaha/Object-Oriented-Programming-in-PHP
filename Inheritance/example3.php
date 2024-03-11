<?php
class Car{
	// properties
	public $name = "Car Name";
	protected $model = "Car-X";
	private $colour = "Red";

	public function __construct($name, $model, $colour)
	{
		$this->name = $name;
		$this->model = $model;
		$this->colour = $colour;
	}

	public function enginePoweredBy(){
		echo "Diesel";
	}

	public function details()
	{
		echo $this->name. "<br/>";
		echo $this->model. "<br/>";
		echo $this->colour. "<br/>";
	}
}

class Tesla extends Car{

	// overrides
	public function enginePoweredBy(){
		echo "Electric";
	}
}

$tesla = new Tesla("BMW", "BMW-X", "Yellow");
echo $tesla->enginePoweredBy();
echo $tesla->details();

