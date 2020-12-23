<?php

class Foo {}

class Bar {}

class Handler
{
	public function handle(Foo|Bar $object) {
		print_r($object);
	}
}

$handler = new Handler;
$handler->handle(new Bar);

// ---


class UserController 
{
	public function show(User|Admin $user) {
		print_r($user);
	}
}

class User 
{

}

class Admin
{

}

$user = new User;
$admin = new Admin;
$controller = new UserController;

$controller->show($user);
$controller->show($admin);

// ---

function greet(string|null $name) {
	echo $name;
}

greet('Clément');
greet(null);

// ---

class Manager
{
	public function manage(): int|string
	{
		return "Clément";
	}
}

$manager = new Manager;
$manager->manage();