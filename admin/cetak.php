<!DOCTYPE html>
<html>

<body>

    <center>

        <h2>DATA LAPORAN KELAS</h2>


    </center>

    <table border="1" style="width: 100%">
        <tr>

            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
        </tr>

        <?php
        require 'functions.php';
        $users = query("SELECT * FROM tb_kelas");
        ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user["nama_kelas"]; ?></td>
                <td><?= $user["kompetensi_keahlian"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <br>
    <a href="useradmin.php">Kembali</a>

    <script>
        window.print();
    </script>

</body>

</html>