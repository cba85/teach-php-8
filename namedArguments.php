<?php

function flash($key, $message)
{
    print_r([$key, $message]);
}

//flash("success", "Message sent.");

flash(
    key: "success",
    message: "Message sent."
);

// ---

// Function from Laravel: https://github.com/laravel/framework/blob/8.x/src/Illuminate/Support/helpers.php
function retry($times, callable $callback, $sleep = 0, $when = null)
{
    $attempts = 0;

    beginning:
    $attempts++;
    $times--;

    try {
        return $callback($attempts);
    } catch (Exception $e) {
        if ($times < 1 || ($when && ! $when($e))) {
            throw $e;
        }

        if ($sleep) {
            usleep($sleep * 1000);
        }

        goto beginning;
    }
}

retry(3, function () {
    echo "ok";
}, 1);

retry(
    times: 3,
    callback: function () {
        echo 'ok';
    },
    sleep: 1
);

// ---

class User
{
    /*
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    */

    public function __construct(
        public $name,
        public $email,
        public $verified = false,
        public $activated = false
        )
    {
    }
}

//$user = new User('Clément', 'clem@ent.com');
$user = new User(
    name: "Clément",
    email: "clem@ent.com"
);

//$user = new User('Clément', 'clem@ent.com', false, true);
$user = new User(
    name: "Clément",
    email: "clem@ent.com",
    activated: true
);

print_r($user);

// ---

// HTTPOnly cookie
setcookie('session', '123', 0, '', '', false, true);
setcookie(name: "session", value: "123",httponly: true);

// ---

$names = ['clement', 'tomy', 'jacques'];

/*
$names = array_map(function ($name) {
    return strtoupper($name);
}, $names);
*/

$names = array_map(
    callback: function ($name) {
    return strtoupper($name);
},
array: $names,
);

print_r($names);
