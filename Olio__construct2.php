<?php
class Henkilö {
    var $etunimi;
    var $sukunimi;
    var $ika;

    function __construct ($muuttuja1, $muuttuja2, $muuttuja3) {
      $this->etunimi = $muuttuja1;
      $this->sukunimi = $muuttuja2;
      $this->ika = $muuttuja3;
    }

    function puhu() {
        echo "Hei, nimeni on $this->sukunimi ! <br>";
    }

}



$aapeli = new Henkilö ("Aapeli","Apina",28);
$maija = new Henkilö ("Maija","Mehiläinen",88);

$aapeli->puhu();
$maija->puhu();

?>
