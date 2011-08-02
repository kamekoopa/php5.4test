<?php

interface Runnable{
  public function run();
}

trait RunByLeg{
  public function run(){
    echo "足で走る\n";
  }
}

trait RunByWheel{
  public function run(){
    echo "車輪で走る\n";
  }
}

trait RunByHorse{
  public function run(){
    echo "馬で走る\n";
  }
}


class Human implements Runnable {
  use RunByLeg;
}

class Dog implements Runnable {
  use RunByLeg;
}

class Car implements Runnable {
  use RunByWheel;
}

class Knight implements Runnable{
  use RunByHorse;
}

$human = new Human();
if ($human instanceof Runnable){
  echo "人間は走れます\n";
  $human->run();
}

$dog = new Dog();
if($dog instanceof Runnable){
  echo "犬は走れます\n";
  $dog->run();
}


$car = new Car();
if($car instanceof Runnable){
  echo "車は走れます\n";
  $car->run();
}

$knight = new Knight();
if($knight instanceof Runnable){
  echo "騎士は走れます\n";
  $knight->run();
}
