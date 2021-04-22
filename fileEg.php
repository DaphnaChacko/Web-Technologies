<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="uploadEg.php" enctype="multipart/form-data">
    <div >
      <label for="file-upload">Browse</label><br>
      <input type="file" id="file-upload" name="uploadedFile">
    </div>
    <br>
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>