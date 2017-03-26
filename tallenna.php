<!DOCTYPE html>
  <html>
    <head>
    <title> Kuvien tallennus </title>
    </head>
    <body>
    <h1>Tallennuslomake</h1>
    <p>
    <form action="tallenna.php" enctype="multipart/form-data"

    method="POST">

    <input type="hidden" name="MAX_FILE_SIZE"

    value="1000000" />

    <input type="file" name="kuva" />
    <br>
    <br>
    Kuvan nimi:<input type="string" name="nimi" />
    <br>
    <br>
    <input type="submit" name="submit" value="Upload" />

    </form>

        <?php
        // process the form data

        $tmp_file = $_FILES['kuva']['tmp_name'];

        $target_file = basename($_FILES['kuva']['name']);

        $upload_dir = "uploads";

        //Määritellään tietokantaan tallennettavat tiedot parametreihin

          $KuvanNimi = ($_POST['nimi']);
          $KuvatiedostonNimi = ($_FILES["kuva"]["name"]);
          $Polku = "kuva";
          $LisaysPvm = date("Y/m/d");
          $Tyyppi = pathinfo($target_file,PATHINFO_EXTENSION);
          $Koko = ($_FILES["kuva"]["size"]);

        if(isset($_POST['submit'])) {
          $servername = "localhost";
          $username = "okp";
          $password = "oli9tRR3";
          $dbname = "anni-okp";

      try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO Kuvatiedot (KuvanNimi, KuvatiedostonNimi, Polku, LisaysPvm,Tyyppi, Koko)
      VALUES ('$KuvanNimi', '$KuvatiedostonNimi', '$Polku', '$LisaysPvm','$Tyyppi', '$Koko')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Tietue tallennettu onnistuneesti";
      }
      catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();



        // move_uploaded_file will return false if $tmp_file is

        // not a valid upload file or if it cannot be moved for

        // any other reason

        if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){

        echo "File uploaded successfully.";
        //ao. rivi lisätty
        echo $_FILES['kuva']['name'];

        } else {

        echo $_FILES['kuva']['error'];

        }
        }


    }

$conn = null;
?>
