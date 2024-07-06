<?php
include('../functions.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_siswaku JOIN tb_kelas ON tb_siswaku.id_kelas = tb_kelas.id_kelas JOIN tb_spp ON tb_siswaku.id_spp = tb_spp.id_spp");
$html = '<center><h3>Data Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No.</th>
 <th>Id Kelas</th>
 <th>Nisn</th>
 <th>Nis</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>No Telp</th>
 <th>Id SPP</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['nama_kelas'] . "</td>
 <td>" . $row['nisn'] . "</td>
 <td>" . $row['nis'] . "</td>
 <td>" . $row['nama'] . "</td>
 <td>" . $row['alamat'] . "</td>
 <td>" . $row['no_telp'] . "</td>
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
$dompdf->stream('laporan_siswa.pdf');
