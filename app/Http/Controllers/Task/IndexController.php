<?php
namespace App\Http\Controllers\Task;

class IndexController
{
    public function __invoke()
    {
        return view('tasks');
    }
}