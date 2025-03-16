<?php
namespace App\Http\Controllers\Task;

use App\Actions\Task\UpdateAction;
use App\DTO\TaskDTO;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class UpdateController
{
    public function __invoke(UpdateTaskRequest $request,UpdateAction $action, Task $task)
    {
        $taskDto = new TaskDTO(...$request->safe());

        $action->execute($taskDto, $task);

        return response()->noContent();
    }
  
}