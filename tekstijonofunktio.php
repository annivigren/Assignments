<?php

function muotoiltu ($kokonimi)
{

//explode -- Split a string by string
$nimet = explode (" ", $kokonimi);
$kokonimi="";

//Make a string's first character uppercase
foreach ($nimet as $nimi) {
   $kokonimi .=mb_convert_case ($nimi, MB_CASE_TITLE, "UTF-8")
   . " ";
}


//trim -- Strip whitespace (or other character) from
//the beginning and ed of a string
$kokonimi = trim ($kokonimi);
return $kokonimi;
}

echo muotoiltu("   masa man   ");
?>
