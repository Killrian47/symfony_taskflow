<?php

namespace App\Tests\Entity;

use App\Entity\TaskStatus;
use PHPUnit\Framework\TestCase;

class TaskStatusTest extends TestCase
{
    public function testTaskStatusSetterGetter() {
        $taskStatus = new TaskStatus();
        $taskStatus->setName("To do");

        $this->assertEquals("To do", $taskStatus->getName());
    }
}