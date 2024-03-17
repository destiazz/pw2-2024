<?php
include_once 'atas.php';
?>

<div class="container my-5">
    <h1 class="text-center mb-4">Triangle Area Calculator</h1>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="base">Base (cm)</label>
            <input type="number" class="form-control" id="base" name="base" required>
        </div>
        <div class="form-group mb-3">
            <label for="height">Height (cm)</label>
            <input type="number" class="form-control" id="height" name="height" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
    </form>
</div>

<?php
require_once 'libfungsi.php';

if (isset($_POST['submit'])) {
    $base = $_POST['base'];
    $height = $_POST['height'];

    // Pastikan fungsi hitungLuas dan deteksiSegitiga telah didefinisikan di 'libfungsi.php'
    $area = hitungLuas($base, $height);
    $type = deteksiSegitiga($base, $height);

    echo <<<EOT
    <div class="container mt-4">
        <h2>Hasil:</h2>
        <p>Alas: {$base} cm</p>
        <p>Tinggi: {$height} cm</p>
        <p>Luas: {$area} cm<sup>2</sup></p>
        <p>Jenis: {$type}</p>
    </div>
EOT;
}
?>