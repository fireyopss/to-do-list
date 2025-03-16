<?php
namespace Tests\Unit\Task;

use App\DTO\TaskDTO;
use Tests\TestCase;

class TaskDTOTest extends TestCase
{
    public function test_task_dto()
    {
        $taskDto = new TaskDTO('Get Some Milk', false);

        $this->assertEquals(['task' => 'Get Some Milk', 'completed' => false], $taskDto->toArray());
    }
}