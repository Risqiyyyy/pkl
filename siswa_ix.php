<?php 

session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}


require 'userix.php';
require 'koneksi.php';
use Userix\User;

$obj = new User();
?>
<h1>Siswa Kelas IX SMP Harapan Bangsa</h1>
<link rel="stylesheet" type="text/css" href="css/smp.css">

<br>
<form action = "input_siswa.php" method ="POST" name="login">
<input type ="submit" class="tombol_input1" name = "submit" value = "input data siswa">
</form>
<p>
<center>
<table class= 'table table-bordered table-responsive'>  
 <table border="1" width="1300px" >
    <tr>
     <th>NO</th>
     <th>NIG</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Tgl_Lahir</th>
     <th>JK</th>
     <th>Alamat</th>
     <th  colspan="5">aksi</th>
 </tr>
</center>
 
 <?php 
$no=1;
	$data=$obj->showDataix();
	if($data->rowCount()>0){
	while($row=$data->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
    
	<td><?php echo $no; ?></td>
	<td><?php echo $row['NIG']; ?></td>
	<td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['kelas']; ?></td>
    <td><?php echo $row['tgl_lahir']; ?></td>
    <td><?php echo $row['jk']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
   
    <td><a href="editguru.php?NIG=<?php echo $row['NIG']; ?>">Edit</a></td>
    <td><a href="proses_delete_guru.php?NIG=<?php echo $row['NIG']; ?>">Hapus</a></td>
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
 <form action = "smp.php" method ="POST" name="kembali">
<input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">

 </form>
 <form action = "siswa_vii.php" method ="POST" name="kelasvii">
<input type ="submit" class="tombol1" name = "kelasvii" value = "SISWA KELAS VII">
 </form>
 
<form action = "siswa_viii.php" method ="POST" name="kelasviii">
<input type ="submit" class="tombol2" name = "kelasviii" value = "SISWA KELAS VIII">
 </form>

 <form action = "siswa_ix.php" method ="POST" name="kelasxi">
<input type ="submit" class="tombol2" name = "kelasxi" value = "SISWA KELAS IX">
 </form>
 <h1>NAMA WALIKELAS</h1>
 <center>
<table class= 'table table-bordered table-responsive'>  
 <table border="1" width="1300px" >
    <tr>
     <th>NO</th>
     <th>NIS</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Tgl_Lahir</th>
     <th>JK</th>
     <th>Alamat</th>
     <th  colspan="5">aksi</th>
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
   
    <td><a href="editsmp.php?NIS=<?php echo $row['NIS']; ?>">Edit</a></td>
    <td><a href="prosesdelete.php?NIS=<?php echo $row['NIS']; ?>">Hapus</a></td>
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
 <h1>NAMA SISWA</h1>


