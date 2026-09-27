<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 9 Assignment - Form</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Search Form</h1><br><br>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "student1";
    $password = "pass";
    $database = "anime";

        try{

            $conn = new mysqli($servername, $username, $password, $database);

            if($conn){
                $sql = "SELECT DISTINCT title FROM anime_list";
                $rs = mysqli_query($conn, $sql);
            }
    ?>

    <!-- Create Form -->
    <div>
    <form action="CarliPostForm.php" method="post">
        <h3>
            <label>Anime Title<br></label>
        </h3>
        <select name="select">

    <?php

        if (mysqli_num_rows($rs) > 0){
            while($row = mysqli_fetch_assoc($rs)){
                echo('<option value = "' . $row['title'] . '">' . $row['title'] . '</option>');
            }
        }
        ?>

        </select>
        <h4>
            <input type="submit" value="Submit"/>
        </h4>
    </form>
    </div>


    <?php

        }catch(mysqli_sql_exception $e){

            error_log("Database Error: {$e->getMessage()}");
            echo"Database error. Try again.";

        } finally{
            $conn->close();
        }

    ?>


</body>
</html>
