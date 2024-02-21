<?php

class Car{
	// propertiess | variable
	public $name;
	public $colour = "";

	// methodss (function)

	public function __construct(string $car_name, string $colour = 'Black')
	{
		$this->name = $car_name;
		$this->colour = $colour;
	}

	public function getCarName()
	{
		return $this->name;
	}

	public function getCarColour()
	{
		return $this->colour;
	}

}

// object
$bmw = new Car("BMW Car", "Blue");
/*echo $bmw->name;
echo $bmw->colour;*/
echo $bmw->getCarName();
echo $bmw->getCarColour();