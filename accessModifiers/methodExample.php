<?php
class Car{
	// methods
	public function publicMethod()
	{
		echo "This is public method";
	}

	protected function protectedMethod()
	{
		echo "This is protected method";
	}

	public function privateMethod()
	{
		echo "This is private method";
	}

	public function callPrivateMethod(){
		$this->privateMethod();
	}
}

//object
$bmw = new Car();
$bmw->callPrivateMethod();
