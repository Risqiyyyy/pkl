<?php
require 'user_guru.php';
require 'koneksi.php';

use UserGuru\UserGuru;

$delete = new UserGuru();

$delete->delete($_GET['NIS']);
?>
<h1>DATA Berhasil di Hapus</h1>
<a href="guru.php">Selesai</a>