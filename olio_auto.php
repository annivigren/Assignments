<?php

class Auto {

public $pyöriä = 4;

public $ovia = 4;

function pyöriäovia() {

return $this->pyöriä + $this->ovia;



}

}

class PieniAuto extends Auto {

public $ovia= 2;

}

$car1 = new Auto();

$car2 = new PieniAuto();

echo $car1->pyöriä ."<br />";

echo $car1->ovia ."<br />";

echo $car1->pyöriäovia() ."<br />";

echo "<br />";

echo $car2->pyöriä ."<br />";

echo $car2->ovia ."<br />";

echo $car2->pyöriäovia() ."<br />";

echo "<br />";



echo "Auto parent: ".get_parent_class('Auto') ."<br />";

echo "PieniAuto parent: ".get_parent_class('PieniAuto')."<br />";

echo is_subclass_of('Auto', 'Auto') ? 'true' : 'false';

echo "<br />";

echo is_subclass_of('PieniAuto', 'Auto') ? 'true' : 'false';

echo "<br />";

echo is_subclass_of('Auto', 'PieniAuto') ? 'true' : 'false';

echo "<br />";

echo is_subclass_of($car2, 'Auto') ? 'true' : 'false';

?>
