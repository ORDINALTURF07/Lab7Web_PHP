<?php

    $mahasiswa = [
        "Alya",
        "Bima",
        "Citra",
        "Doni",
        "Eka",
        "Fajar",
        "Gita"
    ];

    echo "<h3>Daftar Mahasiswa</h3>";

    echo "<ol>";

    foreach ($mahasiswa as $nama) {

        echo "<li>" . htmlspecialchars($nama) . "</li>";

    }

    echo "</ol>";

?>
