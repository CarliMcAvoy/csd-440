<!---
Program demonstrates creation of table, using an external function, and displaying function outcomes
 within the table
 --->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Module 3 Assignment</title>
    <body>
        <h1>Module 3 Function Table</h1>
        <table border="1" cellpadding="5" width="500">
            <caption>Random Numbers Function Table</caption>
            <thead align="center">
            <tr>
                <td colspan="6">Sum of Numbers 1-10</td>
            </tr>
            </thead>
            <tbody>
            <?php
            require('CarliTable3Function.php');
                    for ($i=0;$i<6;++$i){
                ?>
                <tr>
                    <?php
                    for ($j=0; $j<6; ++$j){
                        ?>
                        <td align="center">
                            <?php randSum(); ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>