<?php

function __autoload($name){

  $target = str_replace("_", "/", $name) . ".php";

  if(is_readable($target)){
    require_once $target;
    return true;
  }else{
    return false;
  }
}


class Test {
  use dir_trait;
}


$test = new Test();
$test->doSomething();
