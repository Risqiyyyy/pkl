<?php 
namespace Userxiiips;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama_jurusan FROM siswa where kelas='XII' AND nama_jurusan='IPS'");
		$stmt->execute(); 
		return $stmt;
	}
}