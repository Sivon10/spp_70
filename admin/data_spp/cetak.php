<!DOCTYPE html>
<html>

<body>

    <center>

        <h2>DATA LAPORAN SPP</h2>


    </center>

    <table border="1" style="width: 100%">
        <tr>

            <th>No.</th>
            <th>Tahun</th>
            <th>Nominal</th>
        </tr>

        <?php
        require '../functions.php';
        $users = query("SELECT * FROM tb_spp");
        ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user["tahun"]; ?></td>
                <td><?= $user["nominal"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <br>
    <a href="data_spp.php">Kembali</a>

    <script>
        window.print();
    </script>

</body>

</html>