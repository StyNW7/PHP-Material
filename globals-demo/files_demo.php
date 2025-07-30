<form method="post" enctype="multipart/form-data">
  Select image: <input type="file" name="img"><br>
  <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<pre>";
  print_r($_FILES['img']);
  echo "</pre>";
}
?>
