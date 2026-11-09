<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 2</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <input type="text" name="nama"
               placeholder="Masukkan nama mahasiswa">
        <button type="submit">Cari</button>
    </form>

    <?php
    $mahasiswa = ["Alya", "Bima", "Citra", "Doni"];

    if (isset($_GET["nama"])) {
        $kata = trim($_GET["nama"]);
        $ditemukan = false;

        foreach ($mahasiswa as $nama) {
            if (stripos($nama, $kata) !== false) {
                echo htmlspecialchars($nama) . "<br>";
                $ditemukan = true;
            }
        }

        if (!$ditemukan) {
            echo "Nama tidak ditemukan.";
        }
    }
    ?>

</body>
</html>
