<?php
// Function untuk menghitung diskon
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

// Memanggil function diskon
$hargaAkhir = hitungDiskon(150000, 10);

echo "<h3>Perhitungan Diskon</h3>";
echo "Harga setelah diskon: Rp" .
     number_format($hargaAkhir, 0, ",", ".");


// Function untuk menghitung luas persegi panjang
function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

// Memanggil function luas
$luas = hitungLuas(8, 4);

echo "<h3>Menghitung Luas Persegi Panjang</h3>";
echo "Panjang: 8 <br>";
echo "Lebar: 4 <br>";
echo "Luas: " . $luas;
?>