<?php

namespace August\Repository;

use August\Repository\AbstractRepository;
use August\Entity\TAskEntity;

class TaskRepository extends AbstractRepository
{
    public function addTask(TaskEntity $task)
    {

        $query = "INSERT INTO tasks (nom, description, temps) VALUES (:nom, :description, :temps)";

        $statment = $this->connection->prepare($query);
        $params = [
            "nom" => $task->getNom(),
            "description" => $task->getDescription(),
            "temps" => $task->getTemps()
        ];

        $resultat = $statment->execute($params);
        return $resultat;
    }

    public function showAllTasks()
    {
        $sql = "SELECT * FROM tasks";

        $resultat = $this->connection->query($sql);

        $tasks = [];
        foreach ($resultat as $value) {
            $task = new TaskEntity();
            $task->setId($value["id"])->setNom($value["nom"])
                ->setDescription($value["description"])
                ->setTemps($value["temps"])
                ->setStatut($value["statut"]);
            $tasks[] = $task;
        }

        return $tasks;
    }
}
