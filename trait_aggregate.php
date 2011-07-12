<?php

trait Hello {

	public function hello(){
		echo "hello\n";
	}
}

trait World {

	public function world(){
		echo "world\n";
	}
}

trait HelloWorld {
	use Hello, World;

	public function helloWorld(){
		$this->hello();
		$this->world();
	}
}

class Test {
	use HelloWorld;
}

$test = new Test();
$test->helloWorld();

$test->hello();
$test->world();
