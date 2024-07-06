<?php
include('../functions.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_petugas");
$html = '<center><h3>Data Petugas</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No.</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Level</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['username'] . "</td>
 <td>" . $row['password'] . "</td>
 <td>" . $row['nama_petugas'] . "</td>
 <td>" . $row['level'] . "</td>
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
$dompdf->stream('laporan_petugas.pdf');
