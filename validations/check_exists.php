<?php
$filename = "../uploads/sample.pdf";
if (file_exists($filename)) {
  echo "File already exists.";
} else {
  echo "File is unique.";
}
?>
