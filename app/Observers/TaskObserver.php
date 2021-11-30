<?php

namespace App\Observers;

use App\Events\TaskUpdatedEvent;
use App\Models\Task;

class TaskObserver
{
    public function updated(Task $task)
    {
        event(new TaskUpdatedEvent('The task "' . $task->name . '" was updated! If you look this - don\'t worry - page will be reload', $task->id));
    }
}
