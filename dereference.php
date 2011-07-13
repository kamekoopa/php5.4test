<?php


function getList(){
  return array(1,2,3,4,5);
}

function getMap(){
  return array(
    "key1" => "value1",
    "key2" => "value2",
  );
}


echo getList()[0] . "\n";
echo getList()[1] . "\n";

echo getMap()["key1"] . "\n";
echo getMap()["key2"] . "\n";
