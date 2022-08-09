<?php
require 'user_smp.php';
require 'koneksi.php';

use User\User;

$delete = new User();

$delete->delete($_GET['NIS']);
?>
<h1>DATA Berhasil di Hapus</h1>
<a href="smp.php">Selesai</a>