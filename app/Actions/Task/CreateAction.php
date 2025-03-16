<?php

namespace App\Actions\Task;

use App\DTO\TaskDTO;
use App\Models\Task;

class CreateAction {


    public function execute(TaskDTO $taskDTO): Task {
        return Task::create($taskDTO->toArray());
    }

}