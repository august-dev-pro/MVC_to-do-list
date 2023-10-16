<?php
namespace August\Controllers;

use August\Controllers\AbstractController;
use August\Entity\TAskEntity;
use August\Service\TaskService;

class TaskController extends AbstractController
{
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService;
    }

    public function action()
    {
        $tasks = $this->taskService->showAllTasks();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"];
            $description = $_POST["description"];
            $temps = $_POST["temps"];

            $task = new TAskEntity;

            $task->setNom($nom);
            $task->setDescription($description);
            $task->settemps($temps);
            $task->setStatut(false);

            $resultat = $this->taskService->addTAsk($task);

            if ($resultat) {
                echo "la teches a ete enregistrer avec succes";
            } else {
                echo "erreur lors de l'enregistrement de le taches";
            }

        }

        $data = ["tasks" => $tasks];

        $this->renderview("Home/home", $data);
    }

    public function verifyRequestMethod()
    {

    }
}
