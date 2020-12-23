<?php

class Handler
{
    public function handle()
    {
        throw new Exception;
    }
}

$handler = new Handler;

try {
    $handler->handle();
} catch (Exception) {
    print_r('log');
}
