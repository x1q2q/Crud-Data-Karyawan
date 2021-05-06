<?php require_once 'core.php'; ?>
<?php 
	include 'views/t_navbar.php';
	include 'views/t_content.php';
	include 'views/tambahdata.php';

	if(isset($_GET['page'])){
		$page = $_GET['page'];
		if($page == 'edit'){
			include 'views/editdata.php';
		}else if($page == 'delete'){
			include 'views/deletedata.php';
		}else if($page == 'view'){
			include 'views/viewdata.php';
		}
	}
	if(isset($_SESSION['stts_insert'])){
		alert_toast($_SESSION['stts_insert'].' menambahkan data karyawan',
			$_SESSION['stts_insert']);
	}
	if(isset($_SESSION['stts_delete'])){
		alert_toast($_SESSION['stts_delete'].' menghapus data karyawan',
			$_SESSION['stts_delete']);
	}
	if(isset($_SESSION['stts_update'])){
		alert_toast($_SESSION['stts_update'].' mengupdate data karyawan',
			$_SESSION['stts_update']);
	}
	unset_sesialert();
	include 'views/t_footer.php';
?>
