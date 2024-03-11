<?php
class Car{
	// properties
	public $name = 'Car Name';
	protected $model = 'Car-X'; //
	private $colour = 'Red'; // api discount

	public function __construct($name, $model,$colour)
	{
		$this->name = $name;
		$this->model = $model;
		$this->colour = $colour;
	}
	public function enginePoweredBy()
	{
		echo 'Disel';
	}
	public function detail()
	{
		echo $this->name. '<br/>';
		echo $this->model. '<br/>';
		echo $this->colour. '<br/>';
	}

}

class Tesla extends Car{
	public function enginePoweredBy()
	{
		echo 'Electric';
	}
}

$tesla = new Tesla('BMW','BMW-X','Red');
$tesla->enginePoweredBy();