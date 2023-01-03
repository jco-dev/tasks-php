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
            <li style="color: <?= $task->color ?>">
                <?= $task->title ?>
                <form style="display: inline;" action="toogle-task.php" method="post">
                    <input type="hidden" name="completed" value="0" />
                    <input type="hidden" name="id" value="<?= $task->id ?>" />
                    <button type="submit">-</button>
                </form>

                <form onsubmit="return confirm('Estas seguro de eliminar el registro?');" style="display: inline;" action="delete-task.php" method="post">
                    <input type="hidden" name="id" value="<?= $task->id ?>" />
                    <button type="submit">x</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Incompletas</h1>
    <ul>
        <?php foreach ($pendingTasks as $task) : ?>
            <li style="color: <?= $task->color ?>">
                <?= $task->title ?>
                <form style="display: inline;" action="toogle-task.php" method="post">
                    <input type="hidden" name="completed" value="1" />
                    <input type="hidden" name="id" value="<?= $task->id ?>" />
                    <button type="submit">+</button>
                </form>

                <form onsubmit="return confirm('Estas seguro de eliminar el registro?');" style="display: inline;" action="delete-task.php" method="post">
                    <input type="hidden" name="id" value="<?= $task->id ?>" />
                    <button type="submit">x</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="create-task.php" method="post">
        <label>
            Title
            <input type="text" name="title" />
        </label>
        <label for="">
            Color
            <input type="color" name="color" id="">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>