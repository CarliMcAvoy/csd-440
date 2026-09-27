<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQLi Populate Table</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Fill Table</h1><br><br>
    <?php

    $servername = "localhost";
    $username = "student1";
    $password = "pass";
    $database = "anime";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("connection failed: {$conn->connect_error}");
    }
    echo "Connected successfully.<br><br>";

    if($conn){
        $sql = "insert into anime_list(title, year, author, producer, length) values
                ('Naruto','2002','Masashi Kishimoto','Studio Pierrot','5 Seasons'),
                ('Attack on Titan','2013','Hajime Isayama','Tetsuya Kinoshita','4 Seasons'),
                ('Goodbye, Lara','2026','Anna Kawahara','Kinema Citrus','1 Season')";
    }

    if($conn->query($sql)===TRUE){
        echo "Table filled!";
    }
    else{
        echo "Error filling table: {$conn->error}";
    }

    $conn->close();

    ?>
</body>
</html>
