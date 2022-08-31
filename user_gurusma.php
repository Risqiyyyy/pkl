<?php 
namespace UserGuruSMA;

use Koneksi\Koneksi;
use PDOException;
class UserGuru 
{
    public function __construct()
    {
       
    }

    public function login($username,$password) 
    {
        $conn = new Koneksi();
        $db=$conn->metal();
        $kelompok=$db->prepare("SELECT * FROM user");
        $kelompok->execute();
        $hasil=$kelompok->fetchAll();

        $dbusername=$hasil[0]['username'];
        $dbpassword=$hasil[0]['password'];
        if(($username==$dbusername)&&($password==$dbpassword)){
           header("location:index.php");
        }else{
           header("location:login.php");
        }        
    }

    public function showData()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan,mapel FROM guru where  kelas='X' OR kelas='XI' OR kelas='XII' ORDER BY nama ASC");
		$stmt->execute(); 
		return $stmt;
	}

    public function showDataXipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='X' AND nama_jurusan='IPA'");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataXiipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='XI' AND nama_jurusan='IPA'");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataXiiipa()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='XII' AND nama_jurusan='IPA'");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataXips()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='X' AND nama_jurusan='IPS'");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataXiips()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='XI' AND nama_jurusan='IPS'");
		$stmt->execute(); 
		return $stmt;
	}
    public function showDataXiiips()
	{
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan FROM guru where  kelas='XII' AND nama_jurusan='IPS'");
		$stmt->execute(); 
		return $stmt;
	}




    public function insertDataGuru($NIG,$nama,$kelas,$Tingkatan,$tgl_lahir,$jk,$alamat,$nama_jurusan)
	{
        if(isset($_POST['input']))
		{
                $conn = new Koneksi();
                $db=$conn->metal();
                $sql="INSERT INTO guru (NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan) VALUES (:NIG,:nama,:kelas,:Tingkatan,:tgl_lahir,:jk,:alamat,:nama_jurusan) ORDER BY nama_jurusan DESC;";
                $stmt=$db->prepare($sql);
				$stmt->bindParam(":NIG", $NIG);
				$stmt->bindParam(":nama", $nama);
                $stmt->bindParam(":kelas", $kelas);
                $stmt->bindParam(":Tingkatan", $Tingkatan);
                $stmt->bindParam(":tgl_lahir", $tgl_lahir);
                $stmt->bindParam(":jk", $jk);
                $stmt->bindParam(":alamat", $alamat);
                $stmt->bindParam(":nama_jurusan", $nama_jurusan);                   
				$stmt->execute();
				return true;
                header("location:guru.php");
		}
        
    }
    
    public function delete($NIG)
	{
        $conn = new Koneksi();
        $db=$conn->metal();
        $sql ="DELETE FROM guru WHERE NIG = :NIG";
        $stmt =$db->prepare($sql);
         $stmt->bindParam(":NIG", $NIG);
         $stmt->execute();
        return true;
        header("location:guru.php");
	}
    public function editGuru($NIG,$nama,$kelas,$Tingkatan,$tgl_lahir,$jk,$alamat)
    {
        if(isset($_POST['edit']))
        {
            $NIS = $_POST['NIG'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $Tingkatan = $_POST['Tingkatan'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $nama_jurusan = $_POST['nama_jurusan'];
        }try {
            $conn = new Koneksi();
            $db=$conn->metal();
            $query = "UPDATE guru SET NIG=:NIG, nama=:nama, kelas=:kelas, Tingkatan=:Tingkatan, tgl_lahir=:tgl_lahir, jk=:jk, alamat=:alamat, nama_jurusan=:nama_jurusan WHERE NIG=:NIG";
            $statement = $db->prepare($query);
            $data = [
                ':NIG' => $NIG,
                ':nama' => $nama,
                ':kelas' => $kelas,
                ':Tingkatan' => $Tingkatan,
                ':tgl_lahir' => $tgl_lahir,
                ':jk' => $jk,
                ':alamat' => $alamat,
                ':nama_jurusan' => $nama_jurusan
            ];
            $query_execute = $statement->execute($data);
            if($query_execute)
            {
                header('Location:guru.php');
                exit(0);
            }
            else
            {
                header('Location:guru.php');
                exit(0);
            }
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}


