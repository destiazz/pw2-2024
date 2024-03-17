<?php
session_start();

// Fungsi dan logika yang didefinisikan di libfungsi.php
require_once 'libfungsi.php';

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array(); // Inisialisasi array data di sesi jika belum ada
}

if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $rerata = hitungRerata($nilai_uts, $nilai_uas, $nilai_tugas);
    $grade = tentukanGrade($rerata);
    $predikat = tentukanPredikat($grade);
    $keterangan = tentukanKeterangan($grade);

    // Tambahkan data ke array sesi
    $_SESSION['data'][] = array(
        'nama_lengkap' => $nama_lengkap,
        'matkul' => $matkul,
        'nilai_uts' => $nilai_uts,
        'nilai_uas' => $nilai_uas,
        'nilai_tugas' => $nilai_tugas,
        'rerata' => $rerata,
        'grade' => $grade,
        'predikat' => $predikat,
        'keterangan' => $keterangan
    );
}

// Jika ada permintaan untuk menghapus data
if (isset($_GET['hapus'])) {
    $index = $_GET['hapus'];
    unset($_SESSION['data'][$index]); // Hapus data dari array sesi
    header('Location: ' . $_SERVER['PHP_SELF']); // Redirect ke halaman ini sendiri untuk mengupdate tampilan
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            padding-top: 20px;
            background-color: #C6DCBA;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #C6DCBA; /* Warna latar dari container diubah ke putih untuk kontras dengan bayangan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(255,255,255,0.5); /* Bayangan putih, tapi mungkin tidak terlihat jelas */
            text-align: center;
            border: 1px solid #C6DCBA; /* Alternatif: menggunakan border untuk efek yang lebih jelas */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
        .table th, .table td {
            border: 1px solid #fff;
            padding: 7px;
            text-align: center;
        }
        .table th {
            background-color: #337357;
            color: white;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center; /* Membuat judul h1 berada di tengah */
            color: #333; /* Warna teks untuk judul */
            margin-bottom: 20px; /* Jarak antara judul dan konten */
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #337357; /* Merah */
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-danger:hover {
            background-color: #78A083; /* Merah lebih gelap */
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Mata Kuliah</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Rerata</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($_SESSION['data'] as $index => $item) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>{$item['nama_lengkap']}</td>";
                    echo "<td>{$item['matkul']}</td>";
                    echo "<td>{$item['nilai_uts']}</td>";
                    echo "<td>{$item['nilai_uas']}</td>";
                    echo "<td>{$item['nilai_tugas']}</td>";
                    echo "<td>{$item['rerata']}</td>";
                    echo "<td>{$item['grade']}</td>";
                    echo "<td>{$item['predikat']}</td>";
                    echo "<td>{$item['keterangan']}</td>";
                    echo "<td><form action='{$_SERVER['PHP_SELF']}' method='GET'>
                                <input type='hidden' name='hapus' value='$index'>
                                <button type='submit' class='btn btn-danger'>Hapus</button>
                            </form></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
