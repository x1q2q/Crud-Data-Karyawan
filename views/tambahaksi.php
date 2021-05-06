<?php 
require_once '../core.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nm = $_POST['nama'];
	$email = $_POST['email'];
	$notelp = $_POST['no_telepon'];
	$jk	= $_POST['jenis_kelamin'];
	$tmpt_lhr = $_POST['tempat_lahir'];
	$tgl_lhr = $_POST['tanggal_lahir'];
	$alm = $_POST['alamat'];
	if(!empty($nm) && !empty($email) && !empty($jk) && !empty($tmpt_lhr) && !empty($tgl_lhr) && !empty($alm)){
		$notelp = ($notelp == null)?'-':$notelp;
		$sqlinsert = "INSERT INTO ".TBNAME." VALUES (null, '".$nm."', '".$email."', '".$notelp."', '".$alm."', '".$jk."', '".$tmpt_lhr."', '".$tgl_lhr."')"; 
		if($conn->query($sqlinsert)){
			$_SESSION['stts_insert'] = 'berhasil';
		}else{
			$_SESSION['stts_insert'] = 'gagal';
		}
	}else{
		$_SESSION['stts_insert'] = 'gagal';
	}
	homepage();
}
?>
