<?php
$max_size = 2 * 1024 * 1024; // 2MB
$file_size = 1500000;
if ($file_size > $max_size) {
  echo "File too large.";
} else {
  echo "File size is OK.";
}
?>
