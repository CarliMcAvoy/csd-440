<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQLi Create Table</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Create Table</h1><br><br>
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
            $sql = "CREATE TABLE if not exists anime_list(
                    title varchar(255) primary key,
                    year int(4) not null,
                    author varchar(255) not null,
                    producer varchar(255) not null,
                    length varchar(255) not null,
                    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    )";
        }

        if($conn->query($sql)===TRUE){
            echo "Table created!";
        }
        else{
            echo "Error creating table: {$conn->error}";
        }

        $conn->close();

    ?>

</body>
</html>

