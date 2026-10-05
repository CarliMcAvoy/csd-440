<!---
Program displays creation of a form to be submitted to an external php file
--->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="json.css">
    <title>Module 9 - JSON Form</title>
</head>
<body>
    <h1>JSON Form</h1><br><br>

    <div>
        <form action="CarliJSONOutput.php" method="POST">

            <label for="name">Name: </label>
            <input type="text" id="name" name="name"><br>

            <label for="age">Age: </label>
            <input type="number" id="age" name="age"><br>

            <label for="dob">Date of Birth: </label>
            <input type="date" id="dob" name="dob"><br>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email"><br>

            <label for="phone">Phone Number: </label>
            <input type="tel" id="phone" name="phone"><br>

            <label for="state">State of Residence: </label>
            <input type="text" id="state" name="state"><br>

            <label for="hobby">Hobby: </label>
            <input type="text" id="hobby" name="hobby"><br>

            <label for="list">How Did You Hear About Us? </label>
            <select id="list" name="list">
                <option>Google</option>
                <option>Instagram</option>
                <option>Facebook</option>
                <option>Other</option>
            </select><br><br>

            <h4>
                <input type="submit" value="Submit"/>
            </h4>

        </form>
    </div>

</body>
</html>