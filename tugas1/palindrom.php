<!DOCTYPE html>
<html>
<head>
    <title>Number Pattern</title>
</head>
<body>

<form method="POST">
    <label for="rows">Enter the number of rows:</label>
    <input type="number" id="rows" name="rows" min="1" required>
    <input type="submit" value="Generate Pattern">
</form>

<?php
function generatePattern($row) {
    echo "<pre>"; 
    for ($i = 1; $i <= $row; $i++) {
        for ($j = $i; $j <= $row; $j++) {
            echo " ";
        }

        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }

        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j;
        }

        echo "\n";
    }
    echo "</pre>"; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rows'])) {
    $row = (int)$_POST['rows']; 
    generatePattern($row); 
}

?>

</body>
</html>
