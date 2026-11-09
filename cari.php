<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian dengan GET</title>
</head>
<body>
    <h2>Pencarian Data</h2>

    <form method="GET" action="">
        <label for="kata">Kata kunci:</label>
        <input type="text" id="kata" name="kata">
        <button type="submit">Cari</button>
    </form>

    <?php
    $mahasiswa = ["Alya", "Bima", "Citra", "Doni"];

    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);

        echo "<h3>Hasil Pencarian:</h3>";

        $ditemukan = false;

        foreach ($mahasiswa as $nama) {
            if (stripos($nama, $kata) !== false) {
                echo htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
                $ditemukan = true;
            }
        }

        if (!$ditemukan) {
            echo "Data tidak ditemukan.";
        }
    }
    ?>
</body>
</html>
