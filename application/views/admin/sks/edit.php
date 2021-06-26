<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Edit Data SKS</h3> 
  </div>
  <div class="card-body">
    <form action="" method="post">
    <input type="hidden" name="id_sks" value="<?= $sks['id_sks']; ?>">
        <div class="form-group">
            <label for="jumlah_sks">Jumlah SKS</label>
            <input type="text" name="jumlah_sks" class="form-control" id="jumlah_sks" value="<?= $sks['jumlah_sks']; ?>">
            <small class="form-text text-danger"><?= form_error('jumlah_sks') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Edit Data</button>
    </form>
  </div>
</div>
</div>