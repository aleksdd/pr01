<?php

namespace Pr01\User;

class User
{
    public function getName($value): string
    {
        var_dump($value);
        echo gettype($value).PHP_EOL;
        return $value;
    }
}
