<?php

namespace App\Service;

use App\Entity\User;
use PDO;

class UserService
{
    // public function __construct() {}

    public function __construct(private PDO $pdo) {}

    public function login(string $email, string $password): ?User
    {
        $stmt = $this->pdo->prepare(
            "SELECT id, email FROM users WHERE email = :email AND password = :password"
        );

        $stmt->execute([
            'email' => $email,
            'password' => $password
        ]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? new User($row['id'], $row['email']) : null;
    }

    public function subract(int $number1, int $number2)
    {
        return $number2 - $number1;
    }

    public function difference(int $number1, int $number2)
    {
        return abs($number1 - $number2);
    }

    public function nameTrimming(string $name): string
    {
        return trim($name, " ");
    }

    public function specialCharacterRemoving(string $word): string
    {

        return "";
    }
}
