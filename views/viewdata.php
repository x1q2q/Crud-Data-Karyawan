<?php 
  require_once 'lib/connection.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM ".TBNAME." WHERE id_karyawan='".$id."'";
    $hasil = $conn->query($sql);
    while($res=$hasil->fetch_assoc()){
      $nama = $res['nama'];
      $tgl_lhr = $res['tanggal_lahir'];
      $tmpt_lhr = $res['tempat_lahir'];
      $alamat = $res['alamat'];
    }
  }
?>
  <div id="modal-view" class="modal">
    <div class="modal-content">
      <h4>Detail Data #<?= $id; ?></h4><br/>
      <div class="divider"></div>
      <div class="center-align">
        <table class="striped">
          <tbody>
             <tr>
              <td><b>NAMA</b></td>
              <td>:</td>
              <td><?= $nama; ?></td>
            </tr>
            <tr>
              <td><b>TEMPAT TANGGAL LAHIR</b></td>
              <td>:</td>
              <td><?= $tmpt_lhr.', '.ubah_tgl($tgl_lhr); ?></td>
            </tr>
            <tr>
              <td><b>ALAMAT</b></td>
              <td>:</td>
              <td><?= $alamat; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect btn-flat">Close</a>
    </div>
  </div>
