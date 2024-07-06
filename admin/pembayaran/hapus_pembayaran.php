<?php
require '../functions.php';

$id = $_GET["id"];

if (hapus_pembayaran($id) > 0) {
    echo "
  <script>
    alert('Data delete successfully!');
    document.location.href = 'data_pembayaran.php';
  </script>
";
} else {
    echo "
  <script>
    alert('Data failed successfully!');
    document.location.href = 'data_pembayaran.php';
  </script>
";
}
