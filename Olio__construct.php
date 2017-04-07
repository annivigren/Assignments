<?php
class Henkilö {
    var $nimi;

    function __construct ($nimi) {
      $this->nimi = $nimi;
    }

    function puhu() {
        echo "Hei, nimeni on $this->nimi ! <br>";
    }

}



$aapeli = new Henkilö ("Aapeli");
$maija = new Henkilö ("Maija");

$aapeli->puhu();
$maija->puhu();

?>
