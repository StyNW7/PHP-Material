<?php
$filename = "example.png";
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
$allowed = ["jpg", "jpeg", "png", "gif"];
if (in_array($ext, $allowed)) {
  echo "Filetype allowed.";
} else {
  echo "Filetype not allowed.";
}
?>
