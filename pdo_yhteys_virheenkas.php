<?php
//TÄMÄ ON KESKEN!
// muodostetaan yhteys tietokantaan (virheenkäsittelyllä)
try {
$yhteys = new PDO ("mysql:host=localhost;dbname=anni-okp", "okp", "oli9tRR3");
} catch ();

//valmistetaan kysely
$kysely = $yhteys ->prepare ("select reitinnimi, kallio, greidi from kiipeilyreitit order by greidi desc");

//suoritetaan kysely)
$kysely->execute();

//näytetään kyselyn tulokset taulukossa
echo "<table border = \"1\" cellpadding \"1\">";

//käsitellään tulostaulun rivit yksi kerrallaan
while ($rivi=$kysely->fetch()) {
  echo "<tr>";
  echo "<td>" . htmlspecialchars ($rivi["reitinnimi"]) . "</td>";
  echo "<td>" . htmlspecialchars ($rivi["greidi"]) . "</td>";
  echo "</tr>";

}

echo "</table>";

?>
