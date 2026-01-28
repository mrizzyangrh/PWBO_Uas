<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Anak</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Anak</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">

          <?= $this->session->flashdata('message'); ?>

          <a href="<?= base_url('anak/tambah') ?>" class="btn btn-primary mb-3">
            Tambah Data Anak
          </a>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Nama Anak</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>BB Lahir</th>
                <th>TB Lahir</th>
                <th>Tgl Lahir</th>
                <th>Gol Darah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php $no = 1; foreach ($list_anak as $anak): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $anak->name_ayah ?></td>
                <td><?= $anak->name_ibu ?></td>
                <td><?= $anak->name ?></td>
                <td><?= $anak->nik ?></td>
                <td><?= $anak->jk ?></td>
                <td><?= $anak->bb_lahir ?></td>
                <td><?= $anak->tb_lahir ?></td>
                <td><?= $anak->tgl_lahir ?></td>
                <td><?= $anak->goldar ?></td>
                <td>
                  <a href="<?= base_url('anak/ubah/'.$anak->id_anak) ?>" class="badge bg-success">Ubah</a>
                  <a href="<?= base_url('anak/hapus/'.$anak->id_anak) ?>"
                     class="badge bg-danger"
                     onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

</div>
