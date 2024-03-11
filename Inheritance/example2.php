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

	public function details()
	{
		echo $this->name. "<br/>";
		echo $this->model. "<br/>";
		echo $this->colour. "<br/>";
	}
}

class Tesla extends Car{

}

/*$car = new Car("BMW", "BMW-X", "Red");
echo $car->details();*/

$tesla = new Tesla("BMW", "BMW-X", "Blue");
echo $tesla->details();