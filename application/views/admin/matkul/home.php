<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Data Matkul</h3> 
  </div>
  <div class="card-body">
  <?php if($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show alert1" role="alert">
      Data <strong><?= $this->session->flashdata('flash'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('hapus')) : ?>
    <div class="alert alert-danger alert-dismissible fade show alert1" role="alert">
      Data <strong><?= $this->session->flashdata('hapus'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>
    <a href="<?= base_url('matkul/tambah') ?>" class="btn btn-success card-title">Tambah data <i class='bx bxs-file-plus'></i></a>
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
    <?php if(empty($matkul)) : ?>
        <div class="alert alert-danger" role="alert">
          data tidak ditemukan!!
        </div>
      <?php endif; ?>

    <table class="table table-success table-striped text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Matkul</th>
          <th scope="col">Semester</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1; foreach ($matkul as $m){ ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $m['nama_matkul']; ?></td>
          <td><?= $m['nama_semester']; ?></td>
          <td>
          <a href="<?= base_url('matkul/edit/'.$m['id_matkul']) ?>" class="badge badge-success">Edit</a>
          <a href="<?= base_url('matkul/hapus/'.$m['id_matkul']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
          </td>
        </tr>
      </tbody>
      <?php } ?>
      
    </table>
    <div class="row mt-2">
          <div class="col text-center">
              <ul>
			  <?php
                if (isset($paginasi)) {
                    echo $paginasi;
                }?>
              </ul>
          </div>
        </div>
  </div>
</div>
</div>