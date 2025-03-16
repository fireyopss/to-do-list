<?php
namespace Tests\Unit\Task;

use App\Actions\Task\UpdateAction;
use App\DTO\TaskDTO;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateTaskActionTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_task()
    {
        $task = Task::factory()->create([
            'task' => 'Get some milk',
            'completed' => false
        ])->first();

        $this->assertEquals("Get some milk", $task->task);
        
        $taskDTO = new TaskDTO("Get Some Bread", false);

        $action = new UpdateAction();

        $task = $action->execute($taskDTO,$task);

        $this->assertEquals("Get Some Bread", $task->task);
    }

}