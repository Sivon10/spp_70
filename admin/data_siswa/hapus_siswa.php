<?php
require '../functions.php';

$id = $_GET["nisn"];

if (hapus_siswa($id) > 0) {
    echo "
  <script>
    alert('Data delete successfully!');
    document.location.href = 'data_siswa.php';
  </script>
";
} else {
    echo "
  <script>
    alert('Data failed successfully!');
    document.location.href = 'data_siswa.php';
  </script>
";
}
