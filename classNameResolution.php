<?php

namespace App\Model;

class User
{
}

print_r(User::class);

// Since PHP 8 : class resolution an instanced object

$user = new User;

print_r($user::class);

// Handler example to not use reflection class

class Handler
{
    public function handle(mixed $model)
    {
        // Code
        print_r($model::class);
    }
}

$handler = new Handler;
$handler->handle(new User);
