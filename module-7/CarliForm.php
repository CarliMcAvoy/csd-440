<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset = 'UTF-8'>
    <title>Module 7 Assignment</title>
</head>

<style>
    textarea{resize: none;}
</style>

<body>
    <?php

        $message = "";
        $name = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
                $name = htmlspecialchars($_POST['name']);
                $message = "Thank you, {$name}! Form submitted successfully.";
            } else {
        $message = "Error: Field(s) cannot be empty.";
            }
        }
    ?>

    <h2>Test Form</h2>

    <?php
        if (!empty($message)){
            echo "$message";
        }
    ?>

    <br><br>

    <form action="" method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        Gender: <input type="radio" name="gender" value="Male"
                        checked="checked">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Other">Other<br><br>
        Phone Number: <input type="tel" name="phone"><br><br>
        Email: <input type="email" name="email"><br><br>
        <label for="reason">Reason for joining?: </label>
        <select name="reason" id="reason">
            <option value="For fun">For fun</option>
            <option value="To learn more">To learn more</option>
            <option value="To see what happens">To see what happens</option>
        </select>
        <br><br>
        <p>
            <label>Comments:</label><br>
            <textarea name="comments" rows="6" cols="30"></textarea>
        </p>
        <br>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>

    <?php

        if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['phone']) && !empty($_POST['email'])) {

            $name = $_POST["name"];
            echo "<br>Name: {$name}";

            echo "<br>";

            $age = $_POST["age"];
            echo "<br>Age: {$age}";

            echo "<br>";

            $gender = $_POST["gender"];
            echo "<br>Gender: {$gender}";

            echo "<br>";

            $phone = $_POST["phone"];
            echo "<br>Phone Number: {$phone}";

            echo "<br>";

            $email = $_POST["email"];
            echo "<br>Email: {$email}";

            echo "<br>";

            $reason = $_POST["reason"];
            echo "<br>Reason for Joining: {$reason}";

            echo "<br>";

            $comments = $_POST["comments"];
            echo "<br>Comments:<br>{$comments}";
        }

    ?>
</body>
</html>
