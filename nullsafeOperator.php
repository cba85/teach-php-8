<?php

$name = null;

//echo 'Hello ' . ($name ? $name : 'guest');
echo 'Hello ' . ($name ?? 'guest');

class User
{
    public $name = "Clément";

    public function address() {
        return null;
    }
}

class Auth
{
    public function user()
    {
        //return new User;
        return null;
    }
}

$auth = new Auth;
//echo 'Hello ' . $auth->user()->name;
// Warning: Attempt to read property "name" on null

//echo 'Hello ' . ($auth->user() ? $auth->user()->name : 'guest');

//echo 'Hello ' . optional($auth->user())->name; // Laravel style : create a new dummy class

echo $auth->user()?->address()?->name;
