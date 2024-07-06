<?php
require '../functions.php';

$id = $_GET["id"];

if (hapus_petugas($id) > 0) {
  echo "
  <script>
    alert('Data delete successfully!');
    document.location.href = 'data_petugas.php';
  </script>
";
} else {
  echo "
  <script>
    alert('Data failed successfully!');
    document.location.href = 'data_petugas.php';
  </script>
";
}
