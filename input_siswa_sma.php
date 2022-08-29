<?php 
require 'user_sma.php';
require 'koneksi.php';

use UserSma\UserSma;

$obj = new UserSma();
?>

<head>
    <title>Input Siswa</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/smp.css">
    <form action="proses_insert_sma.php" method="POST" name="insert">
            <center>
                <table>
        <h1>INPUT SISWA SMA</h1>
        <tr>
            <td>
                <label>NIS:</label>
            </td>
            <td>
                <input type="text" name="NIS"  />
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
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                </select>
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
                <label for="nama_jurusan">Pilih jurusan :</label>
            </td>
            <td>
                <select id="nama_jurusan" name="nama_jurusan">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                </select>
            </td>
        </tr>

        </table>
        <center>
        <input type="submit" class="tombol1" name="input" value="input" />
</form>
        <form action = "sma.php" method ="POST" name="kembali">
<input type ="submit" class="tombol1" name = "submit" value = "kembali">
<body>
