<?php
function hitungLuas($alas, $tinggi) {
    $luas = $alas * $tinggi / 2;
    return $luas;
}

function deteksiSegitiga($alas, $tinggi) {
    if ($alas == $tinggi) {
        return "Segitiga sama sisi";
    } elseif ($alas == 0.5 * $tinggi || $tinggi == 0.5 * $alas) {
        return "Segitiga siku-siku";
    } else {
        return "Segitiga sembarang";
    }
}
?>