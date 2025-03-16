<?php
namespace App\Http\Controllers\Task;

use App\Actions\Task\CreateAction;
use App\DTO\TaskDTO;
use App\Http\Requests\StoreTaskRequest;

class CreateController
{
    public function __invoke(StoreTaskRequest $request, CreateAction $createAction)
    {
        $taskDTO = new TaskDTO(...$request->safe());

        $task = $createAction->execute($taskDTO);

        return $task;

        // return redirect()->route('tasks.show', $task);
    }
}