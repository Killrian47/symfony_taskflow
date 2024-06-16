<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserSetterGetter() {
        $user = new User();
        $user->setEmail("test@test.com");
        $user->setPassword("123456");

        $this->assertEquals("test@test.com", $user->getEmail());
        $this->assertEquals("123456", $user->getPassword());
    }
}