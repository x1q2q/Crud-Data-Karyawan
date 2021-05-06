<?php 
    require_once 'lib/connection.php'; 
    $sql = "SELECT * FROM ".TBNAME." ORDER BY id_karyawan DESC";
    $hasil = $conn->query($sql);
?>
<div id="main-content" class="container">
    <div class="center">
        <button data-target="modal-add" class="waves-effect waves-light btn modal-trigger add-btn sidenav-trigger">
            <i class="material-icons left">add</i> Tambah Data Karyawan
        </button>
    </div>  
    <div class="card-panel karyawan white-row">
       <?php if($hasil->num_rows > 0){ ?>
      <table class="striped responsive">
        <thead>
          <tr>
            <th>#No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Telpon</th>
            <th>Gender</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
        <?php 
            $no=0;
            while($res = $hasil->fetch_assoc()){ 
                $no++;
                $idkar = $res['id_karyawan'];
        ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $res['nama']; ?></td>
            <td><?= $res['email']; ?></td>
            <td><?= $res['telepon']; ?></td>
            <td><?= $res['jenis_kelamin']; ?></td>
            <td>
                <a href="?page=edit&id=<?= $idkar; ?>" class="btn-floating btn-small waves-effect waves-light grey">
                    <i class="material-icons">edit</i>
                </a>
                <a href="?page=view&id=<?= $idkar; ?>" class="btn-floating btn-small waves-effect waves-light teal">
                    <i class="material-icons">visibility</i>
                </a>
                <a href="?page=delete&id=<?= $idkar; ?>" class="btn-floating btn-small waves-effect waves-light red">
                    <i class="material-icons">delete</i>
                </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php }else{ ?>
        <div class="center-align"><h5>Data Masih kosong</h5></div>
    <?php } ?>
    </div>
    </div>
    </div>