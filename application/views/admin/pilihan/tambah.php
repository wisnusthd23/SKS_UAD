<div class="container mt-3">
    <div class="card border-primary">
        <div class="card-header bg-info">
            <h3>Tambah Data Matkul Pilihan</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama_pilihan">Nama Matkul</label>
                    <input type="text" name="nama_pilihan" class="form-control" id="nama_pilihan" placeholder="Masukkan Nama Matkul">
                    <small class="form-text text-danger"><?= form_error('nama_pilihan') ?></small>
                </div>
                <div class="form-group">
                    <label for="id_semester">Semester</label>
                    <select class="form-control" id="id_semester" name="id_semester">
                        <option value="">Semester</option>
                        <?php foreach ($pilihan as $key => $value) { ?>
                            <option value="<?= $value->id_semester ?>"><?= $value->nama_semester ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
</div>