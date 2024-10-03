<?php
include("controll_flow.php"); 


function greet($mahasiswa){
    foreach ($mahasiswa as $person) {
        echo "Hello, " . $person->name . "!<br><br>"; 
    }
}
greet($mahasiswa); 
?>

