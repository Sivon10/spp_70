<!DOCTYPE html>
<html>

<body>

    <center>

        <h2>DATA LAPORAN SISWA</h2>


    </center>

    <table border="1" style="width: 100%">
        <tr>

            <th>No.</th>
            <th>Id Kelas</th>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Id SPP</th>
        </tr>

        <?php
        require '../functions.php';
        $users = query("SELECT * FROM tb_siswaku JOIN tb_kelas ON tb_siswaku.id_kelas = tb_kelas.id_kelas JOIN tb_spp ON tb_siswaku.id_spp = tb_spp.id_spp");
        ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user["nama_kelas"]; ?></td>
                <td><?= $user["nisn"]; ?></td>
                <td><?= $user["nis"]; ?></td>
                <td><?= $user["nama"]; ?></td>
                <td><?= $user["alamat"]; ?></td>
                <td><?= $user["no_telp"]; ?></td>
                <td><?= $user["nominal"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <br>
    <a href="data_siswa.php">Kembali</a>

    <script>
        window.print();
    </script>

</body>

</html>