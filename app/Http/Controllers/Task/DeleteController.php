<?php
namespace App\Http\Controllers\Task;

use App\Actions\Task\DeleteAction;
use App\Models\Task;

class DeleteController
{
    public function __invoke(DeleteAction $action, Task $task)
    {
        $action->execute($task);

        return redirect()->route('tasks.index', $task)->with('success', 'Task deleted');
    }
}