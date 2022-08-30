<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}


require 'user_guru.php';
require 'koneksi.php';
use UserGuru\UserGuru;

$obj = new UserGuru();
?>
<h1>GURU MAPEL IPA XI SMA</h1>

<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>

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
     <th>Jurusan</th>
     <th>Mapel</th>
     <th colspan="5">aksi</th>
 </tr>
</center>
 <?php 
$no=1;
	$data=$obj->showMapelIps2XISMA();
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
    <td><?php echo $row['nama_jurusan']; ?></td>
    <td><?php echo $row['mapel']; ?></td>
   
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
 <form action = "ipasma.php" method ="POST" name="kembali">
<input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
 </form>
 
 <form action = "xipa.php" method ="POST" name="x">
    <input type ="submit" class="tombol2" name = "x" value = "X">
    </form>

    <form action = "xiipa.php" method ="POST" name="xi">
    <input type ="submit" class="tombol2" name = "xi" value = "XI">
    </form>

    <form action = "xiiipa.php" method ="POST" name="xiiipa">
    <input type ="submit" class="tombol2" name = "xiiipa" value = "XII">
    </form>

    <form action="" method="POST">
    <label></label>
 <select  name="category" onChange="document.location.href=this.options[this.selectedIndex].value;">
 <option value="">-- Pilih Jurusan -- </option>
     <option value="xipa2.php?XIPA"> IPA</option>
     <option value="xips2.php?XIIPA"> IPS</option>
 </select>
    <?php
        if (isset($_GET["XIPA"])) { header ("location:xipa2.php");}
        elseif(isset($_GET["XIIPA"])) { header ("location:xips2.php");}
    ?>
 
 </form>
    
 <h2>Jurusan IPS</h2>