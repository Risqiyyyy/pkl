<?php 
namespace Userxi;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama_jurusan FROM siswa where kelas='XI' AND nama_jurusan='IPA' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataGuruXiipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where NIG= '	1553677' AND kelas='XI' AND nama_jurusan='IPA' ORDER BY nama ASC ");
		$stmt->execute(); 
		return $stmt;
	}
}