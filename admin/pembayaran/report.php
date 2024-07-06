<?php
include('../functions.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_pembayaran JOIN tb_siswaku on tb_pembayaran.nisn=tb_siswaku.nisn JOIN tb_spp on tb_pembayaran.id_spp=tb_spp.id_spp ");
$html = '<center><h3>Data Pembayaran</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No.</th>
                            <th>Nisn</th>
                            // <th>Nis</th>
                            <th>Tanggal</th>
                            <!-- <th>Id Petugas</th> -->
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Dibayar</th>
                            <th>Id SPP</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['nisn'] . "</td>
//  <td>" . $row['nis'] . "</td>
 <td>" . $row['tgl_bayar'] . "</td>
 <td>" . $row['bulan_dibayar'] . "</td>
 <td>" . $row['tahun_dibayar'] . "</td>
 <td>" . $row['jumlah_bayar'] . "</td>
 <td>" . $row['id_spp'] . "</td>
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
$dompdf->stream('laporan_pembayaran.pdf');
