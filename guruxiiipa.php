<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}


require 'user_gurusma.php';
require 'koneksi.php';
use UserGuruSMA\UserGuru;

$obj = new UserGuru();
?>
<h1>Guru Kelas XII IPA SMA Harapan Bangsa</h1>

<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
<br>
<form action = "input_guru_sma.php" method ="POST" name="login">
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
     <th>JURUSAN</th>
     <th colspan="5">aksi</th>
 </tr>
</center>
 <?php 
$no=1;
	$data=$obj->showDataXiiipa();
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
<form action = "guru.php" method ="POST" name="kembali">
<input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
 </form>

 <form action = "gurusmp.php" method ="POST" name="gurusmp">
    <input type ="submit" class="tombol2" name = "gurusmp" value = "GURU SMP">
    </form>

    <form action = "gurusma.php" method ="POST" name="gurusma">
    <input type ="submit" class="tombol2" name = "gurusma" value = "GURU SMA">
    </form>

    <!-- FILTER jarcok -->
    <form action="" method="POST">
    <label></label>
 <select  name="category" onChange="document.location.href=this.options[this.selectedIndex].value;">
 <option value="">-- Pilih Kelas & Jurusan -- </option>
     <option value="guruxipa.php?XIPA">X IPA</option>
     <option value="guruxiipa.php?XIIPA">XI IPA</option>
     <option value="guruxiiipa.php?XIIIPA">XII IPA</option>
     <option value="guruxips.php?XIPS">X IPS</option>
     <option value="guruxiips.php?XIIPS">XI IPS</option>
     <option value="guruxiiips.php?XIIIPS">XII IPS</option>
 </select>
    <?php
        if (isset($_GET["XIPA"])) { header ("location:guruxipa.php");}
        elseif(isset($_GET["XIIPA"])) { header ("location:guruxiipa.php");}
        elseif(isset($_GET["XIIIPA"])) { header ("location:guruxiiipa.php");}
        elseif(isset($_GET["XIPS"])) { header ("location:guruxips.php");}
        elseif(isset($_GET["XIIPS"])) { header ("location:guruxiips.php");}
        elseif(isset($_GET["XIIIPS"])) { header ("location:guruxiiips.php");}
    ?>
 
 </form>
