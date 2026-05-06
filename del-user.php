<?php

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-user.php";

$id = $_GET['id'];
$foto = $_GET['foto'];

if (delete($id, $foto) > 0) {
    echo "<script>
            alert('Data user berhasil dihapus !');
            document.location.href = 'data-user.php';
        </script>";
} else {
    echo "<script>
            alert('Data user gagal dihapus !');
            document.location.href = 'data-user.php';
        </script>";
}

?>