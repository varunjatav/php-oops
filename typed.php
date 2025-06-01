<?php 
declare(strict_types = 1);

class BankAccount {
    public float $balance = 0;
    public function __construct(float $balance){
        $this->balance = $balance;
    }
}

$account = new BankAccount(10.111);


var_dump($account->balance);
echo "<br>";

class Person{
    public string $name;
    public function set_name(string $name){
        $this->name = $name;
    }
 
}

$person = new Person();
$person->set_name("rahul");

var_dump($person->name);