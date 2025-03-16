<?php
namespace App\DTO;

class TaskDTO extends BaseDTO
{
    public string $task;
    public bool $completed;


    public function __construct(string $task, bool $completed=false)
    {
        $this->task = $task;
        $this->completed = $completed;
    }
}