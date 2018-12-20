<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/main.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

    if(!$mysql) {
        echo "Error: Unable to connect to MySQL" .PHP_EOL;
        echo "Debugging error: " .mysqli_connect_error() .PHP_EOL;
        exit;
    }

    $sql = "INSERT INTO test.content VALUES (Hello World); ";

    $result = $mysql->query($sql);

    $sql = "SELECT * FROM test ORDER BY id DESC ";

    $result = $mysql->query($sql)->fetch_row();

    echo '<pre class="log">';
    var_dump($result);
    echo '</pre>';

    mysqli_close($mysql);

    phpinfo(); 
    ?>
    <script src="/main.js"></script>
</body>
</html>