<?php

function hitungRerata($nilai_uts, $nilai_uas, $nilai_tugas) {
    return ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
}

function tentukanGrade($rerata) {
    if ($rerata >= 85) {
        return "A";
    } elseif ($rerata >= 70) {
        return "B";
    } elseif ($rerata >= 55) {
        return "C";
    } elseif ($rerata >= 40) {
        return "D";
    } else {
        return "E";
    }
}

function tentukanPredikat($grade) {
    switch ($grade) {
        case "A":
            return "Sangat Memuaskan";
        case "B":
            return "Memuaskan";
        case "C":
            return "Cukup";
        case "D":
            return "Kurang";
        case "E":
            return "Sangat Kurang";
        default:
            return "Error";
    }
}

function tentukanKeterangan($grade) {
    return $grade === "D" || $grade === "E" ? "Tidak Lulus" : "Lulus";
}

// Revisi fungsi grade agar sesuai dengan logika rerata yang digunakan di atas
function grade($rerata) {
    // Logika fungsi ini sudah diwakili oleh fungsi tentukanGrade
    return tentukanGrade($rerata);
}

function kelulusan($totalNilai) {
    return $totalNilai > 55 ? "Lulus" : "Tidak Lulus";
}
?>
