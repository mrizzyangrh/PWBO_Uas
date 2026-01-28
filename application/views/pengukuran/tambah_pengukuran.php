<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pengukuran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pengukuran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Pengukuran</h5>

                            <p class="card-text">
                            <form method="post">

                                <div class="mb-3">
                                    <label for="id_kunjungan" class="form-label">Pilih Kunjungan</label>
                                    <select class="form-control" name="id_kunjungan" id="id_kunjungan">
                                        <option value="">-- Pilih Kunjungan --</option>
                                        <?php foreach ($list_kunjungan as $kunjungan) : ?>
                                            <option value="<?= $kunjungan->id_kunjungan ?>">
                                                <?= $kunjungan->nama_anak ?> - <?= date('d-m-Y', strtotime($kunjungan->tgl_kunjungan)) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('id_kunjungan', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_ukur" class="form-label">Tanggal Ukur</label>
                                    <input type="date" class="form-control" name="tgl_ukur" id="tgl_ukur" value="<?= set_value('tgl_ukur') ?>">
                                    <?= form_error('tgl_ukur', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="bb" class="form-label">Berat Badan (kg)</label>
                                    <input type="number" step="0.01" class="form-control" name="bb" id="bb" 
                                        placeholder="Contoh: 12.5" value="<?= set_value('bb') ?>">
                                    <?= form_error('bb', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="tb" class="form-label">Tinggi Badan (cm)</label>
                                    <input type="number" step="0.01" class="form-control" name="tb" id="tb" 
                                        placeholder="Contoh: 85.5" value="<?= set_value('tb') ?>">
                                    <?= form_error('tb', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="lk" class="form-label">Lingkar Kepala (cm)</label>
                                    <input type="number" step="0.01" class="form-control" name="lk" id="lk" 
                                        placeholder="Contoh: 45.5" value="<?= set_value('lk') ?>">
                                    <?= form_error('lk', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="vaksin" class="form-label">Vaksin</label>
                                    <input type="text" class="form-control" name="vaksin" id="vaksin" 
                                        placeholder="Contoh: BCG, Polio, DPT" value="<?= set_value('vaksin') ?>">
                                    <?= form_error('vaksin', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="status_gizi" class="form-label">Status Gizi</label>
                                    <select class="form-control" name="status_gizi" id="status_gizi">
                                        <option value="">-- Pilih Status Gizi --</option>
                                        <option value="Gizi Buruk" <?= set_select('status_gizi', 'Gizi Buruk') ?>>Gizi Buruk</option>
                                        <option value="Gizi Kurang" <?= set_select('status_gizi', 'Gizi Kurang') ?>>Gizi Kurang</option>
                                        <option value="Gizi Baik" <?= set_select('status_gizi', 'Gizi Baik') ?>>Gizi Baik</option>
                                        <option value="Gizi Lebih" <?= set_select('status_gizi', 'Gizi Lebih') ?>>Gizi Lebih</option>
                                        <option value="Obesitas" <?= set_select('status_gizi', 'Obesitas') ?>>Obesitas</option>
                                    </select>
                                    <?= form_error('status_gizi', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('pengukuran') ?>" class="btn btn-danger">Kembali</a>

                            </form>
                            </p>

                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->