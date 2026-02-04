<?php

namespace App\Service;

class UserService 
{
    public function subract(int $number1, int $number2)
    {
        return $number2-$number1;
    }

    public function difference(int $number1, int $number2)
    {
        return abs($number1 - $number2);
    }

    public function nameTrimming(string $name): string
    {
        return trim($name," ");
    }

    public function specialCharacterRemoving(string $word): string 
    {
        
        return "";
    }
}