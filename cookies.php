<?php
//Luo evästeen. jonka arvo on Juho
setcookie("nimi","Juho");
//Tämä eväste on voimassa seuraavat 2 minuuttia
setcookie ("auto","Honda", time() + 60 * 2);

 ?>
