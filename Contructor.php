<?php
class Student {
  public $opiskeluvuosi;
  static $total_students=0;

  function __construct() {
    $this->opiskeluvuosi = 1;
    self::$total_students++;

  }
}

$opiskelija = new Student();
echo $opiskelija->opiskeluvuosi ."<br/>";
echo Student::$total_studets ."<br/>";

?>
