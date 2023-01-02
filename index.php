<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions.php';

require 'Models/Task.php';
require 'Enums/ColorEnum.php';

// $task = new Task('Estudiar PHP', true);
// $task->complete();
// dd($task);

$tasks = [
    // [
    //     'title' => "Estudiar PHP",
    //     'completed' => true
    // ],
    // [
    //     'title' => "Estudiar Laravel",
    //     'completed' => true
    // ],
    // [
    //     'title' => "Estudiar Vue",
    //     'completed' => true
    // ],
    // [
    //     'title' => "Estudiar React",
    //     'completed' => false
    // ],
    // [
    //     'title' => "Estudiar Angular",
    //     'completed' => false
    // ],
    new Task(completed: true, title: 'Estudiar PHP'),
    new Task('Estudiar Laravel'),
    new Task('Estudiar Vue', true),
];

$tasks[0]->setColor(ColorsEnum::BLUE->value);
$tasks[1]->setColor(ColorsEnum::GREEN->value);
$tasks[2]->setColor(ColorsEnum::RED->value);
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
