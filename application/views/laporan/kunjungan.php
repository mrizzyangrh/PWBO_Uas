<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Kunjungan Bulanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Kunjungan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

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

           <!--bagian untuk filter tahun dan bulan -->
<form method="get">
    <div class="row mb-3">
        <div class="col-md-3">
            <select name="bulan" class="form-control" required>
                <option value="">Bulan</option>
                <?php for($b=1;$b<=12;$b++): ?>
                    <option value="<?= $b ?>"
                        <?= ($bulan==$b)?'selected':'' ?>>
                        <?= date('F', mktime(0,0,0,$b,1)) ?>
                    </option>
                <?php endfor ?>
            </select>
        </div>

        <div class="col-md-3">
            <select name="tahun" class="form-control" required>
                <?php for($t=2020;$t<=date('Y');$t++): ?>
                    <option value="<?= $t ?>"
                        <?= ($tahun==$t)?'selected':'' ?>>
                        <?= $t ?>
                    </option>
                <?php endfor ?>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary">Tampilkan</button>
        </div>
    </div>
</form>

             
    <!-- /.content-header -->
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Periode</th>
        <th>Total Kunjungan</th>
        <th>Aksi</th>
    </tr>
    
<!-- tabel rekap --->
    <?php $no=1; foreach($periode as $p): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= date('F Y', mktime(0,0,0,$p->bulan,1,$p->tahun)) ?></td>
    <td><?= $p->total ?></td>
    <td>
        <a href="<?= base_url('laporan/cetak_kunjungan/'.$p->bulan.'/'.$p->tahun) ?>"
           class="btn btn-danger btn-sm">
            Cetak PDF
        </a>
    </td>
</tr>
<?php endforeach ?>

</table>
    </div>
</div>
</div>
</div>
</div>
</div>
