<?php
session_start();
include "navbar.php";
include "function.php";

if (isset($_POST["submit"])) {
    $nisn = $_POST["nisn"];
    $login = login($nisn);
    $newNisn = $login[0]["nisn"];
    $newStatus = $login[0]["status"];
    $status = "belum voting";

    if ($_POST["nisn"] == $newNisn && $newStatus == $status) {
        $_SESSION["nisn"] = $_POST["nisn"];
        echo "
        <script>
        alert('Selamat datang');
        window.location.href='voter/vote.php';
        </script>
        ";
        exit(); // Important: prevent rest of page from rendering
    } else {
        echo "
        <script>
        alert('Mohon mencoba kembali');
        window.location.href='index.php';
        </script>
        ";
        exit(); // Prevent form from rendering again unnecessarily
    }
}
?>

<!-- HTML content will only render if no redirect is triggered above -->
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="" method="post" class="d-flex flex-column gap-2 shadow-4 p-5">
        <label for="nisn" class="me-2">NISN</label>
        <input type="text" id="nisn" name="nisn" placeholder="Masukan NISN" style="width: 500px;">
        <button class="btn btn-primary" type="submit" name="submit">MASUK</button>
    </form>
</div>
