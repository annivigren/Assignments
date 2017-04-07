<?php
class SimpleClass
{
    //property declaration
    public $var = 'oletusarvo muuttujalle';

    //method declaration
    public function displayVar () {
        echo $this->var;
    }
}
//Luodaan olio
$olio = new SimpleClass();
$olio->displayVar();
 ?>
