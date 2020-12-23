<?php

$array = [
	'clement',
	'tomy',
	'jacques',
];

// ---

class Handler
{
	public function handle(
		$num1, 
		$num2,
	) {

	}
}

$handler = new Handler;
$handler->handle(1, 2);

// ---

function greet($name,) {
	echo $name;
}

$name = "Clément";
$age = 35;

$greet = function () use ($name, $age, ) {
	print_r($name);
	print_r($age);
};

$greet();