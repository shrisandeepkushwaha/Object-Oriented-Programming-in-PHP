<?php
class Car{
	// properties
	public $name = "Car Name";
	protected $model = "Car-X";
	private $colour = "Red";

	public function details()
	{
		echo $this->name. "<br/>";
		echo $this->model. "<br/>";
		echo $this->colour. "<br/>";
	}
}

class Tesla extends Car{

}

$tesla = new Tesla();
echo $tesla->details();