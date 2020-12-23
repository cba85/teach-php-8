<?php

class SomeException extends Exception
{
}

//throw new SomeException;

$callable = fn() => throw new SomeException; // Possible using PHP 8

class Handler
{
    public $code;

    public function handle($code) {
        /*
        if (is_null($code)) {
            throw new Exception("Error Processing Request");
        }

        //print_r($code);
        $this->code = $code;
        */
        $this->code = $code ?? throw new Exception;
    }
}

$handler = new Handler;
print_R($handler->handle(null));