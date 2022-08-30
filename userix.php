<?php 
namespace Userix;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama FROM siswa where kelas='IX' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataix()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat FROM guru where NIG='786867' AND kelas='IX' AND Tingkatan='SMP' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
}