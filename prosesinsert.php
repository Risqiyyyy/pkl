<?php
require 'user_smp.php';
require 'koneksi.php';

use User\User;

$insert = new User();

$insert->insertDataSiswa($_POST['NIS'],$_POST['nama'],$_POST['kelas'],$_POST['tgl_lahir'],$_POST['jk'],$_POST['alamat']);
?>
<h1>DATA Berhasil di tambahkan</h1>
<a href="smp.php">Selesai</a>
