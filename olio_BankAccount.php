<?php
class BankAccount {
    var $accountNumber;
    var $balance;
    var $dateOpened;
    var $accountType;


    function __construct ($muuttuja1, $muuttuja2, $muuttuja3, $muuttuja4) {
      $this->accountNumber = $muuttuja1;
      $this->balance = $muuttuja2;
      $this->dateOpened = $muuttuja3;
      $this->accountType = $muuttuja4;
    }

    function tilitiedot() {
        echo "Account number: $this->accountNumber <br>";
        echo "Balance: $this->balance $ <br>";
        echo "Date opened: $this->dateOpened <br>";
        echo "Account type: $this->accountType <br>";
        echo "<br>";
    }

}



$joeAcct = new BankAccount ("A7652",500,"5/3/2000","Checking");
$aliceAcct = new BankAccount ("B2311",-50,"1/2/2012","Checking");
$samAcct = new BankAccount ("S2314",7500,"1/2/1994","Savings");

$joeAcct->tilitiedot();
$aliceAcct->tilitiedot();
$samAcct->tilitiedot();

?>
