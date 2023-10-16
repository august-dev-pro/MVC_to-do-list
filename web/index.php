<?php
require_once '../vendor/autoload.php';
use August\Controllers\HomeController;

use August\Helpers\Router;


$monRouter = new Router();

$monRouter->addRoute("/", HomeController::class, "index");

/* Run router */

$monRouter->route();
