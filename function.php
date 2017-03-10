<?php
function increment ($var = 0 ){
$var++;
return $var;
}

$a = 2;
$a = increment (4);

echo "a: ".$a . "<br />";
?>
