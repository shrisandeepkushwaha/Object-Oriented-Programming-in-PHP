<?php

abstract class Car{
	public function noOfWheels()
	{
		echo 'Wheels : 4';
	}

	abstract public function price($price);
}

class BMW extends Car{
	public function price($price)
	{
		echo 'Price : '. $price;
	}
}

$bmw = new BMW();
$bmw->price(100);