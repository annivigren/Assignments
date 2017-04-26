<?php
class BankAccount {
    private $accountNumber;
    private $totalbalance;
    public $dateOpened;
    public $accountType;


    public function deposit($amount) {
      return $this->balance += $amount;
    }

    public function withdraw($amount) {
      if($amount > $this->balance)
			die('Not enough money to withdraw');

         $this->balance -= $amount;
    }


	   public function getBalance(){
		     return $this->balance;
	  }


      public function getAccountNumber (){
        return $this ->accountNumber;
      }


      public function setAccountNumber ($accountNumber){
         $this ->accountNumber = $accountNumber;
      }
      public function setBalance ($Balance){
         $this ->Balance = $Balance;
      }

    function __construct ($accountNumber, $intialAmount, $dateOpened, $accountType) {
      $this->accountNumber = $accountNumber;
      $this->balance = $intialAmount;
      $this->dateOpened = $dateOpened;
      $this->accountType = $accountType;
    }
    function close() {
        unset($this->accountNumber);
        unset($this->balance);
        unset($this->dateOpened);
        unset($this->accountType);

      }
    function displayAccount() {
       $output = '<div class="account">';

       $output .= $this->accountNumber;
       $output .= '<br/>' . $this->balance;
       $output .= '<br/>' . $this->dateOpened;
       $output .= '<br/>' . $this->accountType;

       $output .= '</div>';

       return $output;
     }
}

$account[] = new BankAccount ("A7652",500,"5/3/2000","Checking");
$account[] = new BankAccount ("B2311",-50,"1/2/2012","Checking");
$account[] = new BankAccount ("S2314",7500,"1/2/1994","Savings");

foreach($account as $tili) {
	echo $tili->displayAccount();
  echo "<br>";
}

// create a new bank account object
$account = new BankAccount('0',0,"27/4/2017","Savings");

$account->setAccountNumber('1243845355');
echo sprintf("Bank account # %s<br/>",$account->getAccountNumber());

$account->setBalance(0);
echo sprintf("Total Balance # %0.2f<br/>",$account->getBalance());

echo sprintf("Deposit $2000 to the bank account.<br/>");
$account->deposit(2000);
echo sprintf("Total balance %0.2f<br/>", $account->getBalance());

echo sprintf("Withdraw $100 from the bank account.<br/>");
$account->withdraw(100);
echo sprintf("Total balance %0.2f<br/>", $account->getBalance());

echo sprintf("Withdraw $2000 from the bank account.<br/>");
$account->withdraw(2000);

echo $account->accountNumber();

$account->close();


?>
