<?php
require './functions.php';
$query = require 'bootstrap.php';
$query->create(
    'tasks',
    [
        'title' => $_POST['title'],
        'completed' => 0,
        'color' => $_POST['color']
    ]
);
header("Location: index.php");
