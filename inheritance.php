<?php
class BankAccount {
    private $amount;

    public function getAmount(){
        return $this->amount;
    }

    public function deposit($money){
        $this->amount += $money;
    }
}

class SavingsAccount extends BankAccount{
    private $interest;

    public function setInterestRate($interest){
        $this->interest = $interest;
    }

    public function addInterest(){
        $interest = $this->interest * $this->getAmount();

        $this->deposit( $interest);
    }
}


$account = new SavingsAccount();

echo $account -> deposit(10000);
echo $account->getAmount();
echo "<br>";
$account->setInterestRate(0.7);
$account->addInterest();
echo $account->getAmount();