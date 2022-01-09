<?php

class A{

	public function __construct(){

		echo "Object of Class A has been created";

	}

	public function slide(){

		echo "This is the Slide function";

	}

	public function __destruct(){

		echo "The object has been destructed";

	}
}


$myClassA = new A();

$myClassA->slide();
