<?php 
namespace Userxiips;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama_jurusan FROM siswa where kelas='XI' AND nama_jurusan='IPS' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataGuruXiips()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where NIG= '324089' AND kelas='XI' AND nama_jurusan='IPS' ORDER BY nama ASC ");
		$stmt->execute(); 
		return $stmt;
	}
}