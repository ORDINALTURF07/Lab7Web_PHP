<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 5</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi" required>
        <br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");

        if ($nama === "" || $prodi === "") {
            echo "Semua kolom wajib diisi.";
        } else {
            echo "<h3>Data Diterima</h3>";
            echo "Nama: " .
                htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";

            echo "Program Studi: " .
                htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
        }
    }
    ?>

</body>
</html>
