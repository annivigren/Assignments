
<html>
<body>

<?php

//Tee kirjautumisjärjestelmä ilman tietokantaa.
//– Sivustolle jolla on vähintään 2 eri sivua.
//– Kysyy tunnusta ja muistaa kirjautumisen ettei kysy
//uudestaan siirryttäessä sivulta toiselle.
//– Ei päästä millekään sivulle ellei ole oikeaa salasanaa.

//aloitetaan istunto

session_start();

//määritetään istuntomuuttujat

$_SESSION["nimi"] = $_POST["nimi"];
$_SESSION["salasana"] = $_POST["salasana"];

if (!empty($_POST['nimi'])) {

echo "Tervetuloa! ".($_session['nimi']);
}
else{

echo "Kirjoita nimi ja salasana";
}


 ?>

 Nimi:
     <br>
       <form action="kirjautuminen_session.php" method="post">
         <input type="string" name="nimi" required/><br>
 Salasana:
         <br>
         <input type="string" name="salasana" required/><br>
           <br>
           <input type="submit" name="Kirjaudu" value="Kirjaudu."/>
       </form>

</body>
</html>
