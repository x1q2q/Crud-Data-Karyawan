<?php 
  require_once 'lib/connection.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM ".TBNAME." WHERE id_karyawan='".$id."'";
    $hasil = $conn->query($sql);
    while($res=$hasil->fetch_assoc()){
        $nama   = $res['nama'];
        $email  = $res['email'];
        $notelp = $res['telepon'];
        $gender = $res['jenis_kelamin'];
        $tmpt_lhr   = $res['tempat_lahir'];
        $tgl_lhr    = $res['tanggal_lahir'];
        $alamat    = $res['alamat'];
    }
  }
?>
 <div id="modal-edit" class="modal">
    <form method="post" action="views/editaksi.php?id=<?= $id; ?>" class="edit-karyawan section">
    <div class="modal-content col 12">
        <div class="row">
            <h5><b>Edit Data Karyawan</b>
                <button type="submit" class="right tooltipped pulse btn-large btn-floating waves-effect 
                waves-light orange" data-position="bottom" data-tooltip="Update Data">
                    <i class="material-icons">assignment_turned_in</i>
                </button></h5>
        <div class="divider"></div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="nama" id="nama" placeholder="masukkan nama" type="text" class="validate" required value="<?= $nama; ?>">
                <label for="nama">Nama</label>
            </div>
            <div class="input-field col s6">
                <input name="email" id="email" placeholder="masukkan email" type="email" class="validate" required value="<?= $email; ?>">
                <label for="email">Email</label>
            </div>    
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="no_telepon" id="telepon" placeholder="masukkan nomor telepon" type="text" class="validate" value="<?= $notelp; ?>">
                <label for="telepon">No. Telp (Optional)</label>
            </div>
            <div class="input-field col s12 m6">
                <select name="jenis_kelamin">
                  <option value="" disabled selected>Pilih Gendermu</option>
                  <option value="pria" <?php echo ($gender =='pria')? 'selected' : '' ; ?>>PRIA</option>
                  <option value="wanita" <?php echo ($gender =='wanita')? 'selected' : '' ; ?>>WANITA</option>
                </select>
                <label>Jenis Kelamin</label>
            </div>
        </div>       
        <div class="row">
            <div class="input-field col s6">
                <input name="tempat_lahir" id="tempat" placeholder="masukkan tempat kelahiran" type="text" class="validate" required value="<?= $tmpt_lhr; ?>">
                <label for="tempat">Tempat Kelahiran</label>
            </div>
            <div class="input-field col s6">
                <input name="tanggal_lahir" type="date" required value="<?= $tgl_lhr; ?>">
                <label for="tempat">Tanggal Lahir</label>
            </div>
        </div>
        <div class="input-field col s12">
          <textarea name="alamat" id="textarea-alm" class="materialize-textarea" rows="4"><?= $alamat; ?></textarea>
          <label for="textarea-alm">Alamat</label>
        </div>
    </div>
        </form>
  </div>
