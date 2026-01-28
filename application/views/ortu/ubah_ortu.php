<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Orang Tua</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Orang Tua</li>
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
                            <h5 class="card-title">Tambah ortu</h5>

                            <p class="card-text">
                            <form method="post">

                                <div class="mb-3">
                                    <label for="ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" value="<?= $ortu['name_ibu'] ?>" name="ibu" id="ibu"
                                        aria-describedby="Nama ibu">
                                </div>

                                <div class="mb-3">
                                    <label for="ayah" class="form-label">Nama ayah</label>
                                    <input type="text" class="form-control" name="ayah" value="<?= $ortu['name_ayah'] ?>" id="ayah"
                                        aria-describedby="Nama Ayah">
                                </div>

                                <div class="mb-3">
                                    <label for="hubungan" class="form-label">Hubungan</label>
                                    <select class="form-control" name="hubungan" id="hubungan">
                                     <option value="<?= $ortu['hubungan'] ?>"><?= $ortu['hubungan'] ?></option>   
                                    <option value="kandung">kandung</option>
                                    <option value="bukan kandung">bukan kandung</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="telp" class="form-label">No telp</label>
                                    <input type="text" class="form-control" name="telp" value="<?= $ortu['name_ayah'] ?>" id="ayah"
                                        aria-describedby="Nama Ayah">
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Deskripsi</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><? $ortu ['alamat'] ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('ortu') ?>" class="btn btn-danger">Kembali</a>

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
