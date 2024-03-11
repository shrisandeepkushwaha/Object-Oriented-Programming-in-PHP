<?php
interface CarInterface{
	public function startEngine();
	public function stopEngine();
}

class BMW implements CarInterface{
	public function startEngine(){
		echo "BMW Starts <br/>";
	}
	public function stopEngine(){
		echo "BMW Stop <br/>";
	}
}

class Nissan implements CarInterface{
	public function startEngine(){
		echo "Nissan Starts <br/>";
	}
	public function stopEngine(){
		echo "Nissan Stop <br/>";
	}
}

function driveCar(CarInterface $car){
	$car->startEngine();
	$car->stopEngine();
}


$bmw = new BMW();
$nissan = new Nissan();

driveCar($bmw);
driveCar($nissan);


