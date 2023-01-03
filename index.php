<?php

//require 'functions.php';

require 'Models/Task.php';
//require 'Enums/ColorEnum.php';
$query = require 'bootstrap.php';

// $task = new Task('Estudiar PHP', true);
// $task->complete();
// dd($task);
//$pdo = (new Connection())->start();
//$connection = new Connection();
//$connection->start();

//$tasks = getAllTasks($pdo);
$tasks = $query->selectAll('tasks', 'Task');
//$tasks = [
//    // [
//    //     'title' => "Estudiar PHP",
//    //     'completed' => true
//    // ],
//    // [
//    //     'title' => "Estudiar Laravel",
//    //     'completed' => true
//    // ],
//    // [
//    //     'title' => "Estudiar Vue",
//    //     'completed' => true
//    // ],
//    // [
//    //     'title' => "Estudiar React",
//    //     'completed' => false
//    // ],
//    // [
//    //     'title' => "Estudiar Angular",
//    //     'completed' => false
//    // ],
//    new Task(title: 'Estudiar PHP', completed: true),
//    new Task('Estudiar Laravel'),
//    new Task('Estudiar Vue', true),
//];
//$tasks[0]->setColor(ColorsEnum::RED->value);
//$tasks[1]->setColor(ColorsEnum::GREEN->value);
//$tasks[2]->setColor(ColorsEnum::RED->value);
// echo "<pre>";
// dd($tasks);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

// dd($completedTasks);

require 'index.view.php';
