<?php
include('../functions.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_spp ");
$html = '<center><h3>Data SPP</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No.</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                        
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['tahun'] . "</td>
 <td>" . $row['nominal'] . "</td>
 </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_spp.pdf');
