<?php
namespace Tests\Unit\Task;

use App\Actions\Task\DeleteAction;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteTaskActionTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_task()
    {
        $task = Task::factory()->create();

        $action = new DeleteAction();

        $action->execute($task);

        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}