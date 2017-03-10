
<?php
//Tee kirjautumisjärjestelmä ilman tietokantaa.
//– Sivustolle jolla on vähintään 2 eri sivua.
//– Kysyy tunnusta ja muistaa kirjautumisen ettei kysy
//uudestaan siirryttäessä sivulta toiselle.
//– Ei päästä millekään sivulle ellei ole oikeaa salasanaa.





//aloitetaan istunto
session_start();

//luetaan istuntomuuttujat
$nimi = $_SESSION["nimi"];

$salasana = $_SESSION["salasana"];

//tulostetaan tiedot

echo "Nimi: ".$nimi;
echo "<br />";
echo "Salasana: ".$salasana;


?>
