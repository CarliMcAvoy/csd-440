<!--
    Program displays use of strings with methods 'strrev()', 'strtolower()', and 'var_dump()' to determine whether
    specified strings are palindromes or not using boolean results.
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 4 Assignment</title>
</head>
    <body>
        <h1>Module 4 Palindrome Strings</h1>
        <h3>
        <?php

            //display function
            function displayString($string){
                echo "$string ";
            }

            //display reversed string function
            function displayStringReverse($string){
                $str0 = strrev($string);
                echo "$str0 ";
            }

            //clean string and compare it to itself reversed
            function PalindromeTest($string){
                $cleaned = preg_replace("/[^A-Za-z0-9]/", "", $string);
                $cleaned = strtolower($cleaned);
                return $cleaned === strrev($cleaned);
            }

        echo "Simple Display:<br>";
        displayString('racecar');
        displayString('level');
        displayString('radar');
        displayString('human');
        displayString('dog');
        displayString('bear');

        echo "<br><br>";

        echo "Reversed Display:<br>";
        displayStringReverse('racecar');
        displayStringReverse('level');
        displayStringReverse('radar');
        displayStringReverse('human');
        displayStringReverse('dog');
        displayStringReverse('bear');

        echo "<br><br>";

        echo "Is The String A Palindrome?<br>";
        echo "racecar: "; var_dump(PalindromeTest('racecar'));
        echo"<br>";
        echo "level: ";var_dump(PalindromeTest('level'));
        echo"<br>";
        echo "radar: ";var_dump(PalindromeTest('radar'));
        echo"<br>";
        echo "human: ";var_dump(PalindromeTest('human'));
        echo"<br>";
        echo "dog: ";var_dump(PalindromeTest('dog'));
        echo"<br>";
        echo "bar: ";var_dump(PalindromeTest('bar'));

        ?>
        </h3>
    </body>
</html>