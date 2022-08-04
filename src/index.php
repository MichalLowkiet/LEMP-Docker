<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            display: block;
            margin: auto;
            width: 50%;
        }
    </style>
</head>
<body>

<img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">

<?php
$connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
    echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
}
else {
    echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
    echo '<ul class="center">';
    foreach ($tables as $table) {
        echo "<li>{$table}</li>";
    }
    echo '</ul>';
}
// mkdir('test');
?>
</body>
</html>