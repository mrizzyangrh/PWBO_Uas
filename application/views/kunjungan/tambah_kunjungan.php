<div class="content-wrapper">
    <div class="content-header">
        <h1 class="m-0">Tambah Data Kunjungan</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">

                <form method="post">

                    <!-- PILIH ANAK + ORTU -->
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
                        <label>Tanggal Kunjungan</label>
                        <input type="date" name="tgl_kunjungan" class="form-control" required>
                    </div>

                    <!-- FASILITAS -->
                    <div class="mb-3">
                        <label>Fasilitas</label>
                        <input type="text"
                               name="fasilitas"
                               class="form-control"
                               placeholder="Contoh: Imunisasi, Pemeriksaan, Konsultasi"
                               required>
                    </div>

                    <!-- BUTTON -->
                    <button class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('kunjungan') ?>" class="btn btn-danger">Kembali</a>

                </form>

            </div>
        </div>
    </div>
</div>
