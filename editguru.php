<?php
require 'user_guru.php';
require 'koneksi.php';

use UserGuru\UserGuru;
use Koneksi\Koneksi;

$edit = new UserGuru();

?>
<body>
<link rel="stylesheet" type="text/css" href="css/smp.css">
    <?php
    if(!isset($_GET['NIG'])){
        die("Error: ID Tidak Dimasukkan");
    }
    
    //Ambil data
    $conn = new Koneksi();
    $db=$conn->metal();
    $query = $db->prepare("SELECT * FROM guru WHERE NIG = :NIG");
    $query->bindParam(":NIG", $_GET['NIG']);
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
    <form action="prosesedit_guru.php" method="POST" name="edit">
       <center>
        <h1>Edit GURU</h1>
<table>
        <tr>
            <td>
                <label>NIG:</label>
            </td>
            <td>
                <input type="text" name="NIG" value="<?=$data['NIG']; ?>" />
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
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="Tingkatan">Pilih Tingkatan:</label>
            </td>
            <td>
                <select id="Tingkatan" name="Tingkatan">
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
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
                <textarea name="alamat" value="<?=$data['alamat']; ?>"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_jurusan">Pilih Jurusan:</label>
            </td>
            <td>
                <select id="nama_jurusan" name="nama_jurusan">
                <option value="TIDAK ADA">TIDAK ADA</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                </select>
            </td>
        </tr>
        </center>
</table>
<input type="submit" class="tombol1" name="edit" value="Edit" />
    </form>
    <form action = "guru.php" method ="POST" name="kembali">
<input type ="submit" class="tombol1" name = "submit" value = "Batal Edit">
</body>
</html>
