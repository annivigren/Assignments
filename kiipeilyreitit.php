<!DOCTYPE html>
<html><head>
 <title> Kiipeilyreitit </title>
</head>
<body>
 <h1>Kiipeilyreitit - tikkilista</h1>
<p>
<?php
// aukaistaan tietokantayhteys
$mysql_yhteys =
mysqli_connect("", "okp", "oli9tRR3", "anni-okp");
// tarkista virheet
if (mysqli_connect_errno()) {
 echo "Yhteysvirhe tietokantaan: " . mysqli_connect_error();
}

$sqlkom="select reitinnimi, kallio, greidi from kiipeilyreitit order by greidi desc";
$hakutulos=mysqli_query($mysql_yhteys, $sqlkom);

      echo "<table border=!>
      <tr>
      <th>Reitin nimi</th>
      <th>Kallio</th>
      <th>Greidi</th>
      </tr>";

while($rivi=mysqli_fetch_array($hakutulos))
{
$a = $rivi["reitinnimi"];
$l = $rivi["kallio"];
$m = $rivi["greidi"];
echo "<tr>";
echo "<td>" . $a . "</td>";
echo "<td>" . $l . "</td>";
echo "<td>" . $m . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_query($mysql_yhteys, $sqlkom)
or die("Virhe: " . mysqli_error($mysql_yhteys));
mysqli_close($mysql_yhteys);
?>
</p>
</body>
</html>
