<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQLi Drop Table</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Drop Table</h1><br><br>
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
            $sql = "DROP TABLE IF EXISTS anime_list";
        }

        if($conn->query($sql)===TRUE){
            echo "Table dropped!";
        }
        else{
            echo "Error dropping table: {$conn->error}";
        }

        $conn->close();

    ?>
</body>
</html>
