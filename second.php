<?php

class secondClass extends firstClass{
  public static $staticProperty = " Astatic";


  public static function anotherTest(){
    echo parent::EXAMPLE;
    echo self::$staticProperty;
  }
}
$b = secondClass::anotherTest();
echo $b

 ?>
