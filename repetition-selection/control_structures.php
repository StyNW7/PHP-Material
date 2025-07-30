<?php
$files = ["doc1.pdf", "img1.jpg", "img2.png"];
foreach ($files as $file) {
  if (strpos($file, "img") !== false) {
    echo "$file is an image<br>";
  } else {
    echo "$file is a document<br>";
  }
}
?>
