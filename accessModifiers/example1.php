<?php
class Car{
	// properties
	public $name = "Car Name";
	protected $model = "Car-X";
	private $colour = "Red";
}

//object
$bmw = new Car();
echo $bmw->name;
echo $bmw->model;
echo $bmw->colour;
