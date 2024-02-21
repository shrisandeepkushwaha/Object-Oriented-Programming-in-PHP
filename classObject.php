<?php

class Car{
	// propertiess | variable
	public $name = "Car Name";

	// methodss (function)

	public function getCarName()
	{
		//return "Car name from function";
		return $this->name.' Car';
	}

	public function setCarName(string $car_name)
	{
		return $this->name = $car_name;
	}
}

// object
$bmw = new Car();
$bmw->name = "BMW Car";
// echo $bmw->name;
// echo $bmw->getCarName();

// 2nd object
$nissan = new Car();
$nissan->setCarName('Nissan Car');
echo $nissan->getCarName();