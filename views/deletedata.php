<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  ?>
  <div id="modal-delete" class="modal">
    <div class="modal-content">
      <h4>Konfirmasi Hapus Data</h4>
      <h6>Yakin akan menghapus data ini?</h6>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect btn-flat">Cancel</a>
      <a href="views/deleteaksi.php?id=<?= $id; ?>" class="btn waves-effect btn-danger">Ya, Hapus</a>
    </div>
  </div>
