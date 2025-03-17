<?php
namespace App\Http\Controllers\Task;

use App\Models\Task;

class IndexController
{
    public function __invoke()
    {
        return view('tasks',[
            'tasks' => Task::paginate()
        ]);
    }
}