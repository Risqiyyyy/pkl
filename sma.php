<?php
require 'user_sma.php';
require 'koneksi.php';
use UserSma\UserSma;

$obj = new UserSma();
?>
<h1>Siswa SMA Harapan Bangsa</h1>
<a href="input_siswa_sma.php">Input Data Siswa SMA</a>
<br>
<a href="index.php">Kembali</a>
<table class='table table-bordered table-responsive'>
 <tr>
     <th>NO</th>
     <th>NIS</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Tgl_Lahir</th>
     <th>JK</th>
     <th>Alamat</th>
     <th>nama_jurusan</th>
     <th>aksi</th>
     <th colspan="5" align="center"></th>
 </tr>
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
    <td><a href="proses_edit_sma.php?NIS=<?php echo $row['NIS']; ?>">Edit</a></td>
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