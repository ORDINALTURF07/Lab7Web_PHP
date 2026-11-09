<?php

    $nama = "Siti";
    $tugas = 95;
    $uts = 90;
    $uas = 96;

    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;

?>
