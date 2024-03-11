<?php
class Car{
	const NO_OF_WHEELS = "NO OF WHEELS IN A CAR IS 4"; 
	const NO_OF_WHEELs = 4;

	public function getNoOfWheels()
	{
		echo self::NO_OF_WHEELS;
	}
}

/*$wheels = Car::NO_OF_WHEELS;

echo $wheels;*/

$car = new Car();
$car->getNoOfWheels();