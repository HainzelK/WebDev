<?php

$array1 = [];
$array2 = [];
$arrayGabung = [];
$output = ''; 

// Periksa form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // format array
    $array1 = array_filter(array_map('trim', explode(',', $_POST['first_input'] ?? '')));
    $array2 = array_filter(array_map('trim', explode(',', $_POST['second_input'] ?? '')));

    // Ambil panjang maksimal untuk setiap array
    $firstLimit = (int)($_POST['first_limit'] ?? 0);
    $secondLimit = (int)($_POST['second_limit'] ?? 0);

    // potong array sesuai panjang yang diminta
    $array1 = array_slice($array1, 0, $firstLimit);
    $array2 = array_slice($array2, 0, $secondLimit);

    // gabung dan urutkan array
    $arrayGabung = array_merge($array1, $array2);
    sort($arrayGabung);

    // buat spy terlihat rapi
    $array1final = "[" . implode(", ", $array1) . "]";
    $array2final = "[" . implode(", ", $array2) . "]";
    $arrayGabungFinal = "[" . implode(", ", $arrayGabung) . "]";

    // Simpan hasil untuk ditampilkan di bawah form
    $output = "<h3>Array Pertama:</h3>$array1final";
    $output .= "<h3>Array Kedua:</h3>$array2final";
    $output .= "<h3>Array Gabungan:</h3>$arrayGabungFinal";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Array</title>
</head>
<body>
    <h2>Masukkan Array</h2>
    <form method="post">
        <label for="first_input">Array Pertama (pisahkan pakai koma):</label><br>
        <input type="text" name="first_input" placeholder="contoh: 1, 2, 3"><br><br>

        <label for="first_limit">m (panjang yang dipakai di utk array):</label><br>
        <input type="number" name="first_limit" min="0" required><br><br>

        <label for="second_input">Array Kedua (pisahkan pakai koma):</label><br>
        <input type="text" name="second_input" placeholder="contoh: 4, 5, 6"><br><br>

        <label for="second_limit">n (panjang yang dipakai di utk array):</label><br>
        <input type="number" name="second_limit" min="0" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <div>
        <?php if (!empty($output)): ?>
            <?php echo $output; ?>
        <?php endif; ?>
    </div>
</body>
</html>
