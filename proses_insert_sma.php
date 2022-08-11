<?php
require 'user_sma.php';
require 'koneksi.php';

use UserSma\UserSma;

$insert = new UserSma();

$insert->insertDataSiswa($_POST['NIS'],$_POST['nama'],$_POST['kelas'],$_POST['tgl_lahir'],$_POST['jk'],$_POST['alamat'],$_POST['nama_jurusan']);
?>
<h1>DATA Berhasil di tambahkan</h1>
<a href="sma.php">Selesai</a>