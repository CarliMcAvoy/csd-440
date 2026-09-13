<!--
    Program displays use of arrays with methods 'array_search()' and 'array_column()' to display array values based on
    specific data.
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 5 Assignment</title>
</head>
<style>
    table, td, th {
        border: 1px solid #ddd;
        text-align: center;
    }

    table {
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
    }
</style>
<body>
    <h1>Customers Array</h1>
    <?php

        $customer = [
                ["first"=>"George","last"=>"Bush","age"=>"80","phone"=>"1111111111"],
                ['first'=>'Bill','last'=>'Smith','age'=>'40','phone'=>'2222222222'],
                ['first'=>'Jill','last'=>'Golds','age'=>'37','phone'=>'3333333333'],
                ['first'=>'Timothy','last'=>'Hanks','age'=>'65','phone'=>'4444444444'],
                ['first'=>'Garret','last'=>'Stone','age'=>'22','phone'=>'5555555555'],
                ['first'=>'Sonny','last'=>'Reynolds','age'=>'43','phone'=>'6666666666'],
                ['first'=>'Carlos','last'=>'Martinez','age'=>'33','phone'=>'7777777777'],
                ['first'=>'Bethany','last'=>'Gonzalez','age'=>'28','phone'=>'8888888888'],
                ['first'=>'Jack','last'=>'Larson','age'=>'49','phone'=>'9999999999'],
                ['first'=>'Matilda','last'=>'Jackson','age'=>'25','phone'=>'1111111112'],
        ];

        echo "<table>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Phone Number</th></tr>";

        foreach ($customer as $x){
            echo"<tr>";
            foreach($x as $y){
                echo "<td> $y </td>>";
            }
        }
        echo"</table>";


        $search = array_search('Bill',array_column($customer, 'first'));

        echo "<h3>Search Result for 'Bill':</h3>";

        if ($search !== false) {
            $customers = $customer[$search];
            echo "Name: {$customers['first']} {$customers['last']}<br>Age: {$customers['age']}<br>Phone Number: {$customers['phone']}";
        } else {
            echo "Customer not found.";
        }

        $searchTwo = array_search('Stone',array_column($customer,'last'));

        echo"<h3>Search Result for 'Stone': </h3>";

        if ($searchTwo !== false){
            $customers = $customer[$searchTwo];
            echo "Name: {$customers['first']} {$customers['last']}<br>Age: {$customers['age']}<br>Phone Number: {$customers['phone']}";
        } else {
            echo "Customer not found.";
        }

        ?>
</body>
</html>
