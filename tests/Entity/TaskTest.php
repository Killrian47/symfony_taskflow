<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\TaskStatus;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testTakeGetterSetters()
    {
        // Create a user who create the task
        $user = new User();
        $user->setEmail("test@test.com");
        $user->setPassword("123456");
        // Create a status to apply it to the task
        $taskStatus = new TaskStatus();
        $taskStatus->setName("To do");
        // Create a date who take right now
        $date = new \DateTimeImmutable("now");
        // Create a date who take tomorrow
        $tomorrow = new \DateTimeImmutable("tomorrow");
        // Create a new task and set attributes
        $task = new Task();
        $task->setTitle("Test task");
        $task->setDescription("This is a test description");
        $task->setCreatedAt($date);
        $task->setUpdatedAt($date);
        $task->setDueDate($tomorrow);
        $task->setUser($user);
        $task->setTaskStatusId($taskStatus);

        // Compare to see if the getter works
        $this->assertEquals("Test task", $task->getTitle());
        $this->assertEquals("This is a test description", $task->getDescription());
        $this->assertEquals($date, $task->getCreatedAt());
        $this->assertEquals($date, $task->getUpdatedAt());
        $this->assertEquals($tomorrow, $task->getDueDate());
        $this->assertEquals($user, $task->getUser());
        $this->assertEquals($taskStatus, $task->getTaskStatusId());
    }
}