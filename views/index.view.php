<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>

<body>
    <ul>
        <?php foreach($todos as $todo): ?>
        <li><?php echo $todo->showTodo(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>