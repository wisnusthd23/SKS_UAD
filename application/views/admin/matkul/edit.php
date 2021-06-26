<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Edit Data Matkul</h3> 
  </div>
  <div class="card-body">
    <form action="" method="post">
    <input type="hidden" name="id_matkul" value="<?= $matkul['id_matkul']; ?>">
        <div class="form-group">
            <label for="nama_matkul">Nama Matkul</label>
            <input type="text" name="nama_matkul" class="form-control" id="nama_matkul" placeholder="Masukkan Nama Matkul" value="<?= $matkul['nama_matkul']; ?>">
            <small class="form-text text-danger"><?= form_error('nama_matkul') ?></small>
        </div>
        <div class="form-group">
            <label for="id_semester">Semester</label>
            <select class="form-control" id="id_semester" name="id_semester">
                <?php foreach($semester as $s) : ?>
                <?php if($s == $semester['tbl_matkul']) : ?>
                        <option value="<?= $s; ?>" selected><?= $s; ?></option>
                <?php else : ?>
                        <option value="<?= $s; ?>"><?= $s; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Ubah Data</button>
    </form>
  </div>
</div>
</div>