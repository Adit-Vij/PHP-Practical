<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$file = fopen("Welcome.txt", "r");
if ($file) {
   echo"This Program is written by Adit Vij 0221BCA042";
    fclose($file);
} else {
    echo "<br>Failed to open file.";
}
?>