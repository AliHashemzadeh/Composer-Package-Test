<?php

namespace Alihashemzadeh\HelloWorld;

class HelloWorld
{
    /**
     * @param string $message
     * @return string
     */
    public function sayHello(string $message = 'Hello World!'): string
    {
        return $message;
    }
}