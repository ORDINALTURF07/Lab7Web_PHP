<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 3</title>
</head>
<body>

    <h2>Function Format Rupiah</h2>

    <?php
    function formatRupiah($harga) {
        return "Rp" . number_format($harga, 0, ",", ".");
    }

    $harga1 = 150000;
    $harga2 = 250000;
    $harga3 = 50000;

    echo "Harga 1: " . formatRupiah($harga1) . "<br>";
    echo "Harga 2: " . formatRupiah($harga2) . "<br>";
    echo "Harga 3: " . formatRupiah($harga3);
    ?>

</body>
</html>
