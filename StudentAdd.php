<?php
class Student {
   static $total_students=0;
   static public function add_student($var=1){
     $total_studets=+$var;
     }


    static function welcome_students($var="Hello") {
      echo "$var students.";
    }
}

echo Student::$total_studets ."<br/>";
echo Student::welcome_students() ."<br/>";

Student::add_student();
echo Student::$total_students ."<br/>";
 ?>
