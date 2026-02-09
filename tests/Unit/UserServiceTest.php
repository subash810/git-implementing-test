<?php

// require_once __DIR__ .'/../../app/Service/UserService.php';

// use App\Service\UserService;

// $serviceObj = new UserService();


// $service_result = $serviceObj->difference(2,5);
// $comparing_result = abs(2 - 9);

// if($service_result == $comparing_result){
//     echo "Service Class Difference method Working\n";
// } else {
//     echo "Service Class Difference Method Not working\n";
// }
   

// $var = "        testUser     ";
// echo $var;
// echo "\n";
// $resultOfTrimmed = $serviceObj->nameTrimming($var);

// if(!str_contains($resultOfTrimmed, " "))
//     {
//         echo $resultOfTrimmed;
//         echo "\nTrim Funtion working\n";
//     }



// namespace App\Tests\Unit;

// use App\Service\UserService;
// use PHPUnit\Framework\TestCase;

// class UserServiceTest extends TestCase
// {
//     public function testDifference()
//     {
//         $service = new UserService();
//         $this->assertEquals(3, $service->difference(2, 5));
//     }

//     public function testTrim()
//     {
//         $service = new UserService();
//         $this->assertEquals("testUser", $service->nameTrimming("   testUser   "));
//     }
// }


use PHPUnit\Framework\TestCase;
use App\Service\UserService;
use PDO;

class UserServiceTest extends TestCase
{
    private function getFakePdo(): PDO
    {
        return $this->createMock(PDO::class);
    }

    public function testDifference()
    {
        $service = new UserService($this->getFakePdo());
        $this->assertEquals(3, $service->difference(2, 5));
    }

    public function testTrim()
    {
        $service = new UserService($this->getFakePdo());
        $this->assertEquals("testUser", $service->nameTrimming("   testUser   "));
    }
}


