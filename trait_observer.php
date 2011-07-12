<?php

interface IListener {
  public function notify();
}

class HogeListener implements IListener{
  public function notify(){
    echo "HogeHoge!!\n";
  }
}

class HomuListener implements IListener{
  public function notify(){
    echo "HomuHomu!!\n";
  }
}


trait Notifier {

  protected $listeners = array();

  protected function addListener(IListener $listener){
    $this->listeners[] = $listener;
    return $this;
  }

  protected function clearListener(){
    $this->listeners = array();
    return $this;
  }

  protected function notify(){
    foreach($this->listeners as $listener){
      $listener->notify();
    }
  }
}


class Something {
  use Notifier;

  public function __construct(){
    $this
      ->addListener(new HogeListener())
      ->addListener(new HomuListener())
    ;
  }

  public function doSomething(){
    echo "do!!\n";
    $this->notify();
  }

  public function clear(){
    $this->clearListener();
  }
}


$something = new Something();
$something->doSomething();

$something->clear();

$something->doSomething();

