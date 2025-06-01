<?php 

class User {
    public readonly string $username;

    public function __construct(string $username){
        $this->username = $username;
    }
}

$user = new User("Varun");


echo $user->username;

echo "<br>";

class User2 {
    public readonly string $username;

    public function set_name(string $username){
        $this->username = $username;
    }
}

$user = new User2();

$user -> set_name("Rahul");
echo $user->username;


