<div class="container mt-3">
  <div class="card border-primary">
    <div class="card-header bg-info">
      <h3>Data SKS</h3>
    </div>
    <div class="card-body">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show alert1" role="alert">
          Data <strong><?= $this->session->flashdata('flash'); ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('hapus')) : ?>
        <div class="alert alert-danger alert-dismissible fade show alert1" role="alert">
          Data <strong><?= $this->session->flashdata('hapus'); ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <a href="<?= base_url('home/tambah') ?>" class="btn btn-success card-title">Tambah data <i class='bx bxs-file-plus'></i></a>
      <div class="row">
        <div class="col">
          <form action="" method="post" class="float-right">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari data" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <table class="table table-success table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jumlah SKS</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($sks as $s) { ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['jumlah_sks']; ?></td>
              <td>
                <a href="<?= base_url('home/edit/' . $s['id_sks']) ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('home/hapus/' . $s['id_sks']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
              </td>
            </tr>
        </tbody>
      <?php } ?>
      </table>
    </div>
  </div>
</div>