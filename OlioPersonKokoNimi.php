<?php

class Person {
      var $etunimi;
      var $sukunimi;

      function koko_nimi () {
            echo $this->etunimi ." ". $this->sukunimi;

      }
}
$person = new Person();
$person->etunimi ='Liisa';
$person->sukunimi = 'Nurminen';

$person2 =new Person();
$person2->etunimi = 'Eino';
$person2->sukunimi = 'Merisaari';

echo $person->koko_nimi() ."<br />";
echo $person2->koko_nimi() ."<br />";

 ?>
