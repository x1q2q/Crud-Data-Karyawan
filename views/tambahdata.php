
 <div id="modal-add" class="modal">
    <form method="post" action="views/tambahaksi.php" class="add-karyawan section">
    <div class="modal-content col 12">
        <div class="row">
            <h5><b>Tambah Data Karyawan</b>
            <button type="submit" class="right tooltipped pulse btn-large btn-floating waves-effect 
                waves-light teal" data-position="bottom" data-tooltip="Submit Data">
                <i class="material-icons">assignment_turned_in</i>
            </button></h5>
        <div class="divider"></div> 
        </div>        
        <div class="row">
            <div class="input-field col s6">
                <input name="nama" id="nama" placeholder="masukkan nama" type="text" class="validate" 
                required>
                <label for="nama">Nama</label>
            </div>
            <div class="input-field col s6">
                <input name="email" id="email" placeholder="masukkan email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>    
        </div>
        <div class="row">
            <div class="input-field col s6">
            <input name="no_telepon" id="telepon" placeholder="masukkan nomor telepon" type="text" class="validate">
            <label for="telepon">No. Telp (Optional)</label>
        </div>
        <div class="input-field col s12 m6">
            <select name="jenis_kelamin" required>
              <option value="" disabled selected>Pilih Gendermu</option>
              <option value="pria">PRIA</option>
              <option value="wanita">WANITA</option>
            </select>
            <label>Jenis Kelamin</label>
        </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="tempat_lahir" id="tempat" placeholder="masukkan tempat kelahiran" type="text" class="validate" required>
                <label for="tempat">Tempat Kelahiran</label>
            </div>
            <div class="input-field col s6">
                <input name="tanggal_lahir" type="date" required>
                <label for="tempat">Tanggal Lahir</label>
            </div>
        </div>
        <div class="input-field col s12">
          <textarea name="alamat" id="textarea-alm" class="materialize-textarea" rows="4" required></textarea>
          <label for="textarea-alm">Alamat</label>
        </div>
    </div>
    </form>
  </div>