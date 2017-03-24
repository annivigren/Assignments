<!DOCTYPE html>
<html><head>
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

<input type="submit" name="submit" value="Upload" />
</form>

<?php
if(isset($_POST['submit'])) {

// process the form data

$tmp_file = $_FILES['kuva']['tmp_name'];

$target_file = basename($_FILES['kuva']['name']);

$upload_dir = "uploads";

// move_uploaded_file will return false if $tmp_file is

// not a valid upload file or if it cannot be moved for

// any other reason

if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){

echo "File uploaded successfully.";

} else {

echo $_FILES['kuva']['error'];

}
}
?>
