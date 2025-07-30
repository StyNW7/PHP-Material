<?php include('../includes/header.php'); ?>

<?php
  if (isset($_SESSION['error'])) {
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
  }

  if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
  }
?>

<form action="upload_handler.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload"><br><br>
  <input type="submit" value="Upload File" name="submit">
</form>

<?php include('../includes/footer.php'); ?>
