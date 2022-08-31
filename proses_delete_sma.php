<?php
require 'user_sma.php';
require 'koneksi.php';

use UserSma\UserSma;

$delete = new UserSma();

$delete->delete($_GET['NIS']);
?>
<center>
<h1>DATA Berhasil di Hapus</h1>
<center>
<link rel="stylesheet" type="text/css" href="css/proses_insert.css">
<form action = "sma.php" method ="POST" name="login">
<input type ="submit" class="tombol_input" name = "submit" value = "kembali">