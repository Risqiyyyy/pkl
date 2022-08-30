<?php 
namespace Userxii;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama_jurusan FROM siswa where kelas='XII' AND nama_jurusan='IPA' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataGuruXiiipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where NIG = '7685788' AND kelas='XII' AND nama_jurusan='IPA' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
}