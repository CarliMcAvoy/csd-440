<!---
Program displays safely retrieving form data and placing it into an array, encoding the array into a JSON string,
decoding the JSON string back into an array, using a foreach loop to display the JSON array data, and displaying
the data in a user readable table.
--->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="json.css">
    <title>Module 9 - JSON</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $formData = [
                "name" => htmlspecialchars($_POST['name'] ?? ''),
                "age" => htmlspecialchars($_POST['age'] ?? ''),
                "dob" => htmlspecialchars($_POST['dob'] ?? ''),
                "email" => htmlspecialchars($_POST['email'] ?? ''),
                "phone" => htmlspecialchars($_POST['phone'] ?? ''),
                "state" => htmlspecialchars($_POST['state'] ?? ''),
                "hobby" => htmlspecialchars($_POST['hobby'] ?? ''),
                "list" => htmlspecialchars($_POST['list']?? ''),
            ];

            $jsonData = json_encode($formData, JSON_PRETTY_PRINT);

            $jsonArray = json_decode($jsonData, true);

            foreach($jsonArray as $key => $value){
                echo "{$key} : {$value}<br>";
            }
            }
    ?>

    <table><caption>Form - JSON Output</caption>
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>State</th>
            <th>Hobby</th>
            <th>List Selection</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($jsonArray['name']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['age']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['dob']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['email']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['phone']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['state']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['hobby']); ?></td>
                <td><?php echo htmlspecialchars($jsonArray['list']);?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
