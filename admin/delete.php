<?php
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
  <script>
    alert('Data delete successfully!');
    document.location.href = 'useradmin.php';
  </script>
";
} else {
    echo "
  <script>
    alert('Data failed successfully!');
    document.location.href = 'useradmin.php';
  </script>
";
}
