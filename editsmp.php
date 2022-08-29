<?php
require 'user_smp.php';
require 'koneksi.php';

use Koneksi\Koneksi;
use User\User;

$edit = new User();

?>

<head>
    <title>Edit Siswa</title>
</head>
<link rel="stylesheet" type="text/css" href="css/smp.css">
<body>
   
<?php

if(!isset($_GET['NIS'])){
    die("Error: ID Tidak Dimasukkan");
}

//Ambil data
$conn = new Koneksi();
$db=$conn->metal();
$query = $db->prepare("SELECT * FROM siswa WHERE NIS = :NIS");
$query->bindParam(":NIS", $_GET['NIS']);
// Jalankan perintah sql
$query->execute();
if($query->rowCount() == 0){
    // Tidak ada hasil
    die("Error: ID Tidak Ditemukan");
}else{
    // ID Ditemukan, Ambil data
    $data = $query->fetch();
}


?>
    
    <form action="prosesedit_smp.php" method="POST" name="submit">
        <center>
        <table>
        <h1>EDIT SISWA</h1>
        <tr>
            <td>
                <label>NIS:</label>
            </td>
            <td>
                <input type="text" name="NIS" value="<?=$data['NIS']; ?>"/>
            </td>
        </tr>

        <tr>
            <td>
                <label>Nama:</label>
            </td>
            <td>
                <input type="text" name="nama" value="<?=$data['nama']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="kelas">Pilih Kelas :</label>
            </td>
            <td>
                <select id="kelas" name="kelas">
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
                <option value="IX">IX</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <label>Tanggal Lahir:</label>
            </td>
            <td>
                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']; ?>" />
            </td>
        </tr>

        <tr>
            <td>
                <label for="jk">Pilih Jenis Kelamin:</label>
            </td>
            <td>
                <select id="jk" name="jk">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>
                <label>Alamat:</label>
            </td>
            <td>
                <input type="text" name="alamat" value="<?=$data['alamat']; ?>"/>
            </td>
        </tr>

        </center>
        </table>
        <input type="submit" class="tombol1" name="submit" value="edit" />
    </form>
</body>
</html>
        <form action = "smp.php" method ="POST" name="kembali">
        <input type ="submit" class="tombol1" name = "submit" value = "Batal">
