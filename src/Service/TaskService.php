<?php
namespace August\Service;

use August\Repository\TaskRepository;

class TaskService
{
    private $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository;
    }

    public function addTask($task)
    {
        $resultat = $this->taskRepository->addTask($task);
        return $resultat;

    }

    public function showAllTasks()
    {
        $resultat = $this->taskRepository->showAllTasks();
        return $resultat;
    }
}
