<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 4</title>
</head>
<body>

    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim" required>
        <button type="submit">Periksa</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nim = trim($_POST["nim"] ?? "");

        if (ctype_digit($nim) && strlen($nim) === 9) {
            echo "<p>NIM valid.</p>";
        } else {
            echo "<p>NIM tidak valid. NIM harus terdiri dari 9 angka.</p>";
        }
    }
    ?>
</body>
</html>
