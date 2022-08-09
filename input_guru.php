<?php
require 'user_guru.php';
require 'koneksi.php';
use UserGuru\UserGuru;

$obj = new UserGuru();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Guru</title>
</head>
<body>
    <form action="proses_insert_guru.php" method="POST" name="insert">
        <fieldset>
        <legend>Input Siswa</legend>
        <p>
            <label>NIG:</label>
            <input type="text" name="NIG"  />
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
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
            </select>
        </p>
        <p>
        <label for="Tingkatan">Pilih Tingkatan:</label>
            <select id="Tingkatan" name="Tingkatan">
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
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
            <a href="guru.php">Kembali</a>
        </P>
        </fieldset>
    </form>
</body>
</html>