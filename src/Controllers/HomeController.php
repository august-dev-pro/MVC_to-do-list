<?php
namespace August\Controllers;

use August\Controllers\TaskController;

class HomeController extends AbstractController
{
    private $taskController;

    public function __construct()
    {
        $this->taskController = new TaskController;
    }
    public function index()
    {
        $this->taskController->action();

    }
}
