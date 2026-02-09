<?php

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;
use App\Infrastructure\Database;
use App\Service\UserService;

require_once __DIR__ . '/../../vendor/autoload.php';

class UserApiTest extends TestCase
{
    public function test_login_with_valid_credentials_returns_user()
    {
        $pdo = Database::getConnection();   // real DB
        $service = new UserService($pdo);

        $user = $service->login('test@example.com', '123456');

        $this->assertNotNull($user);
        $this->assertEquals('test@example.com', $user->email);
    }

    public function test_login_with_invalid_credentials_returns_null()
    {
        $pdo = Database::getConnection();
        $service = new UserService($pdo);

        $user = $service->login('wrong@example.com', 'wrongpass');

        $this->assertNull($user);
    }
}
