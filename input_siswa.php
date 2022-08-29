<?php 
require 'user_smp.php';
require 'koneksi.php';
use User\User;

$obj = new User();
?>
<head>
    <title>Input Siswa SMP</title>
    <link rel="stylesheet" type="text/css" href="css/smp.css">
</head>
<body>
    <form action="prosesinsert.php" method="POST" name="insert">
        
        <center>
        <h1>INPUT SISWA SMP</h1>
        <table>
        <tr>
            <td>
                <label>NIS:</label>
            </td>
            <td>
                <input type="text"  name="NIS"/>
            </td>
        </tr><br/>

        <tr> 
            <td>
                <label>Nama:</label>
            </td>
            <td>
                <input type="text"  name="nama"/>
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
                <input type="date" name="tgl_lahir"  />
           </td> 
        </tr>

        <tr>
            <td>
                <label for="jk">Pilih Jenis Kelamin: </label>
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

        </center>
        </table>
        <br>
        <input type="submit" class="tombol1" name="input" value="input" />
    </form>
</body>


    
        <form action = "smp.php" method ="POST" name="kembali">
<input type ="submit" class="tombol1" name = "submit" value = "kembali">
        