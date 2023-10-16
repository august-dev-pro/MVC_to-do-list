<?php
use August\Migration\CreateTable;

require_once "../vendor/autoload.php";
$Migration = new CreateTable;
$Migration->createTable();
?>
