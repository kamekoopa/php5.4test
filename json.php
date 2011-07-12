<?php

class Test implements JsonSerializable{

  public function jsonSerialize(){
    return array(
      "id"   => 1,
      "name" => "ぬるぽ",
    );
  }
}


echo json_encode(new Test()) . "\n";
