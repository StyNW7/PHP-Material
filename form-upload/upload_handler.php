<?php
session_start();
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// File exists check
if (file_exists($target_file)) {
  $_SESSION['error'] = "Sorry, file already exists.";
  header("Location: upload_form.php");
  exit;
}

// File size check
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  $_SESSION['error'] = "Sorry, your file is too large.";
  header("Location: upload_form.php");
  exit;
}

// File type check
$allowed = ["jpg", "png", "pdf", "txt"];
if (!in_array($fileType, $allowed)) {
  header("Location: upload_form.php?error=filetype_not_allowed");
  exit;
}

// Final move
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
  $_SESSION['error'] = "Sorry, there was an error uploading your file.";
  header("Location: upload_form.php");
}
?>
