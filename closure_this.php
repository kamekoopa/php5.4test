<?php

class Hoge{

  private $hoge = "hogehoge";

  public function doSomething(){
    call_user_func($this->getCallback());
  }

  private function getCallback(){
    return function(){
      echo $this->hoge;
    };
  }
}

$hoge = new Hoge();
$hoge->doSomething();


