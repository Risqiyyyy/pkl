<?php 
namespace Userx;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama_jurusan FROM siswa where kelas='X' AND nama_jurusan='IPA' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}

    public function showDataGuruXipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where NIG= '	142526' AND kelas='X' AND nama_jurusan='IPA' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
} 