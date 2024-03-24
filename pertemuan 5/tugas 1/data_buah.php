<?php

require_once 'class_buah.php';

$makanan1 = new Makanan("Melon", "Hijau", "Manis", 25000);
$makanan2 = new Makanan("Anggur", "Unggu", "Manis",  20000);
$minuman1 = new Minuman("Jus Mangga", "Ceres", 10000, "Manis" );
$minuman2 = new Minuman("Jus Strawberry", "Choco Cips", 15000, "Asam");

echo 'Buah-buahan yang kaya akan vitamin <br>';
$makanan1->getInfoMakanan();
echo '<br>';
$makanan2->getInfoMakanan();
echo '<br><br>';

echo 'Minuman yang sehat dan menyegarkan <br>';
$minuman1->getInfoMinuman();
echo '<br>';
$minuman2->getInfoMinuman();
echo '<br><br>';



?>