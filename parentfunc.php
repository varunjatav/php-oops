<?php

class BankAccount
{
	private $balance;

	public function __construct($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}

		return $this;
	}
}



class SavingAccount extends BankAccount
{
	private $interestRate;

	public function __construct($balance,$interestRate)
	{

        parent::__construct($balance);
		$this->interestRate = $interestRate;
	}


    public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	public function addInterest()
	{
		// calculate interest
		$interest = $this->interestRate * $this->getBalance();
		// deposit interest to the balance
		$this->deposit($interest);
	}

    public function getInterest(){
        return $this->interestRate;
    }
}

$savingacc = new SavingAccount(1000, 0.05);
echo $savingacc->getInterest();
echo "<br>";
echo $savingacc->getBalance();
$savingacc->addInterest();
echo "<br>";
echo $savingacc->getBalance();