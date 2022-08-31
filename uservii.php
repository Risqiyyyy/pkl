<?php 
namespace Uservii;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama FROM siswa where kelas='VII' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDatavii()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat FROM guru where NIG='323456' AND kelas='VII' AND Tingkatan='SMP' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
}
