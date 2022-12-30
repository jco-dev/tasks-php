<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>

<body></body>
    <h1>Completas</h1>
    <ul>
        <?php foreach ($completedTasks as $task) : ?>
            <li><?= $task->title ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Incompletas</h1>
    <ul>
        <?php foreach ($pendingTasks as $task) : ?>
            <li><?= $task->title ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>