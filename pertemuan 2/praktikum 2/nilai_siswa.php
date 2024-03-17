<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 10px;
            padding: 50px;
            background-color: #E2BFB3;
        }

        h1 {
            text-align: center;
            color: #201658;
        }

        .result-container {
            background-color: #F7DED0;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 40px;
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        strong {
            color: #343a40;
        }

        hr {
            border: 1px solid #ddd;
            margin: 30px 0;
        }

        .error-message {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
    // Cek apakah form telah di-submit
    if (isset($_POST['proses'])) {
        // Validasi input
        $nama_siswa = isset($_POST['nama_lengkap']) ? htmlspecialchars($_POST['nama_lengkap']) : '';
        $mata_kuliah = isset($_POST['matkul']) ? htmlspecialchars($_POST['matkul']) : '';
        $nilai_uts = isset($_POST['nilai_uts']) ? floatval($_POST['nilai_uts']) : 0;
        $nilai_uas = isset($_POST['nilai_uas']) ? floatval($_POST['nilai_uas']) : 0;
        $nilai_tugas = isset($_POST['nilai_tugas']) ? floatval($_POST['nilai_tugas']) : 0;

        // Validasi nilai
        if ($nilai_uts < 0 || $nilai_uas < 0 || $nilai_tugas < 0 || $nilai_uts > 100 || $nilai_uas > 100 || $nilai_tugas > 100) {
            echo '<p class="error-message">Nilai harus berada di antara 0 dan 100.</p>';
        } else {
            // Hitung total nilai
            $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

            // Tampilkan data
            echo '<h1>Hasil Nilai Siswa</h1>';
            echo '<div class="result-container">';
            echo '<p><strong>Proses:</strong> ' . $_POST['proses'] . '</p>';
            echo '<p><strong>Nama:</strong> ' . $nama_siswa . '</p>';
            echo '<p><strong>Mata Kuliah:</strong> ' . $mata_kuliah . '</p>';
            echo '<p><strong>Nilai UTS:</strong> ' . number_format($nilai_uts, 2) . '</p>';
            echo '<p><strong>Nilai UAS:</strong> ' . number_format($nilai_uas, 2) . '</p>';
            echo '<p><strong>Nilai Tugas Praktikum:</strong> ' . number_format($nilai_tugas, 2) . '</p>';
            echo '<hr>';
            echo '<p><strong>Rata-rata:</strong> ' . number_format($total_nilai, 2) . '</p>';
            echo '</div>';
        }
    }
    ?>
</body>

</html>
