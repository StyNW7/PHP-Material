<?php
$name = "  example FILE.txt  ";
$clean = trim($name);
$lower = strtolower($clean);
$ext = pathinfo($lower, PATHINFO_EXTENSION);
echo "Cleaned filename: $clean<br>";
echo "Lowercase: $lower<br>";
echo "Extension: $ext";
?>
