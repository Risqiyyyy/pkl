<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>

<h1>Halaman Admin</h1>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<center>
<a class="tombol_login" href="smp.php">Data SMP</a>
<a class="tombol_login" href="sma.php">Data SMA</a>
<a class="tombol_login" href="guru.php">Data Guru</a>
<a class="tombol_login" href="mapelsmp.php"> Data Mapel SMP</a>
<a class="tombol_login" href="mapelsma.php"> Data Mapel SMA</a>
<center>
<br>
        <form action ="logout.php" method ="POST" name="keluar">
<input type ="submit" class="tombol_login" name = "keluar" value = "LOGOUT">
</form>



