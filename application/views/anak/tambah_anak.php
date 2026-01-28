<div class="content-wrapper">
    <div class="content-header">
        <h1 class="m-0">Tambah Data Anak</h1>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">

                <form method="post">

                    <div class="mb-3">
                        <label>Orang Tua</label>
                        <select name="id_ortu" class="form-control" required>
                            <option value="">-- Pilih Ortu --</option>
                           <?php foreach ($list_ortu as $o): ?>
                                  <option value="<?= $o['id_ortu'] ?>">
                             Tn. <?= $o['name_ayah'] ?> - Ny. <?= $o['name_ibu'] ?>
                                  </option>
                               <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Nama Anak</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for ="Berat badan" class="form-label">BB Lahir (kg)</label>
                        <input type="number" name="bb_lahir" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>TB Lahir (cm)</label>
                        <input type="number" name="tb_lahir" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Golongan Darah</label>
                        <select name="goldar" class="form-control">
                            <option>A</option>
                            <option>B</option>
                            <option>AB</option>
                            <option>O</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('anak') ?>" class="btn btn-danger">Kembali</a>

                </form>

            </div>
        </div>
    </div>
</div>
