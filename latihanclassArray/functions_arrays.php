<?php
include("controll_flow.php"); 

foreach ($mahasiswa as $person) {
    echo "Hello, " . $person->name . "!<br><br>"; 
}
?>
