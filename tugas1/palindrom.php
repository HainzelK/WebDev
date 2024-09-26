<!DOCTYPE html>
<html>
<head>
    <title>Polanya Angka</title>
</head>
<body>

<form method="POST">
    <label for="rows">masukkan jumlah baris:</label>
    <input type="number" id="rows" name="rows" min="1" required>
    <input type="submit" value="hasilkan pola">
</form>

<?php
// untuk membuat pola angka
function generatePattern($row) {
    echo "<pre>"; 
    
    for ($i = 1; $i <= $row; $i++) { // loop untuk setiap baris
        
        for ($j = $i; $j <= $row; $j++) {//loop baris
            echo " ";
        }

        
        for ($j = 1; $j <= $i; $j++) {
            echo $j;// print angka naik
        }

        
        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j;// print angka turun
        }

        echo "\n"; 
    }
    echo "</pre>"; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rows'])) {
    $row = (int)$_POST['rows']; // ambil jumlah baris dari input
    generatePattern($row); // memanggil fungsi untuk membuat pola
}
?>

</body>
</html>
