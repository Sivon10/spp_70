<!DOCTYPE html>
<html>


<body>

    <center>

        <h2>DATA LAPORAN PETUGAS</h2>


    </center>

    <table border="1" style="width: 100%">
        <tr>

            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Level</th>
        </tr>

        <?php
        require '../functions.php';
        $users = query("SELECT * FROM tb_petugas");
        ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user["username"]; ?></td>
                <td><?= $user["password"]; ?></td>
                <td><?= $user["nama_petugas"]; ?></td>
                <td><?= $user["level"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <br>
    <a href="data_petugas.php">Kembali</a>

    <script>
        window.print();
    </script>

</body>

</html>