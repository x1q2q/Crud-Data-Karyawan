<?php 
  require_once '../core.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sqldel = "DELETE FROM ".TBNAME." WHERE id_karyawan='".$id."'";
    $hasil = $conn->query($sqldel);
    
    if($hasil){
      $_SESSION['stts_delete'] = 'berhasil';
    }else{
      $_SESSION['stts_delete'] = 'gagal';
    }
    homepage();
  }