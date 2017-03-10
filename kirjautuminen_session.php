
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
  ?>

<?php
//Kun nimi kenttä on tyhjä pyydetään kirjoittamaan nimi ja salasana
if (empty($_POST['nimi']))
 {echo "Kirjoita nimi ja oikea salasana";
?>
<br>
 <br>
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
<?php
//Jos salasanaa ei ole kirjoitettu oiken, pyydetään täyttämään tiedot oikein
elseif ($_POST['salasana'] != "123")
  {echo "Salasana väärin. Yritä uudelleen";
?>
    <br>
     <br>
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

<?php
//Kun tiedot on kirjoitettu oikein, voidaan niitä tarkastella toisella sivulla.
} else{
  echo "Tervetuloa ".($_POST['nimi']." !");
  echo "<br />";
  echo "<br />";
  echo "Tarkastele tietojasi";


}

  ?>
</body>
</html>
