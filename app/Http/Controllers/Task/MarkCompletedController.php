<?php
namespace App\Http\Controllers\Task;

use App\Actions\Task\CompletedAction;
use App\Models\Task;

class MarkCompletedController
{
    public function __invoke(CompletedAction $completedAction, Task $task)
    {
        $completedAction->execute($task);

        return response()->noContent();
    }
    
}