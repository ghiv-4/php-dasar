<?php 
require 'functions.php'; // memanggil file functions
$aktris = query("SELECT * FROM aktris "); // buat variabel $aktris, isinya data dari tabel aktris
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        table{
            border-collapse: collapse;
            border: 1px black solid;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
    
</head>
<body>
    <h1>Daftar Aktris</h1>
        <a href="tambah.php">Tambah data aktris</a>
        <br>

    <table  cellpadding ="10" cellspacing="1" >
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Ukuran Bra</th>
            <th>Tinggi Badan </th>
            <th>Debut</th>
            
        </tr>
        <?php $i=1; ?> 
        <?php foreach ($aktris as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id= <?= $row["id"]; ?>">ubah</a> <!-- mengubah data aktris berdasarkan id -->
                <a href="hapus.php?id= <?= $row["id"]; ?>" onclick="return confirm('yakin nih ?');" > hapus </a>  <!-- menghapus data aktris berdasarkan id -->
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt=""></td>
            <td><?= $row["nama"]; ?> </td>
            <td><?= $row["tanggal lahir"]; ?></td>
            <td><?= $row["bra"]; ?></td>
            <td><?= $row["tinggi badan"]; ?></td>
            <td><?= $row["debut"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>