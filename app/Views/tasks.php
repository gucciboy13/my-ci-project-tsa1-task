<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>
    <h1>All Tasks</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <hr>

    <?php foreach ($tasks as $task): ?>
        <h3><?= esc($task['title']) ?></h3>
        <p>Status: <?= esc($task['status']) ?></p>
        <p>Date: <?= esc($task['task_date']) ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>