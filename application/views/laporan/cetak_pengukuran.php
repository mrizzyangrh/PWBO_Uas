<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: "Times New Roman";
            font-size: 12px;
        }
        .header {
            text-align: center;
        }
        .line {
            border-bottom: 2px solid black;
            margin: 8px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
        .footer {
            margin-top: 50px;
            width: 100%;
        }
        .ttd {
            float: right;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <h3>DINAS KESEHATAN KOTA PANGKALPINANG</h3>
    <h4>PUSKESMAS RIZZY</h4>
    <p>Jl. Jendral Sudirman</p>
</div>

<div class="line"></div>

<!-- JUDUL -->
<h4 style="text-align:center;">
    LAPORAN PENGUKURAN BALITA <br>
    Periode: <?= date('F', mktime(0,0,0,$bulan,1)) . ' ' . $tahun ?>
</h4>

<!-- TABEL -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Tanggal Ukur</th>
            <th>BB (Kg)</th>
            <th>TB (Cm)</th>
            <th>LK (Cm)</th>
            <th>Status Gizi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($laporan)): ?>
            <?php $no = 1; foreach ($laporan as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama_anak ?></td>
                <td><?= $row->name_ayah ?></td>
                <td><?= $row->name_ibu ?></td>
                <td><?= date('d-m-Y', strtotime($row->tgl_ukur)) ?></td>
                <td><?= $row->bb ?></td>
                <td><?= $row->tb ?></td>
                <td><?= $row->lk ?></td>
                <td><?= $row->status_gizi ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="9">Data pengukuran tidak tersedia</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<!-- FOOTER -->
<div class="footer">
    <div class="ttd">
        <p>Pangkalpinang, <?= date('d F Y') ?></p>
        <p>Kepala Puskesmas</p><br><br>
        <p><b>(RIZZY)</b></p>
        <p>NIP. 123456789</p>
    </div>
</div>

</body>
</html>
