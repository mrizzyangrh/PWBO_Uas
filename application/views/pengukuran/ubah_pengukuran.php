<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data Pengukuran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Data Pengukuran</li>
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
                            <h5 class="card-title">Form Ubah Pengukuran</h5>

                            <form method="post">

                                <!-- PILIH KUNJUNGAN -->
                                <div class="mb-3">
                                    <label class="form-label">Pilih Kunjungan</label>
                                    <select name="id_kunjungan" class="form-control" required>
                                        <option value="">-- Pilih Kunjungan --</option>
                                        <?php foreach ($list_kunjungan as $kunjungan): ?>
                                            <option value="<?= $kunjungan->id_kunjungan ?>"
                                                <?= ($kunjungan->id_kunjungan == $pengukuran->id_kunjungan) ? 'selected' : '' ?>>
                                                <?= $kunjungan->nama_anak ?> - <?= date('d-m-Y', strtotime($kunjungan->tgl_kunjungan)) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('id_kunjungan', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- TANGGAL UKUR -->
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Ukur</label>
                                    <input type="date"
                                           class="form-control"
                                           name="tgl_ukur"
                                           value="<?= $pengukuran->tgl_ukur ?>"
                                           required>
                                    <?= form_error('tgl_ukur', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- BERAT BADAN -->
                                <div class="mb-3">
                                    <label class="form-label">Berat Badan (kg)</label>
                                    <input type="number"
                                           step="0.01"
                                           class="form-control"
                                           name="bb"
                                           value="<?= $pengukuran->bb ?>"
                                           placeholder="Contoh: 12.5"
                                           required>
                                    <?= form_error('bb', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- TINGGI BADAN -->
                                <div class="mb-3">
                                    <label class="form-label">Tinggi Badan (cm)</label>
                                    <input type="number"
                                           step="0.01"
                                           class="form-control"
                                           name="tb"
                                           value="<?= $pengukuran->tb ?>"
                                           placeholder="Contoh: 85.5"
                                           required>
                                    <?= form_error('tb', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- LINGKAR KEPALA -->
                                <div class="mb-3">
                                    <label class="form-label">Lingkar Kepala (cm)</label>
                                    <input type="number"
                                           step="0.01"
                                           class="form-control"
                                           name="lk"
                                           value="<?= $pengukuran->lk ?>"
                                           placeholder="Contoh: 45.5"
                                           required>
                                    <?= form_error('lk', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- VAKSIN -->
                                <div class="mb-3">
                                    <label class="form-label">Vaksin</label>
                                    <input type="text"
                                           class="form-control"
                                           name="vaksin"
                                           value="<?= $pengukuran->vaksin ?>"
                                           placeholder="Contoh: BCG, Polio, DPT"
                                           required>
                                    <?= form_error('vaksin', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- STATUS GIZI -->
                                <div class="mb-3">
                                    <label class="form-label">Status Gizi</label>
                                    <select name="status_gizi" class="form-control" required>
                                        <option value="">-- Pilih Status Gizi --</option>
                                        <option value="Gizi Buruk" <?= ($pengukuran->status_gizi == 'Gizi Buruk') ? 'selected' : '' ?>>Gizi Buruk</option>
                                        <option value="Gizi Kurang" <?= ($pengukuran->status_gizi == 'Gizi Kurang') ? 'selected' : '' ?>>Gizi Kurang</option>
                                        <option value="Gizi Baik" <?= ($pengukuran->status_gizi == 'Gizi Baik') ? 'selected' : '' ?>>Gizi Baik</option>
                                        <option value="Gizi Lebih" <?= ($pengukuran->status_gizi == 'Gizi Lebih') ? 'selected' : '' ?>>Gizi Lebih</option>
                                        <option value="Obesitas" <?= ($pengukuran->status_gizi == 'Obesitas') ? 'selected' : '' ?>>Obesitas</option>
                                    </select>
                                    <?= form_error('status_gizi', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <!-- BUTTON -->
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?= base_url('pengukuran') ?>" class="btn btn-danger">Kembali</a>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->