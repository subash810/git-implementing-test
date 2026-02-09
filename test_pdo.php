<?php
require 'vendor/autoload.php';

use App\Infrastructure\Database;

$pdo = Database::getConnection();
echo "Connected successfully!";
