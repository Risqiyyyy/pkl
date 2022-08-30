<?php 
namespace UserGuru;

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
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where kelas='VII' OR kelas='VIII' OR kelas='IX' OR kelas='X' OR kelas='XI' OR kelas='XII' ORDER BY Tingkatan DESC");
		$stmt->execute(); 
		return $stmt;
	}

    public function showMapelIpaSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMP'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaViiSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMP' AND kelas= 'VII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaViiiSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMP' AND kelas= 'VIII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaIxSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMP' AND kelas= 'ix'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkSMP()
    {
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMP'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkViiSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMP' AND kelas= 'VII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkViiiSMP()
    {
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMP' AND kelas= 'VIII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkIxSMP()
    {
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMP' AND kelas= 'IX'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMP'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsViiSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMP' AND kelas= 'VII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsViiiSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMP' AND kelas= 'VIII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsIxSMP(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMP' AND kelas= 'IX'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaXSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'X'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaXISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XI'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpaXIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkXSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'X'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkXISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XI'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtkXIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsXSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'X'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsXISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XI'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpsXIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XII'");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpa1XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps1XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpa2XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps2XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIpa3XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps3XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Alam' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk1XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk2XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk1XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk2XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk1XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelMtk2XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Matematika' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps2XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps3XSMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'X' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps1XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps3XISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XI' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps1XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPA' ");
		$stmt->execute(); 
		return $stmt;
    }
    public function showMapelIps2XIISMA(){
        $conn = new Koneksi();
        $db=$conn->metal();
		$stmt=$db->prepare("SELECT NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan, mapel FROM guru where mapel='Ilmu Pengetahuan Sosial' AND Tingkatan='SMA' AND kelas= 'XII' AND nama_jurusan='IPS' ");
		$stmt->execute(); 
		return $stmt;
    }



    public function insertDataGuru($NIG,$nama,$kelas,$Tingkatan,$tgl_lahir,$jk,$alamat,$nama_jurusan,$mapel)
	{
        if(isset($_POST['input']))
		{
                $conn = new Koneksi();
                $db=$conn->metal();
                $sql="INSERT INTO guru (NIG,nama,kelas,Tingkatan,tgl_lahir,jk,alamat,nama_jurusan,mapel) VALUES (:NIG,:nama,:kelas,:Tingkatan,:tgl_lahir,:jk,:alamat,:nama_jurusan,:mapel)";
                $stmt=$db->prepare($sql);
				$stmt->bindParam(":NIG", $NIG);
				$stmt->bindParam(":nama", $nama);
                $stmt->bindParam(":kelas", $kelas);
                $stmt->bindParam(":Tingkatan", $Tingkatan);
                $stmt->bindParam(":tgl_lahir", $tgl_lahir);
                $stmt->bindParam(":jk", $jk);
                $stmt->bindParam(":alamat", $alamat);
                $stmt->bindParam(":nama_jurusan", $nama_jurusan);
                $stmt->bindParam(":mapel", $mapel);             
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


