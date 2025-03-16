<?php

namespace App\Actions\Task;

use App\Models\Task;

class DeleteAction{
    public function execute(Task $task): void {
        $task->delete();
    }
}