<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data Kunjungan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Data Kunjungan</li>
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
                            <h5 class="card-title">Form Ubah Kunjungan</h5>

                            <form method="post">

                                <!-- PILIH ANAK -->
                        <div class="mb-3">
                        <label>Nama Anak</label>
                        <select name="id_anak" class="form-control" required>
                            <option value="">-- Pilih Anak --</option>
                            <?php foreach ($list_anak as $anak): ?>
                                <option value="<?= $anak->id_anak ?>">
                                    <?= $anak->name ?>
                                    (Ayah: <?= $anak->name_ayah ?> | Ibu: <?= $anak->name_ibu ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                                <!-- TANGGAL KUNJUNGAN -->
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Kunjungan</label>
                                    <input type="date"
                                           class="form-control"
                                           name="tgl_kunjungan"
                                           value="<?= $kunjungan->tgl_kunjungan ?>"
                                           required>
                                </div>

                                <!-- FASILITAS -->
                                <div class="mb-3">
                                    <label class="form-label">Fasilitas</label>
                                    <input type="text"
                                           class="form-control"
                                           name="fasilitas"
                                           value="<?= $kunjungan->fasilitas ?>"
                                           placeholder="Contoh: Imunisasi, Pemeriksaan"
                                           required>
                                </div>

                                <!-- BUTTON -->
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?= base_url('kunjungan') ?>" class="btn btn-danger">Kembali</a>

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
