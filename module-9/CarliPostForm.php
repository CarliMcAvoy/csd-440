<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 9 Assignment - Post</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Search Results</h1><br><br>

        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $servername = "localhost";
        $username = "student1";
        $password = "pass";
        $database = "anime";

        $conn = null;

            try{

                $conn = new mysqli($servername, $username, $password, $database);

                $select = $_POST["select"]??"";
                $sql = "SELECT * FROM anime_list WHERE title = ? ";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $select);
                $stmt->execute();

                $rs = $stmt->get_result();

        ?>

    <table><caption>Selected Anime Information</caption>
        <thead>
        <tr>
            <th>Title</th>
            <th>Year Released</th>
            <th>Author</th>
            <th>Producer</th>
            <th>Show Length</th>
        </tr>
        </thead>
        <tbody>

        <?php

        if (mysqli_num_rows($rs) > 0){
            while($row = mysqli_fetch_assoc($rs)){
        ?>

                <tr>
                    <td><?php echo htmlspecialchars($row["title"]); ?></td>
                    <td><?php echo htmlspecialchars($row["year"]); ?></td>
                    <td><?php echo htmlspecialchars($row["author"]); ?></td>
                    <td><?php echo htmlspecialchars($row["producer"]); ?></td>
                    <td><?php echo htmlspecialchars($row["length"]); ?></td>
                </tr>

        <?php
            }

        } else {
            echo "<tr><td colspan='5'>Cannot find record.</td></tr>";
        }
        ?>

        </tbody>
    </table>

        <?php

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
