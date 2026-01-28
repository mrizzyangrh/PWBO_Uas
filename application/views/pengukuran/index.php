<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pengukuran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pengukuran</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
              <?php endif; ?>

              <a href="<?= base_url('pengukuran/tambah') ?>" class="btn btn-primary mb-3">
                Tambah Data Pengukuran
              </a>

              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anak</th>
                      <th>Tanggal Kunjungan</th>
                    <th>Tanggal Ukur</th>
                    <th>BB (kg)</th>
                    <th>TB (cm)</th>
                    <th>LK (cm)</th>
                    <th>Vaksin</th>
                    <th>Status Gizi</th>
                    <th width="150">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($list_pengukuran)) : ?>
                    <?php $no = 1; foreach ($list_pengukuran as $pengukuran) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pengukuran->nama_anak; ?></td>
                        <td><?= date('d-m-Y', strtotime($pengukuran->tgl_kunjungan)) ?></td>
                        <td><?= date('d-m-Y', strtotime($pengukuran->tgl_ukur)); ?></td>
                        <td><?= $pengukuran->bb; ?></td>
                        <td><?= $pengukuran->tb; ?></td>
                        <td><?= $pengukuran->lk; ?></td>
                        <td><?= $pengukuran->vaksin; ?></td>
                        <td><?= $pengukuran->status_gizi; ?></td>
                        <td>
                          <a href="<?= base_url('pengukuran/ubah/' . $pengukuran->id_ukur) ?>"
                             class="badge bg-success">Ubah</a>

                          <a href="<?= base_url('pengukuran/hapus/' . $pengukuran->id_ukur) ?>"
                             class="badge bg-danger"
                             onclick="return confirm('Yakin ingin menghapus data ini?')">
                             Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <tr>
                      <td colspan="9" class="text-center">Data pengukuran belum tersedia</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->