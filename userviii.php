<?php 
namespace Userviii;

use Koneksi\Koneksi;

class User {
    public function __construct()
    {
       
    }

public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIS,nama,kelas,tgl_lahir,jk,alamat,nama FROM siswa where kelas='VIII' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataviii()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat FROM guru where NIG='2131' AND kelas='VIII' AND Tingkatan='SMP' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}
}