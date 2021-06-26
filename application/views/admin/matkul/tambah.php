<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Matkul</h3> 
  </div>
  <div class="card-body">
    <form action="" method="post">
        <div class="form-group">
            <label for="nama_matkul">Nama Matkul</label>
            <input type="text" name="nama_matkul" class="form-control" id="nama_matkul" placeholder="Masukkan Nama Matkul">
            <small class="form-text text-danger"><?= form_error('nama_matkul') ?></small>
        </div>
        <div class="form-group">
            <label for="id_semester">Semester</label>
            <select class="form-control" id="id_semester" name="id_semester">
                <option value="">Semester</option>
                <?php foreach ($matkul as $key => $value) { ?>
                        <option value="<?= $value->id_semester ?>"><?= $value->nama_semester ?></option>
                <?php } ?>
            </select>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
    </form>
  </div>
</div>
</div>