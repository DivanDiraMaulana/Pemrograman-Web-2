<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                // Ukuran tabel perkalian
                $ukuran_tabel = 10;

                // Membuat baris header
                for ($i = 1; $i <= $ukuran_tabel; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Membuat isi tabel
            for ($i = 1; $i <= $ukuran_tabel; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";  // Menambahkan nomor baris
                for ($j = 1; $j <= $ukuran_tabel; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";  // Menghitung dan menambahkan hasil perkalian
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
