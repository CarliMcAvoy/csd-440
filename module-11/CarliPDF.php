<!---
Program demonstrates the use of FPDF to create and display a PDF file, outputting data
from a database connection
--->


<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function getPDF(){
            window.open("CarliPostPDF.php");
        }
    </script>
    <meta charset="UTF-8">
    <title>Module 11 - PDF</title>
</head>

<body>

<button onclick="getPDF();" target="_blank">PDF File</button>

</body>

</html>
