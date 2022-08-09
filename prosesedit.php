<?php
require 'user_smp.php';
require 'koneksi.php';

use User\User;
use Koneksi\Koneksi;

$edit = new User();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
        $NIS  = $_POST['NIS'];
        $Nama = $_POST['Nama'];
        $kelas = $_POST['kelas'];
        $Tgl_lahir = $_POST['Tgl_lahir'];
        $Jk = $_POST['jk'];
        $Alamat = $_POST['alamat'];     
    
        $stmt = $db->prepare("UPDATE `Siswa` SET `NIS` = :NIS, `Nama` = :Nama,'Kelas'=:Kelas,'Tgl_lahir'=:Tgl_lahir,'Alamat'=:Alamat WHERE `NIS` = :NIS");
    
        $stmt->bindParam(":NIS", $NIS, PDO::PARAM_STR);
        $stmt->bindParam(":Nama", $Nama, PDO::PARAM_STR);
        $stmt->bindParam(":Kelas", $Kelas, PDO::PARAM_STR);
        $stmt->bindParam(":Tgl_lahir", $Tgl_lahir, PDO::PARAM_STR);
        $stmt->bindParam(":Alamat", $Alamat, PDO::PARAM_STR);
        
    
        $stmt->execute(array(':NIS' => $_POST['NIS'], ':Nama' => $_POST['Nama'],':Kelas' => $_POST['Kelas'],':Tgl_lahir' => $_POST['Tgl_lahir'],':Alamat' => $_POST['Alamat'], ':NIS' => $NIS));
    
    ?>
    <form action="prosesedit.php" method="POST" name="edit">
        <fieldset>
        <legend>Edit Siswa</legend>
        <p>
            <label>NIS:</label>
            <input type="text" name="NIS" value="<?=$data['NIS']; ?>"/>
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?=$data['nama']; ?>"/>
        </p>
        <p>
            <label for="kelas">Pilih Kelas :</label>
            <select id="kelas" name="kelas">
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
            </select>
        </p>
        <p>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']; ?>" />
        </p>
        <p>
        <label for="jk">Pilih Jenis Kelamin:</label>
            <select id="jk" name="jk">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
            </select>
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="nama" value="<?=$data['alamat']; ?>"/>
        </p>
        <p>
            <input type="submit" name="edit" value="edit" />
        </p>
        </fieldset>
    </form>
    <?php
     } else{
         echo "<h5>No ID Found</h5>";
            }
     ?>
</body>
</html>
