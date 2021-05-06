<?php 
function base_url(){
	return 'http://'.$_SERVER['HTTP_HOST'].URLPROJEK;
}
function ubah_tgl($tgl){
	$asal = new Datetime($tgl);
	$waktu = $asal->format('d F Y');
	return $waktu;
}
function homepage(){
	return header('Location:'.base_url());
}
function alert_toast($teks,$warna){
	$warna = ($warna == 'berhasil')?'green':'red';
	echo "<script type='text/javascript'>M.toast({html: '".$teks."', 
	classes: 'rounded ".$warna."',outDuration:'100'});</script>";
}
function unset_sesialert(){
	unset($_SESSION['stts_insert']);
	unset($_SESSION['stts_update']);
	unset($_SESSION['stts_delete']);
}
?>
