<?php
namespace Tests\Unit\Task;

use App\Actions\Task\CompletedAction;
use App\Models\Task;
use Database\Factories\TaskFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompleteTaskActionTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_complete_task()
    {
        $task = TaskFactory::new()->create([
            'task' => 'Get some milk',
            'completed' => false
        ])->first();

        $this->assertEquals(false, $task->completed);

        $action = new CompletedAction();

        $task = $action->execute($task);

        $this->assertEquals(true, $task->completed);

    }

}