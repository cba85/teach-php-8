<?php

// BEFORE PHP 8
/*
class User
{
    public $email;
    public $name;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
*/

// NOW IN PHP 8

class Address
{
    public function __construct(string $address)
    {

    }
}

class User
{
    //public $name; // Error : Cannot redeclare User::$name
    //public $verified = false; // // Error : Cannot redeclare User::$verified

    //public $address; // Remove public befor $address in constructor

    public function __construct(
        public $name,
        public $email,
        public $address,
        public $verified = false,
        )
    {
        // Code...
        $this->$address = new Address($this->address);
    }
}

$user = new User('clément', 'clem@ent.com', 'Place de la République');

print_r($user);
