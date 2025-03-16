<?php

namespace Tests\Unit\Task;

use App\Actions\Task\CreateAction;
use App\DTO\TaskDTO;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; // 

class CreateTaskActionTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_create_task()
    {
        $taskDTO = new TaskDTO("Task 1", false);
        
        $action = new CreateAction();

        $task = $action->execute($taskDTO);

        $this->assertEquals("Task 1", $task->task);
        $this->assertEquals(false, $task->completed);
       
    }
}
