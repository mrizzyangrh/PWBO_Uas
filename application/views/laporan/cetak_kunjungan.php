<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: "Times New Roman", serif;
            font-size: 12px;
        }
        .header {
            text-align: center;
            line-height: 1.4;
        }
        .line {
            border-bottom: 3px solid black;
            margin: 8px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
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

<div class="header">
    <h3>DINAS KESEHATAN KOTA PANGKALPINANG</h3>
    <h4>PUSKESMAS RIZZY</h4>
    <p>Jl. Jendral Sudirman</p>
</div>

<div class="line"></div>

<h4 style="text-align:center; margin-top:20px;">
    LAPORAN KUNJUNGAN BALITA<br>
    Periode <?= date('F Y', mktime(0,0,0,$bulan,1,$tahun)) ?>
</h4>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Tanggal Kunjungan</th>
            <th>Fasilitas</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($laporan as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama_anak ?></td>
            <td><?= $row->name_ayah ?></td>
            <td><?= $row->name_ibu ?></td>
            <td><?= date('d-m-Y', strtotime($row->tgl_kunjungan)) ?></td>
            <td><?= $row->fasilitas ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div class="footer">
    <div class="ttd">
        <p>Pangkalpinang, <?= date('d F Y') ?></p>
        <p><b>Kepala Puskesmas</b></p>
        <br><br><br>
        <p><b>RIZZY</b></p>
        <p>NIP. 123456789</p>
    </div>
</div>

</body>
</html>
