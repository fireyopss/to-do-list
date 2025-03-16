<?php

namespace App\Actions\Task;

use App\DTO\TaskDTO;
use App\Models\Task;

class UpdateAction
{
    public function execute(TaskDTO $taskDTO, Task $task): Task
    {
        $task->update($taskDTO->toArray());
        
        return $task;
    }
}