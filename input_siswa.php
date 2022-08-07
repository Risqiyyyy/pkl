<?php 
require 'user.php';
require 'koneksi.php';
use User\User;

$obj = new User();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Siswa</title>
</head>
<body>
    <form action="prosesinsert.php" method="POST" name="insert">
        <fieldset>
        <legend>Input Siswa</legend>
        <p>
            <label>NIS:</label>
            <input type="text" name="NIS"  />
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama"  />
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
            <input type="date" name="tgl_lahir"  />
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
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <input type="submit" name="input" value="input" />
        </p>
        <P>
            <a href="smp.php">Kembali</a>
        </P>
        </fieldset>
    </form>
</body>
</html>
