<?php
include("variable.php");


foreach ($mahasiswa as $person) {
    if ($person->years >= 18) {
        echo($person->name . " is an adult.<br><br>");
    } else {
        echo($person->name . " is a minor.<br><br>");
    }
}
?>
