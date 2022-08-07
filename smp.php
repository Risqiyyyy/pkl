<?php 
require 'user.php';
require 'koneksi.php';
use User\User;

$obj = new User();
?>
<h1>Siswa SMP Harapan Bangsa</h1>
<a href="input_siswa.php">Input Data Siswa SMP</a>
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
    <td><a href="prosesedit.php?NIS=<?php echo $row['NIS']; ?>">Edit</a></td>
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
                    
