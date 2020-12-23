<?php

// Before PHP 8

$driver = "mysql";
$resolved = null;

switch ($driver) {
    case 'mysql':
        $resolved = 'Mysql PDO Driver';
        break;
    case 'pgsql':
        $resolved = 'Postgre SQL Driver';
        break;
}

print_r($resolved);

// NOW IN PHP 8

$resolved = match($driver) {
    'mysql' => 'Mysql PDO Driver',
    'pgsql' => 'Postgre SQL Driver'
};

print_r($resolved);

// ---

class Factory
{
    public function create($driver) {
        return match($driver) {
            'mysql' => 'Mysql PDO Driver',
            'pgsql' => 'Postgre SQL Driver'
        };
    }
}

$factory = new Factory;
print_r($factory->create('mysql'));

print_r($resolved);

// ---

switch (1) {
    case '1':
        // Check the type here using an if
        print_r('ok');
        break;
}

print_r(1 == '1');
print_r(1 === '1');

$result = match(1) {
    '1' => "ok",
    default => "ko"
};

print_r($result);
// Without the default case in match: Uncaught UnhandledMatchError: Unhandled match value of type int

// ---

$value = 0;
$type = null;

/*
switch ($value) {
    case 0:
        $type = 'zero';
        break;

    case 1:
    case 3:
    case 5:
    case 7:
    case 9:
        $type = 'odd';
        break;

    case 2:
    case 4:
    case 6:
    case 8:
        $type = 'even';
        break;
}
*/

$type = match($value) {
    0 => "zero",
    1, 3, 5, 7, 9 => "odd",
    2, 4, 6, 8 => "even"
};

print_r($type);
