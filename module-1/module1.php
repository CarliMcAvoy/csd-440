<!DOCTYPE html>
<html>
<body>

    <h1>Module 1 PHP Page</h1>

    <?php
    $verify = "correctly";
    echo "<h2>PHP installed $verify</h2>";
    ?>

    <h3>Test Array:</h3><br>

    <?php
    $names = ["Carli", "Sarah", "Eron"];

    echo "<table border = '2' cellpadding = '5' cellspacing = '1'>";
    echo "<tr><th>Index</th><th>Values</th></tr>";

    foreach($names as $index => $names){
        echo"<tr>";
        echo"<td>" . $index . "</td>";
        echo"<td>" . htmlspecialchars($names) . "</td>";
        echo"</tr>";
    }

    echo"</table>";
    ?>
</body>
</html>


