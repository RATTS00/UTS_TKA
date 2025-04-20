<?php
include "../function.php";
$nisn = $_GET["nisn"];
$hapus = v_hapus($nisn);

if($hapus > 0) {
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href='menampilkan.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Terjadi kesalahan saat menghapus data');
    document.location.href='menampilkan.php';
    </script>
    ";
}
?>