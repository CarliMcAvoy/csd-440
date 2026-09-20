<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQLi Display Table</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Display Table</h1><br><br>
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

        $sql = "SELECT * FROM anime_list";

        $result = $conn->query($sql);

        if(!$result){
            exit("Error in SQL");
        }

        ?>

    <table><caption>Anime Watch List</caption>
        <thead>
        <tr>
            <td>Title</td>
            <td>Year Released</td>
            <td>Author</td>
            <td>Producer</td>
            <td>Show Length</td>
        </tr>
        </thead>
            <tbody>
            <?php
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo($row["title"]); ?></td>
                    <td><?php echo($row["year"]); ?></td>
                    <td><?php echo($row["author"]); ?></td>
                    <td><?php echo($row["producer"]); ?></td>
                    <td><?php echo($row["length"]); ?></td>
                </tr>
            <?php
                    }
                }
                else{
                    echo "No records found in table.";
                }

                $conn->close();
            ?>

            </tbody>
    </table>
</body>
</html>
