<?php
require 'user_guru.php';
require 'koneksi.php';
use UserGuru\UserGuru;

$obj = new UserGuru();
?>
<h1>Guru SMA dan SMP Harapan Bangsa</h1>

<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
<br>
<form action = "input_guru.php" method ="POST" name="login">
<input type ="submit" class="tombol_input1" name = "submit" value = "Input Data Guru">
<center>
<table class= 'table table-bordered table-responsive'> 
 <tr>
 <tr>
    
 <table border="1" width="1300px" >
 <tr>
     <th>NO</th>
     <th>NIG</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Tingkatan</th>
     <th>Tgl_Lahir</th>
     <th>JK</th>
     <th>Alamat</th>
     <th>aksi</th>
     <th colspan="5" align="center"></th>
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
	<td><?php echo $row['NIG']; ?></td>
	<td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['kelas']; ?></td>
    <td><?php echo $row['Tingkatan']; ?></td>
    <td><?php echo $row['tgl_lahir']; ?></td>
    <td><?php echo $row['jk']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
   
    <td><a href="proses_edit_guru.php?NIS=<?php echo $row['NIG']; ?>">Edit</a></td>
    <td><a href="proses_delete_guru.php?NIS=<?php echo $row['NIG']; ?>">Hapus</a></td>
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
 <form action = "index.php" method ="POST" name="kembali">
<input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
                    
