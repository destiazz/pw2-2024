<?php
    include_once 'header.php'
?>
<style>
    body{
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20x;
        padding: 20px;
        background-color:#C6DCBA ;
    }

    ::placeholder{
        font-weight: bold;
    }      
</style>
<div class="container">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form action="data_nilai.php" method="POST" class="form-horizontal w-75 mx-auto p-4 border rounded shadow">
        <div class="mb-3 row">
            <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Siapa nama kamu?" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="matkul" class="col-sm-4 col-form-label">Mata Kuliah</label>
            <div class="col-sm-8">
                <select class="form-select" id="matkul" name="matkul" required>
                    <option value="">----- Pilih Mata Kuliah -----</option>
                    <option>Dasar Dasar Pemrograman</option>
                    <option>Pemrograman Web</option>
                    <option>Statistika dan Probabilitas</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nilai_uts" class="col-sm-4 col-form-label">Nilai UTS</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" min="0" max="100" placeholder="Masukan angka..." required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nilai_uas" class="col-sm-4 col-form-label">Nilai UAS</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" min="0" max="100" placeholder="Masukan angka..." required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nilai_tugas" class="col-sm-4 col-form-label">Nilai Praktikum</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" min="0" max="100" placeholder="Masukan angka..." required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-4">
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'header.php'
?>