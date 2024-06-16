<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testTakeGetterSetters()
    {
        // Create a date who take right now
        $date = new \DateTimeImmutable("now");
        // Create a new task and set attributes
        $task = new Task();
        $task->setTitle("Test task");
        $task->setDescription("This is a test description");
        $task->setCreatedAt($date);
        $task->setUpdatedAt($date);

        // Compare to see if the getter works
        $this->assertEquals("Test task", $task->getTitle());
        $this->assertEquals("This is a test description", $task->getDescription());
        $this->assertEquals($date, $task->getCreatedAt());
        $this->assertEquals($date, $task->getUpdatedAt());
    }
}