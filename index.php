<?php
session_start();
include "navbar.php";
include "function.php";
if(isset($_POST["submit"])){
$nisn = $_POST["nisn"];
$login = login($nisn);
$newNisn = $login["0"]["nisn"];
$newStatus = $login["0"]["status"];
$status = "belum voting";
if($_POST["nisn"]==$newNisn&&$newStatus==$status){

    $_SESSION["nisn"]=$_POST["nisn"];
    echo "
    <script>
    alert('selamat datang');
    document.location.href='voter/vote.php';
    </script>
    ";
   
}else{
    echo"
    <script>
    alert('mohon mencoba kembali');
    document.location.href='index.php';
    </script>
    ";
    }
}
?>
<div class="container min-vh-100 d-flex justify-content-center 
align-items-center" >
        <form action="" method="post" 
        class="d-flex flex-column gap-2 shadow-4 p-5">

            <label for="nisn" class="me-2">NISN</label>

            <input type="text" id="nisn" name="nisn" 
            placeholder="masukan nisn" style="width: 500px;">

            <button class="btn btn-primary" type="submit" name="submit">
            MASUK</button>
            
        </form>
</div>
