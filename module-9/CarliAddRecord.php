<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 9 Assignment - Post</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Add Record to Table</h1><br><br>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="Title">Title: </label>
        <input type="text" id="Title" name="Title" required><br>

        <label for="Year">Year: </label>
        <input type="number" id="Year" name="Year" maxlength="4" placeholder="YYYY" required><br>

        <lable for="Author">Author: </lable>
        <input type="text" id="Author" name="Author" required><br>

        <label for="Producer">Producer: </label>
        <input type="text" id="Producer" name="Producer" required><br>

        <label for="Length">Seasons in Show: </label>
        <input type="number" id="Length" name="Length" maxlength="3" required><br>

        <h4>
            <input type="submit" value="Submit"/>
        </h4>

    </form>

    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "student1";
    $password = "pass";
    $database = "anime";

    $conn = null;

    try {

        if($_SERVER["REQUEST_METHOD"]=="POST") {
            $conn = new mysqli($servername, $username, $password, $database);
        }

        $title = trim($_POST["Title"]??"");
        $year = trim($_POST["Year"]??"");
        $author = trim($_POST["Author"]??"");
        $producer = trim($_POST["Producer"]??"");
        $length = trim($_POST["Length"]??"");


        $sql = "INSERT INTO anime_list(title, year, author, producer, length) VALUES(
                        ?, ?, ?, ?, ?
                        )";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissi", $title, $year, $author, $producer, $length);

        if($stmt->execute()){
            echo"Data added to table!";
        } else{
            echo"Error creating record: {$stmt->error}";
        }

        $stmt->close();


    } catch (mysqli_sql_exception $e) {

        error_log("Database Error: " . $e->getMessage());
        echo "Database error. Try again.";

    } finally {

        if ($conn !== null) {
            $conn->close();
        }

    }

    ?>


</body>
</html>
