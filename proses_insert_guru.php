<?php
require 'user_guru.php';
require 'koneksi.php';

use UserGuru\UserGuru;

$insert = new UserGuru();

$insert->insertDataSiswa($_POST['NIG'],$_POST['nama'],$_POST['kelas'],$_POST['Tingkatan'],$_POST['tgl_lahir'],$_POST['jk'],$_POST['alamat']);
?>
<h1>DATA Berhasil di tambahkan</h1>
<a href="guru.php">Selesai</a>