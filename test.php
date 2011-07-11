<?php

trait TraitTest {
  public function sayHello(){
    echo "Hello!";
  }
}



class Test {
  use TraitTest;



}


$test = new Test();

$test->sayHello();
