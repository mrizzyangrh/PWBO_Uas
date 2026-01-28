<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Orang Tua</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Orang Tua</li>
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
                <h5 class="card-title"></h5>
           <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
              <?php endif; ?>

              <a href="<?= base_url('ortu/tambah') ?>" class="btn btn-primary mb-3">
                <span class="btn-label">Tambah Data Ortu</span></a>

     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Ibu</th>
      <th scope="col">Nama Ayah</th>
      <th scope="col">Hubungan</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
    foreach($list_ortu as $ortu) : ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $ortu['name_ibu'] ?></td>
      <td><?= $ortu['name_ayah'] ?></td>
      <td><?= $ortu['hubungan'] ?></td>
      <td><?= $ortu['telp'] ?></td>
      <td><?= $ortu['alamat'] ?></td>
    <td>
      <a href="<?= base_url('ortu/ubah/') ?><?=  $ortu['id_ortu'] ?>">
      <span class="badge bg-success">Ubah</a>
      <a href="<?= base_url('ortu/hapus/') ?><?=  $ortu['id_ortu'] ?>"> 
      <span class="badge bg-danger">hapus</a>
    </td>
    </tr>
    <?php $no++; endforeach; ?>
   
  </tbody>
</table>
               
           </div>
          
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->