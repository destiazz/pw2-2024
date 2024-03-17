<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $data_buah = array(
    array('id' => 1, 'nama' => 'Apel', 'warna' => 'Merah', 'stok' => 50, 'harga' => 40000, 'deskripsi' => 'Buah dengan rasa manis, dan Kulit buahnya agak lembek serta daging buahnya keras'),
    array('id' => 2, 'nama' => 'Jeruk', 'warna' => 'Oranye', 'stok' => 30, 'harga' => 35000, 'deskripsi' => 'Buah yang kaya vitamin C, dengan kulit buahnya yang alot, tebal, dan tipis mudah untuk di kupas'),
    array('id' => 3, 'nama' => 'Pisang', 'warna' => 'Kuning', 'stok' => 40, 'harga' => 26000, 'deskripsi' => 'Buah yang mengandung banyak kalium yang tinggi dan rasa yang manis'),
    array('id' => 4, 'nama' => 'Rambutan', 'warna' => 'Merah', 'stok' => 50, 'harga' => 25000, 'deskripsi' => 'Kulit buah yang mempunyai rambut, rasa buah yang manis dan ada juga yang asam'),
    array('id' => 5, 'nama' => 'Mangga', 'warna' => 'Kuning', 'stok' => 20, 'harga' => 30000, 'deskripsi' => 'Buah yang mempunyai rasa manis ketika sudah matang, biasa tumbuh di daerah yang beriklim tropis')
  );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Warna</th>
          <th class="text-center">Stok</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach ($data_buah as $buah) {
            echo '<tr>';
            echo '<td class="text-center">' . $buah['id'] . '</td>';
            echo '<td class="text-center">' . $buah['nama'] . '</td>';
            echo '<td class="text-center">' . $buah['warna'] . '</td>';
            echo '<td class="text-center">' . $buah['stok'] . '</td>';
            echo '<td class="text-center">' . $buah['harga'] . '</td>';
            echo '<td class="text-center">' . $buah['deskripsi'] . '</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
