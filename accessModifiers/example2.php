<?php
class Car{
	// properties
	public $name = "Car Name";
	protected $model = "Car-X";
	private $colour = "Red";

	public function details()
	{
		echo $this->name;
		echo $this->model;
		echo $this->colour;
	}
}

//object
$bmw = new Car();
$bmw->details();
