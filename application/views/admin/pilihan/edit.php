<div class="container mt-3">
    <div class="card border-primary">
        <div class="card-header bg-info">
            <h3>Edit Data Matkul Pilihan</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id_pilihan" value="<?= $pilihan['id_pilihan']; ?>">
                <div class="form-group">
                    <label for="nama_pilihan">Nama Mtakul pilihan</label>
                    <input type="text" name="nama_pilihan" class="form-control" id="nama_pilihan" placeholder="Masukkan Nama pilihan" value="<?= $pilihan['nama_pilihan']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_pilihan') ?></small>
                </div>
                <div class="form-group">
                    <label for="id_semester">Semester</label>
                    <select class="form-control" id="id_semester" name="id_semester">
                        <?php foreach ($semester as $s) : ?>
                            <?php if ($s == $semester['tbl_pilihan']) : ?>
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