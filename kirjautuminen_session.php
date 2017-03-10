
<html>
<body>
  Arvaa numero 1-10 välillä:
      <br>
        <form action="kirjautuminen_session.php" method="post">
            <input type="string" name="tunnus" required/><br>
            <br>
            <input type="submit" name="Kirjaudu" value="Tarkista osuitko oikeaan."/>
        </form>

<?php

//Tee kirjautumisjärjestelmä ilman tietokantaa.
//– Sivustolle jolla on vähintään 2 eri sivua.
//– Kysyy tunnusta ja muistaa kirjautumisen ettei kysy
//uudestaan siirryttäessä sivulta toiselle.
//– Ei päästä millekään sivulle ellei ole oikeaa salasanaa.

//aloitetaan istunto

session_start();

//määritetään istuntomuuttujat

$_SESSION["nimi"] = "Markus";

$_SESSION["auto"] = "Jopo";



 ?>
</body>
</html>
