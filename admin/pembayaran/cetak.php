<!DOCTYPE html>
<html>

<body>

    <center>

        <h2>DATA LAPORAN PEMBAYARAN</h2>


    </center>

    <table border="1" style="width: 100%">
        <tr>

            <th>No.</th>
            <th>Nisn</th>
            <th>Tanggal</th>
            <!-- <th>Id Petugas</th> -->
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah Dibayar</th>
            <th>Id SPP</th>
        </tr>

        <?php
        require '../functions.php';
        $users = query("SELECT * FROM tb_pembayaran JOIN tb_siswaku on tb_pembayaran.nisn=tb_siswaku.nisn JOIN tb_spp on tb_pembayaran.id_spp=tb_spp.id_spp  ");
        ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user["nisn"]; ?></td>
                <td><?= $user["tgl_bayar"]; ?></td>
                <!-- <td><?= $user["id_petugas"]; ?></td> -->
                <td><?= $user["bulan_dibayar"]; ?></td>
                <td><?= $user["tahun_dibayar"]; ?></td>
                <td><?= $user["jumlah_bayar"]; ?></td>
                <td><?= $user["id_spp"]; ?></td>


            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <br>
    <a href="history_pembayaran.php">Kembali</a>

    <script>
        window.print();
    </script>

</body>

</html>