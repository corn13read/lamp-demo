<?php
require("auth.php");
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Desert of the real</title>
  <meta name="description" content="AJAX Demo">
  <meta name="author" content="Richard Silver">

  
</head>

<body>

<h1>Welcome <?php echo $_SESSION['user_name'] ?> to the desert of the real</h1>

<content>Feel free to <a href="logout.php">logout</a> if you wish.</content>

</body>
</html>