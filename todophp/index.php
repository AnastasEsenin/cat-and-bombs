<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>To Do List </h1>
    <form action="/add.php" method="post">
    <input type="text" name="task" id="task" placeholder="To Do..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Send </button>

</form>

    <?php 
        require 'configDB.php';

        
        echo '<ul>';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo'<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
        }
        echo '</ul>';
    ?>

</div>

</body>
</html>