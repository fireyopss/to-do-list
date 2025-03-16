<?php

namespace App\Actions\Task;

use App\Models\Task;

class CompletedAction
{
    public function execute(Task $task): Task
    {
        $task->completed = true;
        $task->save();

        return $task;
    }
}