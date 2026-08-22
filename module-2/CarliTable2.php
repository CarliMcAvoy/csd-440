<html lang="en">
<meta charset="UTF-8">
<title>Module 2 Assignment</title>
    <body>
        <h1>Module 2 Nested Loop Table</h1>
        <table border="1" cellpadding="5" width="500">
            <caption>Random Numbers Table</caption>
            <thead align="center">
            <tr>
                <td colspan="6">Numbers 1-8</td>
            </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < 6; ++$i){
                ?>
                <tr>
                    <?php
                        for ($j=0; $j<6; ++$j){
                    ?>
                    <td align="center">
                        <?php echo(rand(1,8)) ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>