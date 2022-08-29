<?php

session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}

require 'userxi_ipa.php';
require 'koneksi.php';
use Userxi\User;

$obj = new User();
?>
<h1>Siswa Kelas XI IPA SMA Harapan Bangsa</h1>
<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
<form action = "input_siswa_sma.php" method ="POST" name="login">
<input type ="submit" class="tombol_input1" name = "submit" value = "Input Data Siswa">
<center>
<table class= 'table table-bordered table-responsive'> 
 <tr>
 <tr>
    
 <table border="2" width="1500px" >
 <tr>
    <tr>
     <th>NO</th>
     <th>NIS</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Tgl_Lahir</th>
     <th>JK</th>
     <th>Alamat</th>
     <th>nama_jurusan</th>
     <th colspan="5">aksi</th>
 </tr>
</center>
 <?php 
$no=1;
	$data=$obj->showData();
	if($data->rowCount()>0){
	while($row=$data->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $row['NIS']; ?></td>
	<td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['kelas']; ?></td>
    <td><?php echo $row['tgl_lahir']; ?></td>
    <td><?php echo $row['jk']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
    <td><?php echo $row['nama_jurusan']; ?></td>
    <td><a href="editsma.php?NIS=<?php echo $row['NIS']; ?>">Edit</a></td>
    <td><a href="proses_delete_sma.php?NIS=<?php echo $row['NIS']; ?>">Hapus</a></td>
    </tr>
    </form>
<?php 
$no+=1; } 
$data->closeCursor();
}else{
echo '<tr>
		<td> Not found</td>	
    </tr>';
}
?>

 <!-- start ipa -->
 <form action = "index.php" method ="POST" name="kembali">
    <input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
    </form>

    <form action = "siswa_x_ipa.php" method ="POST" name="kelasx">
    <input type ="submit" class="tombol1" name = "kelasx" value = "SISWA KELAS X IPA">
    </form>

    <form action = "siswa_xi_ipa.php" method ="POST" name="kelasxi">
    <input type ="submit" class="tombol1" name = "kelasxi" value = "SISWA KELAS XI IPA">
    </form>

    <form action = "siswa_xii_ipa.php" method ="POST" name="Kelasxii">
    <input type ="submit" class="tombol1" name = "Kelasxii" value = "SISWA KELAS XII IPA">
    </form>
    </p>
    <!-- end ipa -->

    <!-- start ips -->

    <form action = "siswa_x_ips.php" method ="POST" name="kelasx">
    <input type ="submit" class="tombol1" name = "kelasx" value = "SISWA KELAS X IPS">
    </form>
    
    <form action = "siswa_xi_ips.php" method ="POST" name="kelasx">
    <input type ="submit" class="tombol1" name = "kelasx" value = "SISWA KELAS XI IPS">
    </form>

    <form action = "siswa_xii_ips.php" method ="POST" name="kelasx">
    <input type ="submit" class="tombol1" name = "kelasx" value = "SISWA KELAS XII IPS">
    </form>
    </P>