<?php

//ERROR HANDLING
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//DATABASE CONNECTION
$servername = "localhost";
$username = "student1";
$password = "pass";
$database = "anime";

$conn = null;

    try {
        $conn = new mysqli($servername, $username, $password, $database);

        $sql = "SELECT * FROM anime_list";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $rs = $stmt->get_result();


        //USE FPDF
        require('fpdf.php');

        $pdf = new FPDF();

        $pdf->AddPage();

        $cell_width = array(35, 35, 35, 35, 35);
        $pdf->SetFont('Arial', '', 12);

        $description='This table pulls data from a database containing information about popular anime titles from this century.';

        $pdf->MultiCell(190,7,$description);

        $pdf->ln(8);

        //STYLE FOR HEADER ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(66, 135, 245);

        $pdf->Cell($cell_width[0], 10, 'Title', 1, 0, 'C', true);
        $pdf->Cell($cell_width[1], 10, 'Year Released', 1, 0, 'C', true);
        $pdf->Cell($cell_width[2], 10, 'Author', 1, 0, 'C', true);
        $pdf->Cell($cell_width[3], 10, 'Producer', 1, 0, 'C', true);
        $pdf->Cell($cell_width[4], 10, 'Show Length', 1, 1, 'C', true);

        //STYLE FOR TABLE BODY
        $pdf->SetFont('Arial', '', 10);

        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_assoc($rs)) {
                $pdf->Cell($cell_width[0], 10, $row['title'], 1, 0, 'C', false);
                $pdf->Cell($cell_width[1], 10, $row['year'], 1, 0, 'C', false);
                $pdf->Cell($cell_width[2], 10, $row['author'], 1, 0, 'C', false);
                $pdf->Cell($cell_width[3], 10, $row['producer'], 1, 0, 'C', false);
                $pdf->Cell($cell_width[4], 10, $row['length'], 1, 1, 'C', false);
            }
        }

        //FOOTER CELL
        $pdf->SetFillColor(163, 212, 255);
        $pdf->Cell(175,8,'Total Titles: 3',1,1,'R',true);

        $stmt->close();
        $conn->close();
        $conn = null;

        $pdf->Output('I','Carli.pdf');

    }catch (Throwable $e) {
        error_log($e);
        echo "<pre>";
        echo htmlspecialchars($e->getMessage());
        echo "</pre>";

            } finally {

                if ($conn !== null) {
                    $conn->close();
                }
    }

?>
