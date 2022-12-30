<?php

$tasks = [
    [
        'title' => "Estudiar PHP",
        'completed' => true
    ],
    [
        'title' => "Estudiar Laravel",
        'completed' => true
    ],
    [
        'title' => "Estudiar Vue",
        'completed' => true
    ],
    [
        'title' => "Estudiar React",
        'completed' => false
    ],
    [
        'title' => "Estudiar Angular",
        'completed' => false
    ],
];

$completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task['completed'];
});

require 'index.view.php';
