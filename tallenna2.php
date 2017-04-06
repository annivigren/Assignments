<!DOCTYPE html>
<html>
<body>

<form action="tallenna2.php" enctype="multipart/form-data" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<input type="file" name="kuva" /><br>
<input type="string" name="salasana" required/><br>
<input type="submit" name="submit" value="Upload" />
</form>

<?php

/* SIIRRÄ KUVAT */
if ($_POST['salasana'] != "hienokuva")
  {echo "Salasana väärin. Yritä uudelleen";

}
elseif (isset($_POST['submit'])) {
 // process the form data
 $tmp_file = $_FILES['kuva']['tmp_name'];
 $target_file = basename($_FILES['kuva']['name']);
 $upload_dir = "uploads";

 if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
   	echo "File uploaded successfully.";
   	$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "anni-okp");
	$query = "insert into kuvat (nimi, sijainti) values (\"$target_file\", \"$upload_dir\");";
 echo "$query <br>";
	$result = mysqli_query($mysql_yhteys, $query)
        or die("Virhe: " . mysqli_error($mysql_yhteys));

	// mysqli_free_result($result);
	mysqli_close($mysql_yhteys);

 } else {
   echo $_FILES['kuva']['error'];
 }

}


/* NÄYTÄ KUVAT */

// aukaistaan tietokantayhteys
$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "anni-okp");
if (mysqli_connect_errno()) {
 echo "Yhteysvirhe tietokantaan: " . mysqli_connect_error();
}

// määritellään kysely

$query2="select nimi, sijainti from kuvat";

// suoritetaan kysely
$hakutulos=mysqli_query($mysql_yhteys, $query2);

echo "<table border=!>
<tr>
<th>Nimi</th>
<th>Sijainti</th>
</tr>";

// käydään läpi ja tulostetaan kyselyn tulos
while($rivi=mysqli_fetch_array($hakutulos, MYSQLI_ASSOC))
{
$nimi = $rivi["nimi"];
$sijainti = $rivi["sijainti"];
$kuva = "<img src=".$sijainti."/".$nimi." >";

echo "<tr>";
echo "<td>" . $nimi . "</td>";
echo "<td>" . $sijainti . "</td>";
echo "<td>" . $kuva . "</td>";
echo "</tr>";
}
echo "</table>";

// Free result set
mysqli_free_result($hakutulos);
mysqli_close($mysql_yhteys);



?>

</body>
</html>
