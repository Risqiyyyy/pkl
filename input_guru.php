<?php
require 'user_guru.php';
require 'koneksi.php';
use UserGuru\UserGuru;

$obj = new UserGuru();
?>

<head>
    <title>Input Guru</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/smp.css">
    <form action="proses_insert_guru.php" method="POST" name="insert">
        <center>
        <h1>INPUT GURU SMP</h1>
<table>
        <tr>
            <td>
                <label>NIG:</label>
            </td>
            <td>
                <input type="text" name="NIG"  />
            </td>
        </tr>
        <tr>
            <td>
                <label>Nama:</label>
            </td>
            <td>
                <input type="text" name="nama"  />
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
                <label for="Tingkatan">Tingkatan:</label>
            </td>
            <td>
            <input type="checkbox" id="Tingkatan" name="Tingkatan" value="SMP" checked>
            <label for="Tingkatan"> SMP </label>
            </td>
        </tr>
        <tr>
            <td>
               <label>Tanggal Lahir:</label>
            </td>
            <td>
                <input type="date" name="tgl_lahir"  />
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
                <textarea name="alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_jurusan">Pilih Jurusan:</label>
            </td>
            <td>
            <input type="checkbox" id="nama_jurusan" name="nama_jurusan" value="TIDAK ADA" checked>
            <label for="nama_jurusan"> TIDAK ADA </label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="mapel">Mapel:</label>
            </td>
            <td>
                <select id="mapel" name="mapel">
                <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                <option value="Matematika">Matematika</option>
                <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                </select>
            </td>
        </tr>
        <center>
        </table>
        <input type="submit" class="tombol1" name="input" value="input" />
    </form>
        <form action = "gurusmp.php" method ="POST" name="kembali">
<input type ="submit" class="tombol1" name = "submit" value = "kembali">
</body>
</html>