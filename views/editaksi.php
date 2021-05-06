<?php 
require_once '../core.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])){
    $id = $_GET['id'];
	$nm = $_POST['nama'];
	$email = $_POST['email'];
	$notelp = $_POST['no_telepon'];
	$jk	= $_POST['jenis_kelamin'];
	$tmpt_lhr = $_POST['tempat_lahir'];
	$tgl_lhr = $_POST['tanggal_lahir'];
	$alm = $_POST['alamat'];
	if(!empty($nm) && !empty($email) && !empty($jk) && !empty($tmpt_lhr) && !empty($tgl_lhr) && !empty($alm)){
		$notelp = ($notelp == null)?'-':$notelp;

		$sqlupdate = "UPDATE ".TBNAME." SET nama='".$nm."', email='".$email."', telepon='".$notelp."', alamat='".$alm."', jenis_kelamin='".$jk."', tempat_lahir='".$tmpt_lhr."', tanggal_lahir='".$tgl_lhr."' WHERE id_karyawan='".$id."' "; 

		if($conn->query($sqlupdate)){
			$_SESSION['stts_update'] = 'berhasil';
		}else{
			$_SESSION['stts_update'] = 'gagal';
		}
	}else{
		$_SESSION['stts_update'] = 'gagal';
	}
	homepage();
}
?>
